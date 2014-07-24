<html>
    <head>
        <title>Add Product</title>
    </head>
    <body>
    
    <?php?>

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
               Category: <select name="category">
                     <?php foreach($allcategory as $c): ?>        
                        <option value=<?php echo $c['cat_id'];?>><?php echo $c['cat_title'];?></option>
                     <?php endforeach;  ?>
               </select><br>
                <input type="submit" name="submit">
        </form>
        
    </body>
</html>
<a href="<?php echo base_url();?>user/logout"><b><h2>Logout</h2></b></a>