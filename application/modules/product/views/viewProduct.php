

<!DOCTYPE html>

<html>
    <head>
        <title>backend</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./assets/css/products.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./assets/css/font-awesome.min.css">
       
    </head>
    <body>
        <!--headerpart-->
        <div id="main_container">
      <section id="topNavigation">
            <div class="container">
                <div class="row">
                <div class="header">
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-2 left-img img-responsive">
                         <img src="<?php echo base_url();?>./assets/images/cart_white1.jpg">
                    </div>
                     <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 right-img img-responsive">
                         <img src="<?php echo base_url();?>./assets/images/shopping.jpg">
                    </div>
                           <div class="col-lg-4 search">
                              <div class="input-group inputwrapper">
                                <input type="text" placeholder="search" class="form-control inputt">
                                <span class="input-group-btn">
                                    <button class="btn btn-default search_button img-responsive" type="button"><img src="<?php echo base_url();?>./assets/images/search.png"></button>
                                </span>
                              </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                          
                  
                     <div class=" right-one">
                         <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 im_admin"><img src="<?php echo base_url();?>./assets/images/administrator.jpg">
                             <a> Administation</a></div>
                   
                         <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3 im_set"><img src="<?php echo base_url();?>./assets/images/setting.jpg"><a> setting</a></div>
                         
                         <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 im_log"> <img src="<?php echo base_url();?>./assets/images/log.jpg"><a> logged in as</a></div>
                     </div>
                </div>
               </div>
               <div class="clearfix"></div>
            </div>
        </section>
       
        <section id="menu">
            <div class="container">
            <div class="col-md-8 col-xs-4 col-sm-4 col-lg-12 right-img">
            
                <div class="row">
                <div id="buttons">
         <!-- Standard button -->
     <div id="top_buttons" > 
                           <button type="button" class=" btn-style"><a href="dashboard.html">Dashboard</a></button>

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn-style   current" ><a href="view_products.html">Products</a></button>

                <!-- Contextual button for informational alert messages -->
                <button type="button" class="btn-style "><a href="customer.html">customer</a></button>
                
                 <!-- Indicates a successful or positive action -->
                <button type="button" class="btn-style"><a href="slider.html">Slider</a></button>

                <!-- Indicates caution should be taken with this action -->
                <button type="button" class="btn-style"><a href="sales.html">sales</a></button>
                
                 <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                 <button type="button" class="btn-style"><a href="shipping.html">shipping</a></button>
                
                
         </div>
         </div>
            </div>
            </div>
            </div>
        </section>
        <section id="mainContent">
            <div class="container">
                <div class="product_head">
                    <h3>All Products</h3>
                </div>
                
                 <div class="select_sub show">
			<ul class="sub">
				<li  class="sub_show current" ><a href="view_products.html">View all products</a></li>
				<li ><a href="add_products.html">Add product</a></li>
				
			</ul>
		</div>
               
                <div class="table-list">
                    <form id="mainform">
                    <div id="infobox" class="margin-left">
                    
                    <table>
			<thead>
			<tr>
                            	<th>Product Name</th>
                                <th>Price</th>
                                <th>Orders</th>
                                <th>Action</th>
                            </tr>
			</thead>
			<tbody>
			<tr>
                            <?php foreach ($allProductList as $p): ?>
                           <td><a href="#"><?php echo $p->product_name;?></a></td>
                            <td><?php echo $p->price;?> </td>
                            <td><?php echo $p->stock_info;?></td>
                            <td><a href="#"><img src="<?php echo base_url();?>./assets/images/page_white_link.png" /></a>
                                    <a href="#"><img src="<?php echo base_url();?>./assets/images/page_white_edit.png" /></a>
                                    <a href="#"><img src="<?php echo base_url();?>./assets/images/page_white_delete.png" /></a></td>
                       
         
                        </tr>
                             <?php endforeach;  ?>
        
		     </tbody>
                         
		</table>
                        <?php echo $links; ?>
                </div>
                    </form>
                </div>
                
               </div>
            
            </section>
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url();?>./assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>./assets/js/jquery.js"></script>
       
        <div class="col-md-12 footer">
           <span>Design By : <a href="sabina.com.np">Sabina Kandel</a> . Admin Panel |
                    <a href="shoppingcart.com">Shopping Cart</a></span>
</div>

</div>
            
                
    </body>
</html>




<!--<html>
    <head><title>list of product</title></head>
    <body>
      
        <div>
             <?php foreach ($allProductList as $p): ?>
            <h2>Name: <?php echo $p->product_name;?></h2> <br>
           Description: <?php echo $p->product_description;?> <br>
           <img src="<?php echo base_url();?>uploads/product/resized/<?php echo $p->product_image;?>"/><br>
           Price: <?php echo $p->price;?> 
           Rating: <?php echo $p->rating;?> <br>
           Quantity: <?php echo $p->stock_info;?> <br>
           Shipping details: <?php echo $p->shipping_detail;?> <br>
           <a href="edit/<?php echo $p->product_id;?>">Edit</a>
           <a href="delete/<?php echo $p->product_id;?>">Delete</a>
           </div>
        <?php endforeach;  ?>
        
        <?php echo $links; ?>
    </body>

</html>-->
