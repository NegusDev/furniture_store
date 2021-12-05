const responsive = {
	320:{
		items:1
	},
	560:{
		items:1
	},
	960:{
		items:1
	},
	0:{
		items:2
	}
}
$(document).ready(function(){
	$(".owl-carousel ").owlCarousel({

		 navigation : false, // Show next and prev buttons
		 loop:true,
		 autoplay:true,
		 autoplayTimeout:4000,
		 slideSpeed : 300,
		 paginationSpeed : 400,
		 dots:true,
		 responsive:responsive
 	});
});

let swiper = new Swiper('.swiper-container', {
	cssMode:true,
	spaceBetween:30,
	// navigation: {
	// 	nextEl:'.swiper-button-next',
	// 	prevEl:'.swiper-button-prev',
	// },
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	breakpoints: {
		375:{
			slidesPerView:2,
		}
	},
	loop:false,
	mousewheel:true,
	keyboard:true
});
