<html>
    <table>
        <?php foreach ($sliderdata as $s):?>
        <tr>
            <td><img src="<?php echo base_url();?>uploads/slider/thumb/<?php echo $s->image; ?>"></td>
        </tr>
        <?php endforeach;?>
    </table>
</html>