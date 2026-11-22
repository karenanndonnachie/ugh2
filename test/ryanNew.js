let video;
let duration = 0;
let loaded = false;
let touchStartY = null;
let posterEl = null;

// Target vs Current tracking for butter-smooth motion
let targetProgress = 0;
let currentProgress = 0;

let targetYOffset = 0;
let currentYOffset = 0;

let isSeeking = false;
let lastSeekTime = 0;
let lastGoodFrame = null;
let lastTimeUpdate = 0;

function showPoster() {
    if (posterEl) posterEl.style.display = 'block';
}

function hidePoster() {
    if (posterEl) {
        posterEl.style.display = 'none';
        posterEl.style.opacity = '0';
    }
}

function paintFallback() {
    clear();
}

function hasDrawableFrame() {
    return !!(
        video &&
        video.elt &&
        video.elt.readyState >= 2 &&
        video.elt.videoWidth > 0 &&
        video.elt.videoHeight > 0
    );
}

function syncCanvasToVideo() {
    if (width !== windowWidth || height !== windowHeight) {
        resizeCanvas(windowWidth, windowHeight);
        lastGoodFrame = createGraphics(windowWidth, windowHeight);
        lastGoodFrame.pixelDensity(pixelDensity());
    }
}

function applyMobileVideoAttrs(v) {
    if (!v || !v.elt) return;
    v.elt.setAttribute('playsinline', '');
    v.elt.setAttribute('webkit-playsinline', '');
    v.elt.setAttribute('muted', '');
    v.elt.preload = 'auto';
}

function setup() {
    let cnv = createCanvas(windowWidth, windowHeight);
    let ctx = cnv.elt.getContext('2d', { colorSpace: 'srgb' });
    
    lastGoodFrame = createGraphics(windowWidth, windowHeight);
    lastGoodFrame.pixelDensity(pixelDensity());
    
    loop(); 
    
    posterEl = document.getElementById('poster-fallback');
    showPoster();
    paintFallback();

    video = createVideo('Ryan_Presley_V4.mp4');
    applyMobileVideoAttrs(video);
    video.volume(0);
    video.elt.muted = true;
    video.hide();

    const onReadyForFrame = () => {
        syncCanvasToVideo();
        duration = video.duration() || 0;
        loaded = true;
        video.elt.pause();
        draw();
    };

    let eventsAttached = false;
    const attachOnce = () => {
        if (!eventsAttached) {
            onReadyForFrame();
            eventsAttached = true;
        }
    };

    video.elt.addEventListener('loadedmetadata', attachOnce);
    video.elt.addEventListener('loadeddata', attachOnce);
    video.elt.addEventListener('canplay', attachOnce);
}

let accumulatedDelta = 0;

function addScrollDelta(delta) {
    if (!loaded || !duration) return false;
    
    const sensitivity = 0.00035; 
    let oldProgress = targetProgress;
    
    targetProgress += delta * sensitivity;
    targetProgress = Math.min(Math.max(targetProgress, 0), 1);
    //console.log("targetProgress:", targetProgress, "delta:", delta);
    const hitTop = (oldProgress === 0 && targetProgress === 0 && delta < 0);
    const hitBottom = (oldProgress === 1 && targetProgress === 1 && delta > 0);
    
    if (hitTop || hitBottom) {
        return true; 
    }

    return false; 
}

function mouseWheel(event) {
    if (!loaded) return false;
    
    let delta = Math.abs(event.deltaY) > Math.abs(event.deltaX) ? event.deltaY : event.deltaX;
    let hitBoundary = addScrollDelta(delta);
    
    if (hitBoundary) {
        if (window.parent) {
            window.parent.scrollBy({
                left: event.deltaX,
                top: event.deltaY,
                behavior: 'auto'
            });
        }
        return true; 
    }
    
    return false; 
}

function touchStarted() {
    if (!loaded) return false;
    touchStartY = touches.length ? touches[0].y : null;
    return false;
}

function touchMoved() {
    if (!loaded || touchStartY === null || !touches.length) return false;
    const delta = touches[0].y - touchStartY;
    
    if (Math.abs(delta) > 2) {
        let hitBoundary = addScrollDelta(-delta * 0.7);
        touchStartY = touches[0].y;
        
        if (hitBoundary) {
            return true;
        }
    }
    return false;
}

function touchEnded() {
    touchStartY = null;
    return true;
}

function draw() {
    if (!loaded) {
        showPoster();
        paintFallback();
        return;
    }
    hidePoster();
    background('#c0c0c0');

    currentProgress = lerp(currentProgress, targetProgress, 0.14);
    
    const videoAspectWidth = (height / video.elt.videoHeight) * video.elt.videoWidth;
    let renderWidth = width;
    let renderHeight = height;
    let maxScroll = 0;

    const computedHeight = (width / video.elt.videoWidth) * video.elt.videoHeight;
    if (computedHeight > height) {
        renderHeight = computedHeight;
        maxScroll = renderHeight - height;
        targetYOffset = -maxScroll * currentProgress;
    } else {
        targetYOffset = 0;
    }

    currentYOffset = lerp(currentYOffset, targetYOffset, 0.14);
    
    let targetTime = currentProgress * duration;
    let now = millis();
    
    if (Math.abs(video.elt.currentTime - targetTime) > 0.03 && (now - lastTimeUpdate > 16)) {
        video.elt.currentTime = targetTime;
        lastTimeUpdate = now;
    }

    image(video, 0, currentYOffset, width, renderHeight);
    
    // *** CRITICAL: BROADCAST PROGRESS EVERY FRAME ***
    if (window.parent && window.parent !== window) {
        window.parent.postMessage({
            type: 'RYAN_ANIMATION_PERCENTAGE',
            percent: currentProgress
        }, '*');
    }
}

function windowResized() {
    syncCanvasToVideo();
    draw();
}
window.addEventListener('message', (event) => {
    if (event.data.type === 'SCROLL_PROGRESS') {
        // Parent scroll directly controls animation progress
        targetProgress = event.data.percent;
        console.log('Scroll Progress:', event.data.percent.toFixed(3));
    }
});
