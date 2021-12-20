<section class="wishlist mt-5" id="explore">
<div class="container">
<h5>Your Wishlist</h5>
    <div class="row">
        <?php
         if (empty($get_wishlist)) {
            echo '
            <div class="col-12 text-center my-5 alert alert-danger">
                <h1 class="heading-1 text-center">
                    Oops Your wishlist is empty!
                </h1> 
            </div>
            ';
        }
        else {
            foreach($get_wishlist as $wishlist): 
                $wish = $Product->getProductById($wishlist['product_id']);
                array_map(function($wishlist){ 
        ?>
            <div class="col-md-4 col">
                <div class="product-box py-2 px-2 my-2 rounded-2">
                    <form method="post" class="pb-2  form-fav" >
                        <input type="hidden" name="delete_fav" value="<?= $wishlist['product_id'] ?>">
                        <button type="submit" name="remove_submit" class="btn btn-heart fas fa-times"></button>
                    </form>
                    <div class="product-img mt-3">
                        <a href="/product?product_id='.$product['product_id'].'">
                            <img src="<?= $wishlist['product_image'] ?>" class="img-fluid">
                        </a>
                    </div>
                    <h6 class="text-center"><?= $wishlist['product_name'] ?></h6>
                    <div class="price mt-2">
                        <p class="text-center">Shs<strong><?= $wishlist['product_price'] ?></strong></p>
                    </div>
                    <div class="cart mt-2">
                        <form method="post" action="" >
                            <input type="hidden" name="cart"   value="<?= $wishlist['product_id'] ?>">
                            <?php 
                            global $Cart;
                                if (!empty(in_array($wishlist['product_id'], $Cart->getCartId($Cart->getCart($_SESSION['id']))))) {
                                   echo '
                                   <input type="submit"  disabled class="btn btn-danger w-100 disabled" value="In the Cart">
                                   ';
                                }else {
                                    echo '
                                        <button type="submit"  class="btn btn-light w-100 add">Add to cart</button>
                                    ';
                                }
                            ?>
                            
                        </form>
                    </div>
                </div>
            </div>

        <?php 
            }, $wish);
            endforeach;} 
        ?>
    </div>
</div>
</div>
</section>