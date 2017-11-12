<!DOCTYPE html>
  <html>
    <head>
      <title>eling-web-1</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <style>
      /*!
 * reveal.js
 * http://lab.hakim.se/reveal-js
 * MIT licensed
 *
 * Copyright (C) 2016 Hakim El Hattab, http://hakim.se
 */
/*********************************************
 * RESET STYLES
 *********************************************/
html, body, .reveal div, .reveal span, .reveal applet, .reveal object, .reveal iframe,
.reveal h1, .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6, .reveal p, .reveal blockquote, .reveal pre,
.reveal a, .reveal abbr, .reveal acronym, .reveal address, .reveal big, .reveal cite, .reveal code,
.reveal del, .reveal dfn, .reveal em, .reveal img, .reveal ins, .reveal kbd, .reveal q, .reveal s, .reveal samp,
.reveal small, .reveal strike, .reveal strong, .reveal sub, .reveal sup, .reveal tt, .reveal var,
.reveal b, .reveal u, .reveal center,
.reveal dl, .reveal dt, .reveal dd, .reveal ol, .reveal ul, .reveal li,
.reveal fieldset, .reveal form, .reveal label, .reveal legend,
.reveal table, .reveal caption, .reveal tbody, .reveal tfoot, .reveal thead, .reveal tr, .reveal th, .reveal td,
.reveal article, .reveal aside, .reveal canvas, .reveal details, .reveal embed,
.reveal figure, .reveal figcaption, .reveal footer, .reveal header, .reveal hgroup,
.reveal menu, .reveal nav, .reveal output, .reveal ruby, .reveal section, .reveal summary,
.reveal time, .reveal mark, .reveal audio, .reveal video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  vertical-align: baseline; }

.reveal article, .reveal aside, .reveal details, .reveal figcaption, .reveal figure,
.reveal footer, .reveal header, .reveal hgroup, .reveal menu, .reveal nav, .reveal section {
  display: block; }

/*********************************************
 * GLOBAL STYLES
 *********************************************/
html,
body {
  width: 100%;
  height: 100%;
  overflow: hidden; }

body {
  position: relative;
  line-height: 1;
  background-color: #fff;
  color: #000; }

/*********************************************
 * VIEW FRAGMENTS
 *********************************************/
.reveal .slides section .fragment {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .2s ease;
          transition: all .2s ease; }
  .reveal .slides section .fragment.visible {
    opacity: 1;
    visibility: inherit; }

.reveal .slides section .fragment.grow {
  opacity: 1;
  visibility: inherit; }
  .reveal .slides section .fragment.grow.visible {
    -webkit-transform: scale(1.3);
            transform: scale(1.3); }

.reveal .slides section .fragment.shrink {
  opacity: 1;
  visibility: inherit; }
  .reveal .slides section .fragment.shrink.visible {
    -webkit-transform: scale(0.7);
            transform: scale(0.7); }

.reveal .slides section .fragment.zoom-in {
  -webkit-transform: scale(0.1);
          transform: scale(0.1); }
  .reveal .slides section .fragment.zoom-in.visible {
    -webkit-transform: none;
            transform: none; }

.reveal .slides section .fragment.fade-out {
  opacity: 1;
  visibility: inherit; }
  .reveal .slides section .fragment.fade-out.visible {
    opacity: 0;
    visibility: hidden; }

.reveal .slides section .fragment.semi-fade-out {
  opacity: 1;
  visibility: inherit; }
  .reveal .slides section .fragment.semi-fade-out.visible {
    opacity: 0.5;
    visibility: inherit; }

.reveal .slides section .fragment.strike {
  opacity: 1;
  visibility: inherit; }
  .reveal .slides section .fragment.strike.visible {
    text-decoration: line-through; }

.reveal .slides section .fragment.fade-up {
  -webkit-transform: translate(0, 20%);
          transform: translate(0, 20%); }
  .reveal .slides section .fragment.fade-up.visible {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0); }

.reveal .slides section .fragment.fade-down {
  -webkit-transform: translate(0, -20%);
          transform: translate(0, -20%); }
  .reveal .slides section .fragment.fade-down.visible {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0); }

.reveal .slides section .fragment.fade-right {
  -webkit-transform: translate(-20%, 0);
          transform: translate(-20%, 0); }
  .reveal .slides section .fragment.fade-right.visible {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0); }

.reveal .slides section .fragment.fade-left {
  -webkit-transform: translate(20%, 0);
          transform: translate(20%, 0); }
  .reveal .slides section .fragment.fade-left.visible {
    -webkit-transform: translate(0, 0);
            transform: translate(0, 0); }

.reveal .slides section .fragment.current-visible {
  opacity: 0;
  visibility: hidden; }
  .reveal .slides section .fragment.current-visible.current-fragment {
    opacity: 1;
    visibility: inherit; }

.reveal .slides section .fragment.highlight-red,
.reveal .slides section .fragment.highlight-current-red,
.reveal .slides section .fragment.highlight-green,
.reveal .slides section .fragment.highlight-current-green,
.reveal .slides section .fragment.highlight-blue,
.reveal .slides section .fragment.highlight-current-blue {
  opacity: 1;
  visibility: inherit; }

.reveal .slides section .fragment.highlight-red.visible {
  color: #ff2c2d; }

.reveal .slides section .fragment.highlight-green.visible {
  color: #17ff2e; }

.reveal .slides section .fragment.highlight-blue.visible {
  color: #1b91ff; }

.reveal .slides section .fragment.highlight-current-red.current-fragment {
  color: #ff2c2d; }

.reveal .slides section .fragment.highlight-current-green.current-fragment {
  color: #17ff2e; }

.reveal .slides section .fragment.highlight-current-blue.current-fragment {
  color: #1b91ff; }

/*********************************************
 * DEFAULT ELEMENT STYLES
 *********************************************/
/* Fixes issue in Chrome where italic fonts did not appear when printing to PDF */
.reveal:after {
  content: '';
  font-style: italic; }

.reveal iframe {
  z-index: 1; }

/** Prevents layering issues in certain browser/transition combinations */
.reveal a {
  position: relative; }

.reveal .stretch {
  max-width: none;
  max-height: none; }

.reveal pre.stretch code {
  height: 100%;
  max-height: 100%;
  box-sizing: border-box; }

/*********************************************
 * CONTROLS
 *********************************************/
.reveal .controls {
  display: none;
  position: fixed;
  width: 110px;
  height: 110px;
  z-index: 30;
  right: 10px;
  bottom: 10px;
  -webkit-user-select: none; }

.reveal .controls button {
  padding: 0;
  position: absolute;
  opacity: 0.05;
  width: 0;
  height: 0;
  background-color: transparent;
  border: 12px solid transparent;
  -webkit-transform: scale(0.9999);
          transform: scale(0.9999);
  -webkit-transition: all 0.2s ease;
          transition: all 0.2s ease;
  -webkit-appearance: none;
  -webkit-tap-highlight-color: transparent; }

.reveal .controls .enabled {
  opacity: 0.7;
  cursor: pointer; }

.reveal .controls .enabled:active {
  margin-top: 1px; }

.reveal .controls .navigate-left {
  top: 42px;
  border-right-width: 22px;
  border-right-color: #000; }

.reveal .controls .navigate-left.fragmented {
  opacity: 0.3; }

.reveal .controls .navigate-right {
  left: 74px;
  top: 42px;
  border-left-width: 22px;
  border-left-color: #000; }

.reveal .controls .navigate-right.fragmented {
  opacity: 0.3; }

.reveal .controls .navigate-up {
  left: 42px;
  border-bottom-width: 22px;
  border-bottom-color: #000; }

.reveal .controls .navigate-up.fragmented {
  opacity: 0.3; }

.reveal .controls .navigate-down {
  left: 42px;
  top: 74px;
  border-top-width: 22px;
  border-top-color: #000; }

.reveal .controls .navigate-down.fragmented {
  opacity: 0.3; }

/*********************************************
 * PROGRESS BAR
 *********************************************/
.reveal .progress {
  position: fixed;
  display: none;
  height: 3px;
  width: 100%;
  bottom: 0;
  left: 0;
  z-index: 10;
  background-color: rgba(0, 0, 0, 0.2); }

.reveal .progress:after {
  content: '';
  display: block;
  position: absolute;
  height: 20px;
  width: 100%;
  top: -20px; }

.reveal .progress span {
  display: block;
  height: 100%;
  width: 0px;
  background-color: #000;
  -webkit-transition: width 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985);
          transition: width 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985); }

/*********************************************
 * SLIDE NUMBER
 *********************************************/
.reveal .slide-number {
  position: fixed;
  display: block;
  right: 8px;
  bottom: 8px;
  z-index: 31;
  font-family: Helvetica, sans-serif;
  font-size: 12px;
  line-height: 1;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.4);
  padding: 5px; }

.reveal .slide-number-delimiter {
  margin: 0 3px; }

/*********************************************
 * SLIDES
 *********************************************/
.reveal {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
  -ms-touch-action: none;
      touch-action: none; }

.reveal .slides {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  overflow: visible;
  z-index: 1;
  text-align: center;
  -webkit-perspective: 600px;
          perspective: 600px;
  -webkit-perspective-origin: 50% 40%;
          perspective-origin: 50% 40%; }

.reveal .slides > section {
  -ms-perspective: 600px; }

.reveal .slides > section,
.reveal .slides > section > section {
  display: none;
  position: absolute;
  width: 100%;
  padding: 20px 0px;
  z-index: 10;
  -webkit-transform-style: flat;
          transform-style: flat;
  -webkit-transition: -webkit-transform-origin 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985), -webkit-transform 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985), visibility 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985), opacity 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985);
          transition: transform-origin 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985), transform 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985), visibility 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985), opacity 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985); }

/* Global transition speed settings */
.reveal[data-transition-speed="fast"] .slides section {
  -webkit-transition-duration: 400ms;
          transition-duration: 400ms; }

.reveal[data-transition-speed="slow"] .slides section {
  -webkit-transition-duration: 1200ms;
          transition-duration: 1200ms; }

/* Slide-specific transition speed overrides */
.reveal .slides section[data-transition-speed="fast"] {
  -webkit-transition-duration: 400ms;
          transition-duration: 400ms; }

.reveal .slides section[data-transition-speed="slow"] {
  -webkit-transition-duration: 1200ms;
          transition-duration: 1200ms; }

.reveal .slides > section.stack {
  padding-top: 0;
  padding-bottom: 0; }

.reveal .slides > section.present,
.reveal .slides > section > section.present {
  display: block;
  z-index: 11;
  opacity: 1; }

.reveal.center,
.reveal.center .slides,
.reveal.center .slides section {
  min-height: 0 !important; }

/* Don't allow interaction with invisible slides */
.reveal .slides > section.future,
.reveal .slides > section > section.future,
.reveal .slides > section.past,
.reveal .slides > section > section.past {
  pointer-events: none; }

.reveal.overview .slides > section,
.reveal.overview .slides > section > section {
  pointer-events: auto; }

.reveal .slides > section.past,
.reveal .slides > section.future,
.reveal .slides > section > section.past,
.reveal .slides > section > section.future {
  opacity: 0; }

/*********************************************
 * Mixins for readability of transitions
 *********************************************/
/*********************************************
 * SLIDE TRANSITION
 * Aliased 'linear' for backwards compatibility
 *********************************************/
.reveal.slide section {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden; }

.reveal .slides > section[data-transition=slide].past,
.reveal .slides > section[data-transition~=slide-out].past,
.reveal.slide .slides > section:not([data-transition]).past {
  -webkit-transform: translate(-150%, 0);
          transform: translate(-150%, 0); }

.reveal .slides > section[data-transition=slide].future,
.reveal .slides > section[data-transition~=slide-in].future,
.reveal.slide .slides > section:not([data-transition]).future {
  -webkit-transform: translate(150%, 0);
          transform: translate(150%, 0); }

.reveal .slides > section > section[data-transition=slide].past,
.reveal .slides > section > section[data-transition~=slide-out].past,
.reveal.slide .slides > section > section:not([data-transition]).past {
  -webkit-transform: translate(0, -150%);
          transform: translate(0, -150%); }

.reveal .slides > section > section[data-transition=slide].future,
.reveal .slides > section > section[data-transition~=slide-in].future,
.reveal.slide .slides > section > section:not([data-transition]).future {
  -webkit-transform: translate(0, 150%);
          transform: translate(0, 150%); }

.reveal.linear section {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden; }

.reveal .slides > section[data-transition=linear].past,
.reveal .slides > section[data-transition~=linear-out].past,
.reveal.linear .slides > section:not([data-transition]).past {
  -webkit-transform: translate(-150%, 0);
          transform: translate(-150%, 0); }

.reveal .slides > section[data-transition=linear].future,
.reveal .slides > section[data-transition~=linear-in].future,
.reveal.linear .slides > section:not([data-transition]).future {
  -webkit-transform: translate(150%, 0);
          transform: translate(150%, 0); }

.reveal .slides > section > section[data-transition=linear].past,
.reveal .slides > section > section[data-transition~=linear-out].past,
.reveal.linear .slides > section > section:not([data-transition]).past {
  -webkit-transform: translate(0, -150%);
          transform: translate(0, -150%); }

.reveal .slides > section > section[data-transition=linear].future,
.reveal .slides > section > section[data-transition~=linear-in].future,
.reveal.linear .slides > section > section:not([data-transition]).future {
  -webkit-transform: translate(0, 150%);
          transform: translate(0, 150%); }

/*********************************************
 * CONVEX TRANSITION
 * Aliased 'default' for backwards compatibility
 *********************************************/
.reveal .slides section[data-transition=default].stack,
.reveal.default .slides section.stack {
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d; }

.reveal .slides > section[data-transition=default].past,
.reveal .slides > section[data-transition~=default-out].past,
.reveal.default .slides > section:not([data-transition]).past {
  -webkit-transform: translate3d(-100%, 0, 0) rotateY(-90deg) translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0) rotateY(-90deg) translate3d(-100%, 0, 0); }

.reveal .slides > section[data-transition=default].future,
.reveal .slides > section[data-transition~=default-in].future,
.reveal.default .slides > section:not([data-transition]).future {
  -webkit-transform: translate3d(100%, 0, 0) rotateY(90deg) translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0) rotateY(90deg) translate3d(100%, 0, 0); }

.reveal .slides > section > section[data-transition=default].past,
.reveal .slides > section > section[data-transition~=default-out].past,
.reveal.default .slides > section > section:not([data-transition]).past {
  -webkit-transform: translate3d(0, -300px, 0) rotateX(70deg) translate3d(0, -300px, 0);
          transform: translate3d(0, -300px, 0) rotateX(70deg) translate3d(0, -300px, 0); }

.reveal .slides > section > section[data-transition=default].future,
.reveal .slides > section > section[data-transition~=default-in].future,
.reveal.default .slides > section > section:not([data-transition]).future {
  -webkit-transform: translate3d(0, 300px, 0) rotateX(-70deg) translate3d(0, 300px, 0);
          transform: translate3d(0, 300px, 0) rotateX(-70deg) translate3d(0, 300px, 0); }

.reveal .slides section[data-transition=convex].stack,
.reveal.convex .slides section.stack {
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d; }

.reveal .slides > section[data-transition=convex].past,
.reveal .slides > section[data-transition~=convex-out].past,
.reveal.convex .slides > section:not([data-transition]).past {
  -webkit-transform: translate3d(-100%, 0, 0) rotateY(-90deg) translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0) rotateY(-90deg) translate3d(-100%, 0, 0); }

.reveal .slides > section[data-transition=convex].future,
.reveal .slides > section[data-transition~=convex-in].future,
.reveal.convex .slides > section:not([data-transition]).future {
  -webkit-transform: translate3d(100%, 0, 0) rotateY(90deg) translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0) rotateY(90deg) translate3d(100%, 0, 0); }

.reveal .slides > section > section[data-transition=convex].past,
.reveal .slides > section > section[data-transition~=convex-out].past,
.reveal.convex .slides > section > section:not([data-transition]).past {
  -webkit-transform: translate3d(0, -300px, 0) rotateX(70deg) translate3d(0, -300px, 0);
          transform: translate3d(0, -300px, 0) rotateX(70deg) translate3d(0, -300px, 0); }

.reveal .slides > section > section[data-transition=convex].future,
.reveal .slides > section > section[data-transition~=convex-in].future,
.reveal.convex .slides > section > section:not([data-transition]).future {
  -webkit-transform: translate3d(0, 300px, 0) rotateX(-70deg) translate3d(0, 300px, 0);
          transform: translate3d(0, 300px, 0) rotateX(-70deg) translate3d(0, 300px, 0); }

/*********************************************
 * CONCAVE TRANSITION
 *********************************************/
.reveal .slides section[data-transition=concave].stack,
.reveal.concave .slides section.stack {
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d; }

.reveal .slides > section[data-transition=concave].past,
.reveal .slides > section[data-transition~=concave-out].past,
.reveal.concave .slides > section:not([data-transition]).past {
  -webkit-transform: translate3d(-100%, 0, 0) rotateY(90deg) translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0) rotateY(90deg) translate3d(-100%, 0, 0); }

.reveal .slides > section[data-transition=concave].future,
.reveal .slides > section[data-transition~=concave-in].future,
.reveal.concave .slides > section:not([data-transition]).future {
  -webkit-transform: translate3d(100%, 0, 0) rotateY(-90deg) translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0) rotateY(-90deg) translate3d(100%, 0, 0); }

.reveal .slides > section > section[data-transition=concave].past,
.reveal .slides > section > section[data-transition~=concave-out].past,
.reveal.concave .slides > section > section:not([data-transition]).past {
  -webkit-transform: translate3d(0, -80%, 0) rotateX(-70deg) translate3d(0, -80%, 0);
          transform: translate3d(0, -80%, 0) rotateX(-70deg) translate3d(0, -80%, 0); }

.reveal .slides > section > section[data-transition=concave].future,
.reveal .slides > section > section[data-transition~=concave-in].future,
.reveal.concave .slides > section > section:not([data-transition]).future {
  -webkit-transform: translate3d(0, 80%, 0) rotateX(70deg) translate3d(0, 80%, 0);
          transform: translate3d(0, 80%, 0) rotateX(70deg) translate3d(0, 80%, 0); }

/*********************************************
 * ZOOM TRANSITION
 *********************************************/
.reveal .slides section[data-transition=zoom],
.reveal.zoom .slides section:not([data-transition]) {
  -webkit-transition-timing-function: ease;
          transition-timing-function: ease; }

.reveal .slides > section[data-transition=zoom].past,
.reveal .slides > section[data-transition~=zoom-out].past,
.reveal.zoom .slides > section:not([data-transition]).past {
  visibility: hidden;
  -webkit-transform: scale(16);
          transform: scale(16); }

.reveal .slides > section[data-transition=zoom].future,
.reveal .slides > section[data-transition~=zoom-in].future,
.reveal.zoom .slides > section:not([data-transition]).future {
  visibility: hidden;
  -webkit-transform: scale(0.2);
          transform: scale(0.2); }

.reveal .slides > section > section[data-transition=zoom].past,
.reveal .slides > section > section[data-transition~=zoom-out].past,
.reveal.zoom .slides > section > section:not([data-transition]).past {
  -webkit-transform: translate(0, -150%);
          transform: translate(0, -150%); }

.reveal .slides > section > section[data-transition=zoom].future,
.reveal .slides > section > section[data-transition~=zoom-in].future,
.reveal.zoom .slides > section > section:not([data-transition]).future {
  -webkit-transform: translate(0, 150%);
          transform: translate(0, 150%); }

/*********************************************
 * CUBE TRANSITION
 *********************************************/
.reveal.cube .slides {
  -webkit-perspective: 1300px;
          perspective: 1300px; }

.reveal.cube .slides section {
  padding: 30px;
  min-height: 700px;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  box-sizing: border-box;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d; }

.reveal.center.cube .slides section {
  min-height: 0; }

.reveal.cube .slides section:not(.stack):before {
  content: '';
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  -webkit-transform: translateZ(-20px);
          transform: translateZ(-20px); }

.reveal.cube .slides section:not(.stack):after {
  content: '';
  position: absolute;
  display: block;
  width: 90%;
  height: 30px;
  left: 5%;
  bottom: 0;
  background: none;
  z-index: 1;
  border-radius: 4px;
  box-shadow: 0px 95px 25px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateZ(-90px) rotateX(65deg);
          transform: translateZ(-90px) rotateX(65deg); }

.reveal.cube .slides > section.stack {
  padding: 0;
  background: none; }

.reveal.cube .slides > section.past {
  -webkit-transform-origin: 100% 0%;
          transform-origin: 100% 0%;
  -webkit-transform: translate3d(-100%, 0, 0) rotateY(-90deg);
          transform: translate3d(-100%, 0, 0) rotateY(-90deg); }

.reveal.cube .slides > section.future {
  -webkit-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-transform: translate3d(100%, 0, 0) rotateY(90deg);
          transform: translate3d(100%, 0, 0) rotateY(90deg); }

.reveal.cube .slides > section > section.past {
  -webkit-transform-origin: 0% 100%;
          transform-origin: 0% 100%;
  -webkit-transform: translate3d(0, -100%, 0) rotateX(90deg);
          transform: translate3d(0, -100%, 0) rotateX(90deg); }

.reveal.cube .slides > section > section.future {
  -webkit-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-transform: translate3d(0, 100%, 0) rotateX(-90deg);
          transform: translate3d(0, 100%, 0) rotateX(-90deg); }

/*********************************************
 * PAGE TRANSITION
 *********************************************/
.reveal.page .slides {
  -webkit-perspective-origin: 0% 50%;
          perspective-origin: 0% 50%;
  -webkit-perspective: 3000px;
          perspective: 3000px; }

.reveal.page .slides section {
  padding: 30px;
  min-height: 700px;
  box-sizing: border-box;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d; }

.reveal.page .slides section.past {
  z-index: 12; }

.reveal.page .slides section:not(.stack):before {
  content: '';
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.1);
  -webkit-transform: translateZ(-20px);
          transform: translateZ(-20px); }

.reveal.page .slides section:not(.stack):after {
  content: '';
  position: absolute;
  display: block;
  width: 90%;
  height: 30px;
  left: 5%;
  bottom: 0;
  background: none;
  z-index: 1;
  border-radius: 4px;
  box-shadow: 0px 95px 25px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateZ(-90px) rotateX(65deg); }

.reveal.page .slides > section.stack {
  padding: 0;
  background: none; }

.reveal.page .slides > section.past {
  -webkit-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-transform: translate3d(-40%, 0, 0) rotateY(-80deg);
          transform: translate3d(-40%, 0, 0) rotateY(-80deg); }

.reveal.page .slides > section.future {
  -webkit-transform-origin: 100% 0%;
          transform-origin: 100% 0%;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0); }

.reveal.page .slides > section > section.past {
  -webkit-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-transform: translate3d(0, -40%, 0) rotateX(80deg);
          transform: translate3d(0, -40%, 0) rotateX(80deg); }

.reveal.page .slides > section > section.future {
  -webkit-transform-origin: 0% 100%;
          transform-origin: 0% 100%;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0); }

/*********************************************
 * FADE TRANSITION
 *********************************************/
.reveal .slides section[data-transition=fade],
.reveal.fade .slides section:not([data-transition]),
.reveal.fade .slides > section > section:not([data-transition]) {
  -webkit-transform: none;
          transform: none;
  -webkit-transition: opacity 0.5s;
          transition: opacity 0.5s; }

.reveal.fade.overview .slides section,
.reveal.fade.overview .slides > section > section {
  -webkit-transition: none;
          transition: none; }

/*********************************************
 * NO TRANSITION
 *********************************************/
.reveal .slides section[data-transition=none],
.reveal.none .slides section:not([data-transition]) {
  -webkit-transform: none;
          transform: none;
  -webkit-transition: none;
          transition: none; }

/*********************************************
 * PAUSED MODE
 *********************************************/
.reveal .pause-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: black;
  visibility: hidden;
  opacity: 0;
  z-index: 100;
  -webkit-transition: all 1s ease;
          transition: all 1s ease; }

.reveal.paused .pause-overlay {
  visibility: visible;
  opacity: 1; }

/*********************************************
 * FALLBACK
 *********************************************/
.no-transforms {
  overflow-y: auto; }

.no-transforms .reveal .slides {
  position: relative;
  width: 80%;
  height: auto !important;
  top: 0;
  left: 50%;
  margin: 0;
  text-align: center; }

.no-transforms .reveal .controls,
.no-transforms .reveal .progress {
  display: none !important; }

.no-transforms .reveal .slides section {
  display: block !important;
  opacity: 1 !important;
  position: relative !important;
  height: auto;
  min-height: 0;
  top: 0;
  left: -50%;
  margin: 70px 0;
  -webkit-transform: none;
          transform: none; }

.no-transforms .reveal .slides section section {
  left: 0; }

.reveal .no-transition,
.reveal .no-transition * {
  -webkit-transition: none !important;
          transition: none !important; }

/*********************************************
 * PER-SLIDE BACKGROUNDS
 *********************************************/
.reveal .backgrounds {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  -webkit-perspective: 600px;
          perspective: 600px; }

.reveal .slide-background {
  display: none;
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  visibility: hidden;
  background-color: transparent;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  -webkit-transition: all 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985);
          transition: all 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985); }

.reveal .slide-background.stack {
  display: block; }

.reveal .slide-background.present {
  opacity: 1;
  visibility: visible; }

.print-pdf .reveal .slide-background {
  opacity: 1 !important;
  visibility: visible !important; }

/* Video backgrounds */
.reveal .slide-background video {
  position: absolute;
  width: 100%;
  height: 100%;
  max-width: none;
  max-height: none;
  top: 0;
  left: 0; }

/* Immediate transition style */
.reveal[data-background-transition=none] > .backgrounds .slide-background,
.reveal > .backgrounds .slide-background[data-background-transition=none] {
  -webkit-transition: none;
          transition: none; }

/* Slide */
.reveal[data-background-transition=slide] > .backgrounds .slide-background,
.reveal > .backgrounds .slide-background[data-background-transition=slide] {
  opacity: 1;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden; }

.reveal[data-background-transition=slide] > .backgrounds .slide-background.past,
.reveal > .backgrounds .slide-background.past[data-background-transition=slide] {
  -webkit-transform: translate(-100%, 0);
          transform: translate(-100%, 0); }

.reveal[data-background-transition=slide] > .backgrounds .slide-background.future,
.reveal > .backgrounds .slide-background.future[data-background-transition=slide] {
  -webkit-transform: translate(100%, 0);
          transform: translate(100%, 0); }

.reveal[data-background-transition=slide] > .backgrounds .slide-background > .slide-background.past,
.reveal > .backgrounds .slide-background > .slide-background.past[data-background-transition=slide] {
  -webkit-transform: translate(0, -100%);
          transform: translate(0, -100%); }

.reveal[data-background-transition=slide] > .backgrounds .slide-background > .slide-background.future,
.reveal > .backgrounds .slide-background > .slide-background.future[data-background-transition=slide] {
  -webkit-transform: translate(0, 100%);
          transform: translate(0, 100%); }

/* Convex */
.reveal[data-background-transition=convex] > .backgrounds .slide-background.past,
.reveal > .backgrounds .slide-background.past[data-background-transition=convex] {
  opacity: 0;
  -webkit-transform: translate3d(-100%, 0, 0) rotateY(-90deg) translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0) rotateY(-90deg) translate3d(-100%, 0, 0); }

.reveal[data-background-transition=convex] > .backgrounds .slide-background.future,
.reveal > .backgrounds .slide-background.future[data-background-transition=convex] {
  opacity: 0;
  -webkit-transform: translate3d(100%, 0, 0) rotateY(90deg) translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0) rotateY(90deg) translate3d(100%, 0, 0); }

.reveal[data-background-transition=convex] > .backgrounds .slide-background > .slide-background.past,
.reveal > .backgrounds .slide-background > .slide-background.past[data-background-transition=convex] {
  opacity: 0;
  -webkit-transform: translate3d(0, -100%, 0) rotateX(90deg) translate3d(0, -100%, 0);
          transform: translate3d(0, -100%, 0) rotateX(90deg) translate3d(0, -100%, 0); }

.reveal[data-background-transition=convex] > .backgrounds .slide-background > .slide-background.future,
.reveal > .backgrounds .slide-background > .slide-background.future[data-background-transition=convex] {
  opacity: 0;
  -webkit-transform: translate3d(0, 100%, 0) rotateX(-90deg) translate3d(0, 100%, 0);
          transform: translate3d(0, 100%, 0) rotateX(-90deg) translate3d(0, 100%, 0); }

/* Concave */
.reveal[data-background-transition=concave] > .backgrounds .slide-background.past,
.reveal > .backgrounds .slide-background.past[data-background-transition=concave] {
  opacity: 0;
  -webkit-transform: translate3d(-100%, 0, 0) rotateY(90deg) translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0) rotateY(90deg) translate3d(-100%, 0, 0); }

.reveal[data-background-transition=concave] > .backgrounds .slide-background.future,
.reveal > .backgrounds .slide-background.future[data-background-transition=concave] {
  opacity: 0;
  -webkit-transform: translate3d(100%, 0, 0) rotateY(-90deg) translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0) rotateY(-90deg) translate3d(100%, 0, 0); }

.reveal[data-background-transition=concave] > .backgrounds .slide-background > .slide-background.past,
.reveal > .backgrounds .slide-background > .slide-background.past[data-background-transition=concave] {
  opacity: 0;
  -webkit-transform: translate3d(0, -100%, 0) rotateX(-90deg) translate3d(0, -100%, 0);
          transform: translate3d(0, -100%, 0) rotateX(-90deg) translate3d(0, -100%, 0); }

.reveal[data-background-transition=concave] > .backgrounds .slide-background > .slide-background.future,
.reveal > .backgrounds .slide-background > .slide-background.future[data-background-transition=concave] {
  opacity: 0;
  -webkit-transform: translate3d(0, 100%, 0) rotateX(90deg) translate3d(0, 100%, 0);
          transform: translate3d(0, 100%, 0) rotateX(90deg) translate3d(0, 100%, 0); }

/* Zoom */
.reveal[data-background-transition=zoom] > .backgrounds .slide-background,
.reveal > .backgrounds .slide-background[data-background-transition=zoom] {
  -webkit-transition-timing-function: ease;
          transition-timing-function: ease; }

.reveal[data-background-transition=zoom] > .backgrounds .slide-background.past,
.reveal > .backgrounds .slide-background.past[data-background-transition=zoom] {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: scale(16);
          transform: scale(16); }

.reveal[data-background-transition=zoom] > .backgrounds .slide-background.future,
.reveal > .backgrounds .slide-background.future[data-background-transition=zoom] {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: scale(0.2);
          transform: scale(0.2); }

.reveal[data-background-transition=zoom] > .backgrounds .slide-background > .slide-background.past,
.reveal > .backgrounds .slide-background > .slide-background.past[data-background-transition=zoom] {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: scale(16);
          transform: scale(16); }

.reveal[data-background-transition=zoom] > .backgrounds .slide-background > .slide-background.future,
.reveal > .backgrounds .slide-background > .slide-background.future[data-background-transition=zoom] {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: scale(0.2);
          transform: scale(0.2); }

/* Global transition speed settings */
.reveal[data-transition-speed="fast"] > .backgrounds .slide-background {
  -webkit-transition-duration: 400ms;
          transition-duration: 400ms; }

.reveal[data-transition-speed="slow"] > .backgrounds .slide-background {
  -webkit-transition-duration: 1200ms;
          transition-duration: 1200ms; }

/*********************************************
 * OVERVIEW
 *********************************************/
.reveal.overview {
  -webkit-perspective-origin: 50% 50%;
          perspective-origin: 50% 50%;
  -webkit-perspective: 700px;
          perspective: 700px; }
  .reveal.overview .slides {
    -moz-transform-style: preserve-3d; }
  .reveal.overview .slides section {
    height: 100%;
    top: 0 !important;
    opacity: 1 !important;
    overflow: hidden;
    visibility: visible !important;
    cursor: pointer;
    box-sizing: border-box; }
  .reveal.overview .slides section:hover,
  .reveal.overview .slides section.present {
    outline: 10px solid rgba(150, 150, 150, 0.4);
    outline-offset: 10px; }
  .reveal.overview .slides section .fragment {
    opacity: 1;
    -webkit-transition: none;
            transition: none; }
  .reveal.overview .slides section:after,
  .reveal.overview .slides section:before {
    display: none !important; }
  .reveal.overview .slides > section.stack {
    padding: 0;
    top: 0 !important;
    background: none;
    outline: none;
    overflow: visible; }
  .reveal.overview .backgrounds {
    -webkit-perspective: inherit;
            perspective: inherit;
    -moz-transform-style: preserve-3d; }
  .reveal.overview .backgrounds .slide-background {
    opacity: 1;
    visibility: visible;
    outline: 10px solid rgba(150, 150, 150, 0.1);
    outline-offset: 10px; }

.reveal.overview .slides section,
.reveal.overview-deactivating .slides section {
  -webkit-transition: none;
          transition: none; }

.reveal.overview .backgrounds .slide-background,
.reveal.overview-deactivating .backgrounds .slide-background {
  -webkit-transition: none;
          transition: none; }

.reveal.overview-animated .slides {
  -webkit-transition: -webkit-transform 0.4s ease;
          transition: transform 0.4s ease; }

/*********************************************
 * RTL SUPPORT
 *********************************************/
.reveal.rtl .slides,
.reveal.rtl .slides h1,
.reveal.rtl .slides h2,
.reveal.rtl .slides h3,
.reveal.rtl .slides h4,
.reveal.rtl .slides h5,
.reveal.rtl .slides h6 {
  direction: rtl;
  font-family: sans-serif; }

.reveal.rtl pre,
.reveal.rtl code {
  direction: ltr; }

.reveal.rtl ol,
.reveal.rtl ul {
  text-align: right; }

.reveal.rtl .progress span {
  float: right; }

/*********************************************
 * PARALLAX BACKGROUND
 *********************************************/
.reveal.has-parallax-background .backgrounds {
  -webkit-transition: all 0.8s ease;
          transition: all 0.8s ease; }

/* Global transition speed settings */
.reveal.has-parallax-background[data-transition-speed="fast"] .backgrounds {
  -webkit-transition-duration: 400ms;
          transition-duration: 400ms; }

.reveal.has-parallax-background[data-transition-speed="slow"] .backgrounds {
  -webkit-transition-duration: 1200ms;
          transition-duration: 1200ms; }

/*********************************************
 * LINK PREVIEW OVERLAY
 *********************************************/
.reveal .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1000;
  background: rgba(0, 0, 0, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease; }

.reveal .overlay.visible {
  opacity: 1;
  visibility: visible; }

.reveal .overlay .spinner {
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  width: 32px;
  height: 32px;
  margin: -16px 0 0 -16px;
  z-index: 10;
  background-image: url(data:image/gif;base64,R0lGODlhIAAgAPMAAJmZmf%2F%2F%2F6%2Bvr8nJybW1tcDAwOjo6Nvb26ioqKOjo7Ozs%2FLy8vz8%2FAAAAAAAAAAAACH%2FC05FVFNDQVBFMi4wAwEAAAAh%2FhpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh%2BQQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ%2FV%2FnmOM82XiHRLYKhKP1oZmADdEAAAh%2BQQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY%2FCZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB%2BA4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6%2BHo7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq%2BB6QDtuetcaBPnW6%2BO7wDHpIiK9SaVK5GgV543tzjgGcghAgAh%2BQQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK%2B%2BG%2Bw48edZPK%2BM6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE%2BG%2BcD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm%2BFNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk%2BaV%2BoJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0%2FVNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc%2BXiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq%2BE71SRQeyqUToLA7VxF0JDyIQh%2FMVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30%2FiI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE%2FjiuL04RGEBgwWhShRgQExHBAAh%2BQQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR%2BipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq%2BE71SRQeyqUToLA7VxF0JDyIQh%2FMVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq%2BE71SRQeyqUToLA7VxF0JDyIQh%2FMVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY%2BYip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd%2BMFCN6HAAIKgNggY0KtEBAAh%2BQQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1%2BvsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d%2BjYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg%2BygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0%2Bbm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h%2BKr0SJ8MFihpNbx%2B4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX%2BBP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA%3D%3D);
  visibility: visible;
  opacity: 0.6;
  -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease; }

.reveal .overlay header {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 40px;
  z-index: 2;
  border-bottom: 1px solid #222; }

.reveal .overlay header a {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 36px;
  padding: 0 10px;
  float: right;
  opacity: 0.6;
  box-sizing: border-box; }

.reveal .overlay header a:hover {
  opacity: 1; }

.reveal .overlay header a .icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background-position: 50% 50%;
  background-size: 100%;
  background-repeat: no-repeat; }

.reveal .overlay header a.close .icon {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABkklEQVRYR8WX4VHDMAxG6wnoJrABZQPYBCaBTWAD2g1gE5gg6OOsXuxIlr40d81dfrSJ9V4c2VLK7spHuTJ/5wpM07QXuXc5X0opX2tEJcadjHuV80li/FgxTIEK/5QBCICBD6xEhSMGHgQPgBgLiYVAB1dpSqKDawxTohFw4JSEA3clzgIBPCURwE2JucBR7rhPJJv5OpJwDX+SfDjgx1wACQeJG1aChP9K/IMmdZ8DtESV1WyP3Bt4MwM6sj4NMxMYiqUWHQu4KYA/SYkIjOsm3BXYWMKFDwU2khjCQ4ELJUJ4SmClRArOCmSXGuKma0fYD5CbzHxFpCSGAhfAVSSUGDUk2BWZaff2g6GE15BsBQ9nwmpIGDiyHQddwNTMKkbZaf9fajXQca1EX44puJZUsnY0ObGmITE3GVLCbEhQUjGVt146j6oasWN+49Vph2w1pZ5EansNZqKBm1txbU57iRRcZ86RWMDdWtBJUHBHwoQPi1GV+JCbntmvok7iTX4/Up9mgyTc/FJYDTcndgH/AA5A/CHsyEkVAAAAAElFTkSuQmCC); }

.reveal .overlay header a.external .icon {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAcElEQVRYR+2WSQoAIQwEzf8f7XiOMkUQxUPlGkM3hVmiQfQR9GYnH1SsAQlI4DiBqkCMoNb9y2e90IAEJPAcgdznU9+engMaeJ7Azh5Y1U67gAho4DqBqmB1buAf0MB1AlVBek83ZPkmJMGc1wAR+AAqod/B97TRpQAAAABJRU5ErkJggg==); }

.reveal .overlay .viewport {
  position: absolute;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  top: 40px;
  right: 0;
  bottom: 0;
  left: 0; }

.reveal .overlay.overlay-preview .viewport iframe {
  width: 100%;
  height: 100%;
  max-width: 100%;
  max-height: 100%;
  border: 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease; }

.reveal .overlay.overlay-preview.loaded .viewport iframe {
  opacity: 1;
  visibility: visible; }

.reveal .overlay.overlay-preview.loaded .viewport-inner {
  position: absolute;
  z-index: -1;
  left: 0;
  top: 45%;
  width: 100%;
  text-align: center;
  letter-spacing: normal; }

.reveal .overlay.overlay-preview .x-frame-error {
  opacity: 0;
  -webkit-transition: opacity 0.3s ease 0.3s;
          transition: opacity 0.3s ease 0.3s; }

.reveal .overlay.overlay-preview.loaded .x-frame-error {
  opacity: 1; }

.reveal .overlay.overlay-preview.loaded .spinner {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: scale(0.2);
          transform: scale(0.2); }

.reveal .overlay.overlay-help .viewport {
  overflow: auto;
  color: #fff; }

.reveal .overlay.overlay-help .viewport .viewport-inner {
  width: 600px;
  margin: auto;
  padding: 20px 20px 80px 20px;
  text-align: center;
  letter-spacing: normal; }

.reveal .overlay.overlay-help .viewport .viewport-inner .title {
  font-size: 20px; }

.reveal .overlay.overlay-help .viewport .viewport-inner table {
  border: 1px solid #fff;
  border-collapse: collapse;
  font-size: 16px; }

.reveal .overlay.overlay-help .viewport .viewport-inner table th,
.reveal .overlay.overlay-help .viewport .viewport-inner table td {
  width: 200px;
  padding: 14px;
  border: 1px solid #fff;
  vertical-align: middle; }

.reveal .overlay.overlay-help .viewport .viewport-inner table th {
  padding-top: 20px;
  padding-bottom: 20px; }

/*********************************************
 * PLAYBACK COMPONENT
 *********************************************/
.reveal .playback {
  position: fixed;
  left: 15px;
  bottom: 20px;
  z-index: 30;
  cursor: pointer;
  -webkit-transition: all 400ms ease;
          transition: all 400ms ease; }

.reveal.overview .playback {
  opacity: 0;
  visibility: hidden; }

/*********************************************
 * ROLLING LINKS
 *********************************************/
.reveal .roll {
  display: inline-block;
  line-height: 1.2;
  overflow: hidden;
  vertical-align: top;
  -webkit-perspective: 400px;
          perspective: 400px;
  -webkit-perspective-origin: 50% 50%;
          perspective-origin: 50% 50%; }

.reveal .roll:hover {
  background: none;
  text-shadow: none; }

.reveal .roll span {
  display: block;
  position: relative;
  padding: 0 2px;
  pointer-events: none;
  -webkit-transition: all 400ms ease;
          transition: all 400ms ease;
  -webkit-transform-origin: 50% 0%;
          transform-origin: 50% 0%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden; }

.reveal .roll:hover span {
  background: rgba(0, 0, 0, 0.5);
  -webkit-transform: translate3d(0px, 0px, -45px) rotateX(90deg);
          transform: translate3d(0px, 0px, -45px) rotateX(90deg); }

.reveal .roll span:after {
  content: attr(data-title);
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  padding: 0 2px;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform-origin: 50% 0%;
          transform-origin: 50% 0%;
  -webkit-transform: translate3d(0px, 110%, 0px) rotateX(-90deg);
          transform: translate3d(0px, 110%, 0px) rotateX(-90deg); }

/*********************************************
 * SPEAKER NOTES
 *********************************************/
.reveal aside.notes {
  display: none; }

.reveal .speaker-notes {
  display: none;
  position: absolute;
  width: 70%;
  max-height: 15%;
  left: 15%;
  bottom: 26px;
  padding: 10px;
  z-index: 1;
  font-size: 18px;
  line-height: 1.4;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.5);
  overflow: auto;
  box-sizing: border-box;
  text-align: left;
  font-family: Helvetica, sans-serif;
  -webkit-overflow-scrolling: touch; }

.reveal .speaker-notes.visible:not(:empty) {
  display: block; }

@media screen and (max-width: 1024px) {
  .reveal .speaker-notes {
    font-size: 14px; } }

@media screen and (max-width: 600px) {
  .reveal .speaker-notes {
    width: 90%;
    left: 5%; } }

/*********************************************
 * ZOOM PLUGIN
 *********************************************/
.zoomed .reveal *,
.zoomed .reveal *:before,
.zoomed .reveal *:after {
  -webkit-backface-visibility: visible !important;
          backface-visibility: visible !important; }

.zoomed .reveal .progress,
.zoomed .reveal .controls {
  opacity: 0; }

.zoomed .reveal .roll span {
  background: none; }

.zoomed .reveal .roll span:after {
  visibility: hidden; }

      
      </style>
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.8.3/katex.min.css">
      
      
      
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/3.4.1/lib/js/head.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/3.4.1/js/reveal.min.js"></script>
      
      

      <style> 
      @import url(../../lib/font/source-sans-pro/source-sans-pro.css);
/* http://prismjs.com/download.html?themes=prism&languages=markup+css+clike+javascript+abap+actionscript+ada+apacheconf+apl+applescript+asciidoc+aspnet+autoit+autohotkey+bash+basic+batch+c+brainfuck+bro+bison+csharp+cpp+coffeescript+ruby+css-extras+d+dart+django+diff+docker+eiffel+elixir+erlang+fsharp+fortran+gherkin+git+glsl+go+graphql+groovy+haml+handlebars+haskell+haxe+http+icon+inform7+ini+j+jade+java+jolie+json+julia+keyman+kotlin+latex+less+livescript+lolcode+lua+makefile+markdown+matlab+mel+mizar+monkey+nasm+nginx+nim+nix+nsis+objectivec+ocaml+oz+parigp+parser+pascal+perl+php+php-extras+powershell+processing+prolog+properties+protobuf+puppet+pure+python+q+qore+r+jsx+reason+rest+rip+roboconf+crystal+rust+sas+sass+scss+scala+scheme+smalltalk+smarty+sql+stylus+swift+tcl+textile+twig+typescript+vbnet+verilog+vhdl+vim+wiki+xojo+yaml */
/**
 * prism.js default theme for JavaScript, CSS and HTML
 * Based on dabblet (http://dabblet.com)
 * @author Lea Verou
 */

code[class*="language-"],
pre[class*="language-"] {
	color: black;
	background: none;
	text-shadow: 0 1px white;
	font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
	text-align: left;
	white-space: pre;
	word-spacing: normal;
	word-break: normal;
	word-wrap: normal;
	line-height: 1.5;

	-moz-tab-size: 4;
	-o-tab-size: 4;
	tab-size: 4;

	-webkit-hyphens: none;
	-moz-hyphens: none;
	-ms-hyphens: none;
	hyphens: none;
}

pre[class*="language-"]::-moz-selection, pre[class*="language-"] ::-moz-selection,
code[class*="language-"]::-moz-selection, code[class*="language-"] ::-moz-selection {
	text-shadow: none;
	background: #b3d4fc;
}

pre[class*="language-"]::selection, pre[class*="language-"] ::selection,
code[class*="language-"]::selection, code[class*="language-"] ::selection {
	text-shadow: none;
	background: #b3d4fc;
}

@media print {
	code[class*="language-"],
	pre[class*="language-"] {
		text-shadow: none;
	}
}

/* Code blocks */
pre[class*="language-"] {
	padding: 1em;
	margin: .5em 0;
	overflow: auto;
}

:not(pre) > code[class*="language-"],
pre[class*="language-"] {
	background: #f5f2f0;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
	padding: .1em;
	border-radius: .3em;
	white-space: normal;
}

.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
	color: slategray;
}

.token.punctuation {
	color: #999;
}

.namespace {
	opacity: .7;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.deleted {
	color: #905;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
	color: #690;
}

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string {
	color: #a67f59;
	background: hsla(0, 0%, 100%, .5);
}

.token.atrule,
.token.attr-value,
.token.keyword {
	color: #07a;
}

.token.function {
	color: #DD4A68;
}

.token.regex,
.token.important,
.token.variable {
	color: #e90;
}

.token.important,
.token.bold {
	font-weight: bold;
}
.token.italic {
	font-style: italic;
}

.token.entity {
	cursor: help;
}/**
 * White theme for reveal.js. This is the opposite of the 'black' theme.
 *
 * By Hakim El Hattab, http://hakim.se
 */

section.has-dark-background, section.has-dark-background h1, section.has-dark-background h2, section.has-dark-background h3, section.has-dark-background h4, section.has-dark-background h5, section.has-dark-background h6 {
  color: #fff; }

/*********************************************
 * GLOBAL STYLES
 *********************************************/
body {
  background: #fff;
  background-color: #fff; }

.reveal {
  font-family: "Source Sans Pro", Helvetica, sans-serif;
  font-size: 42px;
  font-weight: normal;
  color: #222; }

::selection {
  color: #fff;
  background: #98bdef;
  text-shadow: none; }

::-moz-selection {
  color: #fff;
  background: #98bdef;
  text-shadow: none; }

.reveal .slides > section,
.reveal .slides > section > section {
  line-height: 1.3;
  font-weight: inherit; }

/*********************************************
 * HEADERS
 *********************************************/
.reveal h1,
.reveal h2,
.reveal h3,
.reveal h4,
.reveal h5,
.reveal h6 {
  margin: 0 0 20px 0;
  color: #222;
  font-family: "Source Sans Pro", Helvetica, sans-serif;
  font-weight: 600;
  line-height: 1.2;
  letter-spacing: normal;
  text-transform: uppercase;
  text-shadow: none;
  word-wrap: break-word; }

.reveal h1 {
  font-size: 2.5em; }

.reveal h2 {
  font-size: 1.6em; }

.reveal h3 {
  font-size: 1.3em; }

.reveal h4 {
  font-size: 1em; }

.reveal h1 {
  text-shadow: none; }

/*********************************************
 * OTHER
 *********************************************/
.reveal p {
  margin: 20px 0;
  line-height: 1.3; }

/* Ensure certain elements are never larger than the slide itself */
.reveal img,
.reveal video,
.reveal iframe {
  max-width: 95%;
  max-height: 95%; }

.reveal strong,
.reveal b {
  font-weight: bold; }

.reveal em {
  font-style: italic; }

.reveal ol,
.reveal dl,
.reveal ul {
  display: inline-block;
  text-align: left;
  margin: 0 0 0 1em; }

.reveal ol {
  list-style-type: decimal; }

.reveal ul {
  list-style-type: disc; }

.reveal ul ul {
  list-style-type: square; }

.reveal ul ul ul {
  list-style-type: circle; }

.reveal ul ul,
.reveal ul ol,
.reveal ol ol,
.reveal ol ul {
  display: block;
  margin-left: 40px; }

.reveal dt {
  font-weight: bold; }

.reveal dd {
  margin-left: 40px; }

.reveal q,
.reveal blockquote {
  quotes: none; }

.reveal blockquote {
  display: block;
  position: relative;
  width: 70%;
  margin: 20px auto;
  padding: 5px;
  font-style: italic;
  background: rgba(255, 255, 255, 0.05);
  box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2); }

.reveal blockquote p:first-child,
.reveal blockquote p:last-child {
  display: inline-block; }

.reveal q {
  font-style: italic; }

.reveal pre {
  display: block;
  position: relative;
  width: 90%;
  margin: 20px auto;
  text-align: left;
  font-size: 0.55em;
  font-family: monospace;
  line-height: 1.2em;
  word-wrap: break-word;
  box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.3); }

.reveal code {
  font-family: monospace; }

.reveal pre code {
  display: block;
  padding: 5px;
  overflow: auto;
  max-height: 400px;
  word-wrap: normal; }

.reveal table {
  margin: auto;
  border-collapse: collapse;
  border-spacing: 0; }

.reveal table th {
  font-weight: bold; }

.reveal table th,
.reveal table td {
  text-align: left;
  padding: 0.2em 0.5em 0.2em 0.5em;
  border-bottom: 1px solid; }

.reveal table th[align="center"],
.reveal table td[align="center"] {
  text-align: center; }

.reveal table th[align="right"],
.reveal table td[align="right"] {
  text-align: right; }

.reveal table tbody tr:last-child th,
.reveal table tbody tr:last-child td {
  border-bottom: none; }

.reveal sup {
  vertical-align: super; }

.reveal sub {
  vertical-align: sub; }

.reveal small {
  display: inline-block;
  font-size: 0.6em;
  line-height: 1.2em;
  vertical-align: top; }

.reveal small * {
  vertical-align: top; }

/*********************************************
 * LINKS
 *********************************************/
.reveal a {
  color: #2a76dd;
  text-decoration: none;
  -webkit-transition: color .15s ease;
  -moz-transition: color .15s ease;
  transition: color .15s ease; }

.reveal a:hover {
  color: #6ca0e8;
  text-shadow: none;
  border: none; }

.reveal .roll span:after {
  color: #fff;
  background: #1a53a1; }

/*********************************************
 * IMAGES
 *********************************************/
.reveal section img {
  margin: 15px 0px;
  background: rgba(255, 255, 255, 0.12);
  border: 4px solid #222;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); }

.reveal section img.plain {
  border: 0;
  box-shadow: none; }

.reveal a img {
  -webkit-transition: all .15s linear;
  -moz-transition: all .15s linear;
  transition: all .15s linear; }

.reveal a:hover img {
  background: rgba(255, 255, 255, 0.2);
  border-color: #2a76dd;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.55); }

/*********************************************
 * NAVIGATION CONTROLS
 *********************************************/
.reveal .controls .navigate-left,
.reveal .controls .navigate-left.enabled {
  border-right-color: #2a76dd; }

.reveal .controls .navigate-right,
.reveal .controls .navigate-right.enabled {
  border-left-color: #2a76dd; }

.reveal .controls .navigate-up,
.reveal .controls .navigate-up.enabled {
  border-bottom-color: #2a76dd; }

.reveal .controls .navigate-down,
.reveal .controls .navigate-down.enabled {
  border-top-color: #2a76dd; }

.reveal .controls .navigate-left.enabled:hover {
  border-right-color: #6ca0e8; }

.reveal .controls .navigate-right.enabled:hover {
  border-left-color: #6ca0e8; }

.reveal .controls .navigate-up.enabled:hover {
  border-bottom-color: #6ca0e8; }

.reveal .controls .navigate-down.enabled:hover {
  border-top-color: #6ca0e8; }

/*********************************************
 * PROGRESS BAR
 *********************************************/
.reveal .progress {
  background: rgba(0, 0, 0, 0.2); }

.reveal .progress span {
  background: #2a76dd;
  -webkit-transition: width 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985);
  -moz-transition: width 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985);
  transition: width 800ms cubic-bezier(0.26, 0.86, 0.44, 0.985); }
.markdown-preview{width:100%;height:100%;box-sizing:border-box}.markdown-preview .pagebreak,.markdown-preview .newpage{page-break-before:always}.markdown-preview pre.line-numbers{position:relative;padding-left:3.8em;counter-reset:linenumber}.markdown-preview pre.line-numbers>code{position:relative}.markdown-preview pre.line-numbers .line-numbers-rows{position:absolute;pointer-events:none;top:1em;font-size:100%;left:0;width:3em;letter-spacing:-1px;border-right:1px solid #999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.markdown-preview pre.line-numbers .line-numbers-rows>span{pointer-events:none;display:block;counter-increment:linenumber}.markdown-preview pre.line-numbers .line-numbers-rows>span:before{content:counter(linenumber);color:#999;display:block;padding-right:.8em;text-align:right}.markdown-preview .mathjax-exps .MathJax_Display{text-align:center !important}.markdown-preview:not([for="preview"]) .code-chunk .btn-group{display:none}.markdown-preview:not([for="preview"]) .code-chunk .status{display:none}.markdown-preview:not([for="preview"]) .code-chunk .output-div{margin-bottom:16px}.scrollbar-style::-webkit-scrollbar{width:8px}.scrollbar-style::-webkit-scrollbar-track{border-radius:10px;background-color:transparent}.scrollbar-style::-webkit-scrollbar-thumb{border-radius:5px;background-color:rgba(150,150,150,0.66);border:4px solid rgba(150,150,150,0.66);background-clip:content-box}html body[for="html-export"]:not([data-presentation-mode]){position:relative;width:100%;height:100%;top:0;left:0;margin:0;padding:0;overflow:auto}html body[for="html-export"]:not([data-presentation-mode]) .markdown-preview{position:relative;top:0}@media screen and (min-width:914px){html body[for="html-export"]:not([data-presentation-mode]) .markdown-preview{padding:2em calc(50% - 457px)}}@media screen and (max-width:914px){html body[for="html-export"]:not([data-presentation-mode]) .markdown-preview{padding:2em}}@media screen and (max-width:450px){html body[for="html-export"]:not([data-presentation-mode]) .markdown-preview{font-size:14px !important;padding:1em}}@media print{html body[for="html-export"]:not([data-presentation-mode]) #sidebar-toc-btn{display:none}}html body[for="html-export"]:not([data-presentation-mode]) #sidebar-toc-btn{position:fixed;bottom:8px;left:8px;font-size:28px;cursor:pointer;color:inherit;z-index:99;width:32px;text-align:center;opacity:.4}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] #sidebar-toc-btn{opacity:1}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc{position:fixed;top:0;left:0;width:300px;height:100%;padding:32px 0 48px 0;font-size:14px;box-shadow:0 0 4px rgba(150,150,150,0.33);box-sizing:border-box;overflow:auto;background-color:inherit}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc::-webkit-scrollbar{width:8px}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc::-webkit-scrollbar-track{border-radius:10px;background-color:transparent}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc::-webkit-scrollbar-thumb{border-radius:5px;background-color:rgba(150,150,150,0.66);border:4px solid rgba(150,150,150,0.66);background-clip:content-box}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc a{text-decoration:none}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc ul{padding:0 1.6em;margin-top:.8em}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc li{margin-bottom:.8em}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc ul{list-style-type:none}html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .markdown-preview{left:300px;width:calc(100% -  300px);padding:2em calc(50% - 457px -  150px);margin:0;box-sizing:border-box}@media screen and (max-width:1274px){html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .markdown-preview{padding:2em}}@media screen and (max-width:450px){html body[for="html-export"]:not([data-presentation-mode])[html-show-sidebar-toc] .markdown-preview{width:100%}}html body[for="html-export"]:not([data-presentation-mode]):not([html-show-sidebar-toc]) .markdown-preview{left:50%;transform:translateX(-50%)}html body[for="html-export"]:not([data-presentation-mode]):not([html-show-sidebar-toc]) .md-sidebar-toc{display:none}
 
      </style>
    </head>
    <body for="html-export" data-presentation-mode="">
      <div class="mume markdown-preview   " data-presentation-mode="">
      
    <div style="display:none;"></div>
    <div class="reveal">
      <div class="slides">
        <section data-background="-webkit-radial-gradient(center, circle cover, white 0%, #f7f2d3 100%)" lineNo="119" class="slide " data-line="119" data-h="0" data-v="0">
<h1 class="mume-header" id="eling-web">Eling-WEB</h1>

</section><section data-background="-webkit-radial-gradient(center, circle cover, white 0%, #f7f2d3 100%)" lineNo="123" class="slide " data-line="123" data-h="1" data-v="0">
<h2 class="mume-header" id="&#x53EF;&#x4EE5;&#x7528;web&#x505A;&#x4EC0;&#x4E48;&#x4E8B;&#x60C5;">可以用web做什么事情？</h2>

<ul>
<li class="fragment" data-fragment-index="1">展示你的工作成果 <!-- .element: class="fragment" data-fragment-index="1" -->
<ul>
<li class="fragment" data-fragment-index="2">你的C++/数据结构作业<!-- .element: class="fragment" data-fragment-index="2" --></li>
<li class="fragment" data-fragment-index="3">用blog记录你的一些想让其他人看到的内容或想法<!-- .element: class="fragment" data-fragment-index="3" --></li>
<li class="fragment" data-fragment-index="4">社群资源 (B/S,P2P,etc.)<!-- .element: class="fragment" data-fragment-index="4" --></li>
</ul>
</li>
<li class="fragment" data-fragment-index="5">利用爬虫获取一些资源<!-- .element: class="fragment" data-fragment-index="5" -->
<ul>
<li class="fragment" data-fragment-index="6">比如：PhantomJS<!-- .element: class="fragment" data-fragment-index="6" --></li>
</ul>
</li>
</ul>
</section><section data-background="-webkit-radial-gradient(center, circle cover, white 0%, #f7f2d3 100%)" lineNo="134" class="slide " data-line="134" data-h="2" data-v="0">
<h2 class="mume-header" id="&#x90A3;&#x4E48;&#x5F00;&#x53D1;web&#x9700;&#x8981;&#x54EA;&#x4E9B;&#x4E1C;&#x897F;">那么开发web需要哪些东西？</h2>

<ul>
<li class="fragment" data-fragment-index="1">前端<!-- .element: class="fragment" data-fragment-index="1" --></li>
<li class="fragment" data-fragment-index="2">后端<!-- .element: class="fragment" data-fragment-index="2" --></li>
<li class="fragment" data-fragment-index="3">一些前后端以外的东西<!-- .element: class="fragment" data-fragment-index="3" --></li>
</ul>
</section><section data-background="-webkit-radial-gradient(center, circle cover, white 0%, #f7f2d3 100%)" lineNo="142" class="slide " data-line="142" data-h="3" data-v="0">
<h3 class="mume-header" id="&#x524D;&#x7AEF;">前端</h3>

<ul>
<li class="fragment" data-fragment-index="1">了解 HTML,CSS/JavaScript 的语法<!-- .element: class="fragment" data-fragment-index="1" --></li>
<li class="fragment" data-fragment-index="2">追求<!-- .element: class="fragment" data-fragment-index="2" -->
<ul>
<li class="fragment" data-fragment-index="3">页面友好<!-- .element: class="fragment" data-fragment-index="3" --></li>
<li class="fragment" data-fragment-index="4">风格统一<!-- .element: class="fragment" data-fragment-index="4" --></li>
</ul>
</li>
<li class="fragment" data-fragment-index="5"><a href="./ppt/but1">之前的Button练习</a><!-- .element: class="fragment" data-fragment-index="5" --></li>
</ul>
</section><section data-background="-webkit-radial-gradient(center, circle cover, white 0%, #f7f2d3 100%)" lineNo="152" class="slide " data-line="152" data-h="4" data-v="0">
<h3 class="mume-header" id="&#x540E;&#x7AEF;">后端</h3>

<ul>
<li class="fragment" data-fragment-index="1">整体的框架语言<!-- .element: class="fragment" data-fragment-index="1" -->
<ul>
<li class="fragment" data-fragment-index="2">Java Server Pages (JSP)<!-- .element: class="fragment" data-fragment-index="2" --></li>
<li class="fragment" data-fragment-index="3">PHP<!-- .element: class="fragment" data-fragment-index="3" --></li>
<li class="fragment" data-fragment-index="4">Python<!-- .element: class="fragment" data-fragment-index="4" --></li>
</ul>
</li>
<li class="fragment" data-fragment-index="5">那么后端一般需要哪些东西？<!-- .element: class="fragment" data-fragment-index="5" -->
<ul>
<li class="fragment" data-fragment-index="6">一台真实的服务器(Your PC/Aliyun/Azure/AWS)<!-- .element: class="fragment" data-fragment-index="6" --></li>
<li class="fragment" data-fragment-index="7">HTTP服务器(Apache/Nginx)<!-- .element: class="fragment" data-fragment-index="7" --></li>
<li class="fragment" data-fragment-index="8">数据库(Mysql/SQL Server/Oracle)<!-- .element: class="fragment" data-fragment-index="8" --></li>
<li class="fragment" data-fragment-index="9">语言的解释器/编译器<!-- .element: class="fragment" data-fragment-index="9" --></li>
</ul>
</li>
<li class="fragment" data-fragment-index="10">框架做了什么<!-- .element: class="fragment" data-fragment-index="10" -->
<ul>
<li class="fragment" data-fragment-index="11">MVC模型的构建(Model-View-Controller)<!-- .element: class="fragment" data-fragment-index="11" --></li>
<li class="fragment" data-fragment-index="12">与数据库的连接<!-- .element: class="fragment" data-fragment-index="12" --></li>
<li class="fragment" data-fragment-index="13">...<!-- .element: class="fragment" data-fragment-index="13" --></li>
</ul>
</li>
</ul>
</section><section data-background="-webkit-radial-gradient(center, circle cover, white 0%, #f7f2d3 100%)" lineNo="170" class="slide " data-line="170" data-h="5" data-v="0">
<h3 class="mume-header" id="&#x524D;&#x540E;&#x7AEF;&#x4EE5;&#x5916;&#x7684;&#x5185;&#x5BB9;">前后端以外的内容</h3>

<ul>
<li class="fragment" data-fragment-index="1">与web相关<!-- .element: class="fragment" data-fragment-index="1" -->
<ul>
<li class="fragment" data-fragment-index="2">项目的流程(需求-&gt;图形化-&gt;用户故事-&gt;技术选型-&gt;开发-&gt;测试)<!-- .element: class="fragment" data-fragment-index="2" --></li>
<li class="fragment" data-fragment-index="3">了解一些网络协议 TCP/IP<!-- .element: class="fragment" data-fragment-index="3" --></li>
</ul>
</li>
<li class="fragment" data-fragment-index="4">Something else<!-- .element: class="fragment" data-fragment-index="4" -->
<ul>
<li class="fragment" data-fragment-index="5">版本管理工具 Git/SVN<!-- .element: class="fragment" data-fragment-index="5" --></li>
<li class="fragment" data-fragment-index="6"><a href="https://github.com/">GitHub</a><!-- .element: class="fragment" data-fragment-index="6" --></li>
<li class="fragment" data-fragment-index="7"><a href="https://www.docker.com/">Docker</a><!-- .element: class="fragment" data-fragment-index="7" --></li>
<li class="fragment" data-fragment-index="8">markdown &amp; Latex<!-- .element: class="fragment" data-fragment-index="8" --></li>
</ul>
</li>
</ul>
</section>
      </div>
    </div>
    
      </div>
      
      
    </body>
    
      <script>
        Reveal.initialize({"margin":0.1,"dependencies":[]})
      </script>
      
    
    
    <script>
(function bindTaskListEvent() {
  var taskListItemCheckboxes = document.body.getElementsByClassName('task-list-item-checkbox')
  for (var i = 0; i < taskListItemCheckboxes.length; i++) {
    var checkbox = taskListItemCheckboxes[i]
    var li = checkbox.parentElement
    if (li.tagName !== 'LI') li = li.parentElement
    if (li.tagName === 'LI') {
      li.classList.add('task-list-item')
    }
  }
}())    
</script>
    
  </html>