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
	//  add to cart button
	// let $remove_cart = $(".remove");

	// $remove_cart.click(function(){
	// 	$.ajax({
	// 		uri:"../cart.php",
	// 		type:"POST",
	// 		data: {product_id:$(this).data("id")},
	// 		success: function(result) {
	// 			let obj = JSON.parse(result);
	// 			console.log(obj);
	// 		}
	// 	});

	// });

	//  cart content
	 let $qty_plus = $(".qty-btn .qty-plus");
	 let $qty_minus = $(".qty-btn .qty-minus");
	 let $sub = $("#subtotal");
	//  console.log($sub.text());

	//  up button
	$qty_plus.click(function(e) {

		let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
		let $price = $(`.price-tag[data-id='${$(this).data("id")}']`);

		// change product price using ajax call
		$.ajax({uri:"../cart.php", type:'POST', data:{productId:$(this).data("id")}, success: function(result) {
			let obj = JSON.parse(result);
			let product_price = obj[0]['product_price'];

			if ($input.val() >= 1 && $input.val() <=9) {
				$input.val(function(i, oldval) {
					return ++oldval;
				});
					// Increase price of the product
			$price.text(parseInt(product_price * $input.val()).toFixed(2));

			// set sub total
			let subtotal = parseInt($sub.text()) + parseInt(product_price);
			// console.log(total);
			$sub.text(subtotal.toFixed(2));
			}
		}});
	});

	//  down button
	$qty_minus.click(function(e) {
		let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
		let $price = $(`.price-tag[data-id='${$(this).data("id")}']`);
		
		$.ajax({uri:"../cart.php", type:'POST', data:{productId:$(this).data("id")}, success: function(result) {
			let obj = JSON.parse(result);
			let product_price = obj[0]['product_price'];

			if ($input.val() > 1 && $input.val() <=10) {
				$input.val(function(i, oldval) {
					return --oldval;
				});
				$price.text(parseInt(product_price * $input.val()).toFixed(2));
	
				// set sub total
				let subtotal = parseInt($sub.text()) - parseInt(product_price);
				// console.log(total);
				$sub.text(subtotal.toFixed(2));
			}
			
		}});
		
	});
	// $("#reg-form").submit(function(e) {
	// 	let $password = $("#password");
	// 	let $confirm = $("#confirm_password");
	// 	let $error = $("#error");
	// 	if ($password.val() === $confirm.val() ) {
	// 		return true;
	// 	}else {
	// 		$error.text("Password not Match");
	// 		e.preventDefault();
	// 	}
	// });

});

let swiper = new Swiper('.swiper-container', {
	spaceBetween:20,
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
		},
		768:{
			slidesPerView:3,
		}
	},
	// loop:true,
	mousewheel:true,
	keyboard:true
});
const swipe = new Swiper('.swipe', {
	cssMode:true,
	loop:true,	
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	breakpoints: {
		375:{
			slidesPerView:1,
		}	
	},
	
	mousewheel:true,
	keyboard:true
});

// document.getElementsByClassName('add-to-fav').addEventListener('click', add);

// function add() {
// 	console.log("clicked");
// }


// document.getElementById('button').addEventListener('click', load);

// function load() {
// 	// CREATE XHR OBJECT
// 	let xhr = new XMLHttpRequest();
// 	// OPEN - type, url/file, async
// 	xhr.open('GET', 'product.html', true);

// 	xhr.onload = function () {
// 		if (this.status == 200) {
// 			let data = this.response;
// 			console.log(data);
// 		}
// 	}
// 	xhr.send();
// }
