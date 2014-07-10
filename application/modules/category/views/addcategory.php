<html>
    <head>
        <title>add category</title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
             Category Title:<input type="text" name="cat_title" value="<?php echo set_value('cat_title');?>"><br>
             Category Description:<input type="text" name="cat_desc" value="<?php echo set_value('cat_desc');?>"><br>
             <input type="submit" name="submit">
        </form>
    </body>
</html>