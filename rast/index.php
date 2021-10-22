<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<title></title>
	<style type="text/css">
		@font-face {
	font-family: 'codropsicons';
	font-weight: normal;
	font-style: normal;
	src: url('../fonts/codropsicons/codropsicons.eot');
	src: url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'), url('../fonts/codropsicons/codropsicons.woff') format('woff'), url('../fonts/codropsicons/codropsicons.ttf') format('truetype'), url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
}

*,
*::after,
*::before {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

.clearfix::before,
.clearfix::after {
	content: '';
	display: table;
}

.clearfix::after {
	clear: both;
}

body {
	font-family: 'Avenir Next', Avenir, 'Helvetica Neue', Helvetica, Arial, sans-serif;
	color: #515158;
	background: #f0f0f0;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

a {
	text-decoration: none;
	color: #aaa;
	outline: none;
}

a:hover,
button:hover {
	color: #515158;
	outline: none;
}

a:focus,
button:focus {
	outline: none;
}

.hidden {
	position: absolute;
	overflow: hidden;
	width: 0;
	height: 0;
	pointer-events: none;
}

/* Icons */
.icon {
	display: block;
	width: 1em;
	height: 1em;
	margin: 0 auto;
	fill: currentColor;
}

.container {
	position: relative;
	width: 100vw;
	height: 100vh;
}

/* Header */

.codrops-header {
	position: absolute;
	z-index: 100;
	top: 0;
	left: 0;
	display: -webkit-flex;
	display: flex;
	-webkit-align-items: center;
	align-items: center;
	padding: 1.5em 1em;
	text-align: center;
}

h1 {
	font-weight: normal;
	line-height: 1;
	margin: 1em 0 0 1em;
}

/* Top Navigation Style */

.codrops-links {
	position: relative;
	display: inline-block;
	text-align: center;
	white-space: nowrap;
}

.codrops-links::after {
	content: '';
	position: absolute;
	top: 0;
	left: 50%;
	width: 1px;
	height: 100%;
	background: rgba(0, 0, 0, 0.1);
	-webkit-transform: rotate3d(0, 0, 1, 22.5deg);
	transform: rotate3d(0, 0, 1, 22.5deg);
}

.codrops-icon {
	display: inline-block;
	width: 1.5em;
	margin: 0.5em;
	padding: 0em 0;
	text-decoration: none;
}

.codrops-icon span {
	display: none;
}

.codrops-icon::before {
	font-family: 'codropsicons';
	font-weight: normal;
	font-style: normal;
	font-variant: normal;
	line-height: 1;
	margin: 0 5px;
	text-transform: none;
	speak: none;
	-webkit-font-smoothing: antialiased;
}

.codrops-icon--drop::before {
	content: '\e001';
	color: #09c;
}

.codrops-icon--prev::before {
	content: '\e004';
}

.main {
	position: fixed;
	top: 0;
	left: 0;
	overflow: hidden;
	width: calc(100vw - 300px);
	height: 100vh;
}

.mall {
	position: relative;
	width: 100%;
	height: 100%;
	pointer-events: none;
	-webkit-perspective: 3500px;
	perspective: 3500px;
	-webkit-perspective-origin: 0% 50%;
	perspective-origin: 0% 50%;
	-webkit-transition: -webkit-transform 0.8s;
	transition: transform 0.8s;
	-webkit-transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
	transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
}

.mall.mall--content-open {
	-webkit-transform: translate3d(0,-25%,0) scale3d(0.8,0.8,1);
	transform: translate3d(0,-25%,0) scale3d(0.8,0.8,1);
}

.surroundings,
.levels {
	position: absolute;
	top: 50%;
	left: 50%;
}

.surroundings {
	width: 192vmin;
	/* double of mall map */
	height: 128vmin;
	margin: -64vmin 0 0 -96vmin;
	pointer-events: none;
	-webkit-transition: opacity 0.8s;
	transition: opacity 0.8s;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.surroundings__map {
	opacity: 0.3;
	max-width: 100%;
	display: block;
}

.surroundings--hidden {
	opacity: 0;
}

.levels {
	width: 96vmin;
	height: 64vmin;
	margin: -32vmin 0 0 -48vmin;
	-webkit-transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.surroundings,
.levels {
	-webkit-transform: rotateX(70deg) rotateZ(-45deg) translateZ(-15vmin);
	transform: rotateX(70deg) rotateZ(-45deg) translateZ(-15vmin);
}

.level {
	position: relative;
	width: 100%;
	height: 100%;
	cursor: pointer;
	pointer-events: auto;
	-webkit-transition: opacity 1s, -webkit-transform 1s;
	transition: opacity 1s, transform 1s;
	-webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
	transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.level::after {
	font-size: 2.5vmin;
	line-height: 0;
	position: absolute;
	z-index: 100;
	top: -2em;
    left: 3.5em;
	white-space: nowrap;
	color: #7d7d86;
	-webkit-transform: rotateZ(45deg) rotateX(-70deg) translateZ(5vmin);
	transform: rotateZ(45deg) rotateX(-70deg) translateZ(5vmin);
	-webkit-transition: -webkit-transform 1s, color 0.3s;
	transition: transform 1s, color 0.3s;
	-webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
	transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
}

.level:hover::after,
.level--current::after {
	color: #515158;
}

.level--current::after {
	-webkit-transform: rotateZ(-20deg) rotateZ(45deg) rotateX(-70deg) translateZ(5vmin) translateX(5vmin) translateY(-10vmin);
	transform: rotateZ(-20deg) rotateZ(45deg) rotateX(-70deg) translateZ(5vmin) translateX(5vmin) translateY(-10vmin);
}

.level--1::after {
	content: 'HTTSA';
}

.level--2::after {
	content: 'EUROGATE';
}

.level--3::after {
	content: 'MARSA MAROC';
}

.level--4::after {
	content: 'APM TERMINALS';
}

.level:not(:first-child) {
	position: absolute;
	top: 0;
	left: 0;
}

.level--2 {
	-webkit-transform: translateZ(10vmin);
	transform: translateZ(10vmin);
}

.level--3 {
	-webkit-transform: translateZ(20vmin);
	transform: translateZ(20vmin);
}

.level--4 {
	-webkit-transform: translateZ(30vmin);
	transform: translateZ(30vmin);
}


/* Selection transitions */

.levels--selected-1 .level:not(.level--1),
.levels--selected-2 .level:not(.level--2),
.levels--selected-3 .level:not(.level--3),
.levels--selected-4 .level:not(.level--4) {
	opacity: 0;
	/* fade out all others */
}

/* Other levels */

.level--current ~ .level {
	-webkit-transform: translateZ(90vmin);
	transform: translateZ(90vmin);
}

.levels--selected-2 .level--1,
.levels--selected-3 .level--1,
.levels--selected-4 .level--1,
.levels--selected-3 .level--2,
.levels--selected-4 .level--2,
.levels--selected-4 .level--3 {
	-webkit-transform: translateZ(-60vmin);
	transform: translateZ(-60vmin);
}

/* Delays */
/* 1 */

.levels--selected-1 .level--3,
.levels--selected-2 .level--3,
.levels--selected-3 .level--2,
.levels--selected-4 .level--2 {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

.levels--selected-1 .level--2,
.levels--selected-2 .level--current,
.levels--selected-2 .level--current::after,
.levels--selected-3 .level--current,
.levels--selected-3 .level--current::after,
.levels--selected-4 .level--3 {
	-webkit-transition-delay: 0.25s;
	transition-delay: 0.25s;
}

.levels--selected-1 .level--current,
.levels--selected-1 .level--current::after,
.levels--selected-4 .level--current,
.levels--selected-4 .level--current::after {
	-webkit-transition-delay: 0.45s;
	transition-delay: 0.45s;
}

/* Current level */

.level.level--current {
	-webkit-transform: translateZ(15vmin) rotate3d(0,0,1,20deg);
	/* go to center */
	transform: translateZ(15vmin) rotate3d(0,0,1,20deg);
}

/* Navigation classes */
.levels--open .level,
.levels--open .level::after {
	-webkit-transition: -webkit-transform 1s, opacity 1s;
	transition: transform 1s, opacity 1s;
	-webkit-transition-delay: 0s;
	transition-delay: 0s;
}

.levels--open .level.level--current {
	opacity: 1;
}

.levels--open .level.level--moveOutUp,
.levels--open .level.level--moveOutDown {
	opacity: 0;
}

.levels--open .level.level--moveOutUp {
	-webkit-transform: translateZ(90vmin);
	transform: translateZ(90vmin);
}

.levels--open .level.level--moveOutDown {
	-webkit-transform: translateZ(-60vmin);
	transform: translateZ(-60vmin);
}


/* Level nav */
.mallnav {
	position: absolute;
	top: 0;
	right: 0;
	text-align: center;
	-webkit-transition: opacity 0.8s;
	transition: opacity 0.8s;
}

.mallnav--hidden {
	pointer-events: none;
	opacity: 0;
}

/* Box button */
.boxbutton {
	font-size: 2em;
	display: block;
	width: 2em;
	height: 2em;
	margin: 0;
	padding: 0;
	color: #fff;
	border: 0;
	background: #d7d7dc;
}

.boxbutton--dark {
	background: #c4c4c7;
}

.boxbutton--darker {
	background: #2c2c2f;
}

.boxbutton--alt {
	background: #3d1975;
}

.boxbutton--disabled,
.boxbutton--disabled:focus,
.boxbutton--disabled:hover {
	cursor: default;
	pointer-events: none;
	opacity: 0.2;
}

/* Level map */

.map__ground {
	fill: #d7d7dc;
}

.map__outline {
	-webkit-transition: fill 0.3s;
	transition: fill 0.3s;
	fill: #bbb;
}

.level:hover .map__outline,
.level--current .map__outline {
	fill: #a6a3a8;
}

.map__tree {
	fill: #7bad7f;
}

.map__lake {
	fill: #a2bbdd;
}

.map__space {
	-webkit-transition: fill-opacity 0.8s;
	transition: fill-opacity 0.8s;
	fill: #bdbdbd;
	fill-opacity: 0.6;
}

.level--current .map__space {
	fill-opacity: 1;
}

 .map__space--selected {
 	fill: #A4A4A4;
 }

/* Content */
.content {
	position: absolute;
	top: 100%;
	width: 100%;
	height: 50%;
}

.content__item {
	position: absolute;
	top: 0;
	width: 100%;
	height: 100%;
	padding: 3em;
	text-align: center;
	background: #d7d7dc;
	-webkit-transition: -webkit-transform 0.8s;
	transition: transform 0.8s;
	-webkit-transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
	transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
}

.content--open .content__item {
	-webkit-transition: none;
	transition: none;
}

.content__item--current {
	-webkit-transform: translate3d(0,-100%,0);
	transform: translate3d(0,-100%,0);
}

.content__item-title {
	font-size: 1.85em;
	margin: 0;
	padding: 0 0 0.75em 0;
	pointer-events: none;
	font-weight: normal;
	opacity: 0;
	-webkit-transform: translate3d(0,-3em,0) translate3d(0,-100%,0);
	transform: translate3d(0,-3em,0) translate3d(0,-100%,0);
}

.content__item[data-category='1'] .content__item-title {
	color: #00A1db;
}

.content__item[data-category='2'] .content__item-title {
	color: #6584c7;
}

.content__item[data-category='3'] .content__item-title {
	color: #dc4b7c;
}

.content__item[data-category='4'] .content__item-title {
	color: #8d65e0;
}

.content__item--hover .content__item-title {
	opacity: 1;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
}

.content__item--current .content__item-title {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

.content__item-details {
	opacity: 0;
	margin: 0 auto;
	max-width: 50vmax;
}

.content__item--current .content__item-details {
	opacity: 1;
}

.content__meta {
	margin: 0;
	font-size: 0.85em;
	line-height: 1.5;
}

.content__meta-item {
	display: inline-block;
	padding: 0 0.25em;
	color: ;
}

.content__meta .icon {
	display: inline-block;
	vertical-align: middle;
}

.content__desc {
	text-align: left;
	margin: 7vmin 0 0 0;
}

.content__button {
	position: absolute;
	top: -100%;
	right: 0;
	-webkit-transition: opacity 0.3s 0.7s;
	transition: opacity 0.3s 0.7s;
}

.content__button--hidden {
	pointer-events: none;
	opacity: 0;
	-webkit-transition: none;
	transition: none;
}

/* Spaces list (sidebar) */

.spaces-list {
	position: absolute;
	top: 0;
	right: 0;
	width: 300px;
	min-height: 100vh;
	padding: 5em 0 1em;
	background: #fff;
}

.search {
	position: fixed;
	z-index: 100;
	top: 0;
	right: 0;
	left: calc(100vw - 300px);
}

.search__input {
	width: 100%;
	padding: 1.315em 2em;
	color: #fff;
	border: 0;
	background: #515158;
	border-radius: 0;
}

.search__input:focus {
	outline: none;
}

.label {
	position: absolute;
	top: 4em;
	right: 0;
}

.label__text {
	font-size: 0.85em;
	line-height: 1;
	display: block;
	padding: 1em;
	color: #e4e4e4;
}

.label__checkbox {
	position: absolute;
	z-index: 10;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	cursor: pointer;
	opacity: 0;
}

.label__checkbox:checked + .label__text {
	color: #515158;
}

.list {
	margin: 0 0 2em;
	padding: 0 1em 1em 2em;
	list-style: none;
}

.list__item {
	font-size: 1.05em;
	line-height: 1;
	position: relative;
	display: block;
}

.list__item:first-child {
	margin-top: 2em;
}

.grouped-by-category [data-category='1']:first-child,
.grouped-by-category :not([data-category='1']) + [data-category='1'],
.grouped-by-category [data-category='2']:first-child,
.grouped-by-category :not([data-category='2']) + [data-category='2'],
.grouped-by-category [data-category='3']:first-child,
.grouped-by-category :not([data-category='3']) + [data-category='3'],
.grouped-by-category [data-category='4']:first-child,
.grouped-by-category :not([data-category='4']) + [data-category='4'] {
	margin-top: 4em;
}

.grouped-by-category [data-category='1']:first-child::before,
.grouped-by-category :not([data-category='1']) + [data-category='1']::before,
.grouped-by-category [data-category='2']:first-child::before,
.grouped-by-category :not([data-category='2']) + [data-category='2']::before,
.grouped-by-category [data-category='3']:first-child::before,
.grouped-by-category :not([data-category='3']) + [data-category='3']::before,
.grouped-by-category [data-category='4']:first-child::before,
.grouped-by-category :not([data-category='4']) + [data-category='4']::before {
	font-size: 1.25em;
	position: absolute;
	top: -1.75em;
	left: 0;
	color: #c7c7c9;
}

.grouped-by-category [data-category='1']:first-child::before,
.grouped-by-category :not([data-category='1']) + [data-category='1']::before {
	content: 'Rope Works';
	color: #00A1db;
}

.grouped-by-category [data-category='2']:first-child::before,
.grouped-by-category :not([data-category='2']) + [data-category='2']::before {
	content: 'Crane Team';
	color: #6584c7;
}

.grouped-by-category [data-category='3']:first-child::before,
.grouped-by-category :not([data-category='3']) + [data-category='3']::before {
	content: 'RTG Team';
	color: #dc4b7c;
}

.grouped-by-category [data-category='4']:first-child::before,
.grouped-by-category :not([data-category='4']) + [data-category='4']::before {
	content: 'Washing Area';
	color: #8d65e0;
}

.list__item::after {
	content: 'L' attr(data-level) ' / ' attr(data-space);
	font-size: 0.65em;
	line-height: 3;
	position: absolute;
	top: 0;
	right: 0;
	padding: 0 0.5em;
	pointer-events: none;
	color: #c7c7c9;
}

.list__link {
	font-size: 0.85em;
	display: block;
	padding: 0.5em 0.5em 0.5em 0;
}

.list__item--active .list__link,
.list__link:hover {
	color: #515158;
}

/* Pins */
.level__pins {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	pointer-events: none;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.level__pins--active {
	pointer-events: auto;
}

.pin {
	position: absolute;
	width: 5.5vmin;
	height: 8.25vmin;
	margin: -8.25vmin 0 0 -2.25vmin; /* let the bottom tip be the reference point for individual coordinates */
	-webkit-transform: rotateZ(-20deg) rotateZ(45deg) rotateX(-70deg);
	transform: rotateZ(-20deg) rotateZ(45deg) rotateX(-70deg);
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.pin__icon {
	position: relative;
	display: block;
	width: 100%;
	height: 100%;
	opacity: 0;
	-webkit-transform: translate3d(0,-100px,0);
	transform: translate3d(0,-100px,0);
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
	transition: opacity 0.3s, transform 0.3s;
	-webkit-transition-timing-function: cubic-bezier(0.2,1,0.3,1);
	transition-timing-function: cubic-bezier(0.2,1,0.3,1);
}

.level__pins--active .pin__icon {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

.pin:nth-child(2) .pin__icon {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}
.pin:nth-child(3) .pin__icon {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}
.pin:nth-child(4) .pin__icon {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}
.pin:nth-child(5) .pin__icon {
	-webkit-transition-delay: 0.2s;
	transition-delay: 0.2s;
}
.pin:nth-child(6) .pin__icon {
	-webkit-transition-delay: 0.25s;
	transition-delay: 0.25s;
}
.pin:nth-child(7) .pin__icon {
	-webkit-transition-delay: 0.3s;
	transition-delay: 0.3s;
}
.pin:nth-child(8) .pin__icon {
	-webkit-transition-delay: 0.35s;
	transition-delay: 0.35s;
}
.pin:nth-child(9) .pin__icon {
	-webkit-transition-delay: 0.4s;
	transition-delay: 0.4s;
}

.pin[data-category='1'] .icon--pin {
	fill: #00A1db;
}
.pin[data-category='2'] .icon--pin {
	fill: #6584c7;
}
.pin[data-category='3'] .icon--pin {
	fill: #dc4b7c;
}
.pin[data-category='4'] .icon--pin {
	fill: #8d65e0;
}

.pin--active .icon--pin {
	stroke: #515158;
	stroke-width: 15px;
}

.icon--pin {
	width: 100%;
	height: 100%;
}

.icon--logo {
	position: absolute;
	top: 11%;
	left: 25%;
	width: 50%;
	height: 50%;
	fill: white;
	fill-opacity: 0.6;
	-webkit-transition: fill-opacity 0.3s;
	transition: fill-opacity 0.3s;
}

.pin--active .icon--logo,
.pin:hover .icon--logo {
	fill-opacity: 1;
}

/* Pins for floor 1 */
.pin--1-1 { top: 60vmin; left: 8vmin; }
.pin--1-2 { top: 15vmin; left: 15vmin; }
.pin--1-3 { top: 15vmin; left: 88vmin; }
.pin--1-4 { top: 40vmin; left: 77vmin; }
.pin--1-5 { top: 33vmin; left: 38vmin; }
.pin--1-6 { top: 6vmin; left: 27vmin; }
.pin--1-7 { top: 36vmin; left: 61vmin; }
.pin--1-8 { top: 9vmin; left: 59vmin; }
.pin--1-9 { top: 8vmin; left: 51vmin; }

/* Pins for floor 2 */
.pin--2-1 { top: 7vmin; left: 22vmin; }
.pin--2-2 { top: 39vmin; left: 5vmin; }
.pin--2-3 { top: 21vmin; left: 84vmin; }
.pin--2-4 { top: 39vmin; left: 53vmin; }
.pin--2-5 { top: 14vmin; left: 50vmin; }
.pin--2-6 { top: 60vmin; left: 15vmin; }
.pin--2-7 { top: 34vmin; left: 37vmin; }
.pin--2-8 { top: 52vmin; left: 74vmin; }

/* Pins for floor 3 */
.pin--3-1 { top: 17vmin; left: 15vmin; }
.pin--3-2 { top: 42vmin; left: 5vmin; }
.pin--3-3 { top: 19vmin; left: 85vmin; }
.pin--3-4 { top: 61vmin; left: 57vmin; }
.pin--3-5 { top: 58vmin; left: 25vmin; }
.pin--3-6 { top: 30vmin; left: 57vmin; }
.pin--3-7 { top: 32vmin; left: 37vmin; }

/* Pins for floor 4 */
.pin--4-1 { top: 55vmin; left: 21vmin; }
.pin--4-2 { top: 18vmin; left: 20vmin; }
.pin--4-3 { top: 21vmin; left: 88vmin; }
.pin--4-4 { top: 52vmin; left: 74vmin; }
.pin--4-5 { top: 33vmin; left: 38vmin; }
.pin--4-6 { top: 39vmin; left: 56vmin; }
.pin--4-7 { top: 58vmin; left: 10vmin; }

/* Mobile compatability */
.open-search,
.close-search {
	display: none;
}

body #cdawrap {
	right: auto;
	top: auto;
	bottom: 10px;
	left: 10px;
	background: rgba(255,255,255,0.3);
	border-color: #515158;
}

@media screen and (max-width: 65.625em), screen and (max-height: 40.625em) {
	.main {
		width: 100vw;
	}
	.spaces-list,
	.search {
		width: 100vw;
		right: 100%;
		left: auto;
	}
	.spaces-list--open,
	.spaces-list--open .search {
		right: 0;
	}
	.open-search,
	.close-search {
		position: absolute;
		display: block;
		top: 0;
		right: 0;
		z-index: 1000;
	}
	.mallnav {
		top: 4em;
	}
	.container {
		overflow: hidden;
	}
	.container--overflow {
		overflow: auto;
	}
	.content__item {
		overflow: auto;
	}
	.codrops-header {
		padding-right: 4em;
		text-align: left;
	}
}
	</style>
</head>
<body>
		<svg class="hidden">
			<defs>
				<symbol id="icon-pin" viewBox="0 0 200 300">
					<title>pin</title>
					<path d="M100,21.78A85,85,0,0,0,15.18,106.6c0,18.85,12.08,49.52,36.76,93.9,17.48,31.36,34.7,57.49,35.47,58.6L100,278.22l12.59-19.11c0.69-1.11,18-27.25,35.47-58.6,24.76-44.38,36.76-75.06,36.76-93.9A85,85,0,0,0,100,21.78Z" />
				</symbol>
				<symbol id="icon-search" viewBox="0 0 32 32">
					<title>search</title>
					<path class="path1" d="M26.819 24.917c0.262 0.262 0.262 0.688 0 0.951l-0.951 0.951c-0.263 0.262-0.688 0.262-0.951 0l-6.656-6.656c-0.072-0.072-0.12-0.158-0.153-0.248-1.365 0.998-3.041 1.593-4.862 1.593-4.562 0-8.261-3.699-8.261-8.261s3.699-8.261 8.261-8.261c4.562 0 8.261 3.699 8.261 8.261 0 1.821-0.595 3.497-1.593 4.862 0.091 0.032 0.176 0.080 0.248 0.153l6.656 6.656zM13.246 7.739c-3.041 0-5.508 2.466-5.508 5.508s2.466 5.508 5.508 5.508 5.508-2.466 5.508-5.508c0-3.041-2.466-5.508-5.508-5.508z"></path>
				</symbol>
				<symbol id="icon-stack" viewBox="0 0 32 32">
					<title>stack</title>
					<path class="path1" d="M29.143 11.071l-13.143-6.571-13.143 6.571 13.143 6.571 13.143-6.571zM16 6.681l8.781 4.39-8.781 4.39-8.781-4.39 8.781-4.39zM26.51 14.684l2.633 1.316-13.143 6.571-13.143-6.571 2.633-1.316 10.51 5.255zM26.51 19.612l2.633 1.316-13.143 6.571-13.143-6.571 2.633-1.316 10.51 5.255z"></path>
				</symbol>
				<symbol id="icon-cross" viewBox="0 0 24 24">
					<title>cross</title>
					<path class="path1" d="M18.016 5.125q0.369 0 0.614 0.245t0.245 0.614q0 0.363-0.248 0.611l-5.411 5.405 5.411 5.405q0.248 0.248 0.248 0.611 0 0.369-0.245 0.614t-0.614 0.245q-0.363 0-0.611-0.248l-5.405-5.411-5.405 5.411q-0.248 0.248-0.611 0.248-0.369 0-0.614-0.245t-0.245-0.614q0-0.363 0.248-0.611l5.411-5.405-5.411-5.405q-0.248-0.248-0.248-0.611 0-0.369 0.245-0.614t0.614-0.245q0.363 0 0.611 0.248l5.405 5.411 5.405-5.411q0.248-0.248 0.611-0.248z"></path>
				</symbol>
				<symbol id="" viewBox="0 0 32 32">
					<title>droplet</title>
					<path class="path1" d="M27.020 14.786c-2.055-5.732-6.41-10.88-11.020-14.786-4.61 3.907-8.965 9.054-11.020 14.786-1.271 3.545-1.396 7.393 0.393 10.794 2.058 3.911 6.207 6.42 10.626 6.42s8.569-2.509 10.626-6.42c1.79-3.401 1.664-7.249 0.393-10.794zM23.086 23.717c-1.369 2.602-4.15 4.283-7.086 4.283-1.723 0-3.391-0.579-4.753-1.583 0.414 0.054 0.832 0.083 1.254 0.083 3.67 0 7.146-2.1 8.856-5.351 1.402-2.665 1.281-5.433 0.746-7.636 0.455 0.88 0.841 1.756 1.151 2.623 0.706 1.971 1.251 4.886-0.168 7.581z"></path>
				</symbol>
				<symbol id="icon-shoe" viewBox="0 0 32 32">
					<title>shoe</title>
					<path class="path1" d="M13.536 8.562c-0.163 0.116-0.324 0.233-0.482 0.351v0l1.324 2.035-1.072 0.698-1.27-1.953c-0.181 0.141-0.359 0.279-0.534 0.413l1.214 1.865-1.072 0.698-1.177-1.809c-0.194 0.13-0.384 0.25-0.571 0.356v0l1.157 1.779-1.072 0.698-1.302-2.002c-0.119 0.020-0.236 0.031-0.352 0.031-0.47 0-0.896 0-1.279 0v0 0.64c0 0.229 0.065 0.618 0.252 0.993 0.295 0.59 0.798 0.926 1.666 0.926h7.035c0.811 0 1.387 0.384 1.691 0.993 0.117 0.235 0.18 0.463 0.209 0.664 2.51-0.414 5.775-0.332 5.775-0.332h8.957c-0.044-1.806-0.191-4.242-0.625-6.124l-0.204 0.134c-0.117 0.117-0.33 0.308-0.636 0.549-0.501 0.395-1.084 0.789-1.745 1.156-1.888 1.049-4.031 1.679-6.386 1.679-3.711 0-6.13-2.016-7.469-4.55-0.055-0.104-0.16-0.39-0.351-0.937v0c-0.207 0.109-0.411 0.224-0.611 0.345l1.284 1.974-1.072 0.698-1.28-1.968zM5.767 11.721c-0.849 0-1.272 0-1.272 0-2.123 0-3.844 1.726-3.844 3.849 0 0.437 0.055 0.862 0.159 1.267v0h11.353c1.456 0 2.904-0.314 4.477-0.649-0.002-0.073-0.028-0.215-0.092-0.344-0.095-0.19-0.239-0.286-0.547-0.286h-7.035c-1.37 0-2.306-0.624-2.811-1.633-0.292-0.584-0.387-1.155-0.387-1.565v-0.64zM1.333 18.117c0.886 1.529 2.544 2.558 4.437 2.558h24.295c1.415 0 2.576-1.151 2.569-2.548 0 0 0.015-0.499 0.013-1.289h-8.973c0 0-3.837 0-6.008 0.439-1.918 0.388-3.702 0.84-5.504 0.84h-10.829zM16.39 6.995c0.688-0.244 1.41-0.391 2.169-0.391 1.919 0 1.279 2.522 5.117 2.522s3.48-2.522 6.396-2.522c0.684 0 1.188 0.633 1.559 1.603l-0.634 0.423c-0.18 0.163-0.357 0.321-0.621 0.53-0.449 0.354-0.975 0.71-1.573 1.042-1.709 0.95-3.643 1.518-5.765 1.518-3.146 0-5.198-1.71-6.338-3.868-0.011-0.022-0.145-0.389-0.307-0.857v0z"></path>
				</symbol>
				<symbol id="icon-apple" viewBox="0 0 32 32">
					<title>apple</title>
					<path class="path1" d="M20.753 7.927c1.367-0.729 2.455-1.972 3.11-3.365 0.567-1.207 0.852-2.536 0.814-3.871-0.011-0.377-0.306-0.692-0.692-0.692-0.103 0-0.203 0.025-0.294 0.068-0.033 0.005-0.065 0.014-0.097 0.025-0.927 0.34-1.875 0.616-2.774 1.030-0.893 0.411-1.689 0.998-2.445 1.621-1.068 0.88-2.021 1.938-2.691 3.152-0.45-0.847-0.988-1.647-1.615-2.387-0.821-0.968-1.839-1.792-2.938-2.422-0.654-0.375-1.509-0.158-1.892 0.496-0.378 0.646-0.157 1.518 0.496 1.892 0.349 0.2 0.686 0.42 1.009 0.659 0.583 0.469 1.111 1.002 1.579 1.585 0.534 0.717 0.977 1.496 1.338 2.313 0.309 0.763 0.549 1.551 0.725 2.354 0.613 0.279 1.153 0.612 1.615 0.996 0.365-0.302 0.777-0.572 1.234-0.81-0.108-0.649-0.252-1.291-0.436-1.92 1.358 0.157 2.726-0.072 3.954-0.727zM16.902 7.285c-0.011-0.002-0.023-0.003-0.034-0.005-0.066-0.010-0.133-0.022-0.199-0.034-0.036-0.006-0.071-0.013-0.106-0.020 0.003-0.008 0.006-0.015 0.009-0.021 0.037-0.084 0.075-0.166 0.114-0.249 0.197-0.411 0.435-0.801 0.696-1.174 0.052-0.074 0.106-0.147 0.16-0.219 0.015-0.020 0.054-0.070 0.062-0.081 0.034-0.043 0.069-0.086 0.104-0.129 0.152-0.185 0.311-0.364 0.475-0.539 0.315-0.336 0.651-0.651 1.001-0.951 0.155-0.133 0.313-0.261 0.474-0.387 0.023-0.018 0.058-0.045 0.068-0.052 0.043-0.033 0.087-0.065 0.13-0.097 0.101-0.075 0.203-0.148 0.305-0.22 0.398-0.281 0.813-0.528 1.252-0.74 0.103-0.050 0.207-0.096 0.311-0.142 0.006-0.003 0.012-0.005 0.017-0.007 0.007-0.003 0.014-0.006 0.023-0.010 0.051-0.021 0.102-0.041 0.153-0.061 0.22-0.087 0.443-0.166 0.666-0.243 0.226-0.078 0.452-0.154 0.679-0.231-0.006 0.061-0.012 0.121-0.019 0.182-0.001 0.006-0.002 0.015-0.003 0.025-0.005 0.037-0.011 0.074-0.017 0.111-0.014 0.091-0.031 0.181-0.049 0.272-0.038 0.195-0.085 0.388-0.137 0.579-0.048 0.175-0.104 0.349-0.165 0.52-0.030 0.085-0.062 0.17-0.095 0.254-0.006 0.015-0.012 0.029-0.018 0.044s-0.042 0.099-0.053 0.123c-0.152 0.34-0.333 0.667-0.534 0.98-0.082 0.127-0.169 0.251-0.259 0.373 0.002-0.005-0.105 0.133-0.129 0.163-0.065 0.079-0.133 0.156-0.201 0.232-0.226 0.25-0.474 0.481-0.736 0.692-0.001-0.001-0.134 0.101-0.165 0.123-0.071 0.050-0.143 0.099-0.216 0.146-0.158 0.103-0.321 0.196-0.488 0.284-0.077 0.040-0.156 0.078-0.235 0.115-0.035 0.016-0.071 0.032-0.106 0.048-0.003 0.001-0.006 0.002-0.009 0.004-0.177 0.072-0.358 0.133-0.541 0.186-0.229 0.067-0.463 0.117-0.699 0.156-0.016 0.003-0.031 0.005-0.047 0.007-0.059 0.007-0.118 0.013-0.177 0.018-0.139 0.013-0.279 0.019-0.418 0.021-0.272 0.005-0.545-0.011-0.816-0.041-0.011-0.001-0.021-0.003-0.028-0.003z"></path>
					<path class="path2" d="M14.605 11.645c-1.456-0.857-3.352-1.192-4.905-1.192-0.002 0-0.004 0-0.006 0-5.165 0-7.662 2.252-7.961 8.273-0.249 6.029 4.731 13.275 12.225 13.275 0.006 0 0.012 0 0.018 0 0.712 0 1.455-0.586 2.023-1.037 0.588 0.451 1.313 1.037 2.024 1.037 0.006 0 0.012 0 0.018 0 7.495 0 12.476-7.245 12.227-13.275-0.299-6.021-2.797-8.273-7.963-8.273-0.002 0-0.004 0-0.006 0-1.559 0-3.458 0.337-4.918 1.202-0-0.002-0-0.003-0.001-0.005-0.531 0.315-1.004 0.698-1.382 1.159-0.378-0.466-0.856-0.853-1.394-1.169z"></path>
				</symbol>
				<symbol id="icon-heart" viewBox="0 0 32 32">
					<title>heart</title>
					<path class="path1" d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</symbol>
				<symbol id="icon-wrench" viewBox="0 0 32 32">
					<title>wrench</title>
					<path class="path1" d="M31.342 25.559l-14.392-12.336c0.67-1.259 1.051-2.696 1.051-4.222 0-4.971-4.029-9-9-9-0.909 0-1.787 0.135-2.614 0.386l5.2 5.2c0.778 0.778 0.778 2.051 0 2.828l-3.172 3.172c-0.778 0.778-2.051 0.778-2.828 0l-5.2-5.2c-0.251 0.827-0.386 1.705-0.386 2.614 0 4.971 4.029 9 9 9 1.526 0 2.963-0.38 4.222-1.051l12.336 14.392c0.716 0.835 1.938 0.882 2.716 0.104l3.172-3.172c0.778-0.778 0.731-2-0.104-2.716z"></path>
				</symbol>
				<symbol id="icon-appleheart" viewBox="0 0 32 32">
					<title>appleheart</title>
					<path class="path1" d="M17.428 8.953h0c1.078 0 4.549-0.553 5.979-1.799 1.455-1.269 2.040-2.842 2.274-3.938 0.226-1.061 0.252-2.369-0.202-2.9-0.193-0.225-0.501-0.317-1.063-0.317-1.354 0-4.171 0.56-5.966 2.062-1.551 1.298-2.179 3.505-2.246 5-0.054 1.219 0.266 1.539 0.371 1.644 0.217 0.217 0.539 0.247 0.854 0.247z"></path>
					<path class="path2" d="M29.197 17.412c-0.056-2.204-0.93-4.165-2.595-5.831-1.25-1.25-2.68-1.858-4.371-1.858-1.509 0-2.912 0.495-4.151 0.933-0.803 0.284-1.563 0.552-2.080 0.574-0.517-0.022-1.277-0.29-2.082-0.574-1.238-0.437-2.64-0.933-4.149-0.933-1.691 0-3.121 0.608-4.371 1.858-1.665 1.665-2.538 3.627-2.595 5.831-0.047 1.84 0.47 3.5 0.847 4.712l0.038 0.124c0.374 1.203 1.192 3.532 2.471 5.62 1.68 2.742 3.579 4.132 5.644 4.132 2.441 0 3.289-0.437 3.909-0.757 0.199-0.103 0.236-0.119 0.291-0.123 0.099 0.007 0.155 0.031 0.396 0.149 0.633 0.309 1.499 0.731 3.797 0.731 2.065 0 3.964-1.39 5.644-4.132 1.279-2.088 2.097-4.417 2.47-5.618l0.038-0.124c0.378-1.213 0.895-2.874 0.848-4.713zM21.117 21.223c-0.807 1.228-4.492 4.302-5.038 4.302-0.54 0-4.247-3.085-5.049-4.302-0.402-0.61-0.687-1.282-0.639-2.167 0.084-1.565 1.364-2.858 2.931-2.858 1.611 0 2.403 1.394 2.752 1.394 0.326 0 1.21-1.394 2.752-1.394 1.568 0 2.847 1.293 2.931 2.858 0.047 0.884-0.237 1.554-0.64 2.167z"></path>
				</symbol>
				<symbol id="icon-avocado" viewBox="0 0 32 32">
					<title>avocado</title>
					<path class="path1" d="M17.347 5.581c-3.514 1.108-7.252 3.231-9.302 5.283-3.885 3.888-4.108 9.987-0.496 13.595s9.71 3.379 13.595-0.509c2.050-2.052 4.17-5.792 5.275-9.306 1.247-3.965 1.088-7.112-0.436-8.634s-4.672-1.679-8.636-0.428zM17.627 21.605c-2.045 1.892-5.236 1.768-7.128-0.278s-1.767-5.236 0.278-7.128c2.045-1.892 5.236-1.767 7.128 0.278s1.767 5.237-0.278 7.128z"></path>
					<path class="path2" d="M31.258 4.674c-0.376-0.944-0.896-1.752-1.545-2.4-1.489-1.488-3.804-2.274-6.695-2.274-1.857 0-3.924 0.317-6.143 0.943-2.369 0.667-4.825 1.673-7.104 2.909-2.304 1.25-4.252 2.642-5.635 4.025-1.346 1.347-2.389 2.921-3.099 4.676-0.685 1.694-1.032 3.484-1.031 5.32s0.349 3.626 1.036 5.319c0.711 1.755 1.755 3.327 3.103 4.674 1.346 1.345 2.919 2.39 4.673 3.099 1.693 0.685 3.481 1.035 5.316 1.035 0 0 0.001 0 0.001 0 1.837 0 3.628-0.351 5.322-1.037 1.756-0.711 3.329-1.757 4.677-3.105 1.382-1.384 2.772-3.334 4.020-5.639 1.234-2.28 2.237-4.738 2.902-7.107 0.774-2.758 1.071-5.254 0.882-7.419-0.097-1.114-0.326-2.129-0.68-3.018zM28.541 14.405c-0.614 2.186-1.542 4.458-2.685 6.57-1.113 2.057-2.381 3.848-3.57 5.038-2.173 2.175-5.067 3.375-8.151 3.375-0 0-0.001 0-0.001 0-3.080 0-5.972-1.198-8.143-3.367-2.174-2.172-3.371-5.066-3.373-8.148s1.194-5.976 3.365-8.15c1.189-1.191 2.977-2.461 5.032-3.576 2.111-1.145 4.382-2.076 6.567-2.691 1.989-0.561 3.818-0.845 5.435-0.845 2.183 0 3.86 0.522 4.848 1.51 1.742 1.74 1.994 5.585 0.675 10.283z"></path>
				</symbol>
				<symbol id="icon-star" viewBox="0 0 32 32">
					<title>star</title>
					<path class="path1" d="M16 23.808l-10.038 6.692 4.462-11.154-10.038-6.692h11.154l4.462-11.154 4.462 11.154h11.154l-10.038 6.692 4.462 11.154z"></path>
				</symbol>
				<symbol id="icon-bananas" viewBox="0 0 32 32">
					<title>bananas</title>
					<path class="path1" d="M11.952 22.366c1.323-0.015 2.625-0.214 3.87-0.595 1.292-0.395 2.489-0.973 3.56-1.719 1.63-1.136 2.951-2.583 3.924-4.302 0.062-0.122 0.125-0.25 0.194-0.391 0.332-0.678 0.637-1.408 0.882-2.11 0.060-0.172 0.113-0.376 0.169-0.592 0.161-0.62 0.373-1.438 0.959-2.141l-0.262-2.489c-0.051-0.487 0.011-1.007 0.175-1.463 0.235-0.654 0.677-1.158 1.244-1.421 0.18-0.083 0.375-0.126 0.573-0.126 0.010 0 0.020 0 0.030 0 0.045 0.001 0.3 0.008 0.665 0.047 0.143-0.865 0.301-1.819 0.316-1.913-0.333-1.136-2.583-1.84-2.69-1.873-0.403 0.070-0.873 0.526-0.995 1.268l-0.518 3.136-0.009 0.004c-0.004 0.002-0.008 0.003-0.012 0.005l-0.005 0.002c-0.059 0.024-0.129 0.053-0.2 0.089-0.645 0.33-0.989 0.928-1.322 1.507-0.12 0.209-0.244 0.425-0.38 0.621-0.453 0.657-0.976 1.325-1.513 1.931-0.116 0.131-0.22 0.248-0.325 0.364-1.546 1.557-3.384 2.72-5.463 3.456-3.015 1.067-6.427 1.063-9.606-0.012-0.201-0.068-0.404-0.141-0.603-0.218-0.218-0.084-0.489-0.188-0.778-0.286-0.5-0.169-1.139-0.351-1.755-0.351-0.382 0-0.755 0.070-1.081 0.255-0.281 0.16-0.51 0.397-0.682 0.706-0.674 1.213-0.153 2.2 0.51 3.087 0.603 0.806 1.293 1.515 2.051 2.107 1.451 1.134 3.070 2.007 4.811 2.595 1.397 0.472 2.832 0.746 4.266 0.822z"></path>
					<path class="path2" d="M30.706 10.861c0 0-0.342-3.254-0.355-3.378-0.459-0.749-1.847-0.991-2.604-1.068-0.006-0.001-0.011-0.001-0.017-0.002s-0.011-0.001-0.017-0.002c-0.285-0.028-0.472-0.032-0.472-0.032-0.521 0.241-0.692 0.979-0.637 1.505l0.331 3.151c-0.003 0.003-0.007 0.005-0.010 0.007l-0.005 0.004c-0.051 0.039-0.111 0.086-0.17 0.14-0.538 0.492-0.712 1.163-0.88 1.812-0.060 0.233-0.123 0.474-0.201 0.698-0.262 0.753-0.589 1.535-0.945 2.261-0.077 0.156-0.146 0.297-0.217 0.437-0.422 0.748-0.903 1.45-1.442 2.103-0.022 0.027-0.045 0.054-0.067 0.081-0.024 0.028-0.048 0.057-0.072 0.085-0.803 0.944-1.727 1.782-2.765 2.506-2.389 1.664-5.331 2.56-8.367 2.56-0.295 0-0.591-0.008-0.888-0.026-0.212-0.012-0.427-0.029-0.638-0.050-0.232-0.023-0.522-0.052-0.826-0.069-0.168-0.010-0.35-0.017-0.539-0.017-0.775 0-1.672 0.12-2.234 0.682-0.231 0.231-0.39 0.523-0.475 0.869-0.33 1.358 0.438 2.176 1.317 2.858 0.796 0.618 1.651 1.119 2.54 1.489 1.702 0.709 3.496 1.122 5.332 1.227 0.311 0.018 0.622 0.027 0.931 0.027 3.604 0 7.066-1.206 9.837-3.442 4.403-3.554 6.563-9.222 5.637-14.794-0.11-0.664-0.504-1.253-1.083-1.624z"></path>
				</symbol>
				<symbol id="icon-books" viewBox="0 0 36 32">
					<title>books</title>
					<path class="path1" d="M7 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM6 10h-4v-2h4v2z"></path>
					<path class="path2" d="M17 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM16 10h-4v-2h4v2z"></path>
					<path class="path3" d="M23.909 5.546l-5.358 2.7c-0.491 0.247-0.691 0.852-0.443 1.343l8.999 17.861c0.247 0.491 0.852 0.691 1.343 0.443l5.358-2.7c0.491-0.247 0.691-0.852 0.443-1.343l-8.999-17.861c-0.247-0.491-0.852-0.691-1.343-0.443z"></path>
				</symbol>
				<symbol id="icon-cake" viewBox="0 0 32 32">
					<title>cake</title>
					<path class="path1" d="M30.358 15.146c-0.563-1.465-1.179-3.082-2.169-4.321-0.748-0.937-2.151-1.748-3.394-1.558-0.016 0.002-0.12 0.025-0.3 0.065 0.045 0.311 0.068 0.626 0.068 0.944 0 0.884-0.174 1.743-0.516 2.552-0.33 0.781-0.803 1.482-1.404 2.083s-1.302 1.074-2.083 1.404c-0.81 0.342-1.668 0.516-2.552 0.516s-1.743-0.174-2.552-0.516c-0.781-0.33-1.482-0.803-2.083-1.404s-1.074-1.302-1.404-2.083c-0.081-0.192-0.153-0.387-0.215-0.584-5.152 1.182-9.928 2.279-10.207 2.344-0.246 0.057-0.545 0.091-0.766 0.209-0.186 0.099-0.32 0.257-0.32 0.539v12.859c0 0.507 0.536 0.974 1.196 1.042l26.282 2.735c1.977 0.206 3.582-0.86 3.582-2.382 0-0.961-0.639-1.87-1.608-2.465 0.969-0.392 1.608-1.17 1.608-2.129s-0.639-1.869-1.607-2.462c2.858-1.164 1.243-5.312 0.445-7.391zM24.063 29.481l-21.077-2.195v-2.107l21.077 2.193c1.977 0.206 3.582 0.844 3.582 1.426s-1.605 0.889-3.582 0.683zM24.063 25.282l-21.077-2.195v-2.108l21.077 2.196c1.977 0.206 3.582 0.844 3.582 1.426s-1.605 0.887-3.582 0.681zM24.063 21.083l-21.077-2.193v-2.108l21.077 2.193c1.977 0.206 3.582 0.846 3.582 1.427 0 0.584-1.605 0.887-3.582 0.681z"></path>
					<path class="path2" d="M13.472 10.278c0 0.531 0.092 1.041 0.259 1.514 0.623 1.76 2.302 3.020 4.275 3.020 2.505 0 4.535-2.030 4.535-4.535 0-0.167-0.009-0.333-0.027-0.495-0.247-2.271-2.171-4.039-4.508-4.039-0.239 0-0.473 0.019-0.702 0.054-0.155-0.317-0.327-0.628-0.513-0.93-0.187-0.305-0.387-0.602-0.597-0.891-0.257-0.354-0.528-0.696-0.805-1.024-0.516-0.611-1.077-1.189-1.693-1.7-0.54-0.448-1.113-0.879-1.758-1.164-0.365-0.161-0.783-0.11-1.001 0.262-0.184 0.315-0.102 0.839 0.262 1.001 0.303 0.134 0.59 0.301 0.864 0.486 0.079 0.054 0.158 0.108 0.235 0.164 0.028 0.021 0.129 0.097 0.155 0.117 0.117 0.093 0.232 0.187 0.345 0.284 0.298 0.257 0.584 0.528 0.857 0.811 0.288 0.298 0.565 0.607 0.827 0.928 0.075 0.091 0.148 0.183 0.221 0.276 0 0 0 0 0.001 0.001 0.003 0.003 0.005 0.007 0.009 0.011 0.030 0.040 0.061 0.081 0.091 0.121 0.001 0.002 0.002 0.003 0.003 0.005 0.119 0.16 0.236 0.323 0.348 0.488 0.078 0.115 0.155 0.232 0.23 0.35 0.147 0.229 0.286 0.463 0.417 0.702 0.031 0.057 0.061 0.113 0.091 0.17-1.441 0.76-2.423 2.272-2.423 4.014z"></path>
				</symbol>
				<symbol id="icon-cinema" viewBox="0 0 32 32">
					<title>cinema</title>
					<path class="path1" d="M6.861 13.529c-0.058-0.489-0.231-0.942-0.493-1.333l23.413-7.817-1.229-3.681c-0.179-0.535-0.757-0.824-1.292-0.645l-25.468 8.503c-0.535 0.178-0.824 0.757-0.645 1.292l0.603 1.805c-0.602 0.559-0.979 1.355-0.979 2.239 0 1.145 0.633 2.144 1.567 2.667v14.42c0 0.564 0.458 1.021 1.021 1.021h26.85c0.563 0 1.021-0.457 1.021-1.021v-17.45h-24.368zM21.784 3.082l3.1-1.035-0.746 3.015-3.1 1.035 0.746-3.015zM14.125 5.639l3.1-1.035-0.746 3.015-3.1 1.035 0.746-3.015zM3.827 15.449c-0.858 0-1.557-0.698-1.557-1.557s0.699-1.557 1.557-1.557c0.859 0 1.557 0.698 1.557 1.557s-0.699 1.557-1.557 1.557zM6.467 8.196l3.1-1.035-0.746 3.015-3.1 1.035 0.746-3.015zM9.513 16.977h-3.268l1.662-2.623h3.268l-1.662 2.623zM15.98 14.353h3.268l-1.662 2.623h-3.268l1.662-2.623zM15.178 27.032v-6.92l5.511 3.46-5.511 3.46zM25.66 16.977h-3.268l1.662-2.623h3.268l-1.662 2.623z"></path>
				</symbol>
				<symbol id="icon-tea" viewBox="0 0 32 32">
					<title>tea</title>
					<path class="path1" d="M14.503 32h8.728c5.305 0 5.318 0.010 5.318-5.295v-17.695c0-2.091-0.013-2.075-2.101-2.075h-15.158c-2.108 0-2.095-0.013-2.095 2.075v1.351c-0.498-0.193-1.009-0.305-1.564-0.305-2.311 0-4.18 1.872-4.18 4.183v7.841c0 2.311 1.869 4.18 4.18 4.18 0.554 0 1.066-0.11 1.564-0.302v0.747c0 5.305 0.003 5.295 5.308 5.295zM23.835 10.58c0-0.574 0.471-1.046 1.046-1.046s1.046 0.471 1.046 1.046v15.158c0 0.574-0.471 1.046-1.046 1.046s-1.046-0.471-1.046-1.046v-15.158zM7.634 23.647c-0.87 0-1.56-0.701-1.56-1.567v-7.841c0-0.866 0.694-1.567 1.56-1.567s1.56 0.701 1.56 1.567v7.841c0 0.866-0.691 1.567-1.56 1.567z"></path>
					<path class="path2" d="M13.105 2.985c-0.040-0.030-0.080-0.060-0.12-0.086s-0.080-0.056-0.123-0.083c-0.040-0.027-0.083-0.053-0.123-0.080-0.043-0.027-0.086-0.050-0.126-0.076-0.173-0.103-0.349-0.196-0.534-0.285-0.369-0.173-0.754-0.315-1.152-0.428-0.199-0.056-0.398-0.103-0.601-0.146l-0.126-0.027-0.139-0.030-0.139-0.027-0.063-0.013-0.060-0.013c-0.080-0.017-0.163-0.033-0.246-0.050s-0.169-0.037-0.256-0.053c-0.043-0.010-0.086-0.017-0.126-0.027-0.043-0.010-0.083-0.020-0.126-0.027-0.043-0.010-0.083-0.017-0.126-0.027s-0.083-0.017-0.126-0.027c-0.083-0.020-0.166-0.037-0.249-0.056s-0.163-0.040-0.246-0.056c-0.040-0.010-0.083-0.017-0.123-0.030-0.040-0.010-0.080-0.020-0.12-0.030s-0.080-0.020-0.12-0.027c-0.040-0.010-0.080-0.020-0.12-0.030-0.631-0.153-1.218-0.319-1.73-0.491-0.256-0.086-0.491-0.173-0.704-0.256s-0.398-0.166-0.554-0.242c-0.156-0.073-0.279-0.139-0.365-0.186s-0.133-0.076-0.133-0.076-0.003 0.056 0.013 0.156c0.013 0.1 0.043 0.249 0.106 0.428 0.060 0.179 0.153 0.395 0.282 0.627s0.299 0.478 0.508 0.727c0.209 0.249 0.458 0.501 0.744 0.737s0.601 0.461 0.946 0.664c0.342 0.203 0.714 0.388 1.096 0.541 0.096 0.040 0.193 0.076 0.289 0.113s0.196 0.073 0.295 0.103c0.1 0.033 0.199 0.063 0.299 0.093 0.103 0.030 0.209 0.056 0.312 0.083l0.12 0.030 0.037 0.010 0.139 0.033 0.139 0.030 0.070 0.017 0.083 0.017c0.169 0.033 0.342 0.066 0.508 0.1 0.332 0.063 0.654 0.123 0.969 0.183 0.153 0.030 0.305 0.060 0.455 0.090 0.073 0.017 0.146 0.030 0.216 0.043 0.070 0.017 0.143 0.030 0.209 0.046 0.276 0.060 0.531 0.123 0.764 0.193s0.442 0.146 0.627 0.232c0.183 0.086 0.342 0.183 0.471 0.282 0.033 0.023 0.060 0.050 0.090 0.073 0.027 0.023 0.053 0.050 0.076 0.073s0.046 0.046 0.063 0.070c0.020 0.023 0.037 0.043 0.053 0.060 0.030 0.040 0.053 0.070 0.066 0.093s0.020 0.037 0.020 0.037 0.010-0.010 0.023-0.037c0.013-0.023 0.033-0.060 0.053-0.113 0.010-0.027 0.020-0.053 0.030-0.086s0.017-0.070 0.027-0.106c0.017-0.080 0.027-0.173 0.030-0.279 0.003-0.212-0.040-0.471-0.146-0.75s-0.276-0.571-0.498-0.847c-0.222-0.285-0.498-0.548-0.81-0.78z"></path>
					<path class="path3" d="M14.294 1.208c0.129 0.232 0.299 0.478 0.508 0.727s0.458 0.501 0.744 0.737c0.286 0.236 0.601 0.461 0.946 0.664 0.342 0.203 0.714 0.388 1.096 0.541 0.096 0.040 0.193 0.076 0.289 0.113s0.196 0.073 0.295 0.103c0.1 0.033 0.199 0.063 0.299 0.093 0.103 0.030 0.209 0.056 0.312 0.083l0.119 0.030 0.037 0.010 0.139 0.033 0.139 0.030 0.070 0.017 0.083 0.017c0.169 0.033 0.342 0.066 0.508 0.1 0.332 0.063 0.654 0.123 0.969 0.183 0.153 0.030 0.305 0.060 0.455 0.090 0.073 0.017 0.146 0.030 0.216 0.043 0.070 0.017 0.143 0.030 0.209 0.046 0.276 0.060 0.531 0.123 0.764 0.193s0.442 0.146 0.627 0.232c0.183 0.086 0.342 0.183 0.471 0.282 0.033 0.023 0.060 0.050 0.090 0.073 0.027 0.023 0.053 0.050 0.076 0.073s0.046 0.046 0.063 0.070c0.020 0.023 0.037 0.043 0.053 0.060 0.030 0.040 0.053 0.070 0.066 0.093s0.020 0.037 0.020 0.037 0.010-0.010 0.023-0.037c0.013-0.023 0.033-0.060 0.053-0.113 0.010-0.027 0.020-0.053 0.030-0.086s0.017-0.070 0.027-0.106c0.017-0.080 0.027-0.173 0.030-0.279 0.003-0.212-0.040-0.471-0.146-0.75s-0.276-0.571-0.498-0.847c-0.222-0.276-0.501-0.538-0.813-0.77-0.040-0.030-0.080-0.060-0.12-0.086s-0.080-0.056-0.123-0.083c-0.040-0.027-0.083-0.053-0.123-0.080-0.043-0.027-0.086-0.050-0.126-0.076-0.173-0.103-0.349-0.196-0.535-0.285-0.369-0.173-0.754-0.315-1.152-0.428-0.199-0.056-0.398-0.103-0.601-0.146l-0.126-0.027-0.139-0.030-0.139-0.027-0.063-0.013-0.060-0.013c-0.080-0.017-0.163-0.033-0.246-0.050s-0.169-0.037-0.256-0.053c-0.043-0.010-0.086-0.017-0.126-0.027-0.043-0.010-0.083-0.020-0.126-0.027-0.043-0.010-0.083-0.017-0.126-0.027s-0.083-0.017-0.126-0.027c-0.083-0.020-0.166-0.037-0.249-0.056s-0.163-0.040-0.246-0.056c-0.040-0.010-0.083-0.017-0.123-0.030-0.040-0.010-0.080-0.020-0.12-0.030s-0.080-0.020-0.119-0.027c-0.040-0.010-0.080-0.020-0.119-0.030-0.631-0.153-1.218-0.319-1.73-0.491-0.256-0.086-0.491-0.173-0.704-0.256s-0.398-0.166-0.554-0.242c-0.156-0.073-0.279-0.139-0.365-0.186s-0.133-0.076-0.133-0.076-0.003 0.056 0.013 0.156c0.013 0.1 0.043 0.249 0.106 0.428 0.063 0.173 0.153 0.388 0.286 0.618z"></path>
				</symbol>
				<symbol id="icon-cupcake" viewBox="0 0 32 32">
					<title>cupcake</title>
					<path class="path3" d="M16.005 1.472c-0.137 0-0.271 0-0.404 0.003l1.117 0.007c-0.236-0.007-0.473-0.010-0.713-0.010z"></path>
				</symbol>
				<symbol id="icon-dress" viewBox="0 0 32 32">
					<title>dress</title>
					<path class="path1" d="M25.243 18.986c-0.846-2.443-1.909-4.553-3.128-6.080h-1.657c1.363 4.51 3.5 5.754 4.786 6.080z"></path>
					<path class="path2" d="M9.874 9.549c0.275 0.56 0.482 1.146 0.625 1.746h11.003c0.142-0.6 0.349-1.186 0.625-1.746l0.001-0.002c0.599-1.22 0.501-2.668-0.257-3.796-0.777-1.158-1.306-3.127-1.364-5.389-0.005-0.201-0.17-0.362-0.371-0.362h-0.829c-0.201 0-0.365 0.159-0.371 0.36-0.092 3.103-1.371 5.564-2.936 5.564s-2.843-2.46-2.936-5.564c-0.006-0.201-0.17-0.36-0.371-0.36h-0.829c-0.201 0-0.366 0.16-0.371 0.362-0.058 2.262-0.587 4.231-1.364 5.389-0.756 1.127-0.855 2.578-0.257 3.796l0.001 0.002z"></path>
					<path class="path3" d="M11.542 12.907h-1.657c-1.22 1.527-2.282 3.638-3.129 6.082 1.29-0.324 3.422-1.567 4.786-6.082z"></path>
					<path class="path4" d="M25.784 20.696c-0.599-0.039-1.465-0.209-2.426-0.76-2.072-1.187-3.61-3.551-4.578-7.029h-5.559c-0.968 3.479-2.507 5.843-4.578 7.029-0.961 0.55-1.827 0.72-2.426 0.76-0.92 3.185-1.49 6.79-1.601 10.348-0.008 0.251 0.086 0.494 0.261 0.674s0.415 0.282 0.665 0.282h20.918c0.251 0 0.491-0.102 0.666-0.282s0.268-0.423 0.261-0.674c-0.111-3.558-0.681-7.163-1.601-10.348z"></path>
				</symbol>
				<symbol id="icon-eggplant" viewBox="0 0 32 32">
					<title>eggplant</title>
					<path class="path1" d="M15.368 28.274c1.893-1.893 4.197-5.618 7.249-10.607 1.074-1.758 2.796-3.385 4.342-4.985-0.263-0.738-0.566-1.651-0.697-2.301-0.064-0.313-0.131-0.721-0.199-1.135-0.384 0.269-0.539 0.354-0.606 0.391-0.707 0.387-1.667 0.778-2.348 1.037-0.158 0.061-0.323 0.091-0.492 0.091-0.441 0-0.849-0.216-1.098-0.573-0.249-0.36-0.3-0.825-0.138-1.243 0.259-0.68 0.653-1.64 1.037-2.348 0.037-0.067 0.121-0.222 0.391-0.606-0.418-0.064-0.822-0.135-1.135-0.199-0.63-0.128-1.502-0.414-2.227-0.67-1.549 1.516-3.183 3.197-5.063 4.315-5.477 3.264-9.155 5.349-10.833 7.026-3.853 3.847-5.042 9.334-1.189 13.191s9.148 2.472 13.005-1.384z"></path>
					<path class="path2" d="M31.082 0.148c-0.088-0.064-0.182-0.098-0.273-0.098-0.162 0-0.31 0.098-0.391 0.28-0.168 0.371-0.472 0.849-0.896 1.448-0.704 1.142-1.651 1.509-1.651 1.509-0.569-0.404-1.216-0.788-1.843-1.091-0.674-0.327-1.421-0.509-2.169-0.509-0.455 0-0.913 0.067-1.351 0.212-0.95 0.313-2.186 1.031-3.133 1.637-0.259 0.165-0.232 0.394 0.054 0.499 0.232 0.084 0.522 0.189 0.832 0.293 0.549 0.185 1.159 0.374 1.607 0.465 0.603 0.121 1.593 0.269 2.213 0.357 0.303 0.044 0.397 0.273 0.212 0.515-0.337 0.441-0.822 1.095-0.99 1.405-0.371 0.677-0.758 1.637-0.98 2.226-0.094 0.243 0.077 0.448 0.293 0.448 0.040 0 0.084-0.007 0.128-0.024 0.586-0.226 1.549-0.61 2.226-0.98 0.31-0.168 0.963-0.657 1.405-0.99 0.084-0.064 0.168-0.094 0.243-0.094 0.138 0 0.246 0.108 0.273 0.307 0.088 0.616 0.232 1.61 0.357 2.213 0.094 0.468 0.296 1.108 0.488 1.674 0.098 0.286 0.192 0.552 0.273 0.768 0.057 0.155 0.148 0.232 0.246 0.232 0.084 0 0.175-0.061 0.253-0.179 0.606-0.947 1.324-2.183 1.637-3.133 0.118-0.357 0.189-0.744 0.209-1.118 0.078-1.472-0.623-2.661-1.354-3.874-0.020-0.034-0.229-0.307-0.216-0.344 0 0 0.404-0.852 1.509-1.651 0.613-0.421 0.953-0.677 1.428-0.92 0.28-0.128 0.364-0.418 0.182-0.664-0.246-0.333-0.485-0.573-0.822-0.822z"></path>
				</symbol>
				<symbol id="icon-elevator" viewBox="0 0 32 32">
					<title>elevator</title>
					<path class="path1" d="M6.179 9.958c-0.345-0.345-0.518-0.765-0.518-1.258s0.173-0.913 0.518-1.258c0.345-0.345 0.765-0.518 1.258-0.518s0.913 0.173 1.258 0.518c0.345 0.345 0.518 0.765 0.518 1.258s-0.173 0.913-0.518 1.258-0.765 0.518-1.258 0.518c-0.493 0-0.913-0.173-1.258-0.518zM3.904 18.449c0.111 0.086 0.24 0.13 0.388 0.13s0.277-0.043 0.388-0.13 0.167-0.228 0.167-0.425v-4.81c0-0.074 0.037-0.123 0.111-0.148s0.136-0.037 0.185-0.037 0.111 0.012 0.185 0.037c0.074 0.025 0.111 0.074 0.111 0.148v11.063c0 0.222 0.080 0.407 0.24 0.555s0.351 0.222 0.574 0.222c0.222 0 0.413-0.074 0.574-0.222s0.24-0.333 0.24-0.555v-6.771c0-0.123 0.049-0.203 0.148-0.241s0.173-0.055 0.222-0.055 0.117 0.019 0.204 0.055 0.13 0.117 0.13 0.241v6.771c0 0.222 0.080 0.407 0.24 0.555s0.351 0.222 0.573 0.222c0.247 0 0.444-0.074 0.592-0.222s0.222-0.333 0.222-0.555l0.037-11.063c0-0.074 0.037-0.123 0.111-0.148s0.136-0.037 0.185-0.037 0.111 0.012 0.185 0.037 0.111 0.074 0.111 0.148v4.81c0 0.197 0.056 0.339 0.166 0.425s0.234 0.13 0.37 0.13c0.136 0 0.259-0.043 0.37-0.13s0.166-0.228 0.166-0.425v-5.106c0-0.493-0.166-0.937-0.499-1.332s-0.783-0.592-1.351-0.592h-3.885c-0.567 0-0.981 0.197-1.239 0.592s-0.389 0.839-0.389 1.332v5.106c0 0.197 0.055 0.339 0.167 0.425zM23.088 4.056c0.222 0.21 0.333 0.475 0.333 0.795v22.052c0 0.321-0.111 0.586-0.333 0.796s-0.493 0.315-0.814 0.315h-21.127c-0.321 0-0.592-0.105-0.814-0.315s-0.333-0.475-0.333-0.796v-22.052c0-0.321 0.111-0.586 0.333-0.795s0.493-0.314 0.814-0.314h21.127c0.321 0 0.592 0.105 0.814 0.314zM21.571 5.592h-19.721v20.572h19.721v-20.572zM15.947 10.476c0.493 0 0.913-0.173 1.258-0.518s0.518-0.765 0.518-1.258-0.173-0.913-0.518-1.258c-0.345-0.345-0.765-0.518-1.258-0.518s-0.913 0.173-1.258 0.518c-0.345 0.345-0.518 0.765-0.518 1.258s0.173 0.913 0.518 1.258 0.765 0.518 1.258 0.518zM12.414 18.449c0.111 0.086 0.241 0.13 0.389 0.13s0.277-0.043 0.389-0.13 0.166-0.228 0.166-0.425v-4.81c0-0.074 0.037-0.123 0.111-0.148s0.136-0.037 0.185-0.037 0.111 0.012 0.185 0.037 0.111 0.074 0.111 0.148v11.063c0 0.222 0.080 0.407 0.241 0.555s0.351 0.222 0.573 0.222 0.413-0.074 0.573-0.222c0.16-0.148 0.241-0.333 0.241-0.555v-6.771c0-0.123 0.049-0.203 0.148-0.241s0.173-0.055 0.222-0.055 0.123 0.019 0.222 0.055c0.099 0.037 0.148 0.117 0.148 0.241v6.771c0 0.222 0.074 0.407 0.222 0.555s0.345 0.222 0.592 0.222c0.222 0 0.413-0.074 0.573-0.222s0.241-0.333 0.241-0.555v-11.063c0-0.074 0.037-0.123 0.111-0.148s0.136-0.037 0.185-0.037 0.111 0.012 0.185 0.037c0.074 0.025 0.111 0.074 0.111 0.148v4.81c0 0.197 0.055 0.339 0.166 0.425s0.241 0.13 0.389 0.13 0.277-0.043 0.389-0.13 0.166-0.228 0.166-0.425v-5.106c0-0.493-0.173-0.937-0.518-1.332s-0.802-0.592-1.369-0.592h-3.848c-0.567 0-0.987 0.197-1.258 0.592s-0.407 0.839-0.407 1.332v5.106c0 0.197 0.056 0.339 0.166 0.425zM31.669 23.692c-0.64 0-1.658 0-1.658 0s0-0.276 0-0.7c0-1.308 0-3.855 0-4.83 0 0 0.008-0.228-0.288-0.228s-2.111 0-2.524 0c-0.415 0-0.342 0.273-0.342 0.273 0 1.004 0 3.465 0 4.821 0 0.473 0 0.781 0 0.781s-1.27 0-1.795 0c-0.523 0-0.041 0.456-0.041 0.456l3.185 3.849c0 0 0.261 0.306 0.535 0.031 0.377-0.378 3.085-3.974 3.085-3.974s0.481-0.477-0.157-0.477zM25.149 8.654c0.64 0 1.658 0 1.658 0s0 0.276 0 0.7c0 1.308 0 3.855 0 4.83 0 0-0.008 0.228 0.288 0.228s2.111 0 2.524 0c0.415 0 0.342-0.273 0.342-0.273 0-1.004 0-3.465 0-4.821 0-0.473 0-0.781 0-0.781s1.27 0 1.795 0c0.523 0 0.041-0.456 0.041-0.456l-3.185-3.849c0 0-0.261-0.306-0.535-0.031-0.377 0.378-3.085 3.974-3.085 3.974s-0.481 0.477 0.157 0.477z"></path>
				</symbol>
				<symbol id="icon-flipflop" viewBox="0 0 32 32">
					<title>flipflop</title>
					<path class="path1" d="M12.076 2.018c-1.354-1.047-3.194-1.167-4.867-0.673-0.527 0.153-1.033 0.367-1.5 0.633-2.207 1.24-4.707 3.714-5.361 6.214-0.633 2.427-0.28 4.987 0.1 7.454 0.113-0.433 0.267-0.854 0.453-1.247 1.24-2.614 3.981-3.854 6.041-5.694v-1.060c0-0.36 0.3-0.654 0.653-0.654 0.36 0 0.653 0.3 0.653 0.654v1.113c1.040 0.954 1.974 2.060 2.907 3.114 0.507 0.573 1.007 1.16 1.507 1.74 0.193 0.227 0.393 0.453 0.58 0.693 0.14-1.76 0.433-3.474 0.713-5.321 0.38-2.5 0.12-5.427-1.88-6.968z"></path>
					<path class="path2" d="M4.042 23.007c-1.047-0.333-1.92-1.080-2.574-1.98 0.553 2.234 1.24 4.454 1.92 6.528 1.274 3.907 5.561 3.961 8.341 2.5 2.6-1.367 2.207-5.861 1.78-9.488-0.28 0.42-0.607 0.82-0.8 1.28-0.133 0.333-0.433 0.56-0.807 0.46-0.313-0.087-0.593-0.473-0.46-0.807 0.473-1.154 1.487-2.034 1.587-3.34 0.080-1.007-0.047-1.96-0.633-2.807-0.727-1.040-1.647-1.994-2.5-2.927-0.773-0.847-1.52-1.74-2.347-2.534-1.787 1.48-4.087 2.614-5.261 4.661-0.673 1.167-1.020 2.787-0.593 4.101 0.407 1.247 1.387 2.674 2.694 3.094 0.807 0.253 0.46 1.52-0.347 1.26z"></path>
					<path class="path3" d="M31.552 15.646c0.38-2.467 0.733-5.027 0.1-7.454-0.653-2.5-3.16-4.974-5.367-6.214-0.467-0.267-0.973-0.48-1.5-0.633-1.667-0.487-3.514-0.373-4.867 0.673-1.994 1.547-2.254 4.467-1.88 6.968 0.273 1.84 0.573 3.554 0.713 5.321 0.187-0.233 0.387-0.467 0.58-0.693 0.5-0.58 1-1.167 1.507-1.74 0.933-1.053 1.867-2.16 2.907-3.114v-1.113c0-0.36 0.3-0.654 0.653-0.654 0.36 0 0.653 0.3 0.653 0.654v1.053c2.067 1.84 4.801 3.087 6.041 5.694 0.193 0.393 0.347 0.813 0.46 1.254z"></path>
					<path class="path4" d="M20.090 22.307c-0.373 0.1-0.673-0.127-0.807-0.46-0.187-0.46-0.513-0.867-0.8-1.28-0.427 3.627-0.82 8.114 1.78 9.488 2.774 1.46 7.061 1.4 8.341-2.5 0.68-2.074 1.367-4.294 1.92-6.528-0.653 0.9-1.527 1.647-2.574 1.98-0.807 0.26-1.147-1.007-0.347-1.267 1.307-0.42 2.28-1.84 2.694-3.094 0.427-1.307 0.080-2.927-0.593-4.101-1.174-2.047-3.48-3.18-5.261-4.661-0.827 0.793-1.574 1.687-2.347 2.534-0.853 0.933-1.774 1.894-2.5 2.927-0.587 0.847-0.707 1.793-0.633 2.807 0.1 1.307 1.113 2.18 1.587 3.34 0.127 0.34-0.147 0.727-0.46 0.813z"></path>
				</symbol>
				<symbol id="icon-grass" viewBox="0 0 32 32">
					<title>grass</title>
					<path class="path1" d="M28.453 0.253c-0.165-0.237-0.477-0.32-0.738-0.196-3.296 1.572-8.122 4.806-11.76 11.144 2.109 3.202 3.937 7.324 4.895 12.573 0.126-5.245 1.166-16.55 7.53-22.76 0.207-0.201 0.237-0.523 0.073-0.76z"></path>
					<path class="path2" d="M6.71 4.79c-0.098-0.065-0.211-0.096-0.323-0.096-0.16 0-0.32 0.065-0.436 0.191-0.196 0.213-0.208 0.536-0.031 0.764 6.417 8.219 4.639 22.403 4.125 25.668-0.027 0.171 0.021 0.345 0.134 0.477 0.112 0.13 0.277 0.207 0.45 0.207h8.26c0.159 0 0.309-0.063 0.42-0.175s0.173-0.264 0.171-0.422c-0.191-15.974-8.035-23.512-12.77-26.613z"></path>
					<path class="path3" d="M1.709 19.113c-0.114-0.075-0.267-0.056-0.36 0.044s-0.099 0.254-0.015 0.362c3.043 3.896 2.2 10.621 1.955 12.169-0.013 0.082 0.011 0.157 0.063 0.22 0.053 0.062 0.132 0.092 0.214 0.092h3.916c0.074 0 0.146-0.024 0.199-0.076s0.082-0.122 0.081-0.197c-0.090-7.573-3.808-11.143-6.054-12.614z"></path>
					<path class="path4" d="M30.622 14.283c-0.129-0.139-0.337-0.166-0.497-0.062-3.096 2.028-8.223 6.956-8.349 17.402-0.002 0.102 0.041 0.195 0.112 0.269 0.073 0.074 0.171 0.108 0.275 0.108h5.4c0.114 0 0.22-0.043 0.294-0.13 0.072-0.086 0.104-0.196 0.087-0.307-0.336-2.135-1.499-11.409 2.698-16.783 0.117-0.148 0.108-0.358-0.021-0.497z"></path>
				</symbol>
				<symbol id="icon-leafcircle" viewBox="0 0 32 32">
					<title>leafcircle</title>
					<path class="path1" d="M16 0c-8.822 0-16 7.178-16 16s7.178 16 16 16c8.823 0 16-7.178 16-16s-7.178-16-16-16zM23.849 19.515c-1.912 1.912-4.603 2.631-6.646 2.819 0.076-0.113 0.152-0.229 0.225-0.349 0.168-0.27 0.33-0.554 0.49-0.846s0.317-0.59 0.474-0.885c0.040-0.073 0.078-0.147 0.117-0.221 0.039-0.072 0.079-0.145 0.119-0.217 0.077-0.147 0.159-0.286 0.238-0.427 0.038-0.073 0.081-0.137 0.122-0.206 0.042-0.067 0.079-0.139 0.122-0.203s0.085-0.129 0.126-0.195l0.038-0.061 0.004-0.006 0.002-0.003c-0.034 0.044-0.008 0.010-0.015 0.019l0.019-0.027 0.077-0.108c0.1-0.143 0.198-0.285 0.296-0.426 0.092-0.13 0.182-0.26 0.269-0.391 0.092-0.127 0.183-0.253 0.269-0.379 0.085-0.129 0.178-0.24 0.261-0.36 0.042-0.060 0.084-0.118 0.125-0.176 0.043-0.055 0.086-0.11 0.128-0.163 0.084-0.11 0.164-0.216 0.242-0.319 0.081-0.099 0.161-0.192 0.235-0.286 0.037-0.047 0.074-0.094 0.109-0.139 0.038-0.041 0.075-0.081 0.111-0.122 0.071-0.082 0.139-0.156 0.201-0.231 0.031-0.037 0.061-0.072 0.090-0.106 0.031-0.030 0.059-0.062 0.087-0.091 0.222-0.232 0.349-0.39 0.349-0.39s-0.192 0.003-0.53 0.054c-0.042 0.006-0.087 0.012-0.134 0.021-0.045 0.011-0.092 0.024-0.141 0.036-0.099 0.024-0.204 0.058-0.319 0.091-0.058 0.016-0.116 0.036-0.177 0.056-0.058 0.024-0.118 0.048-0.179 0.074-0.123 0.051-0.249 0.111-0.385 0.171-0.131 0.065-0.26 0.143-0.397 0.223-0.068 0.040-0.137 0.082-0.206 0.125-0.066 0.047-0.133 0.094-0.201 0.142-0.067 0.049-0.136 0.099-0.205 0.15-0.034 0.026-0.069 0.051-0.104 0.077-0.033 0.028-0.066 0.055-0.099 0.083-0.132 0.111-0.266 0.228-0.4 0.349-0.13 0.126-0.259 0.257-0.39 0.391-0.068 0.069-0.122 0.131-0.182 0.197-0.058 0.066-0.116 0.132-0.174 0.198l-0.087 0.1-0.022 0.025-0.040 0.052-0.045 0.060c-0.061 0.080-0.12 0.162-0.179 0.244s-0.11 0.166-0.164 0.25c-0.052 0.085-0.109 0.168-0.155 0.254-0.094 0.172-0.191 0.344-0.27 0.517-0.086 0.173-0.159 0.347-0.229 0.519-0.073 0.173-0.131 0.343-0.193 0.512-0.056 0.168-0.112 0.336-0.161 0.5-0.098 0.327-0.18 0.644-0.252 0.941-0.032 0.138-0.063 0.272-0.093 0.402-0.030-0.13-0.061-0.264-0.093-0.402-0.072-0.297-0.154-0.614-0.252-0.941-0.049-0.164-0.104-0.331-0.161-0.5-0.062-0.17-0.121-0.34-0.193-0.512-0.071-0.172-0.143-0.346-0.229-0.519-0.079-0.174-0.176-0.346-0.27-0.517-0.046-0.086-0.103-0.17-0.155-0.254-0.054-0.084-0.104-0.168-0.164-0.25s-0.118-0.164-0.179-0.244l-0.045-0.060-0.040-0.052-0.022-0.025-0.087-0.1c-0.058-0.066-0.116-0.132-0.174-0.198-0.060-0.065-0.114-0.128-0.182-0.197-0.13-0.134-0.26-0.265-0.39-0.391-0.134-0.122-0.267-0.238-0.4-0.349-0.033-0.028-0.066-0.056-0.099-0.083-0.035-0.026-0.069-0.052-0.104-0.077-0.069-0.051-0.137-0.1-0.205-0.15-0.068-0.048-0.135-0.095-0.201-0.142-0.069-0.044-0.138-0.085-0.206-0.125-0.137-0.080-0.266-0.158-0.397-0.223-0.135-0.061-0.262-0.12-0.385-0.171-0.061-0.025-0.121-0.050-0.179-0.074-0.060-0.020-0.119-0.039-0.177-0.056-0.115-0.033-0.22-0.066-0.319-0.091-0.049-0.012-0.096-0.025-0.141-0.036-0.046-0.009-0.092-0.014-0.134-0.021-0.338-0.051-0.53-0.054-0.53-0.054s0.128 0.158 0.349 0.39c0.028 0.029 0.056 0.060 0.087 0.091 0.029 0.034 0.059 0.069 0.090 0.106 0.061 0.075 0.13 0.149 0.201 0.231 0.035 0.041 0.072 0.081 0.111 0.122 0.035 0.045 0.072 0.091 0.109 0.139 0.074 0.094 0.155 0.187 0.235 0.286 0.078 0.102 0.158 0.208 0.242 0.319 0.042 0.054 0.084 0.108 0.128 0.163 0.041 0.058 0.083 0.116 0.125 0.176 0.084 0.12 0.176 0.231 0.261 0.36 0.086 0.127 0.177 0.252 0.269 0.379 0.086 0.131 0.177 0.261 0.269 0.391 0.098 0.14 0.196 0.282 0.296 0.426l0.077 0.108 0.019 0.027c-0.007-0.009 0.019 0.025-0.015-0.019l0.002 0.003 0.011 0.018 0.031 0.049c0.040 0.066 0.083 0.13 0.126 0.195s0.080 0.136 0.122 0.203c0.040 0.069 0.084 0.133 0.122 0.206 0.079 0.141 0.161 0.28 0.238 0.427 0.040 0.073 0.079 0.145 0.119 0.217 0.039 0.074 0.077 0.148 0.117 0.221 0.156 0.295 0.313 0.593 0.474 0.885s0.323 0.577 0.49 0.846c0.067 0.109 0.135 0.214 0.204 0.316-0.043-0.007-0.085-0.015-0.124-0.023-2.030-0.202-4.653-0.905-6.511-2.763-3.36-3.36-3.121-9.047-2.615-9.554 0.424-0.424 6.193-0.745 9.553 2.615 0.333 0.333 0.63 0.691 0.894 1.064 0.262-0.374 0.557-0.731 0.89-1.064 3.36-3.36 9.047-3.121 9.553-2.615 0.424 0.424 0.745 6.193-2.615 9.553z"></path>
				</symbol>
				<symbol id="icon-mushroom" viewBox="0 0 32 32">
					<title>mushroom</title>
					<path class="path1" d="M19.987 15.815c-1.154 0.157-2.437 0.237-3.814 0.237-2.291 0-4.079-0.22-4.313-0.251-0.23-0.021-0.46-0.045-0.687-0.070-0.92 4.864-2.12 16.606 7.897 16.261 11.506-0.39-0.659-8.713 0.917-16.178z"></path>
					<path class="path2" d="M16.002 0c-6.649 0-12.287 4.958-12.834 11.286-0.059 0.701 0.324 1.374 0.98 1.701 0.122 0.063 2.479 1.22 7.238 1.722 0.192 0.021 0.39 0.038 0.589 0.059 0 0 1.834 0.244 4.198 0.244 1.199 0 4.044-0.272 4.149-0.282 4.92-0.488 7.388-1.67 7.517-1.733 0.662-0.324 1.053-1.001 0.994-1.708-0.547-6.332-6.182-11.289-12.831-11.289zM7.125 11.711c-0.788 0-1.443-0.655-1.443-1.443s0.655-1.443 1.443-1.443 1.443 0.655 1.443 1.443-0.655 1.443-1.443 1.443zM21.413 3.487c0.788 0 1.443 0.655 1.443 1.443s-0.655 1.443-1.443 1.443c-0.788 0-1.443-0.655-1.443-1.443s0.659-1.443 1.443-1.443zM14.774 3.556c0.788 0 1.443 0.655 1.443 1.443s-0.655 1.443-1.443 1.443c-0.788 0-1.443-0.655-1.443-1.443s0.659-1.443 1.443-1.443zM21.486 11.854c-0.788 0-1.443-0.655-1.443-1.443s0.655-1.443 1.443-1.443c0.788 0 1.443 0.655 1.443 1.443s-0.659 1.443-1.443 1.443z"></path>
				</symbol>
				<symbol id="icon-origami" viewBox="0 0 32 32">
					<title>origami</title>
					<path class="path1" d="M31.688 6.637l-9.869 11.975c-0.291 0.355-0.555 1.011-0.589 1.469l-0.624 8.52c-0.034 0.458 0.294 0.94 0.732 1.078l1.085 0.342c0.438 0.138 0.921-0.099 1.081-0.53l8.423-22.716c0.16-0.43 0.053-0.492-0.238-0.138z"></path>
					<path class="path2" d="M10.093 17.743l-4.838-6.407c-0.277-0.366-0.848-0.531-1.277-0.368l-0.971 0.369c-0.214 0.081-0.439 0.243-0.629 0.438-0.297 0.306-0.662 1.344-0.962 2.211l-0.816 2.363c-0.3 0.867-0.744 1.836-0.555 1.961 0.063 0.039 0.187-0.014 0.356-0.167l2.627-2.385c0.34-0.308 0.734-0.207 0.884 0.227 0.989 2.851 3.851 10.946 4.756 13.502 0.153 0.433 0.631 0.668 1.067 0.527l0.751-0.242c0.437-0.142 0.767-0.627 0.739-1.085l-0.581-9.453c-0.028-0.457-0.275-1.124-0.551-1.491z"></path>
					<path class="path3" d="M19.662 15.52l-3.082-11.642c-0.235-0.887-0.407-1.938-0.636-1.937s-0.397 1.053-0.628 1.941l-3.442 13.243c-0.115 0.443-0.189 1.175-0.166 1.632l0.076 1.481 0.429 8.278c0.007 0.145 0.015 0.277 0.022 0.393 0.012 0.217 0.201 0.316 0.427 0.252 0.121-0.033 0.262-0.070 0.412-0.106l2.059-0.502c0.446-0.107 1.168-0.107 1.614 0.002l2.828 0.696c0.018 0.006 0.539-8.319 0.539-8.319l0.135-2.175c0.014-0.229 0.003-0.526-0.025-0.821-0.045-0.452-0.326-1.529-0.561-2.416z"></path>
				</symbol>
				<symbol id="icon-pear" viewBox="0 0 32 32">
					<title>pear</title>
					<path class="path1" d="M11.001 10.723c0 3.377-3.030 8.391-3.465 11.219-0.135 0.58-0.209 1.181-0.209 1.8 0 4.561 3.883 8.258 8.673 8.258s8.673-3.697 8.673-8.258c0-0.619-0.074-1.22-0.208-1.8-0.436-2.827-3.466-7.841-3.466-11.218 0-2.131-1.471-3.933-3.498-4.54 0.003-0.058 0.003-0.116 0-0.176 0.939-0.074 2.658-0.374 3.821-1.536 1.156-1.155 1.458-2.861 1.535-3.803 0.031-0.38-0.286-0.697-0.666-0.666-0.942 0.077-2.648 0.38-3.803 1.535-0.703 0.704-1.091 1.611-1.304 2.425-0.025-0.071-0.052-0.142-0.080-0.212-0.305-0.753-0.691-1.509-1.347-2.019-0.399-0.311-0.754-0.518-1.228-0.702-0.252-0.098-0.515-0.166-0.783-0.206-0.657-0.098-1.298-0.128-1.961-0.112-0.752 0.019-1.38 0.614-1.38 1.38 0 0.738 0.628 1.399 1.38 1.38 0.436-0.011 0.872-0.015 1.306 0.027 0.201 0.035 0.398 0.084 0.591 0.151 0.091 0.046 0.18 0.097 0.265 0.153 0.075 0.067 0.145 0.138 0.212 0.213 0.118 0.174 0.221 0.357 0.311 0.547 0.188 0.5 0.302 1.023 0.387 1.55-2.161 0.526-3.758 2.39-3.758 4.611zM19.279 22.205c0.373 0.318 0.418 0.879 0.1 1.252s-0.879 0.418-1.252 0.1c-0.153-0.13-0.251-0.302-0.291-0.484l-0.572-2.584 2.015 1.716zM12.711 22.205l2.015-1.716-0.572 2.584c-0.106 0.479-0.58 0.781-1.059 0.675s-0.781-0.58-0.675-1.059c0.043-0.196 0.149-0.363 0.291-0.484z"></path>
				</symbol>
				<symbol id="icon-pepper" viewBox="0 0 32 32">
					<title>pepper</title>
					<path class="path1" d="M24.337 14.122l0.002-0.035c0-3.487-2.364-6.324-5.27-6.324-0.706 0-1.38 0.169-1.996 0.472 0.199-0.686 0.473-1.562 0.808-2.455 1.278-3.414 2.225-3.881 2.402-3.94 0.495-0.165 0.762-0.7 0.597-1.194s-0.7-0.762-1.194-0.597c-1.288 0.429-2.457 2.088-3.574 5.069-0.461 1.231-0.81 2.414-1.018 3.175-0.646-0.34-1.36-0.53-2.11-0.53-2.906 0-5.27 2.837-5.27 6.324v0.018l1.088 11.589c0.003 1.706 0.439 3.269 1.229 4.403 0.855 1.228 2.097 1.904 3.497 1.904 0.924 0 1.778-0.296 2.498-0.848 0.72 0.552 1.574 0.848 2.498 0.848 1.401 0 2.643-0.676 3.497-1.903 0.79-1.134 1.226-2.697 1.229-4.403l1.086-11.572z"></path>
					<path class="path2" d="M7.252 25.296l-0-0.017-1.088-10.791v-0.086c0-1.726 0.559-3.386 1.574-4.673 0.147-0.187 0.267-0.513 0.119-0.818-0.093-0.192-0.317-0.422-0.855-0.422-2.906 0-5.27 2.652-5.27 5.912v0.019l1.088 10.787c0.003 1.597 0.442 3.059 1.236 4.121 0.867 1.16 2.074 1.773 3.49 1.773 0.376 0 1.005 0 1.208-0.435 0.118-0.252 0.046-0.538-0.214-0.848-0.822-0.984-1.268-2.548-1.288-4.522z"></path>
					<path class="path3" d="M24.998 8.49c-0.538 0-0.762 0.229-0.855 0.422-0.148 0.305-0.028 0.631 0.119 0.818 1.015 1.287 1.574 2.947 1.574 4.673v0.086l-1.087 10.774-0.002 0.034c-0.020 1.974-0.465 3.538-1.288 4.522-0.26 0.311-0.332 0.596-0.214 0.848 0.203 0.435 0.832 0.435 1.208 0.435 1.416 0 2.622-0.613 3.49-1.773 0.794-1.061 1.233-2.524 1.236-4.121l1.086-10.768 0.002-0.038c0-3.26-2.364-5.912-5.27-5.912z"></path>
				</symbol>
				<symbol id="icon-pyramid" viewBox="0 0 32 32">
					<title>pyramid</title>
					<path class="path1" d="M8.469 15.611h15.062c0.076 0 0.145-0.041 0.182-0.107s0.036-0.146-0.004-0.211l-2.698-4.423c-0.038-0.062-0.105-0.1-0.178-0.1h-9.667c-0.073 0-0.14 0.038-0.178 0.1l-2.698 4.423c-0.039 0.065-0.041 0.145-0.004 0.211s0.107 0.107 0.182 0.107z"></path>
					<path class="path2" d="M4.422 22.246h23.156c0.076 0 0.145-0.041 0.182-0.107s0.035-0.146-0.004-0.211l-2.698-4.423c-0.038-0.062-0.105-0.1-0.178-0.1h-17.76c-0.073 0-0.14 0.038-0.178 0.1l-2.698 4.423c-0.039 0.065-0.041 0.145-0.004 0.211s0.107 0.107 0.182 0.107z"></path>
					<path class="path3" d="M12.516 8.976h6.969c0.075 0 0.145-0.041 0.182-0.107s0.035-0.146-0.004-0.211l-3.484-5.713c-0.038-0.062-0.105-0.1-0.178-0.1s-0.14 0.038-0.178 0.1l-3.484 5.713c-0.039 0.065-0.041 0.145-0.004 0.211s0.107 0.107 0.182 0.107z"></path>
					<path class="path4" d="M31.969 28.837l-2.864-4.697c-0.038-0.062-0.105-0.1-0.178-0.1h-25.854c-0.073 0-0.14 0.038-0.178 0.1l-2.865 4.697c-0.039 0.064-0.041 0.145-0.004 0.211s0.107 0.106 0.182 0.106h31.582c0.075 0 0.145-0.041 0.182-0.106s0.036-0.146-0.004-0.211z"></path>
				</symbol>
				<symbol id="icon-shirt" viewBox="0 0 32 32">
					<title>shirt</title>
					<path class="path1" d="M16 4.772c1.386 0 2.583-0.884 3.013-2.184-0.821 0.226-1.866 0.362-3.013 0.362s-2.193-0.136-3.013-0.362c0.43 1.3 1.627 2.184 3.013 2.184z"></path>
					<path class="path2" d="M31.96 6.371c-0.066-0.185-0.203-0.337-0.381-0.419l-6.101-2.816c-1.298-0.44-2.62-0.787-3.955-1.041-0.047-0.009-0.094-0.014-0.14-0.014-0.33 0-0.626 0.228-0.7 0.563-0.487 2.146-2.387 3.753-4.683 3.753s-4.196-1.607-4.683-3.753c-0.075-0.335-0.37-0.563-0.7-0.563-0.046 0-0.093 0.004-0.14 0.014-1.335 0.254-2.657 0.601-3.957 1.041l-6.099 2.816c-0.18 0.083-0.317 0.235-0.38 0.419-0.065 0.187-0.053 0.389 0.038 0.565l2.649 5.227c0.124 0.248 0.376 0.397 0.643 0.397 0.069 0 0.139-0.010 0.208-0.031l2.942-0.872v17.538c0 0.398 0.325 0.723 0.724 0.723h17.512c0.398 0 0.722-0.325 0.722-0.723v-17.538l2.944 0.872c0.069 0.021 0.139 0.031 0.207 0.031 0.266 0 0.517-0.149 0.643-0.397l2.65-5.227c0.089-0.176 0.102-0.378 0.038-0.565z"></path>
				</symbol>
				<symbol id="icon-strawberry" viewBox="0 0 32 32">
					<title>strawberry</title>
					<path class="path1" d="M10.31 13.066c0.042 0.084 0.118 0.146 0.209 0.17s0.188 0.007 0.265-0.044l5.215-3.477 5.215 3.477c0.078 0.052 0.175 0.068 0.265 0.044s0.167-0.086 0.209-0.17l1.76-3.52 5.325-3.55c0.103-0.069 0.159-0.193 0.143-0.315s-0.103-0.228-0.221-0.267l-5.173-1.724v-3.362c0-0.105-0.051-0.204-0.136-0.265s-0.196-0.078-0.295-0.045l-5.205 1.735-1.656-1.656c-0.083-0.083-0.181-0.096-0.231-0.096s-0.148 0.012-0.231 0.096l-1.656 1.656-5.205-1.735c-0.033-0.011-0.068-0.017-0.103-0.017-0.069 0-0.136 0.021-0.191 0.062-0.085 0.061-0.136 0.161-0.136 0.265v3.362l-5.173 1.724c-0.118 0.039-0.204 0.144-0.221 0.267s0.039 0.247 0.143 0.316l5.325 3.55 1.76 3.52z"></path>
					<path class="path2" d="M24.634 10.591l-1.521 3.042c0.028-0.002 0.055-0.004 0.083-0.004 0.602 0 1.090 0.488 1.090 1.090v1.799c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.030 0.002-0.061 0.005-0.091-0.077 0.032-0.156 0.061-0.238 0.083-0.155 0.041-0.315 0.062-0.476 0.062-0.367 0-0.723-0.108-1.029-0.312l-4.369-2.912-4.369 2.913c-0.306 0.204-0.661 0.311-1.028 0.311-0.16 0-0.321-0.021-0.476-0.062-0.082-0.022-0.16-0.051-0.237-0.083 0.002 0.030 0.005 0.060 0.005 0.091v1.799c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090 0.028 0 0.056 0.002 0.083 0.004l-1.521-3.042-3.216-2.144c-0.892 1.224-1.422 2.74-1.422 4.381 0 4.739 2.212 9.538 6.396 13.88 3.112 3.229 6.192 5.064 6.321 5.141 0.171 0.101 0.363 0.151 0.554 0.151s0.384-0.051 0.554-0.151c0.13-0.076 3.209-1.912 6.321-5.141 4.184-4.341 6.396-9.141 6.396-13.88 0-1.641-0.53-3.156-1.422-4.38l-3.215 2.144zM13.492 21.915c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090s1.090 0.488 1.090 1.090v1.799zM17.090 25.513c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090s1.090 0.488 1.090 1.090v1.799zM17.090 18.317c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090s1.090 0.488 1.090 1.090v1.799zM20.688 21.915c0 0.602-0.488 1.090-1.090 1.090s-1.090-0.488-1.090-1.090v-1.799c0-0.602 0.488-1.090 1.090-1.090s1.090 0.488 1.090 1.090v1.799z"></path>
				</symbol>
				<symbol id="" viewBox="0 0 32 32">
					<title>tomato</title>
					<path class="path1" d="M16.243 13.235c-0.126-0.108-0.337-0.175-0.552-0.175-0.102 0-0.203 0.014-0.3 0.043l-1.612 0.525c-0.18 0.048-0.346 0.214-0.328 0.452 0.020 0.265 0.144 0.993 0.155 1.060 0.051 0.355-0.048 0.707-0.274 0.968-0.223 0.258-0.55 0.406-0.897 0.406-0.221 0-0.439-0.057-0.648-0.171l-1.738-0.941c-0.036-0.020-0.135-0.067-0.263-0.067-0.089 0-0.177 0.023-0.253 0.068-0.423 0.247-1.72 0.932-1.736 0.94-0.209 0.113-0.428 0.171-0.648 0.171-0.347 0-0.674-0.148-0.897-0.406-0.226-0.262-0.325-0.616-0.273-0.973 0.001-0.007 0.105-0.727 0.142-0.964 0.036-0.232-0.102-0.427-0.255-0.516l-0.029-0.017-1.644-0.536c-0.082-0.024-0.169-0.035-0.259-0.035-0.277 0-0.533 0.116-0.664 0.231-2.078 1.821-3.269 4.431-3.269 7.161 0 5.294 4.393 9.602 9.792 9.602s9.792-4.307 9.792-9.602c0-2.766-1.218-5.398-3.341-7.223z"></path>
					<path class="path2" d="M5.118 12.296l2.204 0.719c0.008 0.003 0.015 0.006 0.020 0.010l-0.254 1.725c-0.019 0.132 0.013 0.255 0.093 0.347 0.131 0.151 0.359 0.181 0.575 0.064l1.944-1.052c0.008-0.004 0.040-0.016 0.091-0.016s0.083 0.011 0.091 0.016l1.944 1.052c0.090 0.049 0.18 0.073 0.267 0.073 0.123 0 0.232-0.049 0.308-0.137 0.079-0.092 0.112-0.215 0.092-0.347l-0.254-1.724c0.006-0.004 0.012-0.008 0.021-0.010l2.204-0.719c0.297-0.097 0.329-0.303 0.329-0.387s-0.032-0.29-0.329-0.387l-2.204-0.719c-0.008-0.003-0.015-0.007-0.020-0.010l0.254-1.725c0.019-0.132-0.013-0.255-0.092-0.347-0.131-0.151-0.359-0.181-0.575-0.064l-1.313 0.711c0.43-1.199 1.167-2.414 2.426-2.959 0.318-0.138 0.464-0.507 0.326-0.825s-0.507-0.464-0.825-0.326c-1.836 0.795-2.782 2.577-3.268 4.167l-1.417-0.767c-0.216-0.117-0.444-0.088-0.575 0.064-0.079 0.091-0.112 0.215-0.093 0.347l0.254 1.725c-0.006 0.004-0.013 0.008-0.021 0.010l-2.204 0.719c-0.297 0.097-0.329 0.303-0.329 0.387s0.032 0.29 0.329 0.387z"></path>
					<path class="path3" d="M20.478 7.468l1.66 0.541-0.187 1.274c-0.018 0.123 0.013 0.238 0.088 0.325 0.072 0.083 0.178 0.13 0.292 0.13 0.079 0 0.16-0.022 0.24-0.065l1.497-0.811c0.003-0.001 0.018-0.005 0.040-0.005s0.035 0.004 0.036 0.004c0 0 0 0 0 0l1.5 0.812c0.080 0.043 0.161 0.065 0.24 0.065 0.114 0 0.22-0.048 0.292-0.13 0.075-0.087 0.106-0.202 0.088-0.325l-0.187-1.274 1.66-0.541c0.281-0.092 0.303-0.304 0.303-0.367s-0.022-0.275-0.303-0.367l-1.66-0.541 0.187-1.274c0.018-0.123-0.013-0.238-0.088-0.325-0.072-0.083-0.178-0.13-0.292-0.13-0.079 0-0.16 0.022-0.24 0.065l-1.041 0.564c-0.383-1.199-1.109-2.517-2.486-3.113-0.239-0.103-0.515 0.006-0.618 0.245s0.006 0.515 0.245 0.618c0.957 0.414 1.524 1.331 1.86 2.245l-1.033-0.559c-0.080-0.043-0.161-0.065-0.24-0.065-0.114 0-0.22 0.048-0.292 0.13-0.075 0.087-0.106 0.202-0.088 0.325l0.187 1.274-1.66 0.541c-0.281 0.092-0.303 0.304-0.303 0.367s0.022 0.275 0.303 0.367z"></path>
					<path class="path4" d="M29.307 8.219c-0.165-0.142-0.475-0.195-0.74-0.118l-1.289 0.42c-0.169 0.046-0.324 0.202-0.307 0.426 0.016 0.213 0.111 0.772 0.125 0.853 0.038 0.265-0.036 0.529-0.204 0.723-0.166 0.192-0.41 0.303-0.67 0.303-0.166 0-0.33-0.043-0.488-0.129l-1.389-0.752c-0.038-0.021-0.126-0.062-0.241-0.062-0.082 0-0.163 0.022-0.234 0.063-0.337 0.197-1.373 0.743-1.387 0.751-0.158 0.086-0.323 0.129-0.489 0.129-0.259 0-0.504-0.11-0.67-0.303-0.169-0.195-0.243-0.46-0.204-0.728 0.001-0.006 0.084-0.581 0.113-0.77 0.034-0.215-0.093-0.394-0.234-0.477l-0.029-0.017-1.324-0.431c-0.071-0.020-0.147-0.031-0.224-0.031-0.209 0-0.434 0.078-0.573 0.2-0.87 0.763-1.57 1.725-2.025 2.784-0.269 0.626 0.281 1.099 0.461 1.254 2.314 1.989 3.687 4.962 3.767 8.159 0.014 0.551 0.319 0.844 0.576 0.927 0.798 0.258 1.631 0.39 2.478 0.39 4.352 0 7.892-3.472 7.892-7.74 0-2.23-0.982-4.352-2.693-5.823z"></path>
				</symbol>
				<symbol id="icon-tree" viewBox="0 0 32 32">
					<title>tree</title>
					<path class="path1" d="M16 0c-5.891 0-10.667 4.776-10.667 10.667 0 5.535 4.216 10.085 9.612 10.615v10.719h2.11v-10.719c5.396-0.53 9.612-5.080 9.612-10.615 0-5.891-4.776-10.667-10.667-10.667zM12.189 13.922c-0.583 0-1.055-0.472-1.055-1.055s0.472-1.055 1.055-1.055c0.583 0 1.055 0.472 1.055 1.055s-0.472 1.055-1.055 1.055zM16 7.321c-0.583 0-1.055-0.472-1.055-1.055s0.472-1.055 1.055-1.055 1.055 0.472 1.055 1.055c0 0.583-0.472 1.055-1.055 1.055zM19.811 13.922c-0.583 0-1.055-0.472-1.055-1.055s0.472-1.055 1.055-1.055c0.583 0 1.055 0.472 1.055 1.055s-0.472 1.055-1.055 1.055z"></path>
				</symbol>
				<symbol id="icon-tree2" viewBox="0 0 32 32">
					<title>tree2</title>
					<path class="path1" d="M29.165 9.473c0-2.428-1.843-4.425-4.206-4.67-0.663-1.789-2.38-3.066-4.4-3.066-0.884 0-1.708 0.249-2.414 0.674-0.803-1.438-2.337-2.411-4.101-2.411-2.338 0-4.272 1.711-4.631 3.948-0.191-0.023-0.384-0.039-0.581-0.039-2.593 0-4.696 2.102-4.696 4.696 0 0.127 0.009 0.252 0.019 0.376-1.315 0.832-2.19 2.296-2.19 3.967 0 1.477 0.684 2.794 1.75 3.654-0.005 0.085-0.013 0.169-0.013 0.254 0 2.593 2.102 4.696 4.696 4.696 0.777 0 1.509-0.192 2.154-0.526 0.895 0.643 2.175 1.446 2.796 1.286 0 0 0.231 3.574 0.181 4.482-0.095 1.727-0.613 3.649-0.977 5.205h5.646c0 0-0.832-3.468-0.869-4.626s0.362-3.29 0.362-3.29l1.959-2.026c0.754 0.515 1.665 0.808 2.647 0.808 2.428 0 4.425-1.847 4.67-4.21 1.789-0.663 3.066-2.384 3.066-4.404 0-1.193-0.448-2.278-1.18-3.106 0.198-0.52 0.312-1.082 0.312-1.671zM11.638 20.252c0.376-0.359 0.692-0.779 0.933-1.246l0.922 1.932c-0.001 0-0.502 0.221-1.855-0.686zM15.086 21.445c-0.477 0.087-1.29-1.383-1.866-2.577 0.639 0.326 1.361 0.514 2.129 0.514 0.197 0 0.39-0.016 0.581-0.040-0.148 0.956-0.41 2.023-0.844 2.103zM17.113 22.385c-1.104 0.306-0.443-1.979-0.127-3.303 0.229-0.085 0.45-0.185 0.661-0.304 0.127 0.965 0.546 1.835 1.167 2.523-0.538 0.478-1.157 0.933-1.701 1.084z"></path>
				</symbol>
				<symbol id="icon-angle-up" viewBox="0 0 21 32">
					<title>angle-up</title>
					<path class="path1" d="M19.196 21.143q0 0.232-0.179 0.411l-0.893 0.893q-0.179 0.179-0.411 0.179t-0.411-0.179l-7.018-7.018-7.018 7.018q-0.179 0.179-0.411 0.179t-0.411-0.179l-0.893-0.893q-0.179-0.179-0.179-0.411t0.179-0.411l8.321-8.321q0.179-0.179 0.411-0.179t0.411 0.179l8.321 8.321q0.179 0.179 0.179 0.411z"></path>
				</symbol>
				<symbol id="icon-angle-down" viewBox="0 0 21 32">
					<title>angle-down</title>
					<path class="path1" d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z"></path>
				</symbol>
				<symbol id="icon-rocket" viewBox="0 0 30 32">
					<title>rocket</title>
					<path class="path1" d="M25.714 8q0-0.714-0.5-1.214t-1.214-0.5-1.214 0.5-0.5 1.214 0.5 1.214 1.214 0.5 1.214-0.5 0.5-1.214zM29.714 2.857q0 4.446-1.348 7.687t-4.527 6.438q-1.446 1.429-3.482 3.143l-0.357 6.768q-0.036 0.286-0.286 0.464l-6.857 4q-0.125 0.071-0.286 0.071-0.214 0-0.411-0.161l-1.143-1.143q-0.232-0.25-0.143-0.571l1.518-4.929-5.018-5.018-4.929 1.518q-0.054 0.018-0.161 0.018-0.25 0-0.411-0.161l-1.143-1.143q-0.304-0.339-0.089-0.696l4-6.857q0.179-0.25 0.464-0.286l6.768-0.357q1.714-2.036 3.143-3.482 3.357-3.339 6.393-4.607t7.696-1.268q0.25 0 0.429 0.17t0.179 0.402z"></path>
				</symbol>
				<symbol id="icon-bug" viewBox="0 0 30 32">
					<title>bug</title>
					<path class="path1" d="M29.143 17.143q0 0.464-0.339 0.804t-0.804 0.339h-4q0 3.054-1.196 5.179l3.714 3.732q0.339 0.339 0.339 0.804t-0.339 0.804q-0.321 0.339-0.804 0.339t-0.804-0.339l-3.536-3.518q-0.089 0.089-0.268 0.232t-0.75 0.509-1.161 0.652-1.464 0.518-1.732 0.232v-16h-2.286v16q-0.911 0-1.813-0.241t-1.554-0.589-1.179-0.696-0.777-0.58l-0.268-0.25-3.268 3.696q-0.357 0.375-0.857 0.375-0.429 0-0.768-0.286-0.339-0.321-0.366-0.795t0.277-0.83l3.607-4.054q-1.036-2.036-1.036-4.893h-4q-0.464 0-0.804-0.339t-0.339-0.804 0.339-0.804 0.804-0.339h4v-5.25l-3.089-3.089q-0.339-0.339-0.339-0.804t0.339-0.804 0.804-0.339 0.804 0.339l3.089 3.089h15.071l3.089-3.089q0.339-0.339 0.804-0.339t0.804 0.339 0.339 0.804-0.339 0.804l-3.089 3.089v5.25h4q0.464 0 0.804 0.339t0.339 0.804zM20.571 6.857h-11.429q0-2.375 1.67-4.045t4.045-1.67 4.045 1.67 1.67 4.045z"></path>
				</symbol>
				<symbol id="icon-paint-brush" viewBox="0 0 32 32">
					<title>paint-brush</title>
					<path class="path1" d="M28.839 0q1.25 0 2.188 0.83t0.938 2.080q0 1.125-0.804 2.696-5.929 11.232-8.304 13.429-1.732 1.625-3.893 1.625-2.25 0-3.866-1.652t-1.616-3.92q0-2.286 1.643-3.786l11.393-10.339q1.054-0.964 2.321-0.964zM12.607 18.464q0.696 1.357 1.902 2.321t2.688 1.357l0.018 1.268q0.071 3.804-2.313 6.196t-6.223 2.393q-2.196 0-3.893-0.83t-2.723-2.277-1.545-3.268-0.518-3.929q0.125 0.089 0.732 0.536t1.107 0.795 1.054 0.652 0.821 0.304q0.732 0 0.982-0.661 0.446-1.179 1.027-2.009t1.241-1.357 1.571-0.848 1.839-0.455 2.232-0.188z"></path>
				</symbol>
				<symbol id="icon-modx" viewBox="0 0 32 32">
					<title>modx</title>
					<path class="path1" d="M25.482 12.661l-10.964-6.893 1.643-2.696h15.268zM7.232 17.393l-3.286-2.071v-15.321l21.125 13.268zM25.429 14.982l2.625 1.696v15.321l-9.5-5.982zM24.768 14.607l-8.929 14.321h-15.268l6.357-10.196z"></path>
				</symbol>
			</defs>
		</svg>
		<div class="container">
			<div class="main">
					<h1>GENIWORKS Resources Map</h1>
				</header>
				<div class="mall">
					<div class="surroundings">
						<img class="surroundings__map" src="img/surroundings.svg" alt="Surroundings"/>
					</div>
					<div class="levels">
						<div class="level level--1" aria-label="Level 1">
							<svg class="map map--1" viewBox="0 0 1200 800" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
								<title>Map Level 1</title>
								<polygon points="1035.94 787.41 1035.94 423.16 855.37 423.16 855.37 350.52 1187.28 350.52 1187.28 12.59 548.09 12.59 548.09 68.87 437.36 68.87 437.36 12.59 49.37 12.59 49.37 366.5 12.72 366.5 12.72 787.41 356.2 787.41 414.93 584.41 554.4 584.41 627.81 787.41 1035.94 787.41" class="map__ground" />
								<path d="M1187.28,12.59V350.52H855.37v72.64h180.58V787.41H627.81l-73.41-203H414.93l-58.73,203H12.72V366.5H49.37V12.59h388V68.87H548.08V12.59h639.19M1200,0H535.36V56.28H450.09V0H36.65V353.91H0V800H365.8l2.64-9.13L424.52,597H545.44l70.39,194.65,3,8.35h429.82V410.57H868.09V363.11H1200V0h0Z" class="map__outline" />
								<path d="M425.68,198.63c-6.85-14.83-46.38-30.35-58-11.24-41.24,67.9-83.63,118.16-65.12,124.22,7.55,2.48,56.77.11,94.11-54.39,21.35-31.13,31.71-52.74,29-58.59h0Z" class="map__lake" />
								<ellipse cx="389.64" cy="214.94" rx="13.95" ry="13.8" class="map__tree" />
								<ellipse cx="369.54" cy="191.71" rx="13.95" ry="13.8" class="map__tree" />
								<ellipse cx="354.59" cy="220.27" rx="13.95" ry="13.8" class="map__tree" />
								<path d="M724.87,696.45c14.61,7.58,42.34-6.42,52.85-26.15,24.57-46.13-43.25-126.94-61.66-120.57-7.5,2.6-6.47,29.34-4.4,82.81C713.74,686.25,719.12,693.46,724.87,696.45Z" class="map__lake" />
								<ellipse cx="738.82" cy="595.48" rx="13.95" ry="13.8" class="map__tree" />
								<ellipse cx="768.46" cy="605.4" rx="13.95" ry="13.8" class="map__tree" />
								<ellipse cx="744.64" cy="624.92" rx="13.95" ry="13.8" class="map__tree" />
								<polygon data-space="1.04" points="874.9,554.3 874.9,422.9 1036.1,422.9 1036.1,576.6 965.2,576.6 965.2,555" class="map__space" />
								<rect x="854.08" y="639.79" width="88.09" height="147.62" class="map__space" />
								<rect x="947.85" y="639.79" width="88.09" height="147.62" class="map__space" />
								<polygon points="768.46 722.99 789.65 735.1 789.65 759.31 768.46 771.42 747.27 759.31 747.27 735.1 768.46 722.99" class="map__space" />
								<rect x="666.88" y="565.62" width="26.26" height="25.99" class="map__space" />
								<rect data-space="1.07" x="716.66" y="354.39" width="110.72" height="136.73" class="map__space" />
								<rect x="602.1" y="354.39" width="110.72" height="136.73" class="map__space" />
								<path data-space="1.05" d="M454.76,266.19h63a24.34,24.34,0,0,1,24.47,24.21h0V489.82A24.34,24.34,0,0,1,517.74,514h-63a24.34,24.34,0,0,1-24.47-24.21h0V290.4a24.34,24.34,0,0,1,24.47-24.21h0Z" class="map__space" />
								<path d="M492.72,123.19c30.57,0,55.36-24.53,55.36-54.78H437.36C437.36,98.67,462.15,123.19,492.72,123.19Z" class="map__space" />
								<rect data-space="1.09" x="600" y="12.59" width="93.14" height="168.14" class="map__space" />
								<rect data-space="1.08" x="698.07" y="12" width="93.14" height="168.14" class="map__space" />
								<rect x="796.13" y="12" width="93.14" height="107.12" class="map__space" />
								<rect x="894.18" y="12" width="93.14" height="107.12" class="map__space" />
								<rect data-space="1.03" x="991.9" y="12" width="195.4" height="339.1" class="map__space" />
								<rect x="602" y="278.06" width="385.71" height="72.46" class="map__space" />
								<rect x="48.89" y="209.37" width="169.92" height="94.85" class="map__space" />
								<rect data-space="1.02" x="49.12" y="110.57" width="254.49" height="94.85" class="map__space" />
								<rect data-space="1.06" x="49.09" y="12.16" width="334.73" height="94.85" class="map__space" />
								<polygon points="898.12 182.42 919.31 194.53 919.31 218.74 898.12 230.85 876.93 218.74 876.93 194.53 898.12 182.42" class="map__space" />
								<polygon points="49.18 309.14 218.94 309.14 218.94 358.1 277.46 358.1 277.46 474.63 11.72 474.63 11.72 365.63 49.18 365.63 49.18 309.14" class="map__space" />
								<polygon data-space="1.01" points="12.72 685.56 153.78 685.56 153.78 747.64 215.44 747.64 215.44 712.85 263.89 712.85 263.89 787.41 12.72 787.41 12.72 685.56" class="map__space" />
								<rect x="48.08" y="501.73" width="35.61" height="35.23" class="map__space" />
								<rect x="94.01" y="501.73" width="35.61" height="35.23" class="map__space" />
								<rect x="139.5" y="501.73" width="35.61" height="35.23" class="map__space" />
								<rect x="48.3" y="547.25" width="35.61" height="35.23" class="map__space" />
								<rect x="94.24" y="547.25" width="35.61" height="35.23" class="map__space" />
								<rect x="139.72" y="547.25" width="35.61" height="35.23" class="map__space" />
								<rect x="282.3" y="478.13" width="26.26" height="25.99" class="map__space" />
								<polygon points="218.01 585.07 239.2 597.17 239.2 621.38 218.01 633.49 196.82 621.38 196.82 597.17 218.01 585.07" class="map__space" />
								<polygon points="410.01 601.42 358.8 778.44 320.06 767.07 372.92 591.6 410.01 601.42" class="map__space" />
								<polygon points="561.3,603.9 624,777 661.9,763.2 597.7,591.5" class="map__space" />
							</svg>
							<div class="level__pins">
								<a class="pin pin--1-1" data-category="1" data-space="1.01" href="#" aria-label="Pin for Agent 14">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--1-2" data-category="1" data-space="1.02" href="#" aria-label="Pin for Agent 9">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--1-3" data-category="2" data-space="1.03" href="#" aria-label="Pin for Agent 30">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--1-4" data-category="3" data-space="1.04" href="#" aria-label="Pin for Agent 25">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--1-5" data-category="4" data-space="1.05" href="#" aria-label="Pin for Agent 23">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo"><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--1-6" data-category="1" data-space="1.06" href="#" aria-label="Pin for Agent 44">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo"><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--1-7" data-category="1" data-space="1.07" href="#" aria-label="Pin for Agent 42">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--1-8" data-category="1" data-space="1.08" href="#" aria-label="Pin for Agent 46">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--1-9" data-category="1" data-space="1.09" href="#" aria-label="Pin for Smoothies &amp; Soul">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
							</div>
							<!-- /level__pins -->
						</div>
						<div class="level level--2" aria-label="Level 2">
							<svg class="map map--2" viewBox="0 0 1200 800" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
								<title>Map Level 2</title>
								<polygon points="1035.94 787.41 1035.94 423.16 855.37 423.16 855.37 350.52 1187.28 350.52 1187.28 12.59 548.09 12.59 548.09 68.87 437.36 68.87 437.36 12.59 49.37 12.59 49.37 366.5 12.72 366.5 12.72 787.41 356.2 787.41 414.93 584.41 554.4 584.41 627.81 787.41 1035.94 787.41" class="map__ground" />
								<path d="M1187.28,12.59V350.52H855.37v72.64h180.58V787.41H627.81l-73.41-203H414.93l-58.73,203H12.72V366.5H49.37V12.59h388V68.87H548.08V12.59h639.19M1200,0H535.36V56.28H450.09V0H36.65V353.91H0V800H365.8l2.64-9.13L424.52,597H545.44l70.39,194.65,3,8.35h429.82V410.57H868.09V363.11H1200V0h0Z" class="map__outline" />
								<polygon points="768.46 722.99 789.65 735.1 789.65 759.31 768.46 771.42 747.27 759.31 747.27 735.1 768.46 722.99" class="map__space" />
								<rect x="666.88" y="565.62" width="26.26" height="25.99" class="map__space" />
								<path data-space="2.07" d="M454.76,266.19h63a24.34,24.34,0,0,1,24.47,24.21h0V489.82A24.34,24.34,0,0,1,517.74,514h-63a24.34,24.34,0,0,1-24.47-24.21h0V290.4a24.34,24.34,0,0,1,24.47-24.21h0Z" class="map__space" />
								<path d="M492.72,123.19c30.57,0,55.36-24.53,55.36-54.78H437.36C437.36,98.67,462.15,123.19,492.72,123.19Z" class="map__space" />
								<polygon points="898.12 182.42 919.31 194.53 919.31 218.74 898.12 230.85 876.93 218.74 876.93 194.53 898.12 182.42" class="map__space" />
								<rect x="282.3" y="478.13" width="26.26" height="25.99" class="map__space" />
								<polygon data-space="2.06" points="395.25 652.42 12.72 652.42 12.72 787.41 356.2 787.41 395.25 652.42" class="map__space" />
								<rect data-space="2.02" x="12.72" y="366.5" width="157.39" height="212.11" class="map__space" />
								<rect x="49.37" y="12.59" width="120.74" height="120.74" class="map__space" />
								<rect data-space="2.01" x="177.56" y="12" width="240.03" height="121.33" class="map__space" />
								<rect x="49.37" y="170.48" width="60.37" height="60.37" class="map__space" />
								<rect x="49.37" y="238.6" width="278.23" height="111.92" class="map__space" />
								<rect data-space="2.05" x="600" y="12" width="93.14" height="249.1" class="map__space" />
								<rect x="702.59" y="12.59" width="484.68" height="98.51" class="map__space" />
								<rect data-space="2.03" x="968.07" y="120.1" width="219.21" height="230.42" class="map__space" />
								<rect x="855.37" y="277.6" width="103.7" height="72.92" class="map__space" />
								<circle data-space="2.04" cx="680.68" cy="466.59" r="66.59" class="map__space" />
								<rect data-space="2.08" x="855.37" y="423.16" width="180.58" height="364.25" class="map__space" />
								<polygon points="627.81 787.41 716.09 787.41 716.09 646.58 576.88 646.58 627.81 787.41" class="map__space" />
							</svg>
							<div class="level__pins">
								<a class="pin pin--2-1" data-category="1" data-space="2.01" href="#" aria-label="Pin for Agent 40">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--2-2" data-category="2" data-space="2.02" href="#" aria-label="Pin for Agent 28">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--2-3" data-category="2" data-space="2.03" href="#" aria-label="Pin for Which Bug?">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--2-4" data-category="3" data-space="2.04" href="#" aria-label="Pin for Agent 37">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo"><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--2-5" data-category="1" data-space="2.05" href="#" aria-label="Pin for Agent 36">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--2-6" data-category="1" data-space="2.06" href="#" aria-label="Pin for Agent 35">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--2-7" data-category="3" data-space="2.07" href="#" aria-label="Pin for Agent 32">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--2-8" data-category="3" data-space="2.08" href="#" aria-label="Pin for Agent 31">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
							</div>
							<!-- /level__pins -->
						</div>
						<div class="level level--3" aria-label="Level 3">
							<svg class="map map--3" viewBox="0 0 1200 800" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
								<title>Map Level 3</title>
								<polygon points="1035.94 787.41 1035.94 423.16 855.37 423.16 855.37 350.52 1187.28 350.52 1187.28 12.59 548.09 12.59 548.09 68.87 437.36 68.87 437.36 12.59 49.37 12.59 49.37 366.5 12.72 366.5 12.72 787.41 356.2 787.41 414.93 584.41 554.4 584.41 627.81 787.41 1035.94 787.41" class="map__ground" />
								<path d="M1187.28,12.59V350.52H855.37v72.64h180.58V787.41H627.81l-73.41-203H414.93l-58.73,203H12.72V366.5H49.37V12.59h388V68.87H548.08V12.59h639.19M1200,0H535.36V56.28H450.09V0H36.65V353.91H0V800H365.8l2.64-9.13L424.52,597H545.44l70.39,194.65,3,8.35h429.82V410.57H868.09V363.11H1200V0h0Z" class="map__outline" />
								<rect x="666.9" y="565.6" width="26.3" height="26" class="map__space" />
								<path data-space="3.07" d="M454.8,266.2h63c13.4-0.1,24.4,10.8,24.5,24.2c0,0,0,0,0,0l0,0v199.4c-0.1,13.4-11.1,24.3-24.5,24.2h-63c-13.4,0.1-24.4-10.8-24.5-24.2c0,0,0,0,0,0l0,0V290.4C430.3,277,441.3,266.1,454.8,266.2C454.7,266.2,454.7,266.2,454.8,266.2L454.8,266.2L454.8,266.2z" class="map__space" />
								<polygon points="898.1,182.4 919.3,194.5 919.3,218.7 898.1,230.9 876.9,218.7 876.9,194.5 " class="map__space" />
								<rect x="282.3" y="478.1" width="26.3" height="26" class="map__space" />
								<rect x="381.5" y="12.6" width="55.8" height="55.8" class="map__space" />
								<rect x="566" y="12.6" width="110.6" height="110.6" class="map__space" />
								<rect x="566" y="157.4" width="110.6" height="73.5" class="map__space" />
								<rect x="742" y="12.6" width="445.3" height="110.6" class="map__space" />
								<rect data-space="3.03" x="972.8" y="128.5" width="214.5" height="222" class="map__space" />
								<rect x="756" y="423.2" width="279.9" height="161.2" class="map__space" />
								<rect x="876.9" y="591.6" width="159" height="195.8" class="map__space" />
								<polygon data-space="3.04" points="871.6,680 589.4,680 627.8,787.4 871.6,787.4 " class="map__space" />
								<circle data-space="3.06" cx="735.7" cy="343.8" r="55.7" class="map__space" />
								<rect x="12.7" y="696" width="91.4" height="91.4" class="map__space" />
								<rect x="12.7" y="591.6" width="146.9" height="97.9" class="map__space" />
								<rect data-space="3.02" x="12.7" y="366.5" width="146.9" height="217.9" class="map__space" />
								<polygon data-space="3.05" points="356.2,787.4 414.9,584.4 275.1,584.4 275.1,787.4 " class="map__space" />
								<rect data-space="3.01" x="49.4" y="12.6" width="312.7" height="343" class="map__space" />
							</svg>
							<div class="level__pins">
								<a class="pin pin--3-1" data-category="1" data-space="3.01" href="#" aria-label="Pin for Agent 33">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--3-2" data-category="2" data-space="3.02" href="#" aria-label="Pin for Agent 7">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--3-3" data-category="3" data-space="3.03" href="#" aria-label="Pin for Agent 34">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--3-4" data-category="3" data-space="3.04" href="#" aria-label="Pin for Agent 29">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo"><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--3-5" data-category="4" data-space="3.05" href="#" aria-label="Pin for Agent 19">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo"><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--3-6" data-category="4" data-space="3.06" href="#" aria-label="Pin for Agent 10">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo"><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--3-7" data-category="4" data-space="3.07" href="#" aria-label="Pin for Agent 22">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
							</div>
							<!-- /level__pins -->
						</div>
						<div class="level level--4" aria-label="Level 4">
							<svg class="map map--4" viewBox="0 0 2447 1500" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
								<title>Map Level 2</title>
							<defs>
    <style>
      .cls-1 {
        fill: #d5d5d5;
      }

      .cls-2 {
        fill: #7b7b7b;
      }

      .cls-3 {
        fill: none;
        stroke: #3ab7f7;
      }

      .cls-3, .cls-4, .cls-5, .cls-6 {
        stroke-width: 15px;
      }

      .cls-4 {
        fill: #27aa74;
      }

      .cls-4, .cls-5 {
        stroke: #fff;
      }

      .cls-5 {
        fill: #fff;
      }

      .cls-6 {
        fill: #2e2e2e;
        stroke: #2e2e2e;
      }

      .cls-7 {
        fill: #303156;
      }
    </style>
  </defs>
  <rect class="cls-1" x="121" y="130" width="2063" height="1331"/>
  <rect id="Rectangle_1_copy" data-name="Rectangle 1 copy" class="cls-2" x="716" y="289" width="281" height="55"/>
  <rect id="Rectangle_1_copy_2" data-name="Rectangle 1 copy 2" class="cls-2" x="716" y="351" width="281" height="55"/>
  <rect id="Rectangle_1_copy_3" data-name="Rectangle 1 copy 3" class="cls-2" x="716" y="443" width="281" height="55"/>
  <rect id="Rectangle_1_copy_3-2" data-name="Rectangle 1 copy 3" class="cls-2" x="716" y="505" width="281" height="55"/>
  <rect id="Rectangle_1_copy_4" data-name="Rectangle 1 copy 4" class="cls-2" x="716" y="597" width="281" height="55"/>
  <rect id="Rectangle_1_copy_4-2" data-name="Rectangle 1 copy 4" class="cls-2" x="716" y="659" width="281" height="55"/>
  <rect id="Rectangle_1_copy_4-3" data-name="Rectangle 1 copy 4" class="cls-2" x="716" y="751" width="281" height="55"/>
  <rect id="Rectangle_1_copy_4-4" data-name="Rectangle 1 copy 4" class="cls-2" x="716" y="813" width="281" height="55"/>
  <rect id="Rectangle_1_copy_5" data-name="Rectangle 1 copy 5" class="cls-2" x="716" y="905" width="281" height="55"/>
  <rect id="Rectangle_1_copy_5-2" data-name="Rectangle 1 copy 5" class="cls-2" x="716" y="967" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="289" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-2" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="351" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-3" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="443" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-4" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="505" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-5" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="597" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-6" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="659" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-7" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="751" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-8" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="813" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-9" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="905" width="281" height="55"/>
  <rect id="Rectangle_1_copy_6-10" data-name="Rectangle 1 copy 6" class="cls-2" x="352" y="967" width="281" height="55"/>
  <rect id="Rectangle_1_copy_5-3" data-name="Rectangle 1 copy 5" class="cls-2" x="716" y="1059" width="281" height="55"/>
  <rect id="Rectangle_1_copy_5-4" data-name="Rectangle 1 copy 5" class="cls-2" x="716" y="1121" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="289" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-2" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="351" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-3" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="443" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-4" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="505" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-5" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="597" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-6" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="659" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-7" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="751" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-8" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="813" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-9" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="905" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-10" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="967" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-11" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="1059" width="281" height="55"/>
  <rect id="Rectangle_1_copy_7-12" data-name="Rectangle 1 copy 7" class="cls-2" x="1080" y="1121" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="289" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-2" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="351" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-3" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="443" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-4" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="505" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-5" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="597" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-6" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="659" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-7" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="751" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-8" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="813" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-9" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="905" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-10" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="967" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-11" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="1059" width="281" height="55"/>
  <rect id="Rectangle_1_copy_8-12" data-name="Rectangle 1 copy 8" class="cls-2" x="1444" y="1121" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="289" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-2" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="351" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-3" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="443" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-4" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="505" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-5" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="597" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-6" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="659" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-7" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="751" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-8" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="813" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-9" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="905" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-10" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="967" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-11" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="1059" width="281" height="55"/>
  <rect id="Rectangle_1_copy_9-12" data-name="Rectangle 1 copy 9" class="cls-2" x="1808" y="1121" width="281" height="55"/>
  <rect class="cls-3" x="2003" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_10" data-name="Rectangle 1 copy 10" class="cls-3" x="1808" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_11" data-name="Rectangle 1 copy 11" class="cls-3" x="1639" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_11-2" data-name="Rectangle 1 copy 11" class="cls-3" x="1444" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_12" data-name="Rectangle 1 copy 12" class="cls-3" x="1278" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_12-2" data-name="Rectangle 1 copy 12" class="cls-3" x="1083" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_13" data-name="Rectangle 1 copy 13" class="cls-3" x="911" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_13-2" data-name="Rectangle 1 copy 13" class="cls-3" x="716" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_14" data-name="Rectangle 1 copy 14" class="cls-3" x="544" y="130" width="86" height="100"/>
  <rect id="Rectangle_1_copy_14-2" data-name="Rectangle 1 copy 14" class="cls-3" x="349" y="130" width="86" height="100"/>
  <rect class="cls-4" x="716" y="1245" width="277" height="165"/>
  <rect id="Rectangle_3_copy" data-name="Rectangle 3 copy" class="cls-5" x="1364" y="1245" width="277" height="165"/>
  <rect id="Rectangle_3_copy_2" data-name="Rectangle 3 copy 2" class="cls-6" x="1126" y="1245" width="219" height="165"/>
  <rect class="cls-7" x="1050" y="1245" width="67" height="165"/>
							</svg>
							<div class="level__pins">
								<a class="pin pin--4-1" data-category="1" data-space="4.01" href="#" aria-label="Pin for Rope Works ">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--4-2" data-category="2" data-space="4.02" href="#" aria-label="Pin for Agent 3">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--4-3" data-category="3" data-space="4.03" href="#" aria-label="Pin for Agent 11">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--4-4" data-category="4" data-space="4.04" href="#" aria-label="Pin for Sacred Symmetry">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--4-5" data-category="4" data-space="4.05" href="#" aria-label="Pin for Agent 16">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--4-6" data-category="2" data-space="4.06" href="#" aria-label="Pin for Agent 1">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
								<a class="pin pin--4-7" data-category="2" data-space="4.07" href="#" aria-label="Pin for Agent 1">
									<span class="pin__icon">
										<svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
										<svg class="icon icon--logo "><use xlink:href="#"></use></svg>
									</span>
								</a>
							</div>
							<!-- /level__pins -->
						</div>
					</div>
					<!-- /levels -->
				</div>
				<!-- /mall -->
				<button class="boxbutton boxbutton--dark open-search" aria-label="Show search"><svg class="icon icon--search"><use xlink:href="#icon-search"></use></svg></button>
				<nav class="mallnav mallnav--hidden">
					<button class="boxbutton mallnav__button--up" aria-label="Go up"><svg class="icon icon--angle-down"><use xlink:href="#icon-angle-up"></use></svg></button>
					<button class="boxbutton boxbutton--dark mallnav__button--all-levels" aria-label="Back to all levels"><svg class="icon icon--stack"><use xlink:href="#icon-stack"></use></svg></button>
					<button class="boxbutton mallnav__button--down" aria-label="Go down"><svg class="icon icon--angle-down"><use xlink:href="#icon-angle-down"></use></svg></button>
				</nav>
				<div class="content">
					<div class="content__item" data-space="1.01" data-category="1">
						<h3 class="content__item-title">Agent 14</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 6:30AM &mdash; 11:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="1.02" data-category="1">
						<h3 class="content__item-title">Agent 9</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Break</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="1.03" data-category="2">
						<h3 class="content__item-title">Agent 30</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Done</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="1.04" data-category="3">
						<h3 class="content__item-title">Agent 25</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="1.05" data-category="4">
						<h3 class="content__item-title">Agent 23</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong>In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="1.06" data-category="1">
						<h3 class="content__item-title">Agent 44</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Done</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="1.07" data-category="1">
						<h3 class="content__item-title">Agent 42</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 6:30AM &mdash; 09:00PM</span> 
								<span class="content__meta-item"><strong>Status:</strong>In process </span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="1.08" data-category="1">
						<h3 class="content__item-title">QC 01</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">Some informations here</p>
						</div>
					</div>
					<div class="content__item" data-space="1.09" data-category="1">
						<h3 class="content__item-title">Agent 41</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Break</span>
							</p>
							<p class="content__desc">somthing here. </p>
						</div>
					</div>
					<div class="content__item" data-space="2.01" data-category="1">
						<h3 class="content__item-title">Agent 40</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 11:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Done</span>
							</p>
							<p class="content__desc">somthing here;</p>
						</div>
					</div>
					<div class="content__item" data-space="2.02" data-category="2">
						<h3 class="content__item-title">Agent 28</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 11:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="2.03" data-category="2">
						<h3 class="content__item-title">Agent 38</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> </span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="2.04" data-category="3">
						<h3 class="content__item-title">Agent 37</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 11:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="2.05" data-category="1">
						<h3 class="content__item-title">Agent 36</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 9:00AM &mdash; 11:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here. </p>
						</div>
					</div>
					<div class="content__item" data-space="2.06" data-category="1">
						<h3 class="content__item-title">Agent 35</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="2.07" data-category="3">
						<h3 class="content__item-title">Agent 32</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 6:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Done</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="2.08" data-category="3">
						<h3 class="content__item-title">Agent 31</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 07:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Done</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="3.01" data-category="1">
						<h3 class="content__item-title">Agent 33</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Break</span>
							</p>
							<p class="content__desc">Somthing here. </p>
						</div>
					</div>
					<div class="content__item" data-space="3.02" data-category="2">
						<h3 class="content__item-title">Agent  7</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Done</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="3.03" data-category="3">
						<h3 class="content__item-title">Agent 34</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="3.04" data-category="3">
						<h3 class="content__item-title">Agent 29</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="3.05" data-category="4">
						<h3 class="content__item-title">Agent 19</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">some inofs here again.</p>
						</div>
					</div>
					<div class="content__item" data-space="3.06" data-category="4">
						<h3 class="content__item-title">Agent 10</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong>In process </span>
							</p>
							<p class="content__desc">something here.</p>
						</div>
					</div>
					<div class="content__item" data-space="3.07" data-category="4">
						<h3 class="content__item-title">Agent 22</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 6:30AM &mdash; 9:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">some actions here.</p>
						</div>
					</div>
					<div class="content__item" data-space="4.01" data-category="1">
						<h3 class="content__item-title">Rope Works</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; <strong>Closing on :</strong> 11:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">Some discription here.</p>
						</div>
					</div>
					<div class="content__item" data-space="4.02" data-category="2">
						<h3 class="content__item-title">Agent 3</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 13:00PM &mdash; 03:00AM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Break</span>
							</p>
							<p class="content__desc">something here.</p>
							<p class="content__desc">Add Task <a href="https://tympanus.net/Development/SeatPreview/">here</a>.</p>
						</div>
					</div>
					<div class="content__item" data-space="4.03" data-category="3">
						<h3 class="content__item-title">Agent 11</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 10:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Break</span>
							</p>
							<p class="content__desc">some actions here.</p>
						</div>
					</div>
					<div class="content__item" data-space="4.04" data-category="4">
						<h3 class="content__item-title">Agent 12</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 8:30AM &mdash; 11:00PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> Done</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="4.05" data-category="4">
						<h3 class="content__item-title">Agent 16</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 11:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="4.06" data-category="2">
						<h3 class="content__item-title">Agent 1</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 09:00PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here.</p>
						</div>
					</div>
					<div class="content__item" data-space="4.07" data-category="2">
						<h3 class="content__item-title">Agent 1</h3>
						<div class="content__item-details">
							<p class="content__meta">
								<span class="content__meta-item"><strong>In Mission from :</strong> 7:30AM &mdash; 12:30PM</span> 
								<span class="content__meta-item"><strong>Status:</strong> In process</span>
							</p>
							<p class="content__desc">somthing here</p>
						</div>
					</div>
					<button class="boxbutton boxbutton--dark content__button content__button--hidden" aria-label="Close details"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
				</div>
				<!-- content -->
			</div>
			<!-- /main -->
			<aside class="spaces-list" id="spaces-list">
				<div class="search">
					<input class="search__input" placeholder="Search..." />
					<button class="boxbutton boxbutton--darker close-search" aria-label="Close details"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
				</div>
				<span class="label">
					<input id="sort-by-name" class="label__checkbox" type="checkbox" aria-label="Show alphabetically"/>
					<label class="label__text">A - Z</label>
				</span>
				<ul class="list grouped-by-category">
					<li class="list__item" data-level="1" data-category="1" data-space="1.08"><a href="#" class="list__link">Agent 46</a></li>
					<li class="list__item" data-level="1" data-category="1" data-space="1.01"><a href="#" class="list__link">Agent 14</a></li>
					<li class="list__item" data-level="1" data-category="1" data-space="1.02"><a href="#" class="list__link">Agent 9</a></li>
					<li class="list__item" data-level="2" data-category="1" data-space="2.05"><a href="#" class="list__link">Agent 36</a></li>
					<li class="list__item" data-level="1" data-category="1" data-space="1.09"><a href="#" class="list__link">Agent 41</a></li>
					<li class="list__item" data-level="1" data-category="1" data-space="1.06"><a href="#" class="list__link">Agent 44</a></li>	
					<li class="list__item" data-level="1" data-category="1" data-space="1.07"><a href="#" class="list__link">Agent 42</a></li>
					<li class="list__item" data-level="2" data-category="1" data-space="2.01"><a href="#" class="list__link">Agent 40</a></li>
					<li class="list__item" data-level="3" data-category="1" data-space="3.01"><a href="#" class="list__link">Agent 33</a></li>
					<li class="list__item" data-level="4" data-category="1" data-space="4.01"><a href="#" class="list__link">Agent 24 </a></li>
					<li class="list__item" data-level="2" data-category="1" data-space="2.06"><a href="#" class="list__link">Agent 35</a></li>
					<li class="list__item" data-level="4" data-category="2" data-space="4.06"><a href="#" class="list__link">Agent 1</a></li>
					<li class="list__item" data-level="4" data-category="2" data-space="4.07"><a href="#" class="list__link">Agent 1</a></li>
					<li class="list__item" data-level="1" data-category="2" data-space="1.03"><a href="#" class="list__link">Agent 30</a></li>
					<li class="list__item" data-level="2" data-category="2" data-space="2.02"><a href="#" class="list__link">Agent 28</a></li>
					<li class="list__item" data-level="2" data-category="2" data-space="2.03"><a href="#" class="list__link">Agent 38</a></li>
					<li class="list__item" data-level="3" data-category="2" data-space="3.02"><a href="#" class="list__link">Agent 7</a></li>
					<li class="list__item" data-level="4" data-category="2" data-space="4.02"><a href="#" class="list__link">Agent 3</a></li>
					<li class="list__item" data-level="4" data-category="3" data-space="4.03"><a href="#" class="list__link">Agent 11</a></li>
					<li class="list__item" data-level="3" data-category="3" data-space="3.04"><a href="#" class="list__link">Agent 29</a></li>
					<li class="list__item" data-level="2" data-category="3" data-space="2.08"><a href="#" class="list__link">Agent 31</a></li>
					<li class="list__item" data-level="1" data-category="3" data-space="1.04"><a href="#" class="list__link">Agent 25</a></li>
					<li class="list__item" data-level="2" data-category="3" data-space="2.04"><a href="#" class="list__link">Agent 37</a></li>
					<li class="list__item" data-level="3" data-category="3" data-space="3.03"><a href="#" class="list__link">Agent 34</a></li>
					<li class="list__item" data-level="2" data-category="3" data-space="2.07"><a href="#" class="list__link">Agent 32</a></li>
					<li class="list__item" data-level="3" data-category="4" data-space="3.07"><a href="#" class="list__link">Agent 22</a></li>
					<li class="list__item" data-level="4" data-category="4" data-space="4.04"><a href="#" class="list__link">Agent 12</a></li>
					<li class="list__item" data-level="3" data-category="4" data-space="3.05"><a href="#" class="list__link">Agent 19</a></li>
					<li class="list__item" data-level="1" data-category="4" data-space="1.05"><a href="#" class="list__link">Agent 23</a></li>
					<li class="list__item" data-level="4" data-category="4" data-space="4.05"><a href="#" class="list__link">Agent 16</a></li>
					<li class="list__item" data-level="3" data-category="4" data-space="3.06"><a href="#" class="list__link">Agent 10</a></li>
				</ul>
			</aside>
			<!-- /spaces-list -->
		</div>

<script type="text/javascript">
	/**
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * https://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2016, Codrops
 * http://www.codrops.com
 */
;(function(window) {

	'use strict';

	// helper functions
	// from https://davidwalsh.name/vendor-prefix
	var prefix = (function () {
		var styles = window.getComputedStyle(document.documentElement, ''),
			pre = (Array.prototype.slice.call(styles).join('').match(/-(moz|webkit|ms)-/) || (styles.OLink === '' && ['', 'o']))[1],
			dom = ('WebKit|Moz|MS|O').match(new RegExp('(' + pre + ')', 'i'))[1];
		
		return {
			dom: dom,
			lowercase: pre,
			css: '-' + pre + '-',
			js: pre[0].toUpperCase() + pre.substr(1)
		};
	})();
	
	// vars & stuff
	var support = {transitions : Modernizr.csstransitions},
		transEndEventNames = {'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend'},
		transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
		onEndTransition = function(el, callback, propTest) {
			var onEndCallbackFn = function( ev ) {
				if( support.transitions ) {
					if( ev.target != this || propTest && ev.propertyName !== propTest && ev.propertyName !== prefix.css + propTest ) return;
					this.removeEventListener( transEndEventName, onEndCallbackFn );
				}
				if( callback && typeof callback === 'function' ) { callback.call(this); }
			};
			if( support.transitions ) {
				el.addEventListener( transEndEventName, onEndCallbackFn );
			}
			else {
				onEndCallbackFn();
			}
		},
		// the mall element
		mall = document.querySelector('.mall'),
		// mallÂ´s levels wrapper
		mallLevelsEl = mall.querySelector('.levels'),
		// mallÂ´s levels
		mallLevels = [].slice.call(mallLevelsEl.querySelectorAll('.level')),
		// total levels
		mallLevelsTotal = mallLevels.length,
		// surroundings elems
		mallSurroundings = [].slice.call(mall.querySelectorAll('.surroundings')),
		// selected level position
		selectedLevel,
		// navigation element wrapper
		mallNav = document.querySelector('.mallnav'),
		// show all mallÂ´s levels ctrl
		allLevelsCtrl = mallNav.querySelector('.mallnav__button--all-levels'),
		// levels navigation up/down ctrls
		levelUpCtrl = mallNav.querySelector('.mallnav__button--up'),
		levelDownCtrl = mallNav.querySelector('.mallnav__button--down'),
		// pins
		pins = [].slice.call(mallLevelsEl.querySelectorAll('.pin')),
		// content element
		contentEl = document.querySelector('.content'),
		// content close ctrl
		contentCloseCtrl = contentEl.querySelector('button.content__button'),
		// check if a content item is opened
		isOpenContentArea,
		// check if currently animating/navigating
		isNavigating,
		// check if all levels are shown or if one level is shown (expanded)
		isExpanded,
		// spaces list element
		spacesListEl = document.getElementById('spaces-list'),
		// spaces list ul
		spacesEl = spacesListEl.querySelector('ul.list'),
		// all the spaces listed
		spaces = [].slice.call(spacesEl.querySelectorAll('.list__item > a.list__link')),
		// reference to the current shows space (name set in the data-name attr of both the listed spaces and the pins on the map)
		spaceref,
		// sort by ctrls
		sortByNameCtrl = document.querySelector('#sort-by-name'),
		// listjs initiliazation (all mallÂ´s spaces)
		spacesList = new List('spaces-list', { valueNames: ['list__link', { data: ['level'] }, { data: ['category'] } ]} ),

		// smaller screens:
		// open search ctrl
		openSearchCtrl = document.querySelector('button.open-search'),
		// main container
		containerEl = document.querySelector('.container'),
		// close search ctrl
		closeSearchCtrl = spacesListEl.querySelector('button.close-search');

	function init() {
		// init/bind events
		initEvents();
	}

	/**
	 * Initialize/Bind events fn.
	 */
	function initEvents() {
		// click on a MallÂ´s level
		mallLevels.forEach(function(level, pos) {
			level.addEventListener('click', function() {
				// shows this level
				showLevel(pos+1);
			});
		});

		// click on the show mallÂ´s levels ctrl
		allLevelsCtrl.addEventListener('click', function() {
			// shows all levels
			showAllLevels();
		});

		// navigating through the levels
		levelUpCtrl.addEventListener('click', function() { navigate('Down'); });
		levelDownCtrl.addEventListener('click', function() { navigate('Up'); });

		// sort by name ctrl - add/remove category name (css pseudo element) from list and sorts the spaces by name 
		sortByNameCtrl.addEventListener('click', function() {
			if( this.checked ) {
				classie.remove(spacesEl, 'grouped-by-category');
				spacesList.sort('list__link');
			}
			else {
				classie.add(spacesEl, 'grouped-by-category'); 
				spacesList.sort('category');
			}
		});

		// hovering a pin / clicking a pin
		pins.forEach(function(pin) {
			var contentItem = contentEl.querySelector('.content__item[data-space="' + pin.getAttribute('data-space') + '"]');

			pin.addEventListener('mouseenter', function() {
				if( !isOpenContentArea ) {
					classie.add(contentItem, 'content__item--hover');
				}
			});
			pin.addEventListener('mouseleave', function() {
				if( !isOpenContentArea ) {
					classie.remove(contentItem, 'content__item--hover');
				}
			});
			pin.addEventListener('click', function(ev) {
				ev.preventDefault();
				// open content for this pin
				openContent(pin.getAttribute('data-space'));
				// remove hover class (showing the title)
				classie.remove(contentItem, 'content__item--hover');
			});
		});

		// closing the content area
		contentCloseCtrl.addEventListener('click', function() {
			closeContentArea();
		});

		// clicking on a listed space: open level - shows space
		spaces.forEach(function(space) {
			var spaceItem = space.parentNode,
				level = spaceItem.getAttribute('data-level'),
				spacerefval = spaceItem.getAttribute('data-space');

			space.addEventListener('click', function(ev) {
				ev.preventDefault();
				// for smaller screens: close search bar
				closeSearch();
				// open level
				showLevel(level);
				// open content for this space
				openContent(spacerefval);
			});
		});

		// smaller screens: open the search bar
		openSearchCtrl.addEventListener('click', function() {
			openSearch();
		});

		// smaller screens: close the search bar
		closeSearchCtrl.addEventListener('click', function() {
			closeSearch();
		});
	}

	/**
	 * Opens a level. The current level moves to the center while the other ones move away.
	 */
	function showLevel(level) {
		if( isExpanded ) {
			return false;
		}
		
		// update selected level val
		selectedLevel = level;

		// control navigation controls state
		setNavigationState();

		classie.add(mallLevelsEl, 'levels--selected-' + selectedLevel);
		
		// the level element
		var levelEl = mallLevels[selectedLevel - 1];
		classie.add(levelEl, 'level--current');

		onEndTransition(levelEl, function() {
			classie.add(mallLevelsEl, 'levels--open');

			// show level pins
			showPins();

			isExpanded = true;
		}, 'transform');
		
		// hide surroundings element
		hideSurroundings();
		
		// show mall nav ctrls
		showMallNav();

		// filter the spaces for this level
		showLevelSpaces();
	}

	/**
	 * Shows all MallÂ´s levels
	 */
	function showAllLevels() {
		if( isNavigating || !isExpanded ) {
			return false;
		}
		isExpanded = false;

		classie.remove(mallLevels[selectedLevel - 1], 'level--current');
		classie.remove(mallLevelsEl, 'levels--selected-' + selectedLevel);
		classie.remove(mallLevelsEl, 'levels--open');

		// hide level pins
		removePins();

		// shows surrounding element
		showSurroundings();
		
		// hide mall nav ctrls
		hideMallNav();

		// show back the complete list of spaces
		spacesList.filter();

		// close content area if it is open
		if( isOpenContentArea ) {
			closeContentArea();
		}
	}

	/**
	 * Shows all spaces for current level
	 */
	function showLevelSpaces() {
		spacesList.filter(function(item) { 
			return item.values().level === selectedLevel.toString(); 
		});
	}

	/**
	 * Shows the levelÂ´s pins
	 */
	function showPins(levelEl) {
		var levelEl = levelEl || mallLevels[selectedLevel - 1];
		classie.add(levelEl.querySelector('.level__pins'), 'level__pins--active');
	}

	/**
	 * Removes the levelÂ´s pins
	 */
	function removePins(levelEl) {
		var levelEl = levelEl || mallLevels[selectedLevel - 1];
		classie.remove(levelEl.querySelector('.level__pins'), 'level__pins--active');
	}

	/**
	 * Show the navigation ctrls
	 */
	function showMallNav() {
		classie.remove(mallNav, 'mallnav--hidden');
	}

	/**
	 * Hide the navigation ctrls
	 */
	function hideMallNav() {
		classie.add(mallNav, 'mallnav--hidden');
	}

	/**
	 * Show the surroundings level
	 */
	function showSurroundings() {
		mallSurroundings.forEach(function(el) {
			classie.remove(el, 'surroundings--hidden');
		});
	}

	/**
	 * Hide the surroundings level
	 */
	function hideSurroundings() {
		mallSurroundings.forEach(function(el) {
			classie.add(el, 'surroundings--hidden');
		});
	}

	/**
	 * Navigate through the mallÂ´s levels
	 */
	function navigate(direction) {
		if( isNavigating || !isExpanded || isOpenContentArea ) {
			return false;
		}
		isNavigating = true;

		var prevSelectedLevel = selectedLevel;

		// current level
		var currentLevel = mallLevels[prevSelectedLevel-1];

		if( direction === 'Up' && prevSelectedLevel > 1 ) {
			--selectedLevel;
		}
		else if( direction === 'Down' && prevSelectedLevel < mallLevelsTotal ) {
			++selectedLevel;
		}
		else {
			isNavigating = false;	
			return false;
		}

		// control navigation controls state (enabled/disabled)
		setNavigationState();
		// transition direction class
		classie.add(currentLevel, 'level--moveOut' + direction);
		// next level element
		var nextLevel = mallLevels[selectedLevel-1]
		// ..becomes the current one
		classie.add(nextLevel, 'level--current');

		// when the transition ends..
		onEndTransition(currentLevel, function() {
			classie.remove(currentLevel, 'level--moveOut' + direction);
			// solves rendering bug for the SVG opacity-fill property
			setTimeout(function() {classie.remove(currentLevel, 'level--current');}, 60);

			classie.remove(mallLevelsEl, 'levels--selected-' + prevSelectedLevel);
			classie.add(mallLevelsEl, 'levels--selected-' + selectedLevel);

			// show the current levelÂ´s pins
			showPins();

			isNavigating = false;
		});

		// filter the spaces for this level
		showLevelSpaces();

		// hide the previous levelÂ´s pins
		removePins(currentLevel);
	}

	/**
	 * Control navigation ctrls state. Add disable class to the respective ctrl when the current level is either the first or the last.
	 */
	function setNavigationState() {
		if( selectedLevel == 1 ) {
			classie.add(levelDownCtrl, 'boxbutton--disabled');
		}
		else {
			classie.remove(levelDownCtrl, 'boxbutton--disabled');
		}

		if( selectedLevel == mallLevelsTotal ) {
			classie.add(levelUpCtrl, 'boxbutton--disabled');
		}
		else {
			classie.remove(levelUpCtrl, 'boxbutton--disabled');
		}
	}

	/**
	 * Opens/Reveals a content item.
	 */
	function openContent(spacerefval) {
		// if one already shown:
		if( isOpenContentArea ) {
			hideSpace();
			spaceref = spacerefval;
			showSpace();
		}
		else {
			spaceref = spacerefval;
			openContentArea();
		}
		
		// remove class active (if any) from current list item
		var activeItem = spacesEl.querySelector('li.list__item--active');
		if( activeItem ) {
			classie.remove(activeItem, 'list__item--active');
		}
		// list item gets class active
		classie.add(spacesEl.querySelector('li[data-space="' + spacerefval + '"]'), 'list__item--active');

		// remove class selected (if any) from current space
		var activeSpaceArea = mallLevels[selectedLevel - 1].querySelector('svg > .map__space--selected');
		if( activeSpaceArea ) {
			classie.remove(activeSpaceArea, 'map__space--selected');
		}
		// svg area gets selected
		classie.add(mallLevels[selectedLevel - 1].querySelector('svg > .map__space[data-space="' + spaceref + '"]'), 'map__space--selected');
	}

	/**
	 * Opens the content area.
	 */
	function openContentArea() {
		isOpenContentArea = true;
		// shows space
		showSpace(true);
		// show close ctrl
		classie.remove(contentCloseCtrl, 'content__button--hidden');
		// resize mall area
		classie.add(mall, 'mall--content-open');
		// disable mall nav ctrls
		classie.add(levelDownCtrl, 'boxbutton--disabled');
		classie.add(levelUpCtrl, 'boxbutton--disabled');
	}

	/**
	 * Shows a space.
	 */
	function showSpace(sliding) {
		// the content item
		var contentItem = contentEl.querySelector('.content__item[data-space="' + spaceref + '"]');
		// show content
		classie.add(contentItem, 'content__item--current');
		if( sliding ) {
			onEndTransition(contentItem, function() {
				classie.add(contentEl, 'content--open');
			});
		}
		// map pin gets selected
		classie.add(mallLevelsEl.querySelector('.pin[data-space="' + spaceref + '"]'), 'pin--active');
	}

	/**
	 * Closes the content area.
	 */
	function closeContentArea() {
		classie.remove(contentEl, 'content--open');
		// close current space
		hideSpace();
		// hide close ctrl
		classie.add(contentCloseCtrl, 'content__button--hidden');
		// resize mall area
		classie.remove(mall, 'mall--content-open');
		// enable mall nav ctrls
		if( isExpanded ) {
			setNavigationState();
		}
		isOpenContentArea = false;
	}

	/**
	 * Hides a space.
	 */
	function hideSpace() {
		// the content item
		var contentItem = contentEl.querySelector('.content__item[data-space="' + spaceref + '"]');
		// hide content
		classie.remove(contentItem, 'content__item--current');
		// map pin gets unselected
		classie.remove(mallLevelsEl.querySelector('.pin[data-space="' + spaceref + '"]'), 'pin--active');
		// remove class active (if any) from current list item
		var activeItem = spacesEl.querySelector('li.list__item--active');
		if( activeItem ) {
			classie.remove(activeItem, 'list__item--active');
		}
		// remove class selected (if any) from current space
		var activeSpaceArea = mallLevels[selectedLevel - 1].querySelector('svg > .map__space--selected');
		if( activeSpaceArea ) {
			classie.remove(activeSpaceArea, 'map__space--selected');
		}
	}

	/**
	 * for smaller screens: open search bar
	 */
	function openSearch() {
		// shows all levels - we want to show all the spaces for smaller screens 
		showAllLevels();

		classie.add(spacesListEl, 'spaces-list--open');
		classie.add(containerEl, 'container--overflow');
	}

	/**
	 * for smaller screens: close search bar
	 */
	function closeSearch() {
		classie.remove(spacesListEl, 'spaces-list--open');
		classie.remove(containerEl, 'container--overflow');
	}
	
	init();

})(window);
</script>

</body>

</html>