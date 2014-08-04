<!DOCTYPE html>


<html>
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">

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
                                <li><a href="#">Login</a></li>

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

                            <div id="sidebar">

                                <div id="sidebar_heading_group">
                                    <img src="<?php echo base_url(); ?>assets/images/orange.png" id="sidebar_heading_pic">
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

                            <div id="sidebar">

                                <div id="sidebar_heading_group">
                                    <div id="sidebar_heading">Shop by
                                    </div><div class="clearfix"></div>
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
                    </div>


                </div>


                <div class="col-md-9 col-xs-12 col-sm-8 col-lg-9">
                    <div id ="rightContent">
                        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-4">
                            <div class="rightContentChild">
                                <div class="thumbnail">
                                    <img src="images/30.jpg" data-src="holder.js/300x300" alt="...">
                                    <div class="caption">
                                        <p class="pdesc">This is converse.<br>$30.99<br>
                                            <i class="fa fa-star star"></i>
                                            <i class="fa fa-star star"></i>
                                        </p>       

                                      <div class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</div>  
                                      <span class="addtocarticon"><i class="fa fa-heart"></i></span> 
                                       
                                        <div class="clearfix"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>



                        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-4">
                            <div class="rightContentChild">

                                <div class="thumbnail">
                                    <img src="images/30.jpg" data-src="holder.js/300x300" alt="...">
                                    <div class="caption">
                                        <p class="pdesc">This is converse.<br>$30.99<br>
                                            <i class="fa fa-star star"></i>
                                            <i class="fa fa-star star"></i>
                                        </p>       


                                        <div class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</div>  
                                        <span class="addtocarticon"><i class="fa fa-heart"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-4">
                            <div class="rightContentChild">
                                <div class="thumbnail">
                                    <img src="images/30.jpg" data-src="holder.js/300x300" alt="...">
                                    <div class="caption">
                                        <p class="pdesc">This is converse.<br>$30.99<br>
                                            <i class="fa fa-star star"></i>
                                            <i class="fa fa-star star"></i>
                                        </p>       


                                        <div class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</div>  
                                        <span class="addtocarticon"><i class="fa fa-heart"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-4">
                            <div class="rightContentChild">
                                <div class="thumbnail">
                                    <img src="images/30.jpg" data-src="holder.js/300x300" alt="...">
                                    <div class="caption">
                                        <p class="pdesc">This is converse.<br>$30.99<br>
                                            <i class="fa fa-star star"></i>
                                            <i class="fa fa-star star"></i>
                                        </p>       


                                        <div class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</div>  
                                        <span class="addtocarticon"><i class="fa fa-heart"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rightContentChild col-sm-6 col-md-4 col-xs-12 col-lg-4">
                            <div class="thumbnail">
                                <img src="images/30.jpg" data-src="holder.js/300x300" alt="...">
                                <div class="caption">
                                    <p class="pdesc">This is converse.<br>$30.99<br>
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                    </p>       


                                    <div class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</div>  
                                    <span class="addtocarticon"><i class="fa fa-heart"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="rightContentChild col-sm-6 col-md-4 col-xs-12 col-lg-4">
                            <div class="thumbnail">
                                <img src="images/30.jpg" data-src="holder.js/300x300" alt="...">
                                <div class="caption">
                                    <p class="pdesc">This is converse.<br>$30.99<br>
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                    </p>       


                                    <div class="addtocart"><i class="fa fa-shopping-cart"></i>ADD TO CART</div>  
                                    <span class="addtocarticon"><i class="fa fa-heart"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
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

        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>