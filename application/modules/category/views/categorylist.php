<html>
<head>
</head>
<body>
<h1>category list<h1>
<table border="2px">
<tr>
	<th>title</th>
	<th>descriptioin</th>
	<th colspan=2>action</th>
	
</tr>
<?php  
foreach($allcategory as $c): ?>

<tr>
<td><?php echo $c['cat_title'];?></td>



<td><?php echo $c['cat_description'];?></td>
<td><a href="<?php echo base_url();?>category/edit/<?php echo $c['cat_id']; ?>">edit</a></td>
<td><a href="<?php echo base_url();?>category/delete/<?php echo $c['cat_id']; ?>">delete</a></td>
</tr>
<?php endforeach;?>
</table>

</body>

</html>
