
// mobile menu

var toggleButton = document.querySelector('.toggle-menu');
var navBar = document.querySelector('.nav-bar');
toggleButton.addEventListener('click', function() {
	navBar.classList.toggle('toggle');
});

//slider

let slides = document.querySelectorAll('.review-item');
let sliderDots = document.querySelectorAll('.slider-dots__item');

 
for(let i=0; i<sliderDots.length; i++) {
	sliderDots[i].addEventListener('click', function(){
		for(let i=0; i<sliderDots.length; i++) {
			sliderDots[i].classList.remove('slider-dots--active');
			slides[i].classList.remove('active');
		}
		sliderDots[i].classList.add('slider-dots--active')
		slides[i].classList.add('active');
	})
}

//lightgallery start
 baguetteBox.run('.gallery-list');



 //smooth scroll 
 (function () {
	var smoothScroll = function smoothScroll(targetEl, duration) {
		var headerElHeight = document.querySelector('#header').clientHeight; // класс хедера

		var target = document.querySelector(targetEl);
	
		var targetPosition = target.getBoundingClientRect().top; // - headerElHeight; //вычитаем размер хедера, если он фиксированный

		var startPosition = window.pageYOffset;
		var startTime = null;

		var ease = function ease(t, b, c, d) {
			t /= d / 2;
			if (t < 1) return c / 2 * t * t + b;
			t--;
			return -c / 2 * (t * (t - 2) - 1) + b;
		};

		var animation = function animation(currentTime) {
			if (startTime === null) startTime = currentTime;
			var timeElapsed = currentTime - startTime;
			var run = ease(timeElapsed, startPosition, targetPosition, duration);
			window.scrollTo(0, run);
			if (timeElapsed < duration) requestAnimationFrame(animation);
		};

		requestAnimationFrame(animation);
	};

	var scrollTo = function scrollTo() {
		//const links = document.querySelectorAll('.js-scroll'); //добавляем классы к линкам
		var links = document.querySelectorAll('.nav-list__link'); //добавляем классы к линкам
		var headerNav = document.querySelector('.nav-bar');
		links.forEach(function (each) {
			each.addEventListener('click', function (e) {
				e.preventDefault();
				var currentTarget = this.getAttribute('href');
				smoothScroll(currentTarget, 1000); //выход из мобильного меню
				headerNav.classList.toggle('toggle');
			});
		});
	};

	scrollTo();
})()


//scroll to top
var intervalId = 0;
var scrollButton = document.querySelector('.to-top');
var header = document.querySelector('#header');
var headerHeight = header.clientHeight;


window.addEventListener('scroll', function () {
	if (window.pageYOffset > headerHeight)
		scrollButton.style.display = "block";
	else
		scrollButton.style.display = "none";
});


function scrollStep() {
	if (window.pageYOffset === 0) {
		clearInterval(intervalId);
	}
	window.scroll(0, window.pageYOffset - 50);
}

function scrollToTop() {
  //change speed
	intervalId = setInterval(scrollStep, 12);
}

scrollButton.addEventListener('click', scrollToTop);

//popup
//popup
let popup = document.querySelector('.popup-wrapper');
let popupForm = document.querySelector('.popup-form');
let popupBtn = document.querySelector('.promo-btn');
let popupClose = document.querySelector('.close-btn');
let popupOpen = false;

popupBtn.addEventListener('click', (e)=> {
	e.preventDefault;
	addPopup();
})

popupClose.addEventListener('click', (e)=> {
	e.preventDefault;
	removePopup();
})

// popupForm.addEventListener('submit', ()=> {
// 	//removePopup();
// })

 
	popup.addEventListener('click', (e)=> {
		let target = e.target;
	if(target.classList.contains("popup-wrapper")) {
		removePopup();
	}
	else
	return
	
})

function addPopup() {
	popup.classList.add('active');
	bodyScroll()
}

function removePopup() {
	popup.classList.remove('active');
	bodyScroll();
}

function bodyScroll() {
	document.body.classList.toggle('no-scroll');
}

//Masonry
var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.gallery__item',
  columnWidth: 50
});

// element argument can be a selector string
//   for an individual element
var msnry = new Masonry( '.grid', {
  // options
});