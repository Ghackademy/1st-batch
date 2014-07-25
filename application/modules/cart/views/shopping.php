<html>
    <head></head>
    <body>
        <div id="products">
            <ul>
                <?php foreach ($allProductList as $p): ?>
                <li>
                <?php echo form_open('cart/add'); ?>
                    <div> <?php echo $p->product_name; ?></div>
                    <div><?php echo $p->product_description;?></div>
                    <div><img src="<?php echo base_url();?>uploads/product/resized/<?php echo $p->product_image;?>"/></div>
                    <div><?php echo $p->price;?> </div>
                    <div><?php echo $p->rating;?></div> 
                    <div><?php echo $p->stock_info;?></div>
                    <div><?php echo $p->shipping_detail;?></div>
                    <?php echo form_hidden('id',$p->product_id); ?>
                    <?php echo form_submit('submit','Add To Cart');?>
                <?php echo form_close(); ?>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
        
        <div id="cart">
            <?php if($cart = $this->cart->contents()):?>
            <?php print_r($cart);?>
            <?php endif;?>
        </div>
    </body>
</html>