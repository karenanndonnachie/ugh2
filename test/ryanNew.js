let video;
let duration = 0;
let loaded = false;
let touchStartY = null;
let posterEl = null;

let targetProgress = 0;
let currentProgress = 0;

let targetYOffset = 0;
let currentYOffset = 0;

function showPoster() {
    if (posterEl) {
        posterEl.style.display = 'block';
        posterEl.style.opacity = '1';
    }
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
    if (!loaded || !hasDrawableFrame()) {
        return;
    }
    hidePoster();
    background('#c0c0c0');

    currentProgress = targetProgress;
    
    const scale = width / video.elt.videoWidth;
    const renderWidth = video.elt.videoWidth * scale;
    const renderHeight = video.elt.videoHeight * scale;
    targetYOffset = -Math.max(0, renderHeight - height) * currentProgress;

    currentYOffset = lerp(currentYOffset, targetYOffset, 0.14);
    
    const frame = Math.round(currentProgress * 120);
    image(video, 0, currentYOffset, renderWidth, renderHeight);

    const targetTime = (frame + 0.5) * duration / 121;
    if (!video.elt.seeking && Math.abs(video.elt.currentTime - targetTime) > 0.01) {
        video.elt.currentTime = targetTime;
    }
}

function windowResized() {
    syncCanvasToVideo();
    draw();
}
window.addEventListener('message', (event) => {
    if (event.source === window.parent && event.origin === window.location.origin &&
        event.data && event.data.type === 'SCROLL_PROGRESS' &&
        Number.isFinite(event.data.percent)) {
        targetProgress = Math.min(Math.max(event.data.percent, 0), 1);
    }
});
