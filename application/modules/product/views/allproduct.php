<!DOCTYPE html>


<html>
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/bootstrap.min.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/style.css" type="text/css">

    <body>

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
                                <li><a href="<?php echo base_url();?>user/logout">Logout</a></li>

                            </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                    <!-- /.container-fluid -->
                </div>
            </div>
        </nav>
        <div class="clearfix"></div>
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

        <div class="container">
            <div class="row">

               <div class="col-md-3 col-xs-12 col-sm-4 col-lg-3">  
                <div id="second">
                        <div class="row">

             <div class="col-md-3 col-xs-12 col-sm-4 col-lg-3">  



                    <div id="sidebar1">

                        <div class="sidebar_heading_group1" >

                            <div class="sidebar_heading1 underline">My Account</div>
                            <div class="clearfix"></div>
                        </div>
                        <ul class="sidebarlist1">
                            <li><a href="<?php echo base_url();?>user/dashboard" class="currentsidebar1">Account Dashboard</a></li> 
                            <li><a href="accountinfo.html">Account Information</a></li>
                            <li><a href="mywishlist.html">My Wishlist</a></li>
                            <li><a href="<?php echo base_url();?>product/lists">Products</a></li>
                            <li><a href="">My Orders</a></li>
                            <li><a href="">My Products Reviews</a></li>
                            <li><a href="">Billing Agreements</a></li>
                        </ul>             
                    </div>
                </div>

                        </div>
                    </div>


                </div>


                <div class="col-md-9 col-xs-12 col-sm-8 col-lg-9">
                    <div id ="rightContent">
                              <?php foreach ($allProductList as $p): ?>
                        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-4"    style="border:solid red">
                            <div class="rightContentChild">
                                <div class="row"> 
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>uploads/product/original/<?php echo $p->product_image; ?>" data-src="holder.js/300x300" alt="...">
                                    <div class="caption">
                                        <p class="pdesc"><?php echo $p->product_description; ?><br>$<?php echo $p->price; ?><br>
                                        </p>  
                                                    <div id="wrapper" class="col-md-10 col-xs-12 col-sm-12 col-lg-10 center-block"value="<?php echo $p->product_id; ?>">
                                                <input type="radio" id="star1" name="star"  value="1" class="star" />
                                                <label for="star1"></label>
                                                <input type="radio" id="star2" name="star" class="star"  value="2"/>
                                                <label for="star2"></label>
                                                <input type="radio" id="star3" name="star" class="star"  value="3"/>
                                                <label for="star3"></label>
                                                <input type="radio" id="star4" name="star" class="star" value="4"/>
                                                <label for="star4"></label>
                                                <input type="radio" id="star5" name="star" class="star"  value="5"/>
                                                <label for="star5"></label>
                                            </div>
                                        
                                        <a  href="<?php echo base_url(); ?>cart/addToCart/<?php echo $p->product_slug; ?>"><span class="addtocart col-md-6 pull-left "><i class="fa fa-shopping-cart"></i>Add to Cart</span></a>  
                                            <a href=""><span class="addtocart col-md-6 pull-right"><i class="fa fa-heart"></i>Wishlist</span></a> 
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    </div>
                               
                                </div>
                           
                            </div>
                        </div>
                          <?php endforeach;?>
                    </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>




        <div class="clearfix"></div>

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

        <script src="<?php echo base_url(); ?>assests/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assests/js/bootstrap.min.js"></script>
    </body>
</html>