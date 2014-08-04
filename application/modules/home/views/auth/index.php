<html>
    <head>
        <title>backend</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="assets/css/customer.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
       
    </head>
    <body>
        <!--headerpart-->
         <div id="main_container">
        <section id="topNavigation">
            <div class="container">
                <div class="row">
                <div class="header">
                    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-2 left-img img-responsive">
                         <img src="assets/images/cart_white1.jpg">
                    </div>
                     <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 right-img img-responsive">
                         <img src="assets/images/shopping.jpg">
                    </div>
                           <div class="col-lg-4 search">
                              <div class="input-group inputwrapper">
                                <input type="text" placeholder="search" class="form-control inputt">
                                <span class="input-group-btn">
                                    <button class="btn btn-default search_button img-responsive" type="button"><img src="assets/images/search.png"></button>
                                </span>
                              </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                          
                  
                     <div class=" right-one">
                         <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 im_admin"><img src="assets/images/administrator.jpg">
                             <a> Administation</a></div>
                   
                         <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3 im_set"><img src="assets/images/setting.jpg"><a> setting</a></div>
                         
                         <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 im_log"> <img src="assets/images/log.jpg"><a> logged in as</a></div>
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
                <div id="infoMessage"><?php echo $message;?></div>
                <div class="product_head">
                    <h3>Customer</h3>
                </div>
               
                <div class="table-list">
                    <form id="mainform">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                            <tr>
                                
                                <th class="table-header-check" style="width: 30px;"><a id="toggle-all" ><input  type="checkbox"/></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Last Name</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">First Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Email</a></th>
			
					<th class="table-header-repeat line-left"><a href="">Group</a></th>
                                        <th class="table-header-options line-left minwidth-1"><a href="">Status</a></th>
                                        <th class="table-header-options line-left"><a href="">Action</a></th>
				</tr>
                                
                                <tr><?php foreach ($users as $user):?>
					<td><input  type="checkbox"/></td>
					<td><?php echo $user->last_name;?></td>
					<td><?php echo $user->first_name;?></td>
					<td><a href=""><?php echo $user->email;?></a></td>
					
					<td><?php foreach ($user->groups as $group):?>
					<?php echo anchor("user/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?></td>
					<td class="options-width">
					<?php echo ($user->active) ? anchor("user/deactivate/".$user->id, lang('index_active_link')) : anchor("user/activate/". $user->id, lang('index_inactive_link'));?>
					</td>
                                        <td><?php echo anchor("user/edit_user/".$user->id, 'Edit') ;?></td>
                                       
				</tr>
                                 <?php endforeach;?>
                                	
                    </table>
                    </form>
                </div>
                
                <div class="comment-section">
                    <div class="product_head">
                    <h3>Create New User</h3>
                </div>
                    <ul class="comment"> 
                        <li><?php echo anchor('user/sign_up', lang('index_create_user_link'))?> |<?php echo anchor('user/create_group', lang('index_create_group_link'))?></li>
                   
                    </ul> 
                    
               </div>
            </div>
            
            </section>
            <div class="col-md-12 footer">
                <span>Design By : <a href="sabina.com.np">Sabina Kandel</a> . Admin Panel |
                    <a href="shoppingcart.com">Shopping Cart</a></span>
            </div>
            
        <!--Javascript Section-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
       
        

</div>
            
                
    </body>
</html>


<!--<h1><?php echo lang('index_heading');?></h1>
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("user/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("user/deactivate/".$user->id, lang('index_active_link')) : anchor("user/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("user/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?>
</table>

</p><?php echo anchor('user/sign_up', lang('index_create_user_link'))?> |<?php echo anchor('user/create_group', lang('index_create_group_link'))?></p>-->