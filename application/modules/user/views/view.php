<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>category</title>

	
</head>
<body>


	<h1>Category!</h1>

	
            <table border="1px solid black">
                <tr>
                    <th>category title</th>
                </tr>
                <?php foreach($allcategory as $all): ?>
             
                <tr>
                    <td>  <a href="<?php echo base_url();?>category/allpost/<?php echo $all['cat_id'];?>"><?php echo $all['cat_title'];?></a></td>
                </tr>
                <?php  endforeach; ?>
                <tr>
                   
                </tr>
                </table>
	
     


</body>
</html>