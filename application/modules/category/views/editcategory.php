<html>
<head>
</head>
<body>
<h1> Category add</h1>
<form method ="post">
category title:<input type="text" name="cat_title" value = "<?php echo $category['cat_title'];?>">
category description:<input type="text" name="cat_desc" value = "<?php echo $category['cat_description'];?>">
<input type ="submit" name="submit" value="submit">
</form>

</body>
</html>