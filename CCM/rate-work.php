<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <title>Rate Our Operations CCM - MyDADJE</title>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">
.rating {
  --active: #FFED76;
  --active-pale: rgba(255, 237, 118, .36);
  --inactive: #121621;
  --face-active: #121621;
  --face-inactive: #1C212E;
  display: flex;
  position: relative;
}
@media (min-width: 100%) {
  .rating {
    zoom: 2;
  }
}
.rating ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  color: var(--inactive);
}
.rating ul li {
  --face: var(--face-inactive);
  cursor: pointer;
  position: relative;
}
.rating ul li:before, .rating ul li:after {
  content: '';
  position: absolute;
  z-index: 2;
  transition: all .2s ease;
}
.rating ul li:before {
  --r: 0deg;
  width: 2px;
  height: 2px;
  border-radius: 1px;
  top: 15px;
  left: 13px;
  -webkit-transform: rotate(var(--r));
          transform: rotate(var(--r));
  -webkit-filter: drop-shadow(8px 0 0 var(--face));
          filter: drop-shadow(8px 0 0 var(--face));
}
.rating ul li span {
  width: 2px;
  height: 2px;
  display: block;
  position: absolute;
  left: 50%;
  top: 50%;
  border-radius: 50%;
  margin: -1px 0 0 -1px;
  -webkit-transform: scale(0.6);
          transform: scale(0.6);
  opacity: 0;
  box-shadow: 16px -16px 0 var(--active-pale), -16px -16px 0 var(--active-pale), -21px 8px 0 var(--active-pale), 21px 8px 0 var(--active-pale), 0 22px 0 var(--active-pale);
}
.rating ul li:nth-child(1):after {
  width: 10px;
  height: 10px;
  top: 20px;
  left: 13px;
  border-radius: 50%;
  border: 1px solid transparent;
  border-top-color: var(--face);
}
.rating ul li:nth-child(3):after {
  width: 6px;
  left: 15px;
  top: 20px;
  height: 1px;
  background: var(--face);
}
.rating ul li:nth-child(4):after {
  width: 10px;
  height: 10px;
  top: 12px;
  left: 13px;
  border-radius: 50%;
  border: 1px solid transparent;
  border-bottom-color: var(--face);
}
.rating ul li:nth-child(4).current {
  -webkit-animation: active-4 .4s ease;
          animation: active-4 .4s ease;
}
.rating ul li:nth-child(4).current span {
  -webkit-animation: active-span .32s ease;
          animation: active-span .32s ease;
}
.rating ul li:nth-child(5):after {
  width: 6px;
  height: 3px;
  left: 15px;
  top: 20px;
  border-radius: 0 0 3px 3px;
  background: var(--face);
}
.rating ul li:nth-child(5).current {
  -webkit-animation: active-5 .72s ease;
          animation: active-5 .72s ease;
}
.rating ul li:nth-child(5).current span {
  -webkit-animation: active-span .32s ease;
          animation: active-span .32s ease;
}
.rating ul li.current {
  --face: var(--face-active);
}
.rating ul li.current svg {
  color: var(--active);
  fill: rgba(0, 0, 0, 0.2);
}
.rating ul li:not(.current) svg {
  transition: -webkit-transform .2s ease;
  transition: transform .2s ease;
  transition: transform .2s ease, -webkit-transform .2s ease;
}
.rating ul li:not(.current):active svg {
  -webkit-transform: scale(0.9);
          transform: scale(0.9);
}
.rating ul li:not(:last-child) {
  margin: 0 16px 0 0;
}
.rating ul li:not(:last-child):before {
  background: var(--face);
}
.rating ul li:not(:last-child).current:before {
  -webkit-animation: blink 3s linear infinite;
          animation: blink 3s linear infinite;
}
.rating ul li:last-child:before {
  --r: -45deg;
  width: 3px;
  height: 3px;
  border-top: 1px solid var(--face);
  border-right: 1px solid var(--face);
  border-radius: 0 1px 0 0;
  left: 12px;
  -webkit-filter: drop-shadow(6px 6px 0 var(--face));
          filter: drop-shadow(6px 6px 0 var(--face));
}
.rating svg {
  width: 36px;
  height: 34px;
  display: block;
  fill: rgba(0, 0, 0, 0.04);
}
.rating > div {
  left: 0;
  top: 0;
  position: absolute;
  display: none;
  -webkit-transform: translateX(var(--x));
          transform: translateX(var(--x));
  transition: -webkit-transform 0.3s cubic-bezier(0, 0, 0.265, 1.1) 0.24s;
  transition: transform 0.3s cubic-bezier(0, 0, 0.265, 1.1) 0.24s;
  transition: transform 0.3s cubic-bezier(0, 0, 0.265, 1.1) 0.24s, -webkit-transform 0.3s cubic-bezier(0, 0, 0.265, 1.1) 0.24s;
}
.rating > div span {
  display: block;
}
.rating > div span svg {
  color: var(--active);
  fill: rgba(0, 0, 0, 0.2);
}
.rating.animate-left > div, .rating.animate-right > div {
  display: block;
}
.rating.animate-left > div span, .rating.animate-right > div span {
  -webkit-animation: scale .28s linear .24s;
          animation: scale .28s linear .24s;
}
.rating.animate-left li.move-to:before {
  -webkit-animation: move-to-left .31s ease .36s;
          animation: move-to-left .31s ease .36s;
}
.rating.animate-left li.move-from:before {
  -webkit-animation: move-to-right .28s ease;
          animation: move-to-right .28s ease;
}
.rating.animate-left > div {
  -webkit-animation: double-left .32s linear .24s;
          animation: double-left .32s linear .24s;
}
.rating.animate-left > div span svg {
  -webkit-animation: left .3s ease, right-end .4s ease .4s;
          animation: left .3s ease, right-end .4s ease .4s;
}
.rating.animate-right li.move-to:before {
  -webkit-animation: move-to-right .31s ease .36s;
          animation: move-to-right .31s ease .36s;
}
.rating.animate-right li.move-from:before {
  -webkit-animation: move-to-left .28s ease;
          animation: move-to-left .28s ease;
}
.rating.animate-right > div {
  -webkit-animation: double-right .32s linear .24s;
          animation: double-right .32s linear .24s;
}
.rating.animate-right > div span svg {
  -webkit-animation: right .3s ease, left-end .4s ease .4s;
          animation: right .3s ease, left-end .4s ease .4s;
}

@-webkit-keyframes active-4 {
  40% {
    -webkit-transform: scale(1.25);
            transform: scale(1.25);
  }
}

@keyframes active-4 {
  40% {
    -webkit-transform: scale(1.25);
            transform: scale(1.25);
  }
}
@-webkit-keyframes active-span {
  60% {
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1.16);
            transform: scale(1.16);
    opacity: 0;
  }
}
@keyframes active-span {
  60% {
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1.16);
            transform: scale(1.16);
    opacity: 0;
  }
}
@-webkit-keyframes active-5 {
  15% {
    -webkit-transform: rotate(180deg) scale(1.1);
            transform: rotate(180deg) scale(1.1);
  }
  30% {
    -webkit-transform: rotate(360deg) scale(1.2);
            transform: rotate(360deg) scale(1.2);
  }
  70% {
    -webkit-transform: rotate(360deg) translateY(14%) scaleY(0.72);
            transform: rotate(360deg) translateY(14%) scaleY(0.72);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes active-5 {
  15% {
    -webkit-transform: rotate(180deg) scale(1.1);
            transform: rotate(180deg) scale(1.1);
  }
  30% {
    -webkit-transform: rotate(360deg) scale(1.2);
            transform: rotate(360deg) scale(1.2);
  }
  70% {
    -webkit-transform: rotate(360deg) translateY(14%) scaleY(0.72);
            transform: rotate(360deg) translateY(14%) scaleY(0.72);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@-webkit-keyframes double-right {
  60% {
    -webkit-filter: drop-shadow(-5px 0 1px var(--active-pale)) drop-shadow(4px 0 1px var(--active-pale));
            filter: drop-shadow(-5px 0 1px var(--active-pale)) drop-shadow(4px 0 1px var(--active-pale));
  }
}
@keyframes double-right {
  60% {
    -webkit-filter: drop-shadow(-5px 0 1px var(--active-pale)) drop-shadow(4px 0 1px var(--active-pale));
            filter: drop-shadow(-5px 0 1px var(--active-pale)) drop-shadow(4px 0 1px var(--active-pale));
  }
}
@-webkit-keyframes scale {
  60% {
    -webkit-transform: scaleX(1.32);
            transform: scaleX(1.32);
    -webkit-filter: blur(0.5px);
            filter: blur(0.5px);
  }
}
@keyframes scale {
  60% {
    -webkit-transform: scaleX(1.32);
            transform: scaleX(1.32);
    -webkit-filter: blur(0.5px);
            filter: blur(0.5px);
  }
}
@-webkit-keyframes blink {
  0%,
    5%,
    15%,
    100% {
    -webkit-transform: scaleY(1);
            transform: scaleY(1);
  }
  10% {
    -webkit-transform: scaleY(0.4);
            transform: scaleY(0.4);
  }
}
@keyframes blink {
  0%,
    5%,
    15%,
    100% {
    -webkit-transform: scaleY(1);
            transform: scaleY(1);
  }
  10% {
    -webkit-transform: scaleY(0.4);
            transform: scaleY(0.4);
  }
}
@-webkit-keyframes double-left {
  60% {
    -webkit-filter: drop-shadow(5px 0 1px var(--active-pale)) drop-shadow(-4px 0 1px var(--active-pale));
            filter: drop-shadow(5px 0 1px var(--active-pale)) drop-shadow(-4px 0 1px var(--active-pale));
  }
}
@keyframes double-left {
  60% {
    -webkit-filter: drop-shadow(5px 0 1px var(--active-pale)) drop-shadow(-4px 0 1px var(--active-pale));
            filter: drop-shadow(5px 0 1px var(--active-pale)) drop-shadow(-4px 0 1px var(--active-pale));
  }
}
@-webkit-keyframes right {
  0%,
    100% {
    -webkit-transform-origin: 17% 100%;
            transform-origin: 17% 100%;
  }
  50% {
    -webkit-transform: rotate(-12deg) skewX(12deg);
            transform: rotate(-12deg) skewX(12deg);
  }
}
@keyframes right {
  0%,
    100% {
    -webkit-transform-origin: 17% 100%;
            transform-origin: 17% 100%;
  }
  50% {
    -webkit-transform: rotate(-12deg) skewX(12deg);
            transform: rotate(-12deg) skewX(12deg);
  }
}
@-webkit-keyframes left {
  0%,
    100% {
    -webkit-transform-origin: 83% 100%;
            transform-origin: 83% 100%;
  }
  50% {
    -webkit-transform: rotate(12deg) skewX(-12deg);
            transform: rotate(12deg) skewX(-12deg);
  }
}
@keyframes left {
  0%,
    100% {
    -webkit-transform-origin: 83% 100%;
            transform-origin: 83% 100%;
  }
  50% {
    -webkit-transform: rotate(12deg) skewX(-12deg);
            transform: rotate(12deg) skewX(-12deg);
  }
}
@-webkit-keyframes right-end {
  0%,
    100% {
    -webkit-transform-origin: 17% 100%;
            transform-origin: 17% 100%;
  }
  40% {
    -webkit-transform: rotate(-6deg) skewX(4deg) scaleX(0.92);
            transform: rotate(-6deg) skewX(4deg) scaleX(0.92);
  }
  70% {
    -webkit-transform: rotate(1deg) skewX(-8deg) scaleX(1.04);
            transform: rotate(1deg) skewX(-8deg) scaleX(1.04);
  }
}
@keyframes right-end {
  0%,
    100% {
    -webkit-transform-origin: 17% 100%;
            transform-origin: 17% 100%;
  }
  40% {
    -webkit-transform: rotate(-6deg) skewX(4deg) scaleX(0.92);
            transform: rotate(-6deg) skewX(4deg) scaleX(0.92);
  }
  70% {
    -webkit-transform: rotate(1deg) skewX(-8deg) scaleX(1.04);
            transform: rotate(1deg) skewX(-8deg) scaleX(1.04);
  }
}
@-webkit-keyframes left-end {
  0%,
    100% {
    -webkit-transform-origin: 83% 100%;
            transform-origin: 83% 100%;
  }
  40% {
    -webkit-transform: rotate(6deg) skewX(-4deg) scaleX(0.92);
            transform: rotate(6deg) skewX(-4deg) scaleX(0.92);
  }
  70% {
    -webkit-transform: rotate(-1deg) skewX(8deg) scaleX(1.04);
            transform: rotate(-1deg) skewX(8deg) scaleX(1.04);
  }
}
@keyframes left-end {
  0%,
    100% {
    -webkit-transform-origin: 83% 100%;
            transform-origin: 83% 100%;
  }
  40% {
    -webkit-transform: rotate(6deg) skewX(-4deg) scaleX(0.92);
            transform: rotate(6deg) skewX(-4deg) scaleX(0.92);
  }
  70% {
    -webkit-transform: rotate(-1deg) skewX(8deg) scaleX(1.04);
            transform: rotate(-1deg) skewX(8deg) scaleX(1.04);
  }
}
@-webkit-keyframes move-to-right {
  40% {
    -webkit-transform: translateX(3px) rotate(var(--r));
            transform: translateX(3px) rotate(var(--r));
  }
}
@keyframes move-to-right {
  40% {
    -webkit-transform: translateX(3px) rotate(var(--r));
            transform: translateX(3px) rotate(var(--r));
  }
}
@-webkit-keyframes move-to-left {
  40% {
    -webkit-transform: translateX(-3px) rotate(var(--r));
            transform: translateX(-3px) rotate(var(--r));
  }
}
@keyframes move-to-left {
  40% {
    -webkit-transform: translateX(-3px) rotate(var(--r));
            transform: translateX(-3px) rotate(var(--r));
  }
}







  @import url(https://fonts.googleapis.com/css?family=Lato:700,300,100);
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

html,
body {
  height: 100vh;
  text-align: center;
}

body {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  line-height: 1em;
  color: #122338;
  background: #efefef;
}

h1 {
  font-size: 2.5em;
  line-height: 1em;
}

h2 {
  font-size: 1.600em;
  line-height: 1em;
}
h2 .icon {
  font-size: 2em;
}

em,
strong {
  font-weight: 700;
}

main {
  width: 100vw;
  height: 100vh;
  -webkit-perspective: 80em;
          perspective: 80em;
  -webkit-perspective-origin: 50% 100%;
          perspective-origin: 50% 100%;
}

.stroke-watermelon {
  stroke: #fd397a;
}

.fill-watermelon {
  fill: #fd397a;
}

.color-watermelon {
  color: #fd397a;
}

.bg-watermelon {
  background-color: #fd397a;
}

.stroke-sushi {
  stroke: #1dc9b7;
}

.fill-sushi {
  fill: #1dc9b7;
}

.color-sushi {
  color: #1dc9b7;
}

.bg-sushi {
  background-color: #1dc9b7;
}

.stroke-orange {
  stroke: #1dc9b7;
}

.fill-orange {
  fill: #1dc9b7;
}

.color-orange {
  color: #1dc9b7;
}

.bg-orange {
  background-color: #1dc9b7;
}

.stroke-cupcake {
  stroke: #FFCC5C;
}

.fill-cupcake {
  fill: #FFCC5C;
}

.color-cupcake {
  color: #FFCC5C;
}

.bg-cupcake {
  background-color: #FFCC5C;
}

.stroke-kiwi {
  stroke: #FFCC5C;
}

.fill-kiwi {
  fill: #1dc9b7;
}

.color-kiwi {
  color: #1dc9b7;
}

.bg-kiwi {
  background-color: #FFCC5C;
}

.stroke-donut {
  stroke: #00A1db;
}

.fill-donut {
  fill: #00A1db;
}

.color-donut {
  color: #00A1db;
}

.bg-donut {
  background-color: #00A1db;
}

.stroke-sky {
  stroke: #94D4DB;
}

.fill-sky {
  fill: #94D4DB;
}

.color-sky {
  color: #94D4DB;
}

.bg-sky {
  background-color: #94D4DB;
}

.stroke-night {
  stroke: #122338;
}

.fill-night {
  fill: #122338;
}

.color-night {
  color: #122338;
}

.bg-night {
  background-color: #122338;
}

.stroke-darkness {
  stroke: #101E30;
}

.fill-darkness {
  fill: #101E30;
}

.color-darkness {
  color: #101E30;
}

.bg-darkness {
  background-color: #101E30;
}

.stroke-white {
  stroke: #fefefe;
}

.fill-white {
  fill: #fefefe;
}

.color-white {
  color: #fefefe;
}

.bg-white {
  background-color: #fff;
}

.flex-pos {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  position: relative;
}
.flex-pos--row {
  flex-direction: row;
}

.hidden {
  text-indent: -900em;
  position: absolute;
  overflow: hidden;
  height: 0;
}

.shadow:before {
  content: '';
  width: 80%;
  height: 100%;
  display: inline-block;
  position: absolute;
  z-index: 1;
  left: 10%;
  top: 0;
  background-color: black;
  -webkit-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  -webkit-transform: rotateX(70deg);
          transform: rotateX(70deg);
  box-shadow: 0 2em 2em 1em rgba(43, 150, 166, 0.3), 0 2em 4em 1em rgba(43, 150, 166, 0.3), 0 2em 4em 0.5em rgba(43, 150, 166, 0.3), 0 2em 12em 3em rgba(254, 254, 254, 0.25);
  transition: all 0.7s ease-in-out;
}

.progress-bar {
  width: 100%;
  height: 2px;
  border-radius: 2px;
  background-color: rgba(0, 0, 0, 0.1);
  overflow: hidden;
  position: relative;
  background-image: linear-gradient(90deg, #ffffff, #ffffff), linear-gradient(90deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
  background-size: 0% 100%, 100% 100%;
  background-position: left top, left top;
  background-repeat: no-repeat;
  transition: background 1.4s ease-in-out;
  transition-delay: 1.4s;
}
.progress-bar[aria-valuenow='1'] {
  background-size: 1% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='2'] {
  background-size: 2% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='3'] {
  background-size: 3% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='4'] {
  background-size: 4% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='5'] {
  background-size: 5% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='6'] {
  background-size: 6% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='7'] {
  background-size: 7% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='8'] {
  background-size: 8% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='9'] {
  background-size: 9% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='10'] {
  background-size: 10% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='11'] {
  background-size: 11% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='12'] {
  background-size: 12% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='13'] {
  background-size: 13% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='14'] {
  background-size: 14% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='15'] {
  background-size: 15% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='16'] {
  background-size: 16% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='17'] {
  background-size: 17% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='18'] {
  background-size: 18% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='19'] {
  background-size: 19% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='20'] {
  background-size: 20% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='21'] {
  background-size: 21% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='22'] {
  background-size: 22% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='23'] {
  background-size: 23% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='24'] {
  background-size: 24% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='25'] {
  background-size: 25% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='26'] {
  background-size: 26% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='27'] {
  background-size: 27% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='28'] {
  background-size: 28% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='29'] {
  background-size: 29% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='30'] {
  background-size: 30% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='31'] {
  background-size: 31% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='32'] {
  background-size: 32% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='33'] {
  background-size: 33% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='34'] {
  background-size: 34% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='35'] {
  background-size: 35% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='36'] {
  background-size: 36% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='37'] {
  background-size: 37% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='38'] {
  background-size: 38% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='39'] {
  background-size: 39% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='40'] {
  background-size: 40% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='41'] {
  background-size: 41% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='42'] {
  background-size: 42% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='43'] {
  background-size: 43% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='44'] {
  background-size: 44% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='45'] {
  background-size: 45% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='46'] {
  background-size: 46% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='47'] {
  background-size: 47% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='48'] {
  background-size: 48% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='49'] {
  background-size: 49% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='50'] {
  background-size: 50% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='51'] {
  background-size: 51% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='52'] {
  background-size: 52% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='53'] {
  background-size: 53% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='54'] {
  background-size: 54% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='55'] {
  background-size: 55% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='56'] {
  background-size: 56% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='57'] {
  background-size: 57% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='58'] {
  background-size: 58% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='59'] {
  background-size: 59% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='60'] {
  background-size: 60% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='61'] {
  background-size: 61% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='62'] {
  background-size: 62% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='63'] {
  background-size: 63% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='64'] {
  background-size: 64% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='65'] {
  background-size: 65% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='66'] {
  background-size: 66% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='67'] {
  background-size: 67% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='68'] {
  background-size: 68% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='69'] {
  background-size: 69% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='70'] {
  background-size: 70% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='71'] {
  background-size: 71% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='72'] {
  background-size: 72% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='73'] {
  background-size: 73% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='74'] {
  background-size: 74% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='75'] {
  background-size: 75% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='76'] {
  background-size: 76% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='77'] {
  background-size: 77% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='78'] {
  background-size: 78% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='79'] {
  background-size: 79% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='80'] {
  background-size: 80% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='81'] {
  background-size: 81% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='82'] {
  background-size: 82% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='83'] {
  background-size: 83% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='84'] {
  background-size: 84% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='85'] {
  background-size: 85% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='86'] {
  background-size: 86% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='87'] {
  background-size: 87% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='88'] {
  background-size: 88% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='89'] {
  background-size: 89% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='90'] {
  background-size: 90% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='91'] {
  background-size: 91% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='92'] {
  background-size: 92% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='93'] {
  background-size: 93% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='94'] {
  background-size: 94% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='95'] {
  background-size: 95% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='96'] {
  background-size: 96% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='97'] {
  background-size: 97% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='98'] {
  background-size: 98% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='99'] {
  background-size: 99% 100%, 100% 100%;
}
.progress-bar[aria-valuenow='100'] {
  background-size: 100% 100%, 100% 100%;
}

.goldenbox {
  width: 31.5em;
  height: 25.48424em;
  -webkit-perspective: 80em;
          perspective: 80em;
  -webkit-perspective-origin: 50% 50%;
          perspective-origin: 50% 50%;
  -webkit-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  transition: all 0.7s ease-in-out;
}
.goldenbox .golden-blueprint {
  background-repeat: no-repeat;
  background-image: linear-gradient(rgba(0, 0, 0, 0) 1.95em, rgba(74, 74, 74, 0.25) 2em), linear-gradient(90deg, rgba(74, 74, 74, 0.05) 0%, rgba(74, 74, 74, 0.05) 11.75em, rgba(0, 0, 0, 0) 11.75em), linear-gradient(90deg, rgba(74, 74, 74, 0.05) 0%, rgba(74, 74, 74, 0.05) 11.75em, rgba(0, 0, 0, 0) 11.75em), linear-gradient(rgba(0, 0, 0, 0) 5.83em, rgba(74, 74, 74, 0.25) 5.88em), linear-gradient(rgba(0, 0, 0, 0) 9.83em, rgba(74, 74, 74, 0.25) 9.88em), linear-gradient(rgba(0, 0, 0, 0) 13.45em, rgba(74, 74, 74, 0.25) 13.5em), linear-gradient(rgba(0, 0, 0, 0) 17.5em, rgba(74, 74, 74, 0.25) 17.6em), linear-gradient(rgba(0, 0, 0, 0) 21.05em, rgba(74, 74, 74, 0.25) 21.15em), linear-gradient(rgba(74, 74, 74, 0.25) 0%, rgba(0, 0, 0, 0) 0.05em), linear-gradient(90deg, rgba(0, 0, 0, 0) 1.95em, rgba(74, 74, 74, 0.25) 2em), linear-gradient(90deg, rgba(0, 0, 0, 0) 5.8em, rgba(74, 74, 74, 0.25) 5.9em), linear-gradient(90deg, rgba(0, 0, 0, 0) 9.88em, rgba(74, 74, 74, 0.25) 9.95em), linear-gradient(90deg, rgba(74, 74, 74, 0.25) 0%, rgba(0, 0, 0, 0) 0.05em);
  background-size: 100% 2em, 100% 3.875em, 100% 11.3em, 100% 5.88em, 100% 9.88em, 100% 13.5em, 100% 17.6em, 100% 21.15em, 100% 2em, 2em 100%, 5.9em 100%, 9.95em 100%, 2em 100%;
  background-position: top center, 2em 2em, 2em 9.85em, top center, top center, top center, top center, top center, bottom center, center left, center left, center left, center right;
}
.goldenbox__card {
  min-height: 25em;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 4;
  box-sizing: border-box;
  width: 15.75em;
  height: 100%;
  padding: 2em;
  transition: all 0.7s ease-in-out;
  -webkit-perspective: 80em;
          perspective: 80em;
  -webkit-perspective-origin: 200% 200%;
          perspective-origin: 200% 200%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.goldenbox__card:nth-child(1) {
  border-radius: 2px 0 0 2px;
}
.goldenbox__card:nth-child(2) {
  position: absolute;
  z-index: 1;
  padding: 0;
  left: 15.75em;
  -webkit-transform: translateX(0);
          transform: translateX(0);
  background-color: #fefefe;
  border-radius: 0 3px 3px 0;
}
.goldenbox__carrousel {
  overflow: hidden;
  width: 100%;
  height: 100%;
  position: relative;
}
.goldenbox__carrousel__close {
  position: absolute;
  z-index: 2;
  top: 1em;
  right: 1em;
  width: 2em;
  height: 2em;
  line-height: 1.8em;
  color: white;
}
.goldenbox__carrousel__close svg {
  transition: all 0.35s cubic-bezier(0.51, -0.3, 0.51, 1.32);
  stroke: #fefefe;
}
.goldenbox__carrousel__close:hover svg {
  cursor: pointer;
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
  stroke: rgba(0, 0, 0, 0.15);
}
.goldenbox__carrousel__container {
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  justify-content: flex-start;
  position: absolute;
  z-index: 1;
  left: 0;
  top: 0;
  width: 600%;
  height: 100%;
  transition: all 0.7s cubic-bezier(0.51, -0.3, 0.51, 1.32);
  transition-delay: 0.7s;
}
.goldenbox__carrousel__container--item {
  height: 100%;
  width: 16.66667%;
  box-sizing: border-box;
  padding: 2em;
  border-radius: 0 2px 2px 0;
}
.goldenbox__carrousel__container--item.bg-donut .value {
  color: #00A1db;
}
.goldenbox__carrousel__container--item.bg-watermelon .value {
  color: #f4aec8;
}
.goldenbox__carrousel__container--item.bg-sushi .value {
  color: #ffd1cf;
}
.goldenbox__carrousel__container--item.bg-orange .value {
  color: #ffd6b5;
}
.goldenbox__carrousel__container--item.bg-cupcake .value {
  color: #ffecc2;
}
.goldenbox__carrousel__container--item.bg-kiwi .value {
  color: #e1f5e0;
}
.goldenbox__carrousel__radio, .goldenbox__carrousel__check {
  display: none;
}
.goldenbox__carrousel__radio {
  display: none;
}
.goldenbox__carrousel__radio:checked:nth-child(1) ~ .goldenbox .goldenbox__card:nth-child(2) .goldenbox__carrousel .goldenbox__carrousel__container {
  -webkit-transform: translateX(0%);
          transform: translateX(0%);
  transition-delay: 0s;
}
.goldenbox__carrousel__radio:checked:nth-child(2) ~ .goldenbox .goldenbox__card:nth-child(2) .goldenbox__carrousel .goldenbox__carrousel__container {
  -webkit-transform: translateX(-16.66667%);
          transform: translateX(-16.66667%);
  transition-delay: 0s;
}
.goldenbox__carrousel__radio:checked:nth-child(3) ~ .goldenbox .goldenbox__card:nth-child(2) .goldenbox__carrousel .goldenbox__carrousel__container {
  -webkit-transform: translateX(-33.33333%);
          transform: translateX(-33.33333%);
  transition-delay: 0s;
}
.goldenbox__carrousel__radio:checked:nth-child(4) ~ .goldenbox .goldenbox__card:nth-child(2) .goldenbox__carrousel .goldenbox__carrousel__container {
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  transition-delay: 0s;
}
.goldenbox__carrousel__radio:checked:nth-child(5) ~ .goldenbox .goldenbox__card:nth-child(2) .goldenbox__carrousel .goldenbox__carrousel__container {
  -webkit-transform: translateX(-66.66667%);
          transform: translateX(-66.66667%);
  transition-delay: 0s;
}
.goldenbox__carrousel__radio:checked:nth-child(6) ~ .goldenbox .goldenbox__card:nth-child(2) .goldenbox__carrousel .goldenbox__carrousel__container {
  -webkit-transform: translateX(-83.33333%);
          transform: translateX(-83.33333%);
  transition-delay: 0s;
}
.goldenbox__carrousel__radio:checked:nth-child(7) ~ .goldenbox .goldenbox__card:nth-child(2) .goldenbox__carrousel .goldenbox__carrousel__container {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
  transition-delay: 0s;
}
.goldenbox__carrousel__radio:checked:last-of-type ~ .goldenbox .goldenbox__card:nth-child(2) {
  box-shadow: inset 0 0 0 8em rgba(18, 35, 56, 0.6);
}
.goldenbox__carrousel__check:checked ~ .goldenbox {
  width: 15.75em;
}
.goldenbox__carrousel__check:checked ~ .goldenbox .goldenbox__card:nth-child(1) {
  border-radius: 2px;
}
.goldenbox__carrousel__check:checked ~ .goldenbox .goldenbox__card:nth-child(2) {
  border-radius: 0 2px 2px 0;
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
.goldenbox__carrousel__check:checked ~ .goldenbox .goldenbox__card:nth-child(2):after {
  left: 0;
  opacity: 0;
}
.goldenbox__carrousel__check:checked ~ .goldenbox .goldenbox__card:nth-child(2) .goldenbox__carrousel .goldenbox__carrousel__container .goldenbox__carrousel__container--item .goldenbox__content .goldenbox__content__list .goldenbox__content__list__item .progress-bar[aria-valuenow] {
  transition-delay: 0s;
  background-size: 0 100%, 100% 100%;
}
.goldenbox__carrousel__check:checked ~ .goldenbox .goldenbox__card.shadow:after {
  width: 100%;
  right: 0;
}
.goldenbox__header {
  height: 3.875em;
  justify-content: flex-end;
  padding-bottom: 4em;
  transition: -webkit-transform 0.7s ease-in-out;
  transition: transform 0.7s ease-in-out;
  transition: transform 0.7s ease-in-out, -webkit-transform 0.7s ease-in-out;
  transition-delay: 0s;
}
.goldenbox__header--spacer {
  border-bottom: 1px dashed #fefefe;
}
.goldenbox__header--title {
  font-size: .875em;
  line-height: 1.4em;
  text-transform: uppercase;
  font-weight: 700;
}
.goldenbox__header--title em {
  display: block;
  font-size: 1.143em;
}
.goldenbox__content__list {
  height: 11.12em;
  flex-wrap: wrap;
  justify-content: space-between;
  color: #fefefe;
}
.goldenbox__content__list__item {
  height: 5.56em;
  flex-grow: 0;
  flex-shrink: 0;
  flex-basis: 4em;
  display: flex;
  justify-content: flex-start;
}
.goldenbox__content__list__item .value {
  font-size: 2em;
  line-height: 1em;
  padding: 0 0 .35em;
  text-shadow: 0 0 0.438em rgba(0, 0, 0, 0.15);
}
.goldenbox__content__list__item .subject {
  font-size: .750em;
  font-weight: 700;
  padding-top: .5em;
  text-transform: capitalize;
  color: rgba(0, 0, 0, 0.35);
}
.goldenbox__content__list__item:nth-child(1), .goldenbox__content__list__item:nth-child(2) {
  margin-bottom: 1em;
}
.goldenbox__content__list__item:nth-child(1) .progress-bar {
  transition-delay: 0.7s;
}
.goldenbox__content__list__item:nth-child(2) .progress-bar {
  transition-delay: 1.4s;
}
.goldenbox__content__list__item:nth-child(3) .progress-bar {
  transition-delay: 2.1s;
}
.goldenbox__content__list__item:nth-child(4) .progress-bar {
  transition-delay: 2.8s;
}

.svg-chart {
  font-size: 10px;
  position: relative;
  transition: -webkit-transform 0.7s ease-in-out;
  transition: transform 0.7s ease-in-out;
  transition: transform 0.7s ease-in-out, -webkit-transform 0.7s ease-in-out;
  transition-delay: 0s;
}
.svg-chart_header {
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 4em;
}
.svg-chart_info {
  pointer-events: none;
  width: 14em;
  height: 14em;
  z-index: 3;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  border-radius: 50%;
  background-color: #fefefe;
  box-shadow: 0 0 0 1px #fefefe, 0 0 1em 0 rgba(18, 35, 56, 0.2);
}
.svg-chart_info_marker {
  width: 1.6em;
  height: 100%;
  display: inline-block;
  box-sizing: content-box;
  position: relative;
  z-index: 12;
  pointer-events: none;
  padding: 2.8em 0;
  margin: -2.8em auto;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  background-image: radial-gradient(rgba(0, 0, 0, 0) 38%, rgba(0, 0, 0, 0) 45%, rgba(0, 0, 0, 0) 64%, rgba(0, 0, 0, 0) 70%);
  background-size: 100% 1.6em;
  background-repeat: no-repeat;
  background-position: center top;
  transition: all 0.7s cubic-bezier(0.51, -0.3, 0.51, 1.32);
}
.svg-chart_info_marker[data-active='donut'] {
  background-image: radial-gradient(#00A1db 38%, #ffffff 45%, #ffffff 64%, rgba(0, 0, 0, 0) 70%);
}
.svg-chart_info_marker[data-active='watermelon'] {
  background-image: radial-gradient(#fd397a 38%, #ffffff 45%, #ffffff 64%, rgba(0, 0, 0, 0) 70%);
}
.svg-chart_info_marker[data-active='sushi'] {
  background-image: radial-gradient(#1dc9b7 38%, #ffffff 45%, #ffffff 64%, rgba(0, 0, 0, 0) 70%);
}
.svg-chart_info_marker[data-active='orange'] {
  background-image: radial-gradient(#1dc9b7 38%, #ffffff 45%, #ffffff 64%, rgba(0, 0, 0, 0) 70%);
}
.svg-chart_info_marker[data-active='cupcake'] {
  background-image: radial-gradient(#ffcc5c 38%, #ffffff 45%, #ffffff 64%, rgba(0, 0, 0, 0) 70%);
}
.svg-chart_info_marker[data-active='kiwi'] {
  background-image: radial-gradient(#1dc9b7 38%, #ffffff 45%, #ffffff 64%, rgba(0, 0, 0, 0) 70%);
}
.svg-chart_info_icon {
  width: 6.4em;
  height: 6.4em;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.svg-chart_info_title {
  font-size: 1.2em;
  height: 2.5em;
  text-transform: uppercase;
  font-weight: 700;
  display: block;
}
.svg-chart .svg-chart_pie {
  display: inline-block;
  position: relative;
  width: 18em;
  height: 18em;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
  z-index: 1;
}
.svg-chart .svg-chart_pie > circle {
  stroke-width: 2em;
  stroke-miterlimit: 10;
  stroke-dasharray: 51em;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  transition: all 0.7s ease-in-out;
}
.svg-chart .svg-chart_pie > circle:hover {
  cursor: pointer;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="0"] {
  stroke-dashoffset: 51em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="1"] {
  stroke-dashoffset: 50.49em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="2"] {
  stroke-dashoffset: 49.98em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="3"] {
  stroke-dashoffset: 49.47em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="4"] {
  stroke-dashoffset: 48.96em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="5"] {
  stroke-dashoffset: 48.45em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="6"] {
  stroke-dashoffset: 47.94em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="7"] {
  stroke-dashoffset: 47.43em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="8"] {
  stroke-dashoffset: 46.92em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="9"] {
  stroke-dashoffset: 46.41em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="10"] {
  stroke-dashoffset: 45.9em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="11"] {
  stroke-dashoffset: 45.39em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="12"] {
  stroke-dashoffset: 44.88em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="13"] {
  stroke-dashoffset: 44.37em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="14"] {
  stroke-dashoffset: 43.86em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="15"] {
  stroke-dashoffset: 43.35em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="16"] {
  stroke-dashoffset: 42.84em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="17"] {
  stroke-dashoffset: 42.33em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="18"] {
  stroke-dashoffset: 41.82em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="19"] {
  stroke-dashoffset: 41.31em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="20"] {
  stroke-dashoffset: 40.8em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="21"] {
  stroke-dashoffset: 40.29em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="22"] {
  stroke-dashoffset: 39.78em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="23"] {
  stroke-dashoffset: 39.27em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="24"] {
  stroke-dashoffset: 38.76em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="25"] {
  stroke-dashoffset: 38.25em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="26"] {
  stroke-dashoffset: 37.74em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="27"] {
  stroke-dashoffset: 37.23em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="28"] {
  stroke-dashoffset: 36.72em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="29"] {
  stroke-dashoffset: 36.21em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="30"] {
  stroke-dashoffset: 35.7em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="31"] {
  stroke-dashoffset: 35.19em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="32"] {
  stroke-dashoffset: 34.68em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="33"] {
  stroke-dashoffset: 34.17em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="34"] {
  stroke-dashoffset: 33.66em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="35"] {
  stroke-dashoffset: 33.15em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="36"] {
  stroke-dashoffset: 32.64em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="37"] {
  stroke-dashoffset: 32.13em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="38"] {
  stroke-dashoffset: 31.62em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="39"] {
  stroke-dashoffset: 31.11em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="40"] {
  stroke-dashoffset: 30.6em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="41"] {
  stroke-dashoffset: 30.09em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="42"] {
  stroke-dashoffset: 29.58em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="43"] {
  stroke-dashoffset: 29.07em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="44"] {
  stroke-dashoffset: 28.56em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="45"] {
  stroke-dashoffset: 28.05em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="46"] {
  stroke-dashoffset: 27.54em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="47"] {
  stroke-dashoffset: 27.03em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="48"] {
  stroke-dashoffset: 26.52em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="49"] {
  stroke-dashoffset: 26.01em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="50"] {
  stroke-dashoffset: 25.5em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="51"] {
  stroke-dashoffset: 24.99em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="52"] {
  stroke-dashoffset: 24.48em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="53"] {
  stroke-dashoffset: 23.97em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="54"] {
  stroke-dashoffset: 23.46em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="55"] {
  stroke-dashoffset: 22.95em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="56"] {
  stroke-dashoffset: 22.44em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="57"] {
  stroke-dashoffset: 21.93em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="58"] {
  stroke-dashoffset: 21.42em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="59"] {
  stroke-dashoffset: 20.91em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="60"] {
  stroke-dashoffset: 20.4em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="61"] {
  stroke-dashoffset: 19.89em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="62"] {
  stroke-dashoffset: 19.38em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="63"] {
  stroke-dashoffset: 18.87em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="64"] {
  stroke-dashoffset: 18.36em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="65"] {
  stroke-dashoffset: 17.85em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="66"] {
  stroke-dashoffset: 17.34em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="67"] {
  stroke-dashoffset: 16.83em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="68"] {
  stroke-dashoffset: 16.32em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="69"] {
  stroke-dashoffset: 15.81em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="70"] {
  stroke-dashoffset: 15.3em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="71"] {
  stroke-dashoffset: 14.79em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="72"] {
  stroke-dashoffset: 14.28em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="73"] {
  stroke-dashoffset: 13.77em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="74"] {
  stroke-dashoffset: 13.26em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="75"] {
  stroke-dashoffset: 12.75em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="76"] {
  stroke-dashoffset: 12.24em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="77"] {
  stroke-dashoffset: 11.73em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="78"] {
  stroke-dashoffset: 11.22em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="79"] {
  stroke-dashoffset: 10.71em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="80"] {
  stroke-dashoffset: 10.2em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="81"] {
  stroke-dashoffset: 9.69em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="82"] {
  stroke-dashoffset: 9.18em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="83"] {
  stroke-dashoffset: 8.67em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="84"] {
  stroke-dashoffset: 8.16em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="85"] {
  stroke-dashoffset: 7.65em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="86"] {
  stroke-dashoffset: 7.14em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="87"] {
  stroke-dashoffset: 6.63em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="88"] {
  stroke-dashoffset: 6.12em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="89"] {
  stroke-dashoffset: 5.61em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="90"] {
  stroke-dashoffset: 5.1em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="91"] {
  stroke-dashoffset: 4.59em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="92"] {
  stroke-dashoffset: 4.08em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="93"] {
  stroke-dashoffset: 3.57em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="94"] {
  stroke-dashoffset: 3.06em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="95"] {
  stroke-dashoffset: 2.55em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="96"] {
  stroke-dashoffset: 2.04em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="97"] {
  stroke-dashoffset: 1.53em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="98"] {
  stroke-dashoffset: 1.02em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="99"] {
  stroke-dashoffset: 0.51em;
}
.svg-chart .svg-chart_pie > circle[aria-valuenow="100"] {
  stroke-dashoffset: 0em;
}

.credits {
  padding-top: 5em;
}
.credits + p {
  padding-top: .5em;
}

.ui-button {
  position: absolute;
  top: 3%;
  left: 3%;
  appearance: none;
  background: #00A1db;
  border: none;
  border-radius: 2px;
  padding: 1rem;
  display: inline-block;
  color: white;
  text-transform: uppercase;
  font-size: .75rem;
  letter-spacing: 2px;
  width: auto;
  margin-top: 1rem;
  transition-timing-function: cubic-bezier(0.8, 0, 0.2, 1);
}
</style>

</head>
<body>

<svg width="128px" height="127px" viewbox="0 0 128 127" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon hidden">
      <!-- Generator: Sketch 3.8.3 (29802) - http://www.bohemiancoding.com/sketch-->
      <title>icons</title>
      <desc>Created with Sketch.</desc>
      <defs>
        <g id="icons">
          <symbol id="sushi">
           
          </symbol>
          <symbol id="donut">
         
          </symbol>
          <symbol id="pizza">
            
          </symbol>
          <symbol id="watermelon">
           
          </symbol>
          <symbol id="hamburger" transform="translate(1.000000, 0.992248)">
            
          </symbol>
          <symbol id="kiwi">
            
          </symbol>
          <symbol id="orange">
          
          </symbol>
          <symbol id="cupcake">
            
          </symbol>
        </g>
      </defs>
    </svg>
    
      <a href="index.php" class="ui-button" style="text-decoration: none; align-content: center;margin-left: 5%;" ><<</a>
    <main class="flex-pos">
      <input type="radio" name="goldenbox-controls" id="goldenbox-controls_1" class="goldenbox__carrousel__radio"/>
      <input type="radio" name="goldenbox-controls" id="goldenbox-controls_2" class="goldenbox__carrousel__radio"/>
      <input type="radio" name="goldenbox-controls" id="goldenbox-controls_3" class="goldenbox__carrousel__radio"/>
      <input type="radio" name="goldenbox-controls" id="goldenbox-controls_4" class="goldenbox__carrousel__radio"/>
      <input type="radio" name="goldenbox-controls" id="goldenbox-controls_5" class="goldenbox__carrousel__radio"/>
      <input type="radio" name="goldenbox-controls" id="goldenbox-controls_6" class="goldenbox__carrousel__radio"/>
      <input type="checkbox" name="goldenbox-close-control" id="goldenbox-close-control" checked="checked" class="goldenbox__carrousel__check"/>
      <div id="goldenbox" class=" goldenbox flex-pos flex-pos--row">

        <article class="goldenbox__card bg-white">

          <header class="goldenbox__header flex-pos">
            <h2 class="goldenbox__header--title">Rate<em>Operations</em></h2>
          </header>
          <div class="goldenbox__content svg-chart">
            <div class="svg-chart_info flex-pos">
              <div id="svg-chart_info_marker" class="svg-chart_info_marker"></div>
              <h3 class="svg-chart_info_icon flex-pos">
                <svg width="64" height="64" viewBox="0 0 128 128">
                  <use id="active-icon" xlink:href=""></use>
                </svg>
              </h3>
            </div>
            <svg id="svg-chart_pie" viewBox="0 0 180 180" class="svg-chart_pie">
              <circle data-slice-name="donut" data-slice-line="M6 34.994l15.008-21.96L33 25l9-3 18 20 10-12v40H0V30z" aria-valuenow="30" class="stroke-donut" r="8em" cx="9em" cy="9em" fill="none" aria-valuemin="0" aria-valuemax="100" role="progressbar"></circle>
              <circle data-slice-name="watermelon" data-slice-line="M5.108 35.606l10.538 4.757 14.11-23.976 15.308 26.85 11.207-14.34L71 22.58V78H-1l-3.424-33.002" aria-valuenow="20" class="stroke-watermelon" r="8em" cx="9em" cy="9em" fill="none" aria-valuemin="0" aria-valuemax="100" role="progressbar"></circle>
              <circle data-slice-name="sushi" data-slice-line="M6 34.994l10.645 6.977L27.18 19.918 35 27.123l8.1-3.363 9.794 16.133 16.864-14.398L71 78H-1V29" aria-valuenow="16" class="stroke-sushi" r="8em" cx="9em" cy="9em" fill="none" aria-valuemin="0" aria-valuemax="100" role="progressbar"></circle>
              <circle data-slice-name="orange" data-slice-line="M6.7 34.75l14.793 5.975L33.32 25l9-3 18 20 10-5.508V71h-71L-2 44.413z" aria-valuenow="14" class="stroke-orange" r="8em" cx="9em" cy="9em" fill="none" aria-valuemin="0" aria-valuemax="100" role="progressbar"></circle>
              <circle data-slice-name="cupcake" data-slice-line="M14.83 49.277l5.07-15.525L35 19.64l16.838 20.454L64.463 14.24 71 29v49H-1V40.094" aria-valuenow="12" class="stroke-cupcake" r="8em" cx="9em" cy="9em" fill="none" aria-valuemin="0" aria-valuemax="100" role="progressbar"></circle>
              <circle data-slice-name="kiwi" data-slice-line="M1.705 42l14.97-5.338 10.524-17.885L37.74 51.46 45.912 29l13.11 10.332L71 29v49H-1V42" aria-valuenow="8" class="stroke-kiwi" r="8em" cx="9em" cy="9em" fill="none" aria-valuemin="0" aria-valuemax="100" role="progressbar"></circle>
            </svg>
          </div>
        </article>
        <div id="goldenbox--action" class="goldenbox__card goldenbox--rotated">
          <div class="goldenbox__carrousel">
            <label for="goldenbox-close-control" class="goldenbox__carrousel__close">
              <svg width="24" height="24">
                <line x1="6" y1="6" x2="18" y2="18" stroke-width="2" stroke-linecap="round"></line>
                <line x1="18" y1="6" x2="6" y2="18" stroke-width="2" stroke-linecap="round"></line>
              </svg>
            </label>
            <div class="goldenbox__carrousel__container flex-pos flex-pos--row">
              <article class="goldenbox__carrousel__container--item bg-donut">
                <header class="goldenbox__header flex-pos">
                  <h2 class="goldenbox__header--title color-white">Work<em>Performance</em></h2>
                </header>
                <div class="goldenbox__content">
          <ol class="goldenbox__content__list flex-pos flex-pos--row">        
<nav class="rating">
  <ul>
    <li class="current">
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>

    <li><span></span>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
  </ul>
  <div><span>
      <svg>
        <use xlink:href="#star"></use>
      </svg></span></div>
</nav>
</ol>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 34" id="star">
    <path fill="currentColor" d="M19.6859343,0.861782958 L24.8136328,8.05088572 C25.0669318,8.40601432 25.4299179,8.6717536 25.8489524,8.80883508 L34.592052,11.6690221 C35.6704701,12.021812 36.2532905,13.1657829 35.8938178,14.2241526 C35.8056709,14.4836775 35.6647294,14.7229267 35.4795411,14.9273903 L29.901129,21.0864353 C29.5299163,21.4962859 29.3444371,22.0366367 29.3872912,22.5833831 L30.1116131,31.8245163 C30.1987981,32.9368499 29.3506698,33.9079379 28.2172657,33.993502 C27.9437428,34.0141511 27.6687736,33.9809301 27.4085205,33.8957918 L18.6506147,31.0307612 C18.2281197,30.8925477 17.7713439,30.8925477 17.3488489,31.0307612 L8.59094317,33.8957918 C7.51252508,34.2485817 6.34688429,33.6765963 5.98741159,32.6182265 C5.90066055,32.3628116 5.86681029,32.0929542 5.88785051,31.8245163 L6.61217242,22.5833831 C6.65502653,22.0366367 6.46954737,21.4962859 6.09833466,21.0864353 L0.519922484,14.9273903 C-0.235294755,14.0935658 -0.158766688,12.8167745 0.690852706,12.0755971 C0.899189467,11.8938516 1.14297067,11.7555303 1.40741159,11.6690221 L10.1505113,8.80883508 C10.5695458,8.6717536 10.9325319,8.40601432 11.1858308,8.05088572 L16.3135293,0.861782958 C16.9654141,-0.0521682813 18.2488096,-0.274439442 19.1800736,0.365326425 C19.3769294,0.500563797 19.5481352,0.668586713 19.6859343,0.861782958 Z"></path>
  </symbol>
  <path class="shadow" d="M18.7022469,29.7633426 L29.1611722,33.6861584 C28.8859085,33.8576358 28.5650147,33.9672494 28.2172657,33.993502 C27.9437428,34.0141511 27.6687736,33.9809301 27.4085205,33.8957918 L18.6506147,31.0307612 C18.2281197,30.8925477 17.7713439,30.8925477 17.3488489,31.0307612 L8.59094317,33.8957918 C7.98083887,34.0953792 7.34281791,33.9989813 6.83864817,33.6859784 L17.2977531,29.7633426 C17.7505234,29.5935537 18.2494766,29.5935537 18.7022469,29.7633426 Z"></path>
</svg>
                </div>
              </article>
              <article class="goldenbox__carrousel__container--item bg-watermelon">
                <header class="goldenbox__header flex-pos">
                  <h2 class="goldenbox__header--title color-white"><em>punctuality</em></h2>
                </header>
                <div class="goldenbox__content">
                  <ol class="goldenbox__content__list flex-pos flex-pos--row">        
<nav class="rating">
  <ul>
    <li class="current">
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>

    <li><span></span>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
  </ul>
  <div><span>
      <svg>
        <use xlink:href="#star"></use>
      </svg></span></div>
</nav>
</ol>
                </div>
              </article>
              <article class="goldenbox__carrousel__container--item bg-sushi">
                <header class="goldenbox__header flex-pos">
                  <h2 class="goldenbox__header--title color-white">Team<em>Skills</em></h2>
                </header>
                <div class="goldenbox__content">
                  <ol class="goldenbox__content__list flex-pos flex-pos--row">        
<nav class="rating">
  <ul>
    <li class="current">
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>

    <li><span></span>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
  </ul>
  <div><span>
      <svg>
        <use xlink:href="#star"></use>
      </svg></span></div>
</nav>
</ol>
                </div>
              </article>
              <article class="goldenbox__carrousel__container--item bg-orange">
                <header class="goldenbox__header flex-pos">
                  <h2 class="goldenbox__header--title color-white"><em>Team Work</em></h2>
                </header>
                <div class="goldenbox__content">
                  <ol class="goldenbox__content__list flex-pos flex-pos--row">        
<nav class="rating">
  <ul>
    <li class="current">
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>

    <li><span></span>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
  </ul>
  <div><span>
      <svg>
        <use xlink:href="#star"></use>
      </svg></span></div>
</nav>
</ol>
                </div>
              </article>
              <article class="goldenbox__carrousel__container--item bg-cupcake">
                <header class="goldenbox__header flex-pos">
                  <h2 class="goldenbox__header--title color-white">Our<em>SUpport Team</em></h2>
                </header>
                <div class="goldenbox__content">
                 <ol class="goldenbox__content__list flex-pos flex-pos--row">        
<nav class="rating">
  <ul>
    <li class="current">
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>

    <li><span></span>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
  </ul>
  <div><span>
      <svg>
        <use xlink:href="#star"></use>
      </svg></span></div>
</nav>
</ol>
                </div>
              </article>
              <article class="goldenbox__carrousel__container--item bg-kiwi">
                <header class="goldenbox__header flex-pos">
                  <h2 class="goldenbox__header--title color-white">Full<em>Service Rating</em></h2>
                </header>
                <div class="goldenbox__content">
                 <ol class="goldenbox__content__list flex-pos flex-pos--row">        
<nav class="rating">
  <ul>
    <li class="current">
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
    <li>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>

    <li><span></span>
      <svg>
        <use xlink:href="#star"></use>
      </svg>
    </li>
  </ul>
  <div><span>
      <svg>
        <use xlink:href="#star"></use>
      </svg></span></div>
</nav>
</ol>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
     
    </main>
    <script type="text/javascript">
      var angle,
          valueUnits,
          markerAngle,
          lastAngle = 0,
          circle = $('#svg-chart_pie > circle');
      
      $.each(circle, function(){
      
          $(this).css({
              transform: 'rotate(' + lastAngle + 'deg)'
          });
      
          angle = (360 / 100) * $(this).attr('aria-valuenow');
          markerAngle = lastAngle + (angle / 2);
          lastAngle = lastAngle + angle;
      
          $(this).attr('data-marker-angle', Math.ceil(markerAngle));
      
          $(this).click(function(){
              $('[name="goldenbox-controls"]:eq(' + $(this).index() + ')').click();
              $('#goldenbox-close-control').attr('checked', false);
              $('#active-icon').attr('xlink:href', '#' + $(this).attr('data-slice-name'));
              $('#svg-chart_info_marker').attr('data-active', $(this).attr('data-slice-name'));
              console.log();
              $('#svg-chart_info_marker').css({
                  transform: 'rotate(' + $(this).attr('data-marker-angle') + 'deg)'
              });
          });
      });
      
      setTimeout(function()
      {
          circle.eq(0).click();
      }, 1500);















      $('.rating ul li').on('click', function() {

    let li = $(this),
        ul = li.parent(),
        rating = ul.parent(),
        last = ul.find('.current');

    if(!rating.hasClass('animate-left') && !rating.hasClass('animate-right')) {

        last.removeClass('current');

        ul.children('li').each(function() {
            let current = $(this);
            current.toggleClass('active', li.index() > current.index());
        });

        rating.addClass(li.index() > last.index() ? 'animate-right' : 'animate-left');
        rating.css({
            '--x': li.position().left + 'px'
        });
        li.addClass('move-to');
        last.addClass('move-from');

        setTimeout(() => {
            li.addClass('current');
            li.removeClass('move-to');
            last.removeClass('move-from');
            rating.removeClass('animate-left animate-right');
        }, 800);

    }

})

    </script>
</body>
</html>