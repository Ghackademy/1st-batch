<html>
    <body>
<?php echo form_open_multipart("product");?>
<?php echo form_upload("userfile");?>
<?php echo form_submit('upload','Upload ');?>
<?php echo form_close();?>
    </body>
</html>

