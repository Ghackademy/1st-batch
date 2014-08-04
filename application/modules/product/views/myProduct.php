<html>
    <head><title>list of product</title></head>
    <body>
      
        <div>
             <?php foreach ($myProductList as $mp): ?>
            <h2>Name: <?php echo $mp->product_name;?></h2> <br>
           Description: <?php echo $mp->product_description;?> <br>
           <img src="<?php echo base_url();?>uploads/product/resized/<?php echo $mp->product_image;?>"/><br>
           Price: <?php echo $mp->price;?> 
           Rating: <?php echo $mp->rating;?> <br>
           Quantity: <?php echo $mp->stock_info;?> <br>
           Shipping details: <?php echo $mp->shipping_detail;?><br>
          
           </div>
         <a href="<?php echo base_url();?>product/edit/<?php echo $mp->slug;?>">Edit</a>
        <a href="<?php echo base_url();?>product/delete/<?php echo $mp->slug;?>">Delete</a><br>
        <?php endforeach;  ?>
       
        <?php echo $links; ?>
        
    </body>
</html>
<a href="<?php echo base_url();?>user/logout"><b><h2>Logout</h2></b></a>