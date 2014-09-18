<html>
    <head>
        <title></title>
    </head>
    <body>
        <form name="" method="POST">
              Category Title:<input type="text" name="cat_title" <?php echo set_value('cat_title');?>><br>
             Category Description:<input type="text" name="cat_description" value="<?php echo set_value('cat_description');?>"><br>
             <input type="submit" value="Update" name="submit">
        </form>
    </body>
</html>