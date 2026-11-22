<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/Book"><head>
	<!-- 
Art + Australia is Australia's oldest art publication, originally published as Art in Australia in 1916. 

In 2022 Art + Australia pivoted to a digitial publishing model with a biannual online magazine, the Art + Australia Study Centre, a book imprint and a digital archive dating back to 1963. 

Art + Australia is a living archive, documenting, discussing and disseminating content about Australian artistic practice. Our mission is to discuss local and international developments in contemporary art, publish art historical writing and generate archival resources. 

The Art + Australia Study Centre includes research focussed discussions and essays that capture the interdisciplinary, ecological and social discourses driving research-based artistic practice. Art + Australia's book imprint expands Art + Australia's up-to-date commentary to provide focussed art historical and theoretical discussions of artworks, ideas and projects.
-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta itemprop="publisher" content="Art + Australia">
	<meta name="description" content="Art + Australia Magazine. Established in 1916.">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://artandaustralia.com/">
	<meta property="og:title" content="Art + Australia Magazine">
	<meta property="og:description" content="Art + Australia Magazine: Every Heart Sings">
	<meta property="og:image" content="https://artandaustralia.com/uploads/1725/med/1725_COVER_60_2_Screenshot20250908at7.31.23PM_med.png">
	<title>Art+Australia</title>
	<link rel="stylesheet" href="https://use.typekit.net/olg5lqq.css">
	<link rel="stylesheet" href="css/aa2023_mini.css">
	<link rel="stylesheet" href="css/aa_2021_ka_supp_new.css">
	<link rel="canonical" href="https://artandaustralia.com/">
	
	<!-- EDIT SOCIALS HERE -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/drawsvg@1.1.0/public/jquery.drawsvg.min.js"></script>
	<script src="../js/aa.js"></script>

	<style>
	    html{scroll-behavior: smooth;}

		body {
			/*background-image: url(#sinecut);*/
			background-color: #c0c0c0;
		}

		:root {
			--issueTint: #afffdc1f;
		}

#heroBox {
    width: 100%;
    position: relative;
    overflow: hidden;
    height: 121vw;
    background-color: #c0c0c0;
    /* CRITICAL: Make this section take up MORE vertical space */
    /* so parent scroll is slower relative to animation */
}
#heroBox {
  animation: panHero linear;
  animation-timeline: scroll();
  animation-range: 0px 1200px;
}

@keyframes panHero {
  to { transform: translateY(600px); }
}

#Hero {
    margin-top: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    background-color: #c0c0c0;
    transform-origin: top center;
    will-change: transform;
}

#heroBox iframe {
    display: block;
    width: 100%;
    height: 100%;
    border: none;
    pointer-events: auto;
}

		#heroBox img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			object-position: center center;
			display: block;
		}


		#heroBox .headerPic {
			position: relative !important;
			top: 0 !important;
			left: 0 !important;
			width: 100% !important;
			height: 100% !important;
			z-index: 11;
			box-shadow: none;
		}

		#heroBox .headerPic>div {
			width: 100%;
			height: 100%;
		}

		#heroBox .headerPic img {
			min-height: 0 !important;
			width: 100% !important;
			height: 100% !important;
		}

		#heroBox+.liminalSpace.center.bakelite {
			margin-top: -1.5em !important;
		}

		.flow {
			background-color: var(--issueTint);
		}

		.flow.div1,
		.flow.div2,
		.flow.div3,
		.card {
			background-color: var(--issueTint) !important;
		}

		.liminalSpace {
			/*background-color: #000;*/
		}

		#moreText {
			display: none;
		}

		.div1 {
			/*font-family: aktiv-grotesk, Helvetica, sans-serif;*/
			font-size: 2.5em;
		}

		/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
		div.card svg {
			height: 80%;
			width: unset;
			padding: unset;
		}

		.div1 svg {
			height: unset;
			width: unset;
			padding: unset;
			max-height: 75vh;
			max-width: 80vw;
		}

		#badge:hover {
			animation: shake 0.82s cubic-bezier(.36, .07, .19, .97) both;
			transform: translate3d(0, 0, 0);
			backface-visibility: hidden;
			perspective: 1000px;
		}

		a-scene {
			height: 100%;
			width: 100%;
		}

		.wordauthor {
			font-size: 0.6em !important;
			line-height: 1.2em;
			font-family: 'aa_titles';
		}

		@keyframes shake {

			10%,
			90% {
				transform: rotate(10deg);
				;
			}

			50% {
				transform: rotate(180deg);
			}

		}

		@media (max-width: 650px) or (orientation: portrait) {
			.instructions span {
				display: none;
			}

			.liminalSpace:not(.header).instructions {
				display: none;
			}
		}

		@media (max-width: 600px) {
			.instructions span {
				display: none;
			}

			.liminalSpace:not(.header).instructions {
				display: none;
			}

			html.a-fullscreen .a-canvas {
				width: 100% !important;
				height: 100% !important;
				top: 0 !important;
				left: 0 !important;
				right: 0 !important;
				bottom: 0 !important;
				position: fixed !important;
				user-select: none;
			}

			#magmenu.dropdown-content {
				top: 1.6em;
			}

			#issueTitle {
				left: 50% !important;
				transform: translateX(-50%);
			}
		}

		@media (min-width: 600px) and (orientation: landscape) {
			#heroBox {
				height: 100vw;
				min-height: 121vw;
			}
			#scrolldown {
				top: 84%;
			}
		}

		@media (max-width:420px) {
			.wordtitle {
				font-size: 1.1em !important;
			}

			.instructions {
				position: relative;
				justify-content: space-between;
				margin-top: -3.2em;
				z-index: 12;
				background-color: rgba(0, 0, 0, .35) !important;
				color: white;
			}

			.instructions span {
				text-overflow: ellipsis;
				width: 33%;
				font-size: 1em;
			}
		}

		div.name:hover>.wordtitle,
		div.name:active>.wordtitle {
			animation: unset;
			user-select: none;
			-webkit-user-select: none;
		}

		.wordtitle:hover {
			text-shadow: 1px 1px 10px #fff, -1px -1px 15px black;
			user-select: none;
			-webkit-user-select: none;
		}

		.wordtitle {
			font-size: 1.3em;
			overflow: ellipsis;
			/*word-break:break-all;*/
			max-width: 80%;
			animation: unset;
			word-break: unset;
			word-wrap: normal !important;
			user-select: none;
			-webkit-user-select: none;
			/*-webkit-transition: all 0.1s ease;
	transition: all 0.1s ease;*/
			-webkit-transform: perspective(0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
			transform: perspective(0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
			display: inline-block;
			text-wrap: balance;
		}

		video {
			position: relative;
			width: 100vw !important;
			height: auto;
			object-fit: cover;
		}

		#Karpowership {
			position: relative;
			width: 104vw;
			height: 85vh !important;
			min-width: 104vw;
			width: auto;
			object-fit: cover;
		}

		.card {
			z-index: 47;
		}

		div.name:not(.ic):hover>.wordtitle {
			color: inherit;
			animation: unset;
			text-shadow: 1px 1px 10px #0279dc, -1px -1px 15px #0279dc;
		}

		.ic.name:hover>.wordtitle {
			text-shadow: none;
		}

		.ic:hover>.wordtitle {
			text-shadow: none !important;
		}

		.mirror {
			background: -webkit-linear-gradient(top, rgba(38, 38, 38, 0.5), #e6e6e6 25%, #ffffff 38%, rgba(0, 0, 0, 0.25) 63%, #e6e6e6 87%, rgba(38, 38, 38, 0.4));
			position: absolute;
			text-shadow: 1px 1px 10px #fff, -1px -1px 15px #ebab90, 0px 0px 18px #c0c0c0, -10px 0px 18px #c0c0c0, 10px 0px 18px #c0c0c0, 0px 0px 5px #ebab90, 0px 0px 6px #fff;
			justify-self: center;
			min-height: 100%;
			z-index: 11;
			min-width: 100%;
			height: 100%;
			display: inline-table;
			border-color: #ebab90;
		}

		.liminalSpace {
			top: 1.4em;
			border-bottom: none;
			z-index: 60;
			/*color: white;*/
			/*background-color: #ebab90;*/
			/* border: 0.2rem solid #fff; */
		}

		.video-overlay {
			position: absolute;
			width: 360px;
			height: 440px;
			right: -50px;
			bottom: -85px;
			pointer-events: none;
		}

		#video-container,
		#video-container2 {
			position: absolute;

			width: 500px;
			/*  Initial size */
			height: 500px;
			pointer-events: none;
			z-index: 60;
		}

		#video-container {
			top: 0;
			left: 0;
		}

		#video-container2 {
			bottom: 0;
			left: 0;
		}

		canvas {
			width: 100%;
			height: 100%;
			display: block;
		}

		.video-overlay__box {
			width: 300px;
			height: 300px;
			border-radius: 50%;
			background: #3a4a59;
			transform: rotate3d(37, -12, 13, 90deg) translateX(-50%);
			position: absolute;
			bottom: -90px;
			right: -80px;
			z-index: 1;
		}

		.headerPic {
			box-shadow: none;
		}

		.coverPage {
			height: auto;
		}

		@media (min-width: 600px) and (orientation: landscape) {
			.coverPage {
				height: auto !important;
			}

			#Karpowership {
				height: 85vh !important;
			}
		}
		iframe {
    display: block;
    width: 100%;
    height: 100%;
}
	</style>
<style>
    :root {
        --issueTint: #ff0;
    }

    body {
        background-color: --bg;
        margin: 0;
    }

    html {
        scrollbar-color: rgba(175, 255, 220, 0.34) rgba(8, 16, 12, 0.92);
        scrollbar-width: thin;
    }

    body::-webkit-scrollbar,
    #magmenu::-webkit-scrollbar {
        width: 12px;
        height: 12px;
        display: block;
    }

    body::-webkit-scrollbar-track,
    #magmenu::-webkit-scrollbar-track {
        background: rgba(8, 16, 12, 0.92);
    }

    body::-webkit-scrollbar-thumb,
    #magmenu::-webkit-scrollbar-thumb {
        background-color: rgba(175, 255, 220, 0.34);
        border-radius: 10px;
        border: 2px solid rgba(8, 16, 12, 0.92);
    }

    body::-webkit-scrollbar-thumb:hover,
    #magmenu::-webkit-scrollbar-thumb:hover {
        background-color: rgba(175, 255, 220, 0.5);
    }

    .glow {
        /* text-shadow:1px 1px 10px #fff, -1px -1px 15px #ccc; */
    }

    .reflect,
    .reflect:before,
    .reflect span {
        display: block;
        margin: 0;
        padding: 0;
    }

    .reflect,
    .reflect:before,
    .reflect:after {
        position: relative;
    }

    .reflect {
        top: -60px;
    }

    .reflect:before {
        content: 'No Future Without A Past';
        top: 95px;
        transform: scale(1, -0.5);
        text-transform:uppercase;
        backface-visibility: visible;
        z-index: 1;
    }

    .reflect:after {
        content: '';
        display: block;
        top: -10px;
        left: 0;
        width: 100%;
        height: 60px;
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, .4) 0%, rgba(255, 255, 255, 1) 50%);
        z-index: 2;

    }

    .dropbtn {
        border: none;
    }

    .switch input[type=checkbox] {
        position: relative;
        visibility: hidden;
        cursor: pointer;
    }

    .switch input[type=checkbox]:after {
        display: block;
        content: " ☽";
        font-size: 2em;
        margin-left: -1.5em;
        margin-top: -0.35em;
        visibility: visible;
        text-align: center;
        cursor: pointer;
    }

    .wordtitle {
        max-width: 90%;
        font-size: 1.8em;
        line-height: 1em;
        margin-left: 0;
        margin: auto;
        overflow-wrap: break-anywhere;
        word-wrap: break-word;
        text-wrap: balance;
        -webkit-hyphens: auto;
        -ms-hyphens: auto;
        -moz-hyphens: auto;
        hyphens: auto;
        font-family: 'aa_titles';
    }

    .wordtitle:hover,
    .wordtitle:active,
    .wordtitle a,
    div.name:hover>.wordtitle,
    div.name:active>.wordtitle {
        color: inherit;
        animation: unset;
    }

    .switch input[type=checkbox]:checked:after {
        display: block;
        content: " ☀";
        font-size: 2em;
        margin-left: -1.5em;
        margin-top: -0.35em;
        visibility: visible;
        text-align: center;
        cursor: pointer;
    }

    .calm input[type=checkbox]:after {
        content: " ☯";
    }

    .calm input[type=checkbox]:checked:after {
        content: " ☆";
    }

    .dropdown {
        position: relative;
        display: inline-block;
        min-width: calc(33vw - 2em);
        width: calc(33vw - 1.5em - 4px);
    }

    .dropdown a,
    .dropdown a:hover {
        font-weight: normal;
    }

    .dropdown-content {
        display: none;
        opacity: 0;
        transition: opacity .55s ease-in-out;
        -moz-transition: opacity .55s ease-in-out;
        -webkit-transition: opacity .55s ease-in-out;
        min-width: calc(100vw + 10px);
        position: fixed;
        left: 0vw;
        top: 1.6em;
        color: black;
        background-color: transparent;
        text-transform: capitalize;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 10;
        /*  padding:0 1em 0 1em;
*/
        /* overflow-x: hidden; */
        overflow-y: auto;
    }

    .dropdown-content a {
        color: white;
        padding: 0.2em;
        text-decoration: none;
        border-bottom: 1px solid #FFF;
        display: block;
    }

    .dropdown-content a:last-child {
        border-bottom: none;
        padding-bottom: none;
    }

    .dropdown-content a:hover {
        font-weight: normal;
    }

    #menuDown {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 50%;
        min-width: 260px;
        top: 0;
        bottom: 0;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        z-index: 1002;
        cursor: pointer;
    }

    #issueTitle {
        position: static;
        transform: none;
        margin: 0;
        /*color: white;*/
        white-space: nowrap;
        line-height: 1.6em;
        height: 100%;
        display: flex;
        align-items: center;
        width: max-content;
        max-content: 90vw;
        pointer-events: none;
    }

    #menuDown:hover #magmenu,
    #menuDown.menu-open #magmenu {
        display: block;
        opacity: 1;
    }

    #menuDown #magmenu {
        top: calc(1.6em - 1px);
        left: calc(50% - 50vw) !important;
        right: auto !important;
        transform: none !important;
        min-width: 100vw !important;
        width: 100vw !important;
        margin: 0;
        box-sizing: border-box;
        z-index: 2001;
        overflow-y: auto;
        max-height: calc(100vh - 1.6em);
    }

    .dropdown:hover .dropdown-content {
        display: block;
        opacity: 1.0;
        transition: opacity .55s ease-in-out;
        -moz-transition: opacity .55s ease-in-out;
        -webkit-transition: opacity .55s ease-in-out;
    }

    .liminalSpace:not(.header) {
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* border: white dashed 2px; */
        border-left: none;
        border-right: none;
        /*background-color: #ebab90;*/
        top: 1.5em !important;
    }

    .liminalSpace.center {
        justify-content: center !important;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .liminalSpace,
    .liminalSpace a {
        /*color: white;*/
    }

    .liminalSpace,
    #magmenu {
        border-bottom: none;
        border-top: none;
        color: #000;
        /* text-shadow: 0 0 7px #fff, 0 0 10px #fff, 0 0 21px #fff, 0 0 42px green, 0 0 82px green, 0 0 92px green, 0 0 102px green, 0 0 151px green; */
        /* border: 0.2rem solid #fff; */
        /* border-radius: 2rem; */
        /* padding: 0.4em; */
        /* box-shadow: 0 0 .2rem #fff, 0 0 .2rem #fff, 0 0 2rem green, 0 0 0.8rem green, 0 0 2.8rem green, inset 0 0 1.3rem #bc13ff; */
    }

    .liminalSpace {
        /*background-color: #ebab90;*/
        top: 1.6em;
        border-bottom: none;
        z-index: 60;
        /*color: white;*/
    }

    @media (min-width: 600px) and (orientation: landscape) {
        .liminalSpace {
            font-size: 1.6em;
            top: 1.6em;
        }


        .flow {
            justify-items: center;
        }
    }

    .flow {
        justify-items: left;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        min-width: fit-content;
        padding-left: 0.2em;
        padding-right: 0.2em;
        /* min-width: calc(33vw - 2em); */
        /* width: calc(33vw - 1.5em - 4px); */
    }

    .dropdown-content a,
    summary {
        border-bottom: 1px solid #FFF;
    }

    .liminalSpace {
        z-index: 51;
        /*color: white;*/
        /* background-color: rgba(0, 0, 0, 0.9); */
        height: 1.6em;
        line-height: 1.6em;
        scroll-behavior: smooth;
        background-color: inherit;
        font-size: 1.6em;
        text-align: center;
        position: sticky;
        top: 1.6em;
        left: 0;
        right: 0;
        width: 100%;
        margin: 0;
        box-sizing: border-box;
        padding-left: 1em;
        padding-right: 1em;

        /* background-color: #eee;
    background-size: 60px 60px;
    background-position: 0 0, 30px 30px;
    background-image: -webkit-linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), -webkit-linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black);
    background-image: -moz-linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), -moz-linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black);
    background-image: -ms-linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), -ms-linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black);
    background-image: -o-linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), -o-linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black);
    background-image: linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black); */

    }

    details summary {
        border-bottom: 1px solid #FFF !important;
    }

    details a:not(.artLink) {
        cursor: pointer;
        border-bottom: 2px dotted #000 !important;
        line-height: 1.6em;
    }
    .dropdown-content details a{ border-bottom: 1px solid #FFF !important;
}

    #magmenu.dropdown-content a {
        /*color: white;*/
    }

    #magmenu.dropdown-content {
        position: fixed;
        background: radial-gradient(circle, rgba(230, 228, 223, 1) 4%, rgba(255, 255, 0, 1) 26%, rgba(255, 255, 0, 0.6) 84%, rgba(100, 100, 0, 0.6) 96%, rgba(0, 0, 0, 1) 100%);
        border-top: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.18);
        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.25),
            inset 0 1px 0 rgba(255, 255, 255, 0.55),
            inset 0 -14px 28px rgba(255, 255, 255, 0.08);
        overflow-x: hidden;
        overflow-y: auto;
        text-transform:uppercase;
        isolation: auto;
        /*text-shadow: 0 1px 2px rgba(0, 0, 0, 0.45);*/
        max-height: 80vh;
    }

    #magmenu.dropdown-content::before {
        content: "";
        position: absolute;
        inset: 0;

        /*background-color: rgba(22, 42, 34, 0.3);*/
        backdrop-filter: blur(30px) saturate(190%) contrast(1.02) brightness(0.9);
        -webkit-backdrop-filter: blur(30px) saturate(190%) contrast(1.02) brightness(0.9);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.5),
            inset 0 -14px 28px rgba(255, 255, 255, 0.06);
        pointer-events: none;
        z-index: -1;
        will-change: backdrop-filter;
    }

    #magmenu.dropdown-content>* {
        position: relative;
        z-index: 1;
    }

    details>summary::after {
        font-size: 1.5em;
        content: "";
        vertical-align: bottom;
    }

    details[open]>summary::after {
        font-size: 1.5em;
        content: "";
        vertical-align: bottom;
    }

    .zoomy {
        height: 100vh;
        width: auto;
        z-index: 200;
        cursor: zoom-out;
    }

    .newfooter {
        /*color: white;*/
        background-color: var(--issueTint);
        margin-top: -2px;
        padding: 2em;
        padding-bottom: 3em;
    }

    .newfooter img {
        /*filter: invert(1);*/
        /*mix-blend-mode: hard-light;*/
    }

    .newfooter .colophon:not(:first-child) {
        width: calc(35% + 4px - 2em);
        margin-top: 45px;
    }
    .newfooter .colophon:first-child{
        width: calc(30% + 4px - 2em);
    }

    .newfooter .colophon a {
        text-decoration: none;
        /*color: white;*/
    }

    .bakelite {
        width: 100%;
        color:black !important;
        font-family:Helvetica, Arial, sans-serif;
        text-transform:uppercase;
        font-weight:normal;
        position: sticky;
        top: calc(1.6em - 2px);
        z-index: 50;
        text-align: center;
        padding: 1.2em !important;
        margin: 0;
        overflow: hidden;
        box-sizing: border-box;

        clip-path: none;
        border-radius: 0;
background: radial-gradient(circle, rgba(230, 228, 223, 1) 4%, rgba(255, 255, 0, 1) 26%, rgba(255, 255, 0, 0.6) 84%, rgba(100, 100, 0, 0.6) 96%, rgba(0, 0, 0, 1) 100%);
        background-color: var(--issueTint);

        backdrop-filter: blur(18px) saturate(190%) contrast(1.08) brightness(1.04);
        -webkit-backdrop-filter: blur(18px) saturate(190%) contrast(1.08) brightness(1.04);

        /*border: 1px solid rgba(255, 255, 255, 0.38);*/
        color: #f8fff8;
        /*font-weight: 600;*/
        /*text-shadow: 0 1px 2px rgba(0, 0, 0, 0.22);*/

        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.25),
            inset 0 1px 0 rgba(255, 255, 255, 0.55),
            inset 0 -14px 28px rgba(255, 255, 255, 0.08);

        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        top: 2em;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* border: white dashed 2px; */
        border-left: none;
        border-right: none;
        /* background-color: #ebab90; */
        top: 1.5em !important;
        margin-top: -1.5em !important;
        padding: 0.8em !important;
    }

    #header .bakelite {
        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.25),
            inset 0 -14px 28px rgba(255, 255, 255, 0.08);
    }

    .bakelite.ruby {
        background:
            radial-gradient(130% 120% at 15% 0%, rgba(255, 255, 255, 0.42) 0%, rgba(255, 255, 255, 0.09) 42%, rgba(255, 255, 255, 0.02) 70%),
            linear-gradient(135deg, rgba(255, 110, 150, 0.26) 0%, rgba(225, 70, 120, 0.12) 45%, rgba(170, 25, 85, 0.2) 100%);
        background-color: rgba(190, 30, 90, 0.16);
        border-color: rgba(255, 215, 230, 0.4);
        color: #fff3f7;
    }
    #Hero figcaption{bottom: 2em;}
    .struck-word {
    text-decoration: line-through;
    text-decoration-thickness: 0.08em;
}
</style><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><meta name="mobile-web-app-capable" content="yes"><link rel="icon" type="image/png" href="https://artandaustralia.com/aaImages/favicon.png" width="64" height="64"><meta property="og:image" content="https://artandaustralia.com/../uploads/2964/med/2964_RYANPRESLEY_RyanPresley2026OurlifestyleoftranquilityundisturbedoilonpolyesterLarge_med.jpg"><meta property="og:url" content="https://www.artandaustralia.com//index_61_2.php"></head>












<body style="">
    <div id="header" class="header" style="background-color:black;transition: all 0.1s ease-in-out;z-index:1001; ">
        <div class="liminalSpace bakelite" style="padding: 0.2em;text-align: center; padding-left: 1em; line-height: 1.6em; padding-right: 1em; width: 100%; height: 1.6em; overflow: visible;">
            <a href="https://artandaustralia.com/newsletter">
                <div style="top: 0; right: 1em; bottom: 0; position: absolute; float: right; width: calc(25% - 2em); text-align: right; display: flex; align-items: center; justify-content: flex-end;">
                    <span onclick="window.open('https://artandaustralia.com/newsletter', '_self')" style="color:black; display:flex; align-items:center;"><img style="max-height:1.2em; display:block;" src="https://artandaustralia.com/aaImages/eyes.svg" height="20">
                    </span>
                </div>
            </a>

            <div style="float:left;width:calc(25% - 1em);text-align:left;">
                <a href="https://artandaustralia.com/">
                    <div id="logo" class="home dropdown">

                    </div>
                </a>
            </div>

            <div style="text-align:center; width:calc(50% - 4px);margin:auto;left: -4px;white-space: nowrap;">
                <div id="menuDown" class="dropdown " style="">
                    <div id="issueTitle" style="">
                        No Future Without A Past</div>
                    <div id="magmenu" class="dropdown-content glow" style=" text-align: center;border-bottom:solid 1px #FFF;">
                        <a href="https://artandaustralia.com/61_2/p440/editorial">Editorial</a><details><summary>&nbsp;Features</summary><a href="https://artandaustralia.com/61_2/p493/disremembering-art-art-in-australia-and-its-archive">Disremembering Art: Art In Australia And Its Archive</a><a href="https://artandaustralia.com/61_2/p489/permanent-renovation-westerngatedreverbre-leaseestatecoastaltrimmings">Permanent Renovation: Westerngatedreverbre-leaseestatecoastaltrimmings</a><a href="https://artandaustralia.com/61_2/p555/wildflowers-amongst-the-ashes">Wildflowers Amongst The Ashes</a><a href="https://artandaustralia.com/61_2/p565/terra-nullius-teaching-aid-as-far-as-the-eye-can-see-1993">Terra Nullius (teaching Aid) As Far As The Eye Can See (1993)</a></details><details><summary>&nbsp;Forum</summary><a href="https://artandaustralia.com/61_2/p490/objects-that-unsettle-australia-art-beyond-the-nation-state">Objects That Unsettle Australia: Art Beyond The Nation-state</a><a href="https://artandaustralia.com/61_2/p542/autopoiesis-and-the-inverted-model-a-sketch-for-an-art-history-upside-down-and-from-the-south">Autopoiesis And The Inverted Model: A Sketch For An Art History Upside Down And From The South</a><a href="https://artandaustralia.com/61_2/p492/hobson039s-choice-future-pasts-of-the-george-paton-gallery">Hobson's Choice: Future Pasts Of The George Paton Gallery</a><a href="https://artandaustralia.com/61_2/p491/writing-backwards-and-forwards-for-the-sake-of-art-history-humanity">Writing Backwards And Forwards For The Sake Of <span class="struck-word">art History</span> Humanity</a></details><details><summary>&nbsp;Galleries+Artists</summary><a href="https://artandaustralia.com/61_2/p519/follow-the-artist-into-art-history-a-conversation-between-tony-albert-and-lisa-slade">Follow The Artist Into Art History:  A Conversation Between Tony Albert And Lisa Slade</a><a href="https://artandaustralia.com/61_2/p619/the-continuum-explodes-tim-burns-out-of-time-and-in-the-gallery">The Continuum Explodes: Tim Burns, Out Of Time And In The Gallery</a></details><!--<details><summary>Publications</summary></details>--><a href="https://artandaustralia.com/A_A/p236/about">About</a><a href="https://artandaustralia.com/studyCentre">A+a Study Centre</a><a href="https://artandaustralia.com/archive" target="_blank">A+a Archive</a><a href="https://artandaustralia.com/shop">Shop</a><details><summary>&nbsp;Settings</summary><a class="range"><span style="font-size:smaller;">A</span><input type="range" id="fontSize" name="fontS" min="10" max="24" step="2" value="16" style=" "><label for="fontSize"><span style="font-size:larger;">A</span> </label></a><a class="switch"><input type="checkbox" id="switch" class="checkbox"><label for="switch"><span id="sun" class="tooltiptext">Dark-mode</span></label></a><a class="switch calm"><input type="checkbox" id="calm"><label for="calm"><span id="yin" class="tooltiptext">Calm-mode</span></label></a><a onclick="restore()">Restore Default</a></details><a href="" onclick="closeMenu();">Close Menu</a>                    </div>
                </div>
            </div>
            <!-- The editors and publisher respectfully acknowledge the Boonwurrung and Wurundjeri peoples of the Kulin Nation, their ancestors, and Elders, who are part of the longest continuing culture in the world. -->
        </div>
    </div>

    <script>
        (function () {
            const menuDown = document.getElementById('menuDown');
            const magmenu = document.getElementById('magmenu');
            if (!menuDown || !magmenu) return;

            const closeIssueMenu = () => {
                menuDown.classList.remove('menu-open');
                magmenu.querySelectorAll('details[open]').forEach((detail) => {
                    detail.removeAttribute('open');
                });

                if (menuDown.contains(document.activeElement) && typeof document.activeElement.blur === 'function') {
                    document.activeElement.blur();
                }
            };

            menuDown.addEventListener('mouseenter', () => {
                menuDown.classList.add('menu-open');
            });

            menuDown.addEventListener('mouseleave', closeIssueMenu);

            const closeLink = magmenu.querySelector('a[href=""]');
            if (closeLink) {
                closeLink.addEventListener('click', (event) => {
                    event.preventDefault();
                    closeIssueMenu();
                });
            }
        })();
    </script>

<div id="heroBox" class="coverPage">
	<figure id="Hero" class="headerPic" style="margin:0;padding:0;width:100%;height:100%;">
		<div style="width:100%;height:100%;">
			<iframe src="61_2/ryanNew.html" style="width:100%; height:100%; border:none; pointer-events:auto;"></iframe>
			<!-- scrolling="no"<img src="" alt="Cover image" fetchpriority="high" loading="eager" decoding="async"> -->
		</div>

	</figure>
	<!--<div class="video-overlay">-->
	<!--             <video id="player" class="video-overlay__video" loop muted autoplay playsinline></video>-->
	<!--             <div class="video-overlay__box"></div>-->
	<!--  </div>-->
	<!--</span></figcaption>-->
	<!--<div class="wordtitle" style="position:absolute;left:0;top:0;width:100%;height:100%;"><img src="../fonts/the_view.svg"/></div><div class="name" style="color:black";><div class="wordtitle">Cover_61_2</div></div>-->	<!--<div id="badge" onClick="window.open('https://artandaustralia.com/newsletter', '_self')" style="position:absolute;right:0.5em;top:3em;z-index: 100;width:15vh;height:15vh;"><img style="width:100%;height:auto;" src="aaImages/sub_badge.png" width="355" height="355"></div>-->

</div>


<!-- ********** Editorial & Features ************ 
<div class="liminalSpace instructions"><span>CLICK+DRAG TO PAN</span><span>ESC TO EXIT</span><span>CLICK TO ENTER</span></div>-->
<div class="liminalSpace center bakelite"><span></span>Features &nbsp;&nbsp;<span onclick="window.scrollBy({left:0, top:window.innerHeight, behavior:'smooth'});" title="scrolldown">↓</span><span></span></div>
<!-- DEBUG: featuresSection array: ["440","489","555","565"] --><!-- DEBUG: featuresfeature array: ["493"] --><div class="flow div1" style=" border-color: var(--issueTint);border-top:var(--issueTint) solid 4px;z-index:7;height:84vh; width:auto;background-size:cover;background-position:center;background-image:url(../uploads/2971/max/2971_NFWAPMCLEAN_nla.obj3515636821_max.jpg);"><a class="fullHeight" href="/61_2/p493/disremembering-art-art-in-australia-and-its-archive"><div class="name" style="color:white;"><div class="wordtitle">Disremembering Art: Art In Australia And Its Archive<div class="wordauthor">Ian Mclean</div></div></div></a></div><div class="flow div2" style="  border-color: var(--issueTint); border-bottom: 4px solid var(--issueTint); background: var(--issueTint);"><!-- DEBUG: Article 440 found, HERO_ID = 2971 --><!-- DEBUG: Article fetched, Title = Editorial --><!-- DEBUG: Image query for HERO_ID = 3537 --><!-- DEBUG: Image fetched, MED = ../uploads/3537/med/3537_EDITORIAL_61_2_GordonBennettUntitledNoFutureWithoutAPast1998_med.jpg --><div class="card" style="  border-color: var(--issueTint);border-top: 4px solid var(--issueTint);  z-index:7;background-size:cover;background-position:center; background-image:url(../uploads/3537/med/3537_EDITORIAL_61_2_GordonBennettUntitledNoFutureWithoutAPast1998_med.jpg);"><a href="/61_2/m440/editorial"><div class="name" style="color:transparent;"><div class="wordtitle">Editorial<div class="wordauthor">Suzannah Henty</div></div></div></a></div><!-- DEBUG: Article 489 found, HERO_ID = 3537 --><!-- DEBUG: Article fetched, Title = Permanent Renovation: WesternGatedReverbRe-LeaseEstateCoastalTrimmings --><!-- DEBUG: Image query for HERO_ID = 3474 --><!-- DEBUG: Image fetched, MED = ../uploads/3474/med/3474_BOOKBOYE_bd03g.s.09_med.jpg --><div class="card" style="  border-color: var(--issueTint);border-top: 4px solid var(--issueTint);  z-index:7;background-size:cover;background-position:center; background-image:url(../uploads/3474/med/3474_BOOKBOYE_bd03g.s.09_med.jpg);"><a href="/61_2/p489/permanent-renovation-westerngatedreverbre-leaseestatecoastaltrimmings"><div class="name" style="color:white;"><div class="wordtitle">Permanent Renovation: Westerngatedreverbre-leaseestatecoastaltrimmings<div class="wordauthor">Robert Cook &amp; Paul Boye</div></div></div></a></div></div><div class="flow div2" style="  border-color: var(--issueTint); border-bottom: 4px solid var(--issueTint); background: var(--issueTint);"><!-- DEBUG: Article 555 found, HERO_ID = 3474 --><!-- DEBUG: Article fetched, Title = Wildflowers Amongst the Ashes --><!-- DEBUG: Image query for HERO_ID = 3536 --><!-- DEBUG: Image fetched, MED = ../uploads/3536/med/3536_Presley1_RyanPresley2026Ourlifestyleoftranquilityundisturbedoilonpolyester_med.jpg --><div class="card" style="  border-color: var(--issueTint);border-top: 4px solid var(--issueTint);  z-index:7;background-size:cover;background-position:center; background-image:url(../uploads/3536/med/3536_Presley1_RyanPresley2026Ourlifestyleoftranquilityundisturbedoilonpolyester_med.jpg);"><a href="/61_2/p555/wildflowers-amongst-the-ashes"><div class="name" style="color:white;"><div class="wordtitle">Wildflowers Amongst The Ashes<div class="wordauthor">Ryan Presley</div></div></div></a></div><!-- DEBUG: Article 565 found, HERO_ID = 3536 --><!-- DEBUG: Article fetched, Title = Terra nullius (teaching aid) as far as the eye can see (1993) --><!-- DEBUG: Image query for HERO_ID = 3539 --><!-- DEBUG: Image fetched, MED = ../uploads/3539/med/3539_GENTLE_cropGordonBennettAboriginalgenerative1993_med.jpg --><div class="card" style="  border-color: var(--issueTint);border-top: 4px solid var(--issueTint);  z-index:7;background-size:cover;background-position:center; background-image:url(../uploads/3539/med/3539_GENTLE_cropGordonBennettAboriginalgenerative1993_med.jpg);"><a href="/61_2/p565/terra-nullius-teaching-aid-as-far-as-the-eye-can-see-1993"><div class="name" style="color:yellow;"><div class="wordtitle">Terra Nullius (teaching Aid) As Far As The Eye Can See (1993)<div class="wordauthor">Michael Gentle</div></div></div></a></div></div><!-- FEATURES LOOP ENDED, ABOUT TO START CURATORS --><!-- Curators: 2 sections, 2 features --><div class="liminalSpace center bakelite" style="z-index:63;">Forum&nbsp;&nbsp;<span onclick="window.scrollBy({left:0, top:window.innerHeight, behavior:'smooth'});" title="scrolldown">↓</span></div><!-- inside curators loop --><div class="flow div1" style="background:var(--issueTint);background-size:cover; background-position:center;border-top: solid 4px var(--issueTint); z-index:62;height:84vh;width:auto;background-size:cover;background-position:center;background-image:url(../../uploads/3097/max/3097_ZANANIRI_REL358561_max.jpg);"><a class="fullHeight" href="/61_2/p490/objects-that-unsettle-australia-art-beyond-the-nation-state"><div class="name" style="color:white;"><div class="wordtitle">Objects That Unsettle Australia: Art Beyond The Nation-state<div class="wordauthor">Sary Zananiri</div></div></div></a></div><div class="flow div2" style="  border-color: var(--issueTint); background-color:var(--issueTint);border-top: solid 4px var(--issueTint); border-bottom: 4px solid var(--issueTint);"><div class="card" style="  border-color: var(--issueTint); background-size:cover;background-position:center; z-index:7; background-image:url(../uploads/3475/med/3475_GAETE_TorresGarciaAmericaInverted_med.jpg);"><a href="/61_2/p542/autopoiesis-and-the-inverted-model-a-sketch-for-an-art-history-upside-down-and-from-the-south"><div class="name" style="color:black;"><div class="wordtitle">Autopoiesis And The Inverted Model: A Sketch For An Art History Upside Down And From The South<div class="wordauthor">Miguel Gaete</div></div></div></a></div><div class="card" style="  border-color: var(--issueTint); background-size:cover;background-position:center; z-index:7; background-image:url(../uploads/3143/med/3143_COULTER_UDC20260032110001_med.jpg);"><a href="/61_2/p492/hobson039s-choice-future-pasts-of-the-george-paton-gallery"><div class="name" style="color:white;"><div class="wordtitle">Hobson's Choice: Future Pasts Of The George Paton Gallery<div class="wordauthor">Rosalina Coulter</div></div></div></a></div></div><!-- inside curators loop --><div class="flow div1" style="background:var(--issueTint);background-size:cover; background-position:center;border-top: solid 4px var(--issueTint); z-index:62;height:84vh;width:auto;background-size:cover;background-position:center;background-image:url(../../uploads/3354/max/3354_NFWAPSHKEMBI_HosseinValamaneshThelovercircleshisownheart1993Parisedition2017_max.jpg);"><a class="fullHeight" href="/61_2/p491/writing-backwards-and-forwards-for-the-sake-of-art-history-humanity"><div class="name" style="color:white;"><div class="wordtitle">Writing Backwards And Forwards For The Sake Of <span class="struck-word">art History</span> Humanity<div class="wordauthor">Nur Shkembi</div></div></div></a></div><div class="liminalSpace center bakelite" style="z-index:64;">Galleries &amp; Artists &nbsp;&nbsp;<span onclick="window.scrollBy(0, window.innerHeight);" title="scrolldown">↓</span></div><div class="flow div2" style="border-bottom: 4px solid var(--issueTint);border-top: 4px solid var(--issueTint); background-color:var(--issueTint);"><div class="card" style="  border-color: var(--issueTint);background-size:cover; background-position:center; z-index:7; background-image:url(../uploads/3235/med/3235_SLADEALBERT_AftertheRaininstallation19_med.jpg);"><a href="/61_2/p519/follow-the-artist-into-art-history-a-conversation-between-tony-albert-and-lisa-slade"><div class="name" style="color:white;"><div class="wordtitle">Follow The Artist Into Art History:  A Conversation Between Tony Albert And Lisa Slade<div class="wordauthor">&nbsp;</div></div></div></a></div><div class="card" style="  border-color: var(--issueTint);background-size:cover; background-position:center; z-index:7; background-image:url(../uploads/3820/med/3820_BEARD_w14_med.jpg);"><a href="/61_2/p619/the-continuum-explodes-tim-burns-out-of-time-and-in-the-gallery"><div class="name" style="color:black;"><div class="wordtitle">The Continuum Explodes: Tim Burns, Out Of Time And In The Gallery<div class="wordauthor">Sam Beard</div></div></div></a></div></div>

<div class="liminalSpace center bakelite" style="z-index:65;">Colophon</div>
<div class="flow banner" style="  border-color: yellow;/*border-top: solid 8px #FFF;*/ height:60vh;background-image:url(../uploads/563/med/563_DEV_NOTES_covermags_med.jpg);background-position:0% 80%;background-size:cover;">
	<div class="name" style="top:unset;color:white;width:80%;">
		<div class="wordtitle"><a style="color:white;text-decoration:none;" target="_blank" href="https://artandaustralia.com/newsletter">Become a Member of Art + Australia</a></div>
	</div>
</div>


<p><strong></strong></p><div class="flow div3 newfooter" style="font-size:initial;height:unset;"><div class="colophon"><strong><img src="https://artandaustralia.com/aaImages/aa_logo.png" alt="Art and Australia logo" style="position:relative;max-width:20%;height: auto;z-index: 59;"></strong><p></p><br>
<p>→ <a href="https://artandaustralia.com/A_A/p236/about" target="_blank" rel="noopener">About</a></p><br>
<p>→ <a href="https://artandaustralia.com/profiles/art-and-australia" target="_blank" rel="noopener">People + Contributors</a></p><br>
<p>→ <a href="https://artandaustralia.com/A_A/p239/editorial-overview" target="_blank" rel="noopener">Editorial Overview</a></p><br>
<p>→ <a href="https://artandaustralia.com/A_A/p238/editorial-guidelines" target="_blank" rel="noopener">Editorial Guidelines</a></p><br>
<p>→ <a href="https://artandaustralia.com/A_A/p100/privacy-statement" target="_blank" rel="noopener">Privacy Statement</a></p><br>
<p><strong></strong></p></div><div class="colophon"><strong></strong><p></p><br>
<p>→ <a href="mailto:info@artandaustralia.com" target="_blank" rel="noopener">Email: info@artandaustralia.com</a></p><br>
<p>→&nbsp;<a href="https://artandaustralia.com/newsletter" target="_blank" rel="noopener">Receive news from Art + Australia</a></p><br>
<p>→&nbsp;<a href="https://www.instagram.com/artandaustralia/" target="_blank" rel="noopener">Follow us on Instagram</a></p><br>
<p>→&nbsp;<a href="https://artandaustralia.com/shop" target="_blank" rel="noopener">Visit our Bookshop</a></p><br>
<p><strong></strong></p></div><div class="colophon"><p></p><br>
<p>Art + Australia<br>Publisher: Victorian College of the Arts<br>University of Melbourne</p><br>
<p>Art + Australia ISSN 1837-2422</p><br>
<p>All content published after October 2023 by Art + Australia is available under a Attribution-NonCommercial-NoDerivs 4.0 International Licence (<a href="https://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank" rel="noopener">CC BY-NC-ND 4.0</a>) except where otherwise stated. For more information about use and distribution you can view our <a href="https://artandaustralia.com/A_A/p238/editorial-guidelines" target="_blank" rel="noopener">Editorial Guidelines</a>.</p><br>
<p>Art + Australia is University of Melbourne research project</p><br><img src="https://artandaustralia.com/uploads/1692/med/1692_ENDMATTER_resized_med.jpg" style="height:4em;filter: none;mix-blend-mode: normal;">	</div></div>
<!-- AddToAny SOCIAL MEDIA BUTTONS BEGIN -->



<div class="modal" id="modal">
	<div class="modal-guts">
		The editors and publisher respectfully acknowledge the Boonwurrung, Woi Wurrung and Wurundjeri peoples of the
		Kulin Nation, their ancestors, and Elders, as the traditional custodians of the unceded lands on which this
		publication is created.<br><br><button class="close-button" id="close-button">&nbsp;X&nbsp;</button><br><br></div>
</div>

<script>
	var modal = document.querySelector("#modal");

	var modalOverlay = document.querySelector("#modal-overlay");
	var closeButton = document.querySelector("#close-button");
	//var openButton = document.querySelector("#open-button");

	closeButton.addEventListener("click", function () {
		modal.classList.toggle("closeIt");
		window.localStorage.setItem('country', "true");
		country = "true"; con
		$('#modal').css('display', 'none');
		modalOverlay.classList.toggle("closeIt");
	});

	/*openButton.addEventListener("click", function() {
	  modal.classList.toggle("closeIt");
	  modalOverlay.classList.toggle("closeIt");
	});*/
	$(window).on('orientationchange', function () {
		document.body.style.display = 'none';
		document.body.offsetHeight; //cause a reflow
		document.body.style.display = 'block'; //cause a repaint
	});
	
window.addEventListener('message', (event) => {
    if (event.data && event.data.type === 'RYAN_ANIMATION_PERCENTAGE') {
        let percent = event.data.percent; // 0.0 to 1.0

        const heroBox = document.querySelector('#heroBox');
        if (heroBox) {
            let maxHeroScroll = heroBox.scrollHeight - heroBox.clientHeight;
            
            // Instantly sync the parent box scroll position to match the video scrub percentage
            heroBox.scrollTop = percent * maxHeroScroll;
        }
    }
});
</script>
<!--<script async src="https://static.addtoany.com/menu/page.js"></script>
AddToAny END -->



<script type="text/javascript">
	var arrow_keys_handler = function (e) {
		switch (e.code) {
			case "ArrowUp": case "ArrowDown": case "ArrowLeft": case "ArrowRight":
			case "Space": e.preventDefault(); break;
			default: break; // do not block other keys
		}
	};
	window.addEventListener("keydown", arrow_keys_handler, false);


	$(window).on("load", function () {
		$(window).scroll(function () {
			var windowBottom = $(this).scrollTop() + $(this).innerHeight();
			$(".fade").each(function () {
				/* Check the location of each desired element */
				var objectBottom = $(this).offset().top + $(this).outerHeight();

				/* If the element is completely within bounds of the window, fade it in */
				if (objectBottom < windowBottom + 600) { //object comes into view (scrolling down)
					if ($(this).css("opacity") == 0) { $(this).fadeTo(500, 1); }
				} else { //object goes out of view (scrolling up)
					if ($(this).css("opacity") == 1) { $(this).fadeTo(500, 0); }
				}
			});
		}).scroll(); //invoke scroll-handler on page-load
	});
	function more() {
		var dots = document.getElementById("dots");
		var moreText = document.getElementById("moreText");
		var btnText = document.getElementById("myBtn");

		if (dots.style.display === "none") {
			dots.style.display = "inline";
			btnText.innerHTML = "Read more";
			moreText.style.display = "none";
		} else {
			dots.style.display = "none";
			btnText.innerHTML = "Read less";
			moreText.style.display = "inline";
			window.scrollBy({
				top: 150,
				left: 0,
				behavior: 'smooth'
			});
		}
	}
	setTimeout(function () {
		$("#title").addClass('titlefade');
	}, 6000);

const heroBox = document.getElementById('heroBox');
const heroSection = document.getElementById('Hero');
const heroIframe = heroBox ? heroBox.querySelector('iframe') : null;

console.log('=== INIT ===');
console.log('heroBox:', heroBox);
console.log('heroSection:', heroSection);
console.log('heroIframe:', heroIframe);
console.log('heroSection exists?', !!heroSection);
console.log('heroIframe exists?', !!heroIframe);

function updateAnimationFromScroll() {
    console.log('🔄 updateAnimationFromScroll called');
    console.log('heroBox:', !!heroBox, 'heroIframe:', !!heroIframe);
    
    if (!heroBox || !heroIframe) {
        console.log('❌ Missing heroBox or heroIframe, returning');
        return;
    }
    
    const heroRect = heroBox.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    
    const scrollProgress = Math.max(0, Math.min(1,
        (windowHeight - heroRect.top) / (windowHeight + heroRect.height)
    ));
    
    console.log('Scroll Progress:', scrollProgress.toFixed(3));
    
    // Send to iframe
    try {
        heroIframe.contentWindow.postMessage({
            type: 'SCROLL_PROGRESS',
            percent: scrollProgress
        }, '*');
        console.log('essage sent');
    } catch (e) {
        console.log('Error:', e);
    }
    
    // PAN THE PAINTING
    console.log('Checking heroSection:', !!heroSection);
    
    if (heroSection) {
        console.log('eroSection found, applying pan');
        const paintingOverflow = heroBox.clientHeight * 2;
        const yOffset = -paintingOverflow * scrollProgress;
        
        heroSection.style.transform = `translateY(${yOffset}px)`;
        
        console.log('Transform applied:', heroSection.style.transform);
    } else {
        console.log('eroSection is falsy');
    }
}

window.addEventListener('scroll', updateAnimationFromScroll, { passive: true });

setTimeout(() => {
    console.log('Initial call...');
    updateAnimationFromScroll();
}, 500);
</script>



<!--added for preview-->
<script>
function video_show_control(obj)
    {
     if (!obj.hasAttribute("controls")) {
         obj.setAttribute("controls", "")
          }

        }
        function video_hide_control(obj)
        {       
            if (obj.hasAttribute("controls")) {
                    obj.removeAttribute("controls")
              }
        }
 
function zoomy(elem){
	var gridurl=String(elem.src);
	//console.log(gridurl);
	if (!document.fullscreenElement) { 
	if (elem.requestFullscreen){elem.src=gridurl.replace(/med/g, "max");elem.requestFullscreen();} 
	else if (elem.webkitRequestFullscreen) { /* Safari */ elem.src=gridurl.replace(/med/g, "max");elem.webkitRequestFullscreen();} 
	else if (elem.msRequestFullscreen) { /* IE11 */ elem.src=gridurl.replace(/med/g, "max");elem.msRequestFullscreen(); }  } 
	else if (document.exitFullscreen) { elem.src=gridurl.replace(/max/g, "med");document.exitFullscreen();}
	else if (document.webkitExitFullscreen) { elem.src=gridurl.replace(/max/g, "med");document.webkitExitFullscreen();} 
	else if (document.msExitFullscreen) {elem.src=gridurl.replace(/max/g, "med");document.msExitFullscreen(); }
}
function toggle(elem){
	event.preventDefault(); 
	elem.classList.toggle("zoomy");
}
function footy() {
	if(document.contains(document.getElementById("refs"))){
	var foot=document.getElementById("refs")
    var p_array = foot.getElementsByTagName("p");
	var count = p_array.length;
	for (let i = 0; i < count; i++) {
    	let p = p_array[i];
		let pinner=p.innerHTML;
    	let pnum = p.innerHTML.split('.');
		//console.log(pnum);
    	if (!isNaN(Number(pnum[0]))){ 
			p.setAttribute('id',pnum[0]);
			p.innerHTML='<a style="text-decoration:none !important;border-bottom:none !important;cursor:n-resize;" href="#'+String(pnum[0])+'-ref">'+String(pnum.shift())+'. </a>'+pnum.join(".");
			p.style.paddingTop = "2.2em";
			p.style.marginTop="-2.2em";
		}
    }
	var sup_array = document.getElementsByTagName("sup");
	var supcount = sup_array.length;
	for (let j = 0; j < supcount; j++) {
    	let thissup = sup_array[j];
    	let supnum=thissup.innerHTML.split(' ');
		//console.log(supnum);
    	if (!isNaN(Number(supnum[0]))){ 
			thissup.innerHTML='<a id="'+String(supnum[0])+'-ref" href="#'+String(supnum[0])+'" >'+String(supnum[0])+'</a>';
			//console.log('<a href="'+'#'+String(supnum[0])+'" >'+String(supnum[0])+'</a>');
		}
    }}
}

footy();
/* DARK MODE  --> MAYBE MOVE TO 'FOOTER' OR .JS */
var v;var switchTheme;
/*if (window.localStorage.getItem('darkMode')==null){
    window.localStorage.setItem('darkMode', "false");
    darkmode="false";

	}
else { darkmode = window.localStorage.getItem('darkMode'); }
    if (darkmode=="true"){
		if (!document.body.className.match(/\bdark-Mode\b/)) {
    		document.body.classList.toggle("dark-mode");
		}
	}*/
/* DARKMODE */
 $(document).ready(function() {
if (window.localStorage.getItem('country')==null){
    window.localStorage.setItem('country', "false");
    country="false";}
else { country = window.localStorage.getItem('country');
    if (country=="true"){ if (!document.body.classList.contains('country')){document.body.classList.toggle("country"); }}
	country="true";
	
}
if (document.getElementById("switch")){
const switchTheme = document.getElementById("switch");
if (window.localStorage.getItem('darkMode')==null){
    window.localStorage.setItem('darkMode', "false");
    darkmode="false";}
else { darkmode = window.localStorage.getItem('darkMode');
    if (darkmode=="true"){document.body.classList.toggle("dark-mode");
        switchTheme.checked=true;
    }
}
switchTheme.addEventListener("click", function () {
  document.body.classList.toggle("dark-mode");
  if (darkmode=="false"){
      darkmode="true"; }
      else {darkmode="false";  }
window.localStorage.setItem('darkMode', darkmode);
});
/*FONT SIZE */
if (window.localStorage.getItem('typesize')==null){
	v=$("body").css('font-size')
   	window.localStorage.setItem('typesize', v);
	$('body').css('font-size', v + 'px');
	$('#fontSize').val(v);
   }
	else { v = window.localStorage.getItem('typesize');
	 $('body').css('font-size', v + 'px');
	 $('#fontSize').val(v);
	}
$('#fontSize').on('input', function() {
  v = $(this).val();
  window.localStorage.setItem('typesize', v);
  $('body').css('font-size', v + 'px');
});
/* CALM MODE */
const calmTheme = document.getElementById("calm");
var calmmode;
if (window.localStorage.getItem('calmMode')==null || window.localStorage.getItem('calmMode')=='undefined'){
    window.localStorage.setItem('calmMode', "false");
    calmmode="false";}
else { calmmode = window.localStorage.getItem('calmMode');
    if (calmmode=="true"){
      document.body.classList.toggle("calmMode");
      //$('#Hero').toggleClass('calmMode');
      $('#colophon').toggleClass('calmMode');
    //   document.('#defaultCanvas0').classList.toggle("calmMode");
      calmTheme.checked=true;
    }
}
const menuDown= document.getElementById("issueTitle");
const menu=document.getElementById("magmenu");
 if(document.body.contains(document.getElementById('login'))){
	 
const login=document.getElementById("login");
login.addEventListener("mouseenter", function () {
  login.classList.toggle("open");
});
login.addEventListener("mouseleave", function () {
  login.classList.toggle("open");
});
login.addEventListener("click", function () {
  login.classList.toggle("open");
});
}

menuDown.addEventListener("click", function () {
  menu.classList.toggle("open");
});

menuDown.addEventListener("mouseenter", function () {
  menu.classList.toggle("open");
});

menu.addEventListener("mouseleave", function () {
  menu.classList.toggle("open");
});

function closeMenu(){ menu.classList.toggle("open");}

function copyToClipboard(element) {
    $(element).select();
    document.execCommand("copy");
}

calmTheme.addEventListener("click", function () {
  document.body.classList.toggle("calmMode");
      $('#colophon').toggleClass('calmMode');
  if (calmmode=="false"){
      calmmode="true"; }
      else {calmmode="false";  }
	window.localStorage.setItem('calmMode', calmmode);
	});
}
});

if (window.localStorage.getItem('playSpeed')==null){
window.localStorage.setItem('playSpeed', '1');}
// Fetch all the details element.
const All_Details = document.querySelectorAll('details');
All_Details.forEach(deet=>{
  deet.addEventListener('toggle', toggleOpenOneOnly);
})

function toggleOpenOneOnly(e) {
  if (this.open) {
    All_Details.forEach(deet=>{
      if (deet!=this && deet.open && deet.id!="contrib") deet.open = false
    });
  }
}

if (document.getElementById("moreText") && document.getElementById("moreText").style.display=="none"){
	document.getElementById("refs").removeAttribute("open");
	}
	
window.addEventListener('beforeprint', (event) => {
  //console.log('Before print');
  $('.refs').each(function(i) { 
        $(this).attr('open','');
    });
  $('#refs').attr('open','');
  //$('.refs').each(function(){
//  	$(this).attr('open',true);
//  });
});
// Set up before/after handlers
var beforePrint = function() {
    $("details").attr('open', '');
};
/*var afterPrint = function() {
    $("details").removeAttr('open');
};*/
// Webkit
if (window.matchMedia) {
    var mediaQueryList = window.matchMedia('print');
    mediaQueryList.addListener(function(mql) {
        if (mql.matches) {
            beforePrint();
        } else {
            //afterPrint();
        }
    });
}
// IE, Firefox
window.onbeforeprint = beforePrint;
//window.onafterprint = afterPrint;


function restore(){
	window.localStorage.setItem('calmMode', null);
	window.localStorage.setItem('country', null);
	window.localStorage.setItem('typesize', '16px');
	$('body').css('font-size', '16px');
	window.localStorage.setItem('darkMode', null);
	$('#switch').prop('checked', false);
	$('#calm').prop('checked', false);
	$('#fontSize').val(16);
	$('body').removeClass('dark-mode');
	$('body').removeClass('calmMode');
	$('#colophon').removeClass('calmMode');
	$(".name svg").removeClass("animare");
	$(".name svg").addClass("animare");animateSvg();
	}

$(function() {
    $('.hitem').each(function(i) {
        if (isEllipsisActive(this)){
			//console.log('found ellipsis');
		}
        else {$(this).parent().removeClass('hmove');}
    });
});

function isEllipsisActive(e) {
     return ($(e).innerWidth() < $(e)[0].scrollWidth);
}
//var link;
function copier(link) {
  // Simple approach: copy plain text
  navigator.clipboard.writeText(link)
    .then(() => {
      console.log("Copied to clipboard!");
      // Show your tooltip here
    })
    .catch(err => {
      console.error("Failed to copy:", err);
      // Fallback for older browsers
      fallbackCopy(link);
    });
}

// Fallback for older browsers
function fallbackCopy(link) {
  const dummy = document.createElement("textarea");
  dummy.value = link;
  document.body.appendChild(dummy);
  dummy.select();
  document.execCommand("copy");
  document.body.removeChild(dummy);
}
//const blob = new Blob([content], { type: "text/html" });
    //const richTextInput = new ClipboardItem({ "text/html": blob });
    //await navigator.clipboard.write([richTextInput]);


if (document.getElementById("listen")){
	let a = document.getElementById("listen");
	a.addEventListener('loadedmetadata', function() {
    let d = document.getElementById("listen").duration;
	//console.log(d);
	let h=d%60;
	d= Math.round(d/60);
	if (45 > h > 15){h="½";}
	else {h="";}
    document.getElementById("duration").innerHTML = "(approx "+ d + h+" min)";			
        });
}
function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  //tooltip.innerHTML = "Copy to clipboard";
}
function listen(src){
const audio = document.createElement("audio");
if (audio.canPlayType("audio/mpeg")) {
  audio.setAttribute("src", src);
	}
audio.play();
}
</script>







</body></html>