<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

        <link rel="stylesheet" href="<?php echo base_url(); ?>/assests/css/lean-slider.css" type="text/css" />
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
        <section id="second">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div id="sidebar1">

                            <div class="sidebar_heading_group1">

                                <div class="sidebar_heading1 underline">Dashboard</div>
                                <div class="clearfix"></div>
                            </div>
                            <ul class="sidebarlist1">
                                <li><a href="vendor_dashboard.html" >Account Dashboard</a></li> 
                                <li><a href="add_category.html">Add Category</a></li>
                                <li><a href="add_product.html" >Add Product</a></li>
                                <li><a href="my_product.html" class="currentsidebar1">My Product</a></li>
                                <li><a href="">My Products Reviews</a></li>
                                <li><a href="">Billing Agreements</a></li>
                            </ul>             
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                        <div class="sidebar_heading_group1">
                            <div class="sidebar_heading1 underline">Welcome vendor <?php echo $this->session->userdata('username');?></div>
                            <div class="clearfix"></div>
                        </div> 



                        <div class="product_detail">
                            <?php foreach ($myproductList as $p): ?>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-xs-12 ">
                                    
                                    <img src="<?php echo base_url(); ?>uploads/product/original/<?php echo $p->product_image; ?>" class="product_detail_img" height="500px" width="500px" >
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12 col-xs-12">
                                    <div class="product_detail_heading text-right">
                                        <?php echo $p->product_name; ?>
                                    </div>
                                    <div class="product_detail_desc text-right">
                                        <?php echo $p->product_description; ?>
                                        <div class="product_detail_price  text-right">
                                            <?php echo $p->price; ?> 
                                        </div>
                                        <div class="product_detail_price text-right">
                                            Availability: <?php echo $p->stock_info; ?>
                                        </div>
                                        <div class="quantity text-right"></div>  
                                        <a href="<?php echo base_url(); ?>edit/<?php echo $p->product_id; ?>"><span class="addtocart pull-left col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1"><i class="fa fa-pencil"></i> Edit Product</span></a> 

                                        <a href="<?php echo base_url(); ?>delete/<?php echo $p->product_id; ?>"><span class="addtocart  pull-left col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1"><i class="fa fa-eraser"></i> Delete Product</span></a>


                                    </div>

                                </div>
                            <?php endforeach ?>
                            <?php echo $links; ?>
                        </div>

                    </div>
                </div> 


        </section>
        <section id="third">
            <div class="container">
                <hr color="orange">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                        <div class="advertisement">
                            <img src="<?php echo base_url(); ?>/assests/images/block1.jpg" alt="advertisement 1">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                        <div class="advertisement">
                            <img src="<?php echo base_url(); ?>/assests/images/block2.jpg" alt="advertisement 1">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                        <div class="advertisement">
                            <img src="<?php echo base_url(); ?>/assests/images/block3.jpg" alt="advertisement 1">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                        <div class="advertisement">
                            <img src="<?php echo base_url(); ?>/assests/images/banner1-images.png" alt="advertisement 1">
                        </div>
                    </div>
                </div>
                <hr color="orange">
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
        <script type="text/javascript" src="<?php echo base_url(); ?>/assests/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/assests/js/jquery.js"></script>
    </body>
</html>
