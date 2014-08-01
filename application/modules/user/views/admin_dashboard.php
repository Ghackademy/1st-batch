<html>
    <head>
        <title>backend</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/backend/css/customer.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/backend/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/backend/css/font-awesome.min.css">
       
    </head>
    <body>
        <!--headerpart-->
         <div id="main_container">
        <section id="topNavigation">
            <div class="container">
                <div class="row">
                <div class="header">
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-2 left-img img-responsive">
                         <img src="<?php echo base_url();?>assests/backend/images/cart_white1.jpg">
                    </div>
                     <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 right-img img-responsive">
                         <img src="<?php echo base_url();?>assests/backend/images/shopping.jpg">
                    </div>
                           <div class="col-lg-4 search">
                              <div class="input-group inputwrapper">
                                <input type="text" placeholder="search" class="form-control inputt">
                                <span class="input-group-btn">
                                    <button class="btn btn-default search_button img-responsive" type="button"><img src="<?php echo base_url();?>assests/backend/images/search.png"></button>
                                </span>
                              </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                          
                  
                     <div class=" right-one">
                         <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 im_admin"><img src="<?php echo base_url();?>assests/backend/images/administrator.jpg">
                             <a> Administation</a></div>
                   
                         <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3 im_set"><img src="<?php echo base_url();?>assests/backend/images/setting.jpg"><a> setting</a></div>
                         
                         <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 im_log"> <img src="<?php echo base_url();?>assests/backend/images/log.jpg"><a> logged in as</a></div>
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
                           <button type="button" class=" btn-style "><a href="dashboard.html">Dashboard</a></button>

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn-style" ><a href="view_products.html">Products</a></button>

                <!-- Contextual button for informational alert messages -->
                <button type="button" class="btn-style  current "><a href="customer.html">customer</a></button>
                
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
                    <h3>Customer</h3>
                </div>
               
                <div class="table-list">
                    <form id="mainform">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                            <tr>
                                <th class="table-header-check" style="width: 30px;"><a id="toggle-all" ><input  type="checkbox"/></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">First Name</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Last Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Email</a></th>
					<!--<th class="table-header-repeat line-left"><a href="">Due</a></th>-->
					<!--<th class="table-header-repeat line-left"><a href="">Website</a></th>-->
                                       <!-- <th class="table-header-options line-left minwidth-1"><a href="">Orders</a></th>-->
                                        <!--<th class="table-header-options line-left"><a href="">Item</a></th>-->
				</tr>
				<?php foreach ($users as $user):?>
                                <tr>
								
					<td><input  type="checkbox"/></td>
					<td><?php echo $user->first_name;?></td>
					<td><?php echo $user->last_name;?></td>
					<td><a href=""><?php echo $user->email;?></a></td>
				</tr>
				<?php endforeach;?>
                    </table>
                    </form>
                </div>
                
                <div class="comment-section">
                    <div class="product_head">
                    <h3>User Comments</h3>
                </div>
                    <ul class="comment"> 
                        <li><img src="<?php echo base_url();?>assests/backend/images/list.jpg">lorem psum lorem epsum eoocmaoncieh nvoevn vnonvo  nvosnv.</li>
                    <li><img src="<?php echo base_url();?>assests/backend/images/list.jpg">lorem psum lorem epsum eoocmaoncieh nvoevn vnonvo  nvosnv.</li>
                    <li><img src="<?php echo base_url();?>assests/backend/images/list.jpg">lorem psum lorem epsum eoocmaoncieh nvoevn vnonvo  nvosnv.</li>
                    <li><img src="<?php echo base_url();?>assests/backend/images/list.jpg">lorem psum lorem epsum eoocmaoncieh nvoevn vnonvo  nvosnv.</li>
                    </ul> 
                    
               </div>
            </div>
            
            </section>
            <div class="col-md-12 footer">
                <span>Design By : <a href="sabina.com.np">Sabina Kandel</a> . Admin Panel |
                    <a href="shoppingcart.com">Shopping Cart</a></span>
            </div>
            
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url();?>assests/backend/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assests/backend/js/jquery.js"></script>
       
        

</div>
            
                
    </body>
</html>