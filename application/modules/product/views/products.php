<html>
   <head>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<!--        <script>
            $(document).ready(function() {
                $("#cartForm").submit(function() {
                   alert("Item added to the cart.Click on 'View cart' to see the selected items");
                });

            });
        </script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#cartForm").submit(function() {
                    $data = $(this).serialize();
                    $.ajax({
                        'data':$data,
                        'url':'<?php echo site_url();?>/product/product/addtocart',
                        'method':'post',
                        success : function(res){
                            $('#success').html(res);
                        }
                    });
                    return false;
                });

            });
        </script>
    </head>
    <div id="success"></div>
        <table border="1">
            <tr>
                <td>Image</td>
                <td>Name</td>
                <td>Price</td>
                <td>Action</td>
               
            </tr>
            <?php foreach ($userdata as $a): ?>
                <tr>
                    <td><img width="100" src="<?php echo base_url();?>uploads/product/thumb/<?php echo $a->image; ?>" /></td>
                     <td>  <?php echo $a->title; ?> </td>
                    <td>  <?php echo'Rs.' . $a->price; ?> <br></td>
                <form name="addtocart" method="post" action="<?php echo site_url(); ?>/product/addtocart" id="cartForm">
                    <input type="hidden" name="id" value="<?php echo $a->id; ?>">
                    <td> <input type="submit" name="addtocart" value="Add to cart">   </td>
                
                       
                    
                </form>
                
            <?php endforeach; ?> 
            </tr>
        </table>

        <form name="form1" method="post" action="product/additem">
            <input type="submit" name="add1" value="Add new product">
        </form>
        <form name="formcart" method="post" action="<?php echo site_url(); ?>/product/show">
            <input type="submit" name="add" value="View your cart">
        </form>
  </html>
