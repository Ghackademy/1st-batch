<html>
    <head><title>list of product</title></head>
    <body>
      
        <div>
             <?php foreach ($allProductList as $p): ?>
            <h2>Name: <?php echo $p->product_name;?></h2> <br>
           Description: <?php echo $p->product_description;?> <br>
           <img src="<?php echo base_url();?>uploads/product/resized/<?php echo $p->product_image;?>"/><br>
           Price: <?php echo $p->price;?> 
           Rating: <?php echo $p->rating;?> <br>
           Quantity: <?php echo $p->stock_info;?> <br>
           Shipping details: <?php echo $p->shipping_detail;?> <br>
           </div>
        <?php endforeach;  ?>
        
        <?php echo $links; ?>
    </body>
</html>