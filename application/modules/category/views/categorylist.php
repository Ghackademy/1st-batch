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
                    <th>category description</th>
                    <th colspan="2"> Action </th>
                    <th></th>
                </tr>
                <?php foreach($allcategory as $all): ?>
                <tr>
                    <td> <?php echo $all['cat_title'];?></td>
                    <td> <?php echo $all['cat_description'];?></td>
                     <td><a href="edit/<?php echo $all['cat_id'];?>">Edit</a></td>
                     <td><a href="delete/<?php echo $all['cat_id'];?>">Delete</a></td>
                    <td>  </td>
                    <td> </td>
                </tr>
                <?php  endforeach; ?>
                <tr>
                    <td colspan="4">
                        <a href="<?php echo base_url(); ?>category/add"><h2> Add category</h2></a>
                    </td>
                </tr>
                </table>
	
     


</body>
</html>