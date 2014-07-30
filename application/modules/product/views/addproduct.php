<!DOCTYPE html>

<html>
    <head>
        <title>backend</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/backend/css/products.css">
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
                <button type="button" class="btn-style  current" ><a href="view_products.html">Products</a></button>

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
                    <h3>Products</h3>
                </div>
                <div class="select_sub show">
			<ul class="sub">
				<li ><a href="viewproducts.php">View all products</a></li>
				<li  class="sub_show current"><a href="add_products.php">Add product</a></li>
				
			</ul>
		</div>
                
                <div class="form_box"> 
                
                    <h2>Add Products</h2>
                <!--start id form-->
              <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form_input" id="inputname" name="pname" value="<?php echo set_value('pname');?>">
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Description</label>
                  <div class="col-sm-10">
                      <textarea type="name" class="form-control form_input" name="pdescription" value="<?php echo set_value('pname');?>"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="category" class="col-sm-2 control-label">Category</label>
                  <div class="col-sm-10">
                     <select name="category">
                     <?php foreach($allcategory as $c): ?>        
                        <option value=<?php echo $c['cat_id'];?>><?php echo $c['cat_title'];?></option>
                     <?php endforeach;  ?>
               </select>
                      </div>   
                  </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form_input" id="price" name="pprice" value="<?php echo set_value('pprice');?>" >
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Quantity</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form_input" id="price" name="pquantity" value="<?php echo set_value('pquantity');?>" >
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Shipping Details</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form_input" id="price" name="sdetails" value="<?php echo set_value('sdetails');?>" >
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Rating</label>
                  <div class="col-sm-10">
                    <input type="checkbox" class="form-control form_input" id="price" name="prating" value="1" >
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Publish</label>
                  <div class="col-sm-10">
                    <input type="checkbox" class="form-control form_input" id="price" name="publish" value="1" >
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Feature</label>
                  <div class="col-sm-10">
                    <input type="checkbox" class="form-control form_input" id="price" name="feature" value="1">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="category" class="col-sm-2 control-label">date</label>
                  <div class="col-sm-4 date">
                      <table> 
                          <tr>
                          <td border="0">
                     <select  class="form-control form_date">
					<option value="">dd</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
                     </select>
                              </td>
                              <td>
                                <select class="form-control form_date">
						<option value="">mmm</option>
						<option value="1">Jan</option>
						<option value="2">Feb</option>
						<option value="3">Mar</option>
						<option value="4">Apr</option>
						<option value="5">May</option>
						<option value="6">Jun</option>
						<option value="7">Jul</option>
						<option value="8">Aug</option>
						<option value="9">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
                                  </td>
                                  <td>
                                      <select class="form-control form_date">
						<option value="">yyyy</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
					</select>
                                      </td>
                              </tr>
                      </table>
                      </div>   
                  </div>   
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control form_input" name="userfile" value="<?php echo set_value('pimage');?>">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                  <input type="submit" class="form-control form-button name="submit" value="Add"/>
                  <input type="reset"class="form-control form-button"/>
                          
                  </div>
                  
              </form>
	<!-- end id-form  -->

	 </div>
            </div>
        </section>
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url();?>assests/backend/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assests/backend/js/jquery.js"></script>
       
        <div class="col-md-12 footer">
           <span>Design By : <a href="sabina.com.np">Sabina Kandel</a> . Admin Panel |
                    <a href="shoppingcart.com">Shopping Cart</a></span>
</div>

</div>
            
                
    </body>
</html>