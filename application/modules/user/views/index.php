<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
            $("#login").submit(function() {
               var data  = $('#login').serialize();
               $.ajax({
                   
                   type:'POST',
                   data:data,
                   url:'<?php echo site_url();?>/user/login',
                   success:function(res)
           {
               alert(res);return false;
           }
           
               });

            });
            });
			
        </script>

        <link rel="stylesheet" href="lean-slider.css" type="text/css" />
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
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Cart</a></li>

                                <li data-toggle="modal" data-target="#myModal"> <a href="">Login</a></li>


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
                    <div id="errdisplay">

                    </div>
                    <div class="modal-body">

                        <form id="login" role="form" method="post">
                            <div class="form-group">
                                <div id="infoMessage"><?php //echo $message; ?><?php //echo validation_errors();  ?></div>

                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="identity">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>

                            <button type="submit" class="btn btn-default">Login</button>

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
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
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

        <div class="clearfix"></div>
        <section id="second">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div id="sidebar">

                            <div id="sidebar_heading_group">
                                <img src="assets/images/orange.png" id="sidebar_heading_pic">
                                <div id="sidebar_heading">Categories</div><div class="clearfix"></div>
                            </div>
                            <ul class="sidebarlist">
                                <?php foreach ($allcategory as $c): ?>
                                    <li><a href="<?php base_url(); ?>./category/product/<?php echo $c['cslug']; ?>"><?php echo $c['cat_title']; ?></a></li>

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
                                        <img src="assets/images/bg1-bannersequence.jpg" alt="...">

                                        <div class="carousel-caption">
                                            arnav izzo
                                        </div>
                                    </div>
                                    <div class="item">

                                        <img src="assets/images/bg2-bannersequence.jpg" alt="...">
                                        <div class="carousel-caption">
                                            this is girl
                                        </div>
                                    </div>
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
                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">

                            <div class="advertisement row">
                                <img src="assets/images/block1.jpg" alt="advertisement 1">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3 ">
                            <div class="advertisement">
                                <img src="assets/images/block2.jpg" alt="advertisement 1">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                            <div class="advertisement">
                                <img src="assets/images/block3.jpg" alt="advertisement 1">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                            <div class="advertisement">
                                <img src="assets/images/banner1-images.png" alt="advertisement 1">
                            </div>
                        </div>
                        <hr color="orange"> 
                    </div>
                </div>
            </div>
        </section>
        <section id="fourth">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 contentLeft">
                        <img src="assets/images/banner-left.jpg">
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9 contentRight">

                        <div class="heading ">Featured Products</div>
                        <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">

                            <?php foreach ($allProductList as $p): ?>
                                <?php if ($p['featured'] == 1) { ?>

                                    <img src="<?php echo base_url(); ?>uploads/product/original/<?php echo $p['product_image']; ?>" class="product_img"height="250" >
                                    <p class="pdesc"><?php echo $p['product_name']; ?><br><?php echo $p['price']; ?><br>
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>

                                    </p>
                                    <span class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</span>  
                                    <span class="addtocart"><i class="fa fa-heart"></i></span>
                                </div>
                            <?php } ?>
                        <?php endforeach; ?>              
                        <!--                        <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">
                                                   
                                                <img src="assets/images/30.jpg" class="product_img" height="250" width="250">
                                                 <p class="pdesc">Black Jacket.<br>$30.99<br>
                                                      <i class="fa fa-star star"></i>
                                                  <i class="fa fa-star star"></i>
                                                  <i class="fa fa-star star"></i>
                                                   <i class="fa fa-star star"></i>
                                                </p>
                                               <span class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</span> 
                                               
                                               <span class="addtocart"><i class="fa fa-heart"></i></span>
                                                </div>                       
                                           
                                                <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">
                                                   
                                                  <img src="assets/images/20_1.jpg" class="product_img"height="250">
                                                   <p class="pdesc">A brown bag.<br>$30.99<br>
                                                      <i class="fa fa-star star"></i>
                                                  <i class="fa fa-star star"></i>
                                                   <i class="fa fa-star star"></i>
                                                </p>
                                               <span class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</span>  
                                               <span class="addtocart"><i class="fa fa-heart"></i></span>
                                            </div>-->

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
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 footernoteright">
                                Special|New Products|Top Sellers|Our Stores
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </section>
        <!--Javascript Section-->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.js"></script>
    </body>
</html>



<!--<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
 
<link rel="stylesheet" href="lean-slider.css" type="text/css" />
    </head>
    <body>
        headerpart
         <nav class="navbar-default" role="navigation">
            <div class="container-fluid">
                 Brand and toggle get grouped for better mobile display 
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

                         Collect the nav links, forms, and other content for toggling 
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                            <div class="searchForm">
                                <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
                                    <div class="headerform input-group">

                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="searchbtn glyphicon glyphicon-search" type="button">
                                            </button>
                                        </span>
                                    </div> /input-group 
                                </div> /.col-lg-6 
                            </div>     
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Cart</a></li>
                                <li><a href="">Login</a></li>

                            </ul>
                        </div>
                    </div> /.navbar-collapse 
                     /.container-fluid 
                </div>
            </div>
        </nav>
        <div class="clearfix"></div>
        nav2
        <div class="nav2Wrapper">
            <div class="nav2Contents">
                category
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Categories </div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                brand
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Brand</div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                sales
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Sales </div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </div>
                new product
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">New products </div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </div>
                contactus
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Contact us</div>
                    
                </div>
                about us
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">About us </div>
                  
                </div>

            </div> content close
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <section id="second">
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div id="sidebar">
                        
                        <div id="sidebar_heading_group">
                           <img src="assets/images/orange.png" id="sidebar_heading_pic">
                           <div id="sidebar_heading">Categories</div><div class="clearfix"></div>
                        </div>
                        <ul class="sidebarlist">
<?php foreach ($allcategory as $c): ?>
                                        <li><a href="<?php base_url(); ?>"><?php echo $c['cat_title']; ?></a></li>
                                    
<?php endforeach; ?>
                                </ul>             
                                </div>
                </div>
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
                        <div class="imageslider">
                           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   Indicators 
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
 </ol>

   Wrapper for slides 
  <div class="carousel-inner">
    <div class="item active">
        <img src="assets/images/bg1-bannersequence.jpg" alt="...">
       
      <div class="carousel-caption">
       arnav izzo
      </div>
    </div>
   <div class="item">
     
         <img src="assets/images/bg2-bannersequence.jpg" alt="...">
      <div class="carousel-caption">
       this is girl
      </div>
    </div>
  </div>

   Controls 
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
                   <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                       
                        <div class="advertisement row">
                            <img src="assets/images/block1.jpg" alt="advertisement 1">
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3 ">
                        <div class="advertisement">
                            <img src="assets/images/block2.jpg" alt="advertisement 1">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                        <div class="advertisement">
                            <img src="assets/images/block3.jpg" alt="advertisement 1">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                        <div class="advertisement">
                            <img src="assets/images/banner1-images.png" alt="advertisement 1">
                        </div>
                    </div>
                 <hr color="orange"> 
               </div>
                </div>
            </div>
        </section>
        <section id="fourth">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 contentLeft">
                        <img src="assets/images/banner-left.jpg">
                    </div>
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9 contentRight">
                       
                        <div class="heading ">Featured Products</div>
                        <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">
<?php //print_r($allProductList); die();?>
<?php foreach ($allProductList as $p): ?>
    <?php if ($p['featured'] == 1) { ?>

                                  <img src="<?php echo base_url(); ?>uploads/product/original/<?php echo $p['product_image']; ?>" class="product_img"height="250" >
                                  <p class="pdesc"><?php echo $p['product_name']; ?><br>$30.99<br>
                                      <i class="fa fa-star star"></i>
                                  <i class="fa fa-star star"></i>
                                 
                                </p>
                               <span class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</span>  
                               <span class="addtocart"><i class="fa fa-heart"></i></span>
                                   
                               </div><?php } ?>
<?php endforeach; ?>  
                         
                        <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">
                           
                        <img src="assets/images/30.jpg" class="product_img" height="250" width="250">
                         <p class="pdesc">Black Jacket.<br>$30.99<br>
                              <i class="fa fa-star star"></i>
                          <i class="fa fa-star star"></i>
                          <i class="fa fa-star star"></i>
                           <i class="fa fa-star star"></i>
                        </p>
                       <span class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</span> 
                       
                       <span class="addtocart"><i class="fa fa-heart"></i></span>
                        </div>                       
                   
                        <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">
                           
                          <img src="assets/images/20_1.jpg" class="product_img"height="250">
                           <p class="pdesc">A brown bag.<br>$30.99<br>
                              <i class="fa fa-star star"></i>
                          <i class="fa fa-star star"></i>
                           <i class="fa fa-star star"></i>
                        </p>
                       <span class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</span>  
                       <span class="addtocart"><i class="fa fa-heart"></i></span>
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
                             <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 footernoteright">
                               Special|New Products|Top Sellers|Our Stores
                            </div>
                        </div>
                             </div>
                        </div>
                    </footer>
            
        </section>
        Javascript Section
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.js"></script>
    </body>
</html>-->
