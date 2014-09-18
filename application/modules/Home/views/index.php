        <div class="clearfix"></div>
        <section id="second">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div id="sidebar">

                            <div id="sidebar_heading_group">
                                <img src="<?php echo base_url(); ?>assests/images/orange.png" id="sidebar_heading_pic">
                                <div id="sidebar_heading">Categories</div><div class="clearfix"></div>
                            </div>
                            <ul class="sidebarlist">
                                <?php foreach (array_slice($allcategory, 0, 5) as $category): ?>
                                    <li><a href="<?php base_url(); ?>home/allpost/<?php echo $category['cat_slug']; ?>"><?php echo $category['cat_title']; ?></a></li>

                                <?php endforeach; ?>
                            </ul>             
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
                        <div class="imageslider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                
                                <div class="carousel-inner">
                                    <div class="item active">
                                        
                                         <img src="<?php echo base_url();?>assests/images/bg1-bannersequence.jpg" alt="...">

                                        <div class="carousel-caption">
                                            arnav izzo
                                        </div>
                                    </div>
                                    <?php foreach($frontend_image as $image):?>
                                    <div class="item">
                                        
                                        <img src="<?php echo base_url(); ?>uploads/product/thumb/<?php echo $image['frontend_image'];?>">

                                        <div class="carousel-caption">
                                            arnav izzo
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>

                        </div>
                    </div> 
                </div>
            </div>
        </section>
                <section id="third">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <hr color="orange">

                    <div class='row'>
    <div class='col-md-12'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
              <div class="item active">
            <div class="row">
                <div class="col-md-3">
                   
                <div class="advertisement row">
                      
                    <a class="thumbnail" href="#"><img src="<?php echo base_url(); ?>assests/images/block1.jpg" alt="advertisement 1"></a>
                        </div>
                    
                </div>     
                 </div>
                 </div> 
 <div class="item">
  <div class="row">
			  <?php foreach ($allProductList as $p): ?> 
 <?php if ($p['featured'] == 1) { ?>			  
                <div class="col-md-3">
                <div class="advertisement row">
               <a class="thumbnail" href="#"><img src="<?php echo base_url(); ?>uploads/product/resized/<?php echo $p['product_image'];?>" alt="advertisement 1"></a>
        </div>
          </div>
				        <?php }?>
				 <?php endforeach;?> 
                 </div>
				 </div> 
          
                    
                 
                    
                   
          </div>
         <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
          </div>
               
          </div>
                    
               </div>
               <hr color="orange"> 
                </div>
            </div>
            </div>
        </section>
        <section id="fourth" >
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3 contentLeft">
                        <img src="<?php echo base_url(); ?>assests/images/banner-left.jpg">
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9 contentRight pull-right">

                        <div class="heading " id="myStar">Featured Products</div>

                        <?php foreach ($allProductList as $p): ?>
                            <?php if ($p['featured'] == 1) { ?>

                                <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">    
                                    <a href="product_details.html">
                                        <img src="<?php echo base_url(); ?>uploads/product/original/<?php echo $p['product_image']; ?>" class="product_img" height="250" ></a>

                                    <div class="new" value="<?php echo $p['product_id']; ?>">
                                        <div class="pdesc">
                                            <p><a href="home/singleProduct/<?php echo $p['product_slug']; ?>"><?php echo $p['product_name']; ?></a></p>
                                            <p><?php echo $p['price']; ?></p>
                                            <div id="wrapper" class="col-md-10 col-xs-12 col-sm-12 col-lg-10 center-block"value="<?php echo $p['product_id']; ?>">
                                              <?php for ($k=1;$k<6;$k++){?>
                                                <input type="radio" id="star<?php echo $k;?>" name="star"  value="<?php echo $k?>" class="star" />
                                                <label for="star1"></label>
                                              <?php }?>
                                                
                                            </div>
                                        </div>     
                                    </div>
                                    <a href="<?php echo base_url();?>cart/add/<?php echo $p['product_slug']; ?>"><span class="addtocart pull-left"><i class="fa fa-shopping-cart"></i> Add to Cart</span></a> 

                                    <a href=""><span class="addtocart pull-right"><i class="fa fa-heart"></i> WishList</span></a>


                                </div>
                            <?php } ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="fifth">
           