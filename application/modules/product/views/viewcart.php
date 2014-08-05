<html>
    <body>
        <table border="1">
            <tr>
                <td>Id</td>
                  <td>Quantity</td>
                    <td>Name</td>
                      <td>Price</td>  
                      <td>Subtotal</td>
                      <td colspan="2" align="center">Action</td>
                      
            </tr>
<?php
$a=0;
foreach ($val as $v):?>
    <tr>
   <td><?php echo $v['id'];?></td>
   <td><?php echo $v['qty'];?></td>
    <td><?php echo $v['name'];?></td>
     <td><?php echo $v['price'];?></td>
     <td><?php echo 'Rs.'.$v['subtotal'];?></td>
    
     <td>
         <form name="form2" method="post" action="product/update">
              <input type="text" name="qty" value="<?php echo $v['qty'];?>"/>
             <input type="hidden" name="rowid" value="<?php echo $v['rowid'];?>"/>
             <input type="submit" name="remove" value="Update cart"/>
         </form>
     </td>
      <td>
         <form name="form1" method="post" action="<?php echo site_url(); ?>/product/remove">
              <input type="hidden" name="rowid" value="<?php echo $v['rowid'];?>"/>
              <input type="submit" name="remove" value="Remove from cart"/>
            
         </form>
     </td>
     
    <?php 
    $a=$a+$v['subtotal'];
    endforeach;?>
    </tr>
        </table>

        <font color="red">Your total would be  </font>Rs.<b><?php echo $a;?></b>
        <form name="form4" method="post" action="<?php echo site_url(); ?>/product/show1">
            <input type="submit" name="view" value="Go back to shopping">
        </form>
        
    </body>
</html>