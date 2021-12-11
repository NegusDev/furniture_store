<main id="main" class="content my-2">
<section class="banner " id="banner">
<div class="owl-carousel owl-theme rounded-2">
<div class="item ">
<img src="assets/img/banner-1.jpg">
</div>
<div class="item">
<img src="assets/img/banner-2.jpg">
</div>
<div class="item">
<img src="assets/img/banner-bg.png">
</div>
</div>
</section>
<section class="latest_products " id="latest">
<div class="container">
<!-- <button class="btn btn-primary"  id="button">Load</button> -->
<h5>Latest Products</h5>
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide product-box py-2 px-2 my-2 rounded-2">
<button type="submit" id="add-to-fav" class="btn btn-heart fas fa-heart add-to-fav"></button>
<div class="product-img mt-3">
<a href="/product" >
<img src="assets/img/banner-1.jpg" class="img-fluid">
</a>
</div>
<h6 class="text-center">Asian style sofa</h6>
<div class="price mt-2">
<p class="text-center">Shs<strong>200000</strong></p>
</div>
<div class="cart mt-2">
<button type="submit" class="btn btn-light w-100">Add to cart</button>
<!-- <p class="text-center">Shs<strong>200000</strong></p> -->
</div>
</div>
<div class="swiper-slide product-box py-2 px-2 my-2 rounded-2">
<button type="submit" id="add-to-fav" class="btn btn-heart fas fa-heart add-to-fav"></button>
<div class="product-img mt-3">
<a href="/product">
<img src="assets/img/banner-2.jpg" class="img-fluid">
</a>
</div>
<h6 class="text-center">American double bed</h6>
<div class="price mt-2">
<p class="text-center">Shs<strong>1500000</strong></p>
</div>
<div class="cart mt-2">
<button type="submit" class="btn btn-light w-100">Add to cart</button>
<!-- <p class="text-center">Shs<strong>200000</strong></p> -->
</div>
</div>
<div class="swiper-slide product-box py-2 px-2 my-2 rounded-2">
<button type="submit" id="" class="btn btn-heart fas fa-heart add-to-fav"></button>
<div class="product-img mt-3">
<a href="product">
<img src="assets/img/banner-1.jpg" class="img-fluid">
</a>
</div>
<h6 class="text-center">Dinning table</h6>
<div class="price mt-2">
<p class="text-center">Shs<strong>200000</strong></p>
</div>
<div class="cart mt-2">
<button type="submit" class="btn btn-light w-100">Add to cart</button>
<!-- <p class="text-center">Shs<strong>200000</strong></p> -->
</div>
</div>
</div>

<!-- next, prev buttons -->
<div class="swiper-button- d-none">
<i class="fas fa-angle-right swiper-icon"></i>
</div>
<div class="swiper-button-prev d-none">
<i class="fas fa-angle-left swiper-icon"></i>
</div>
<!-- pagination -->
<!-- <div class="swiper-pagination"></div> -->


</div>
</div>
</section>
<section class="explore_products mt-5" id="explore">
<div class="container">
<h5>Explore Products</h5>
    <?= $page['content'];  ?>
</div>
</div>
</section>
