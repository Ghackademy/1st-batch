<html>
    <table border="1">
        <?php foreach ($sliderdata as $s):?>
        <tr>
        
            <td><img src="<?php echo base_url();?>uploads/slider/thumb/<?php echo $s->image; ?>"></td>
               <form method="post" action="<?php echo site_url(); ?>/slider/edit" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $s->id;?>">
            <td><input type="file" name="userfile">
            <input type="submit" name="replace" value="Replace image"></td>
               <td><input type="submit" name="remove" value="Remove image"></td>
        </form>
        </tr>
        <?php endforeach;?>
    </table>
</html>