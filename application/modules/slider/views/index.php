<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Slider Page</title>

<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" />
<!--login register CSS-->
<link href="<?php echo base_url();?>/assets/css/modal.css" rel="stylesheet" />
<!--Social link CSS-->
<link href="<?php echo base_url();?>/assets/css/socialplugin.css" rel="stylesheet" />
<!--product Detail CSS-->
<link href="<?php echo base_url();?>/assets/css/templatemo_style.css" rel="stylesheet" />
<!--style sheet of categories-->
<link href="<?php echo base_url();?>/assets/css/styles.css" rel="stylesheet" />

<!--Jquery attachment-->
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-1.10.2.min.js"></script>
  
  <!--liteAccordion css--> 
        <link href="<?php echo base_url();?>/assets/css/liteaccordion.css" rel="stylesheet" />

         <!--easing--> 
        <script src="<?php echo base_url();?>/assets/js/jquery.easing.1.3.js"></script>

         <!--liteAccordion js--> 
        <script src="<?php echo base_url();?>/assets/js/liteaccordion.jquery.js"></script>
</head>
    
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
 
<link rel="stylesheet" href="lean-slider.css" type="text/css"/>
    </head>
    <body>
        <!--headerpart-->
         <nav class="navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="nav1">
                    <div class="nav1Content">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Logo</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                            <div class="searchForm">
                                <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
                                    <div class="headerform input-group">

                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="searchbtn glyphicon glyphicon-search" type="button">
                                            </button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->
                            </div>     
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">My Account</a></li>
                                <li><a href="<?php echo site_url();?>/product/showwishlist">My Wishlist</a></li>
                                <li><a href="<?php echo site_url();?>/product/show">My Cart</a></li>
                                <li data-toggle="modal" data-target="#myModal">
                                    <a href="">Login</a></li>

                            </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                    <!-- /.container-fluid -->
                </div>
            </div>
        </nav>
        <div class="clearfix"></div>
        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
          <div class="orangeline"></div>
<div class="modal-body">
    <form role="form" action="user/userlogin" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
<!--  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
      <label><a href="">Forgot Password?</a></label>
      
  </div>-->
            <button type="submit" class="btn btn-default">Login</button>
            <label>New User?? <a href="">Register</a></label>
</form>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
        <!--nav2-->
        
        <div class="nav2Wrapper">
            <div class="nav2Contents">
                <!--category-->
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Categories </div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <!--brand-->
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Brand</div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Separated link</a></li>  
                        <li><a href="#">Something else here</a></li>

                    </ul>
                </div>
                <!--sales-->
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Sales </div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </div>
                <!--new product-->
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">New products </div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </div>
                <!--contactus-->
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Contact us</div>
                    
                </div>
                <!--about us-->
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">About us </div>
                  
                </div>

            </div> <!--content close-->
            <div class="clearfix"></div>
        </div>
                   <!-- Modal -->
<div class="modal fade" id="myModalshop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Item added to Cart</h4>
      </div>
          <div class="orangeline"></div>
<div class="modal-body">
    <form>
    <div class="col-sm-6">
        <button type="submit" class="btn btn-default">Goto Cart</button></div>
        <div class="col-sm-6">
             <button type="submit" class="btn btn-default">Continue Shopping</button>
    </div>
        </form>
    
    </div>
          <div class="clearfix"></div>
      </div>
                   <!-- /.modal -->
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
        <div class="clearfix"></div>
        <section id="second">
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div id="sidebar">
                        
                        <div id="sidebar_heading_group">
                           <img src="<?php echo base_url();?>assets/images/orange.png" id="sidebar_heading_pic">
                           <div id="sidebar_heading">Categories</div><div class="clearfix"></div>
                        </div>
                        <ul class="sidebarlist">
                                    <li><a href="">Shirts</a></li> 
                                    <li><a href="">Pants</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Jeans</a></li>
                                    <li><a href="">Dresses</a></li>
                                    <li><a href="">Sports</a></li>
                                </ul>             
                                </div>
                </div>
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
                        <div class="imageslider">
                           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
<!--  <ol class="carousel-indicators">
    <li data-target="" data-slide-to="0" class="active"></li>
    <li data-target="" data-slide-to="1"></li>
 </ol>-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">          
        <div style="margin-top:20px; margin-bottom:20px;">
 <div id="four">
            <ol>
                <?php foreach($sliderdata as $a): ?>
                <li>
                    
                    <h2><span><?php echo $a->title;?></span></h2>
                    <div>
                        <img src="<?php echo base_url();?>/uploads/slider/resized/<?php echo $a->image;?>" alt="image" />
                    </div>
                </li>
                <?php endforeach; ?>
            </ol>
            <noscript>
                <p>Please enable JavaScript to get the full experience.</p>
            </noscript>
        </div>
            </div>
  </div>
                        </div>
  </div>
                        </div>
   
        <!--liteAccordion demos, social & analytics--> 
        <script>
            (function($, d) {
                
                $('#one').liteAccordion({
                        onTriggerSlide : function() {
                            this.find('figcaption').fadeOut();
                        },
                        onSlideAnimComplete : function() {
                            this.find('figcaption').fadeIn();
                        },
                        autoPlay : true,
                        pauseOnHover : true,
                        theme : 'stitch',
                        rounded : true,
                        enumerateSlides : true
                }).find('figcaption:first').show();
                $('#two').liteAccordion();
                $('#three').liteAccordion({ theme : 'dark', rounded : true, enumerateSlides : true, firstSlide : 2, linkable : true, easing: 'easeInOutQuart' });
                $('#four').liteAccordion({ theme : 'light', firstSlide : 3, easing: 'easeOutBounce', activateOn: 'mouseover' });

                // social links
                var js, id = 'facebook-jssdk';

                if (d.getElementById(id)) return;

                js = d.createElement('script');
                js.id = id;
                js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                d.getElementsByTagName('head')[0].appendChild(js);

                // Load Plus One Button
                jQuery.getScript('https://apis.google.com/js/plusone.js');
                // Load Tweet Button Script
                jQuery.getScript('https://platform.twitter.com/widgets.js');
                // Load LinkedIn button
                jQuery.getScript('https://platform.linkedin.com/in.js?v=2');
            })(jQuery, document);

            // analytics
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17442910-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>


  <!-- Controls -->
<!--  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <       span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>-->
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
 <div class="item  active">
            <div class="row">
                <div class="col-md-3">
                <div class="advertisement row">
                    <a class="thumbnail" href="#"><img src="<?php echo base_url();?>assets/images/block1.jpg" alt="advertisement 1"></a>
                        </div>
                </div>
                 <div class="col-md-3">
                 <div class="advertisement row">
                    <a class="thumbnail" href="#"><img src="<?php echo base_url();?>assets/images/block2.jpg" alt="advertisement 1"></a>
                        </div>
                </div> 
                <div class="col-md-3">
                 <div class="advertisement row">
                    <a class="thumbnail" href="#"><img src="<?php echo base_url();?>assets/images/block3.jpg" alt="advertisement 1"></a>
                        </div>
                </div> 
                <div class="col-md-3">
                 <div class="advertisement row">
                    <a class="thumbnail" href="#"><img src="<?php echo base_url();?>assets/images/banner1-images.png" alt="advertisement 1"></a>
                        </div>
                </div>     
                 </div>
                 </div> 
                    
                    
             <div class="item">
            <div class="row">
                <div class="col-md-3">
                <div class="advertisement row">
                    <a class="thumbnail" href="#"><img src="<?php echo base_url();?>assets/images/block1.jpg" alt="advertisement 1"></a>
                        </div>
                </div>
                 <div class="col-md-3">
                 <div class="advertisement row">
                    <a class="thumbnail" href="#"><img src="<?php echo base_url();?>assets/images/block2.jpg" alt="advertisement 1"></a>
                        </div>
                </div> 
                <div class="col-md-3">
                 <div class="advertisement row">
                    <a class="thumbnail" href="#"><img src="<?php echo base_url();?>assets/images/block3.jpg" alt="advertisement 1"></a>
                        </div>
                </div> 
                <div class="col-md-3">
                 <div class="advertisement row">
                    <a class="thumbnail" href="#"><img src="<?php echo base_url();?>assets/images/banner1-images.png" alt="advertisement 1"></a>
                        </div>
                </div>     
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
                        <img src="<?php echo base_url();?>assets/images/banner-left.jpg">
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9 contentRight pull-right">
                       
                        <div class="heading ">Featured Products</div>
                        
                        <?php foreach($featuredata as $a):?>
                        <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product view view-ninth">
                        <div class="mask mask-1"></div>
                        <div class="mask mask-2"></div>
                        
                        
                        <a href="<?php echo base_url();?>assets/product_details.php?id"<?php echo $a->id;?>">
                          <img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $a->image;?>" class="product_img" height="100" ></a>
                          <div class="pdesc" >
                         <p><?php echo $a->title;?></p>
                         <p><?php echo $a->price;?></p>
                         <div id="wrapper" class="col-md-10 col-xs-12 col-sm-12 col-lg-10 center-block" >
                                <input type="radio" id="star1" name="star" />
                                <label for="star1"></label>
                                <input type="radio" id="star2" name="star" />
                                <label for="star2"></label>
                                <input type="radio" id="star3" name="star" checked="checked"/>
                                <label for="star3"></label>
                                <input type="radio" id="star4" name="star" />
                                <label for="star4"></label>
                                <input type="radio" id="star5" name="star" />
                                <label for="star5"></label>
                            </div>
                      
                          </div>   
                   
                       <clear></clear>
                        <a  data-toggle="modal" data-target="#myModalshop"href="<?php echo site_url();?>/product/addtocart/<?php echo $a->id;?>"><span class="addtocart pull-left"><i class="fa fa-shopping-cart"></i> Add to Cart</span></a>
                    
                         
                        <a href="<?php echo site_url();?>/product/wishlist/<?php echo $a->id;?>""><span class="addtocart pull-right"><i class="fa fa-heart"></i> WishList</span></a>
                       
                        <div style="clear: both;"></div>
                         
                        
                        </div>
                         <?php endforeach; ?>   
                                 
                       
                    </div>
                 
                    </div>
                
            </div>
            </div>
        </section>
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
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
    </body>
</html>
