<section class="cart my-5" id="cart">
<div class="container">
<h3 class="fw-bold">Your Shopping Cart</h3>
<div class="row">
    <div class="col-md-8">
        <?php
        if (empty($get_cart)) {
            echo '
            <div class="col-12 text-center my-5 alert alert-danger">
                <h1 class="heading-1 text-center">
                    Oops it seems you have nothing in your cart!
                </h1>
            </div>
            ';
        }
        else {
            
        
        foreach ($get_cart as $item):
            $cart = $Product->getProductById($item['product_id']);
            // echo "<pre>";
            // var_dump($cart);
            // echo "</pre>";
            $subtotal[] = array_map(function($item){   
        ?>
        <div class="row border-bottom border pt-2 px-2 pb-2 my-2">
            <div class="col-2 p-0">
                <div class="cart-img">
                    <img src="<?= $item['product_image']?>" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col">
                        <h5 class="product-name"><?= $item['product_name']?></h5>
                    </div>
                    <div class="col text-end">
                        <div class="price">
                            <p class=" fw-bold">Shs<span class="price-tag fw-bold" data-id="<?= $item['product_id'] ?>"><?= $item['product_price']?></span></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    
                    <div class="mb-2 d-flex justify-content-center">
                        <div class="qty-title"><small><strong>QTY</strong>:</small></div>
                        <div class="px-2 d-flex qty-btn ">
                            <button class="qty-minus border bg-light" data-id="<?= $item['product_id'] ?>"><i
                            class="fas fa-minus"></i></button>
                            <input type="text" name="" data-id="<?= $item['product_id'] ?>"
                            class="qty_input border w-50 text-center bg-light" readonly value="1"
                            placeholder="1">
                            <button class="qty-plus border bg-light" data-id="<?= $item['product_id'] ?>"><i
                            class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <form method="post" class="delete-cart">
                        <input type="hidden" value="<?= $item['product_id']  ?>" name="product_id">
                        <button type="submit"  name="delete-cart-submit" data-id="<?= $item['product_id'] ?>" class="btn remove">Remove</button>
                    </form>
                </div>
            </div>   
        </div>
        <?php
            return $item['product_price'];
        }, $cart);
        endforeach; 
        // print_r($subtotal);
    }
        ?>
        
        
    </div>

    <div class="col-md-4 my-2 ms-auto ">
        <div class="row">
            <div class="col subtotal ">
                <h5 class="m-0" >Subtotal(<?=  isset($subtotal) ? count($subtotal): 0; ?> items):Shs<span id="subtotal" class="text-danger"><?= isset($subtotal) ? $Cart->calculateSubTotal($subtotal) : 0;?>
                </span></h5>
                <form method="post" class="row mb-2 mt-2">
                <div class="col">
                <div class="empty-cart">
                <button type="submit" name="empty-cart" class="btn w-100">Empty Cart</button>
                </div>
                </div>
                <div class="col">
                        <div class="checkout">
                        <button type="submit" class="btn w-100">Checkout</button>
                        </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>

</section>
