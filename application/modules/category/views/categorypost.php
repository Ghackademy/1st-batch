<html>
    <head><title>list of product</title></head>
    <body>
      
       

             <?php foreach ($getpost as $product): ?>
            <h2>Name: <?php echo $product->product_name;?></h2> <br>
           Description: <?php echo $product->product_description;?> <br>
           <img src="<?php echo base_url();?>uploads/product/resized/<?php echo $product->product_image;?>"/><br>
           Price: <?php echo $product->price;?> 
           Rating: <?php echo $product->rating;?> <br>
           Quantity: <?php echo $product->stock_info;?> <br>
           Shipping details: <?php echo $product->shipping_detail;?> <br>
          
            <?php endforeach;  ?>
        
        
    </body>
</html>