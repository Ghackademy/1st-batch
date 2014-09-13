<?php include 'header.php';?>
        <div style="min-height: 400px;">
              <table width ="1000" class="cart-table">
            <tr>
                
                    <td>Title</td>
                      <td>Image</td>  
                      <td>Price</td>
                      <td align="center">Action</td>
                      
            </tr>
<?php





foreach($items as $v):
  
   ?>        
    <tr>
   <td><?php echo $v->title;?></td>
   <td><img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $v->image;?>"/></td>
 
     <td><?php echo $v->price;?></td>
     <td><form name="formwish" method="post" action="<?php echo site_url();?>/product/tocart/<?php echo $v->item_id;?>/<?php echo $v->id;?>"> <input type="submit" name="cart" value="Add to Cart"> </form>    <form name="formwish1" method="post" action="<?php echo site_url();?>/product/tocart/?php echo $v->id;?>"><input type="hidden" value="<?php echo $v->id;?>"> <input type="submit" name="remove" value="Remove from wishlist"></form></td>
</td>
     
    
     
     
     
   
    </tr>
     <?php 
endforeach;
   ?>
        </table>

        
<!--        <form name="form4" method="post" action="<?php echo site_url(); ?>/slider">
            <input type="submit" name="view" value="Go back to shopping">
        </form>
        
        <form name="checkout" action="<?php echo site_url();?>/product/checkout" >
            <input type="submit" value="Checkout" method="post" >
        </form>-->
        
    </body>
</html>
        </div>
 <section id="fifth">
            
                    <footer>
                       
                        <div class="footer1"></div>
                        <div class="footer2">
                             <div class="container">
                             <div class="row">
                            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 fonoternoteleft">
                               
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
