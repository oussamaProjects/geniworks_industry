<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
</head>
<body>
<style >
	@charset "UTF-8";
html, body {
  margin: 0;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

body {
  overflow-y: scroll;
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
}

.row {
  display: flex;
  background: #fff;
  width: 80%;
  margin: 0 auto;
  margin-bottom: 20px;
  justify-content: center;
}
.row .cell {
  position: relative;
  height: 100%;
  width: 100%;
  max-height: 320px;
  max-width: 320px;
  cursor: pointer;
  background: #a3c4fa;
  background-position: center;
  background-size: contain;
  margin-right: 24px;
  filter: contrast(110%) saturate(110%);
}
.row .cell:last-child {
  margin-right: 0px;
}
.row .cell:after {
  content: "";
  display: block;
  padding-bottom: 100%;
}
.row .cell:hover {
  filter: brightness(0.3);
}

@media (max-width: 768px) {
  .row {
    width: 100%;
    margin-bottom: 4px;
  }
  .row .cell {
    margin-right: 4px;
  }
}
.swiper-controls {
  display: none;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
}
.swiper-controls .swiper-button-prev {
  left: 220px;
}
.swiper-controls .swiper-button-next {
  right: 220px;
}
.swiper-controls .swiper-button-close {
  top: 220px;
}

.swiper-modal {
  visibility: hidden;
  display: none;
  height: 90vw;
  width: 90vw;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
  z-index: 10;
  display: flex;
}
.swiper-modal img {
  height: 100%;
  width: 100%;
}

.swiper-disabled {
  opacity: 0.35 !important;
  cursor: auto !important;
}
.swiper-disabled:hover {
  background: rgba(0, 0, 0, 0.7) !important;
}
.swiper-disabled:hover:before {
  color: #ccc !important;
}

.swiper-container {
  height: 90vw;
  width: 90vw;
  background: #111;
  box-shadow: 0 0 70px #111;
  z-index: 2;
}

@media (min-width: 600px) and (orientation: landscape) {
  .swiper-container {
    height: 90vh;
    width: 90vh;
  }

  .swiper-modal {
    height: 90vh;
    width: 90vh;
  }

  .swiper-controls {
    display: block;
  }

  .swiper-button-prev .next, .swiper-button-prev .back, .swiper-button-next .next, .swiper-button-next .back {
    visibility: hidden;
  }

  .swiper-button-close {
    display: none;
  }
}
@media (max-width: 600px) {
  .swiper-controls {
    display: none !important;
  }
}
@media (orientation: portrait) {
  .swiper-controls {
    display: none !important;
  }
}
button {
  background: rgba(0, 0, 0, 0.7);
  height: 50px;
  width: 50px;
  margin: auto;
  z-index: 3;
  border-radius: 50%;
  position: absolute;
  top: 0;
  bottom: 0;
  cursor: pointer;
  border: none;
  outline: none;
}
button:before {
  font-size: 4em;
  font-weight: 700;
  color: #ddd;
  display: block;
}
button:hover {
  background: black;
}
button:hover:before {
  color: #fff;
}

.back {
  left: 10px;
}

.next {
  right: 10px;
}
.next:before {
  display: block;
  background: red;
  height: 20px;
  width: 20px;
}

.close {
  margin: 0 auto;
  top: 10px;
  right: 20px;
  z-index: 11;
}
.close:before {
  content: "×";
  margin-top: -6px;
}

.arrow {
  display: relative;
  margin: 0 auto;
  border: solid #fff;
  border-width: 0 4px 4px 0;
  display: inline-block;
  padding: 3px;
  height: 8px;
  width: 8px;
}

.right {
  transform: rotate(-45deg);
  margin-right: 8px;
  margin-top: 4px;
}

.left {
  transform: rotate(135deg);
  margin-left: 8px;
  margin-top: 4px;
}

.swiper-button-prev {
  background: none;
  margin: 0;
  height: 100%;
  width: 50%;
  top: 0;
  bottom: 0;
  left: 0;
}

.swiper-button-next {
  background: none;
  margin: 0;
  height: 100%;
  width: 50%;
  top: 0;
  bottom: 0;
  right: 0;
}

.swiper-background {
  display: none;
  background: rgba(0, 0, 0, 0.7);
  position: fixed;
  height: 100%;
  width: 100%;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 2;
  overflow: hidden;
}

</style>

<script>
	/*

# Photo Gallery with Scrolling, Swiping, Tapping, Keyboard, and Mousewheel

## Features

- Gallery
	- 3x3
	- Vertical Scrolling
  - Horizontally & Vertically Responsive
	- No Highlight on Tap on Touch Devices

- Swiper Photo Modal
  - Lightbox Swipable Horizontal Gallery
  - Perfect Horizontal and Vertical Centering
  - Back and Next Buttons, Interior and/or Exterior
		- Buttons Transparent on First/Last Photo
	- Close Button, and Click Anywhere to Close
	- Arrow Keys
		- Left: Back
		- Right: Next
		- Esc: Close
	- Halt Gallery Scroll in Background
	- No Highlight on Tap on Touch Devices
  - Mousewheel for Back/Next

*/


// Gallery
// -------

let photos = [
  'https://loremflickr.com/800/800/dog?random=1',
  'https://loremflickr.com/800/800/dog?random=2',
  'https://loremflickr.com/800/800/dog?random=3',
  'https://loremflickr.com/800/800/dog?random=4',
  'https://loremflickr.com/800/800/dog?random=5',
  'https://loremflickr.com/800/800/dog?random=6',
  'https://loremflickr.com/800/800/dog?random=7',
  'https://loremflickr.com/800/800/dog?random=8',
  'https://loremflickr.com/800/800/dog?random=9',
  'https://loremflickr.com/800/800/dog?random=10',
  'https://loremflickr.com/800/800/dog?random=11',
  'https://loremflickr.com/800/800/dog?random=12',
  'https://loremflickr.com/800/800/dog?random=13',
  'https://loremflickr.com/800/800/dog?random=14',
  'https://loremflickr.com/800/800/dog?random=15',
  'https://loremflickr.com/800/800/dog?random=16',
  'https://loremflickr.com/800/800/dog?random=17',
  'https://loremflickr.com/800/800/dog?random=18'
]

function createGallery(photos) {

  function key() {
    return 'key-' + String(Math.random()).split('.')[1]
  }

  let it = $('<div id="gallery"></div>')

  for (let i=0, l=photos.length; i<l; i += 3) {

    // Create CSS class for each image
    let keyA = key()
    let keyB = key()
    let keyC = key()
    let classes = []
    classes.push('.' + keyA + ' { background-image: url("' + photos[i] + '") !important; }')
    classes.push('.' + keyB + ' { background-image: url("' + photos[i+1] + '") !important; }')
    classes.push('.' + keyC + ' { background-image: url("' + photos[i+2] + '") !important; }')
    $('style').append(classes.join('\n'))

    // Create each cell linked to image's CSS class
    let cells = []
    cells[i] = '<div class="cell '+keyA+'"></div>'
    cells[i+1] = '<div class="cell '+keyB+'"></div>'
    cells[i+2] = '<div class="cell '+keyC+'"></div>'

    // Add each cell to row
    let row = $('<div class="row"></div>')
    row.append(cells[i])
    row.append(cells[i+1])
    row.append(cells[i+2])

    // Add each row to gallery
    it.append(row)

  }

  return it.html()

}


// Swiper
// ------

function createSwiper(photos) {

	let whole = $('<div class="swiper-whole"></div>')
	
	let modal = $('<div class="swiper-modal"></div>')

	let controls = $('<div class="swiper-controls"></div>')
	controls.append('<button class="back" alt="Back"><div class="arrow left"></div></button>')
	controls.append('<button class="next" alt="Next"><div class="arrow right"></div></button>')
	controls.append('<button class="close" alt="Close"><div class="x"></div></button>')
	
	let container = $('<div class="swiper-container"></div>')
	let wrapper = $('<div class="swiper-wrapper"></div>')
	
	photos.forEach(it => {
		let slide = $('<div class="swiper-slide"></div>')
		slide.append('<img src="' + it + '">')
		wrapper.append(slide)
	})
	container.append(wrapper)

	container.append('<div class="swiper-button-close"><button class="close"><div class="x"></div></button></div>')
	container.append('<div class="swiper-button-prev"><button class="back"><div class="arrow left"></div></button></div>')
	container.append('<div class="swiper-button-next"><button class="next"><div class="arrow right"></div></button></div>')
	container.append('<div class="swiper-scrollbar"></div>')
	
	modal.append(controls)
	modal.append(container)
	whole.append(modal)
	whole.append('<div class="swiper-background"></div>')
	
	return whole

}

let swiper = null
function initSwiper() {

	// Create swiper instance
	swiper = new Swiper('.swiper-container', {
		pagination: false,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		scrollbar: '.swiper-scrollbar',
		preloadImages: true
	})
	
	// Controls, Inner
	$('.swiper-controls .back').click(back)
	$('.swiper-controls .next').click(next)

	// Controls, Outer
	$('.swiper-controls').click(it => {
		console.log("ctrl", it.target.className)
		switch(it.target.className) {
			case 'swiper-controls':
				close(it)
		}
	})

	// Mousewheel
	window.addEventListener('wheel', event => {
		if (isOpen) {
			let delta = Math.sign(event.deltaY)
			if (delta === 1) next()
			else if (delta === -1) back()
		}
	})

	// Keyboard
	$(document).keydown(e => {
		if (isOpen && e.key == 'ArrowLeft') {
			back()
		}
		else if (isOpen && e.key == 'ArrowRight') {
			next()
		}
		else if (isOpen && e.key == 'Escape') {
			close()
		}
	})

	// Resize
	$(document).resize(() => {
		if (isOpen && $(window).width() >= 600 && isLandscape) {
			$('.swiper-controls').css({
				display: 'block'
			})
		} else {
			$('.swiper-controls').css({
				display: 'none'
			})
		}
	})

	// Close handlers
	$('.swiper-controls .close').click(close)
	$('.swiper-button-close').click(close)
	$('.swiper-background').click(close)

}

var isOpen = false
var Scroll = $(window).scrollTop()

function getPhotoIndex(elt) {
	let photos = document.getElementsByClassName('cell')
	return Array.prototype.indexOf.call(photos, elt)
}

function showOuterControls() {
	let isLandscape = window.innerHeight > window.innerWidth
	return $(window).width() >= 600 && isLandscape
}

function setScrolling(b) {
	if (b) {
		$('body').css({
			overflow: 'auto',
			position: 'static'
		})
		window.scrollTo(0, Scroll)
	}
	else {
		Scroll = $(window).scrollTop()
		$('body').css({
			overflowY: 'scroll',
			position: 'fixed',
			top: -Scroll,
		})
	}
}

function open(it) {
	
	isOpen = true

	swiper.slideTo(getPhotoIndex(it.target), 0)

	// TODO still needed, right?
	if (showOuterControls()) {
		$('.swiper-controls').css({
			display: 'block'
		})	
	}
	
	$('.swiper-modal').css({
		visibility: 'visible'
	})
	
	$('.swiper-background').css({
		display: 'block'
	})

	setScrolling(false)

}

function back() {
	swiper.slidePrev()
	if (swiper.isBeginning) {
		$('.swiper-controls .back').addClass('swiper-disabled')
		$('.swiper-controls .next').removeClass('swiper-disabled')
	} else {
		$('.swiper-controls .back').removeClass('swiper-disabled')
		$('.swiper-controls .next').removeClass('swiper-disabled')
	}
}

function next() {
	swiper.slideNext()
	if (swiper.isEnd) {
		$('.swiper-controls .back').removeClass('swiper-disabled')
		$('.swiper-controls .next').addClass('swiper-disabled')
	} else {
		$('.swiper-controls .back').removeClass('swiper-disabled')
		$('.swiper-controls .next').removeClass('swiper-disabled')
	}
}

function close(it) {
	
	isOpen = false

	$('.swiper-modal').css({
		visibility: 'hidden'
	})

	// $('.swiper-controls').css({
	// 	display: 'none'
	// })
	
	$('.swiper-background').css({
		display: 'none'
	})

	setScrolling(true)

}

// Init
$(document).ready(() => {
	
	$('body').append(createSwiper(photos))
	$('body').append(createGallery(photos))
	
	initSwiper()
	
	// console.log(createSwiper(photos).html())

	// Open
	$('.cell').click(open)

})

</script>
</body>
</html>