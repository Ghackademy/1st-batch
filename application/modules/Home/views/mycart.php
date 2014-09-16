<div class="clearfix"></div>
<section id="second">
    <div class="container addcart">
        <?php foreach ($cartdata as $cart) : ?>
            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product"> 
                <h1>My Wishlist</h1>
                <div class="new" value="<?php echo $cart['id']; ?>">
                    <div class="pdesc">
                        <p>Product name:<a href=""><?php echo $cart['name']; ?></a></p>
                        <p>Product Quantity:<?php echo $cart['qty']; ?></p>
                        <p>Product Price:<?php echo $cart['price']; ?></p>
                        <p>Product subtotal:<?php echo $cart['subtotal']; ?></p>
                        <a href="<?php echo base_url(); ?>home/index"><span class="addtocart pull-left"><i class="fa fa-shopping-cart"></i>Go Back To shopping</span></a> 
                        <a href="<?php echo base_url(); ?>cart/checkout"><span class="addtocart pull-right"><i class="fa fa-heart"></i>Checkout</span></a>
                    </div>     
                </div>
            </div>

        <?php endforeach ?>
    </div>
</section>


