<html>
    <head>
<<<<<<< HEAD
=======
<<<<<<< HEAD
        <title>Edit Product</title>
    </head>
    <body>
    


        <h2>Edit Your Product Here</h2>
        <form method="post" action="" enctype="multipart/form-data">
           Product Name:<input type="text" name="pname" value="<?php echo $product['product_name'];?>"><br>
           Product Description:<input type="text" name="pdescription" value="<?php echo $product['product_description'];?>"><br>
           Current image:<img src="<?php echo base_url();?>uploads/product/resized/<?php echo $product['product_image'];?>" height="100" width="100"/><br>
           Product Image:<input type="file" name="userfile"><br> 
           Product Price:<input type="text" name="pprice" value="<?php echo $product['price'];?>"><br>
           Product Quantity:<input type="text" name="pquantity" value="<?php echo $product['stock_info'];?>"><br>
           Shipping Details:<input type="text" name="pdetails" value="<?php echo $product['shipping_detail'];?>"><br>
           rating:<input type="text" name="prating" value="<?php echo $product['rating'];?>"><br>
           publish <input type="checkbox" name="publish" value="1" <?php 
            if($product['publish'] == 1){
                echo 'checked = "checked"';
            }
           ?>><br>
           feature <input type="checkbox" name="feature" value="1"<?php 
            if($product['featured'] == 1){
                echo 'checked = "checked"';
            }
           ?>><br>
           Current Category:<input type="text" name="category_title" value="<?php echo $product['cat_title'];?>"><br>
               Category: <select name="category" selected ="selected">
                     <?php foreach($allcategory as $c): ?>        
                        <option value=<?php echo $c['cat_id'];?>><?php echo $c['cat_title'];?></option>
                     <?php endforeach;  ?>
               </select><br>
                <input type="submit" name="submit">
        </form>
        
    </body>
</html>
<a href="<?php echo base_url();?>user/logout"><b><h2>Logout</h2></b></a>
=======
>>>>>>> origin/forDesigners
        <title>Add Product</title>
    </head>
    <body>
    
    <?php //echo validation_errors();?>

        <h2>Add Your Product Here</h2>
        <form method="post" action="" enctype="multipart/form-data">
           Product Name:<input type="text" name="pname" value="<?php echo set_value('pname');?>"><br>
           Product Description:<input type="text" name="pdescription" value="<?php echo set_value('pdescription');?>"><br>
           Product Image:<input type="file" name="userfile" value="<?php echo set_value('pimage');?>"><br> 
           Product Price:<input type="text" name="pprice" value="<?php echo set_value('pprice');?>"><br>
           Product Quantity:<input type="text" name="pquantity" value="<?php echo set_value('pquantity');?>"><br>
           Shipping Details:<input type="text" name="pdetails" value="<?php echo set_value('pdetails');?>"><br>
           rating:<input type="text" name="prating" value="<?php echo set_value('prating');?>"><br>
           publish <input type="checkbox" name="publish" value="1"><br>
           feature <input type="checkbox" name="feature" value="1"><br>
             <label>Category</label>
                <select name="cat_title">
               <?php foreach ($allcategory as $c):?>
               <option value="<?php echo $c['cat_id'];?>"><?php echo $c['cat_title'] ;?></option>;
               <?php endforeach;?>
                 </select><br/>
                <input type="submit" name="submit" value="Edit">
        </form>
        
    </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin/forDesigners
>>>>>>> origin/forDesigners
