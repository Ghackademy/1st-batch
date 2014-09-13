<!DOCTYPE html>
<?php include 'header.php'; ?>
            <div class="clearfix"></div>
        </div>
        <div style="min-height: 400px;">
              <table width ="1000" class="cart-table">
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
        <form name="form4" method="post" action="<?php echo site_url(); ?>/slider">
            <input type="submit" name="view" value="Go back to shopping">
        </form>
        
        <form name="checkout" action="<?php echo site_url();?>/product/checkout" >
            <input type="submit" value="Checkout" method="post" >
        </form>
        
    </body>
</html>
        </div>
 <section id="fifth">
            
                    <footer>
                       
                        <div class="footer1"></div>
                        <div class="footer2">
                             <div class="container">
                             <div class="row">
                            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 footernoteleft">
                               
                                G-Hackademy All rights reserved
                                <br>Designed by sylvia
                            </div>
                             <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 footernoteright pull-right">
                                <address>
  <strong>Twitter, Inc.</strong><br>
  795 Folsom Ave, Suite 600<br>
  San Francisco, CA 94107<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
                            </div>
                        </div>
                             </div>
                        </div>
                    </footer>
        </section>
        <!--Javascript Section-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
    </body>
</html>
