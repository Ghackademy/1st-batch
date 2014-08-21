<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

            $(".myclass").click(function(){
                alert($(this).text());
            });

                $(".star").click(function() {

                    var rating = $(this).val();
                    $(".new").click(function() {
                        var product_id = $(this).attr('value');
                        var dataString = 'rating=' + rating + '&product_id=' + product_id;
                        $.ajax({
                            type: 'POST',
                            data: dataString,
                            url: '<?php echo base_url(); ?>home/rating',
                            sucess: function()
                            {
                                alert(res);
                            }
                        });
                    });
                });
                $("#login").submit(function() {
                    var data = $('#login').serialize();
                    //alert(data);return false;
                    $.ajax({
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        url: '<?php echo base_url(); ?>user/login',
                        success: function(res)
                        {
                            // alert(res);return false;
                            if (res === "success") {

                                window.location = "<?php echo base_url(); ?>user/index";
                            }
                            else {
                                $('#errormessage').html(res);
                            }
                        }

                    });
                    return false;

                });
            });
        </script>
       




        <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/lean-slider.css" type="text/css"/>
    </head>
    <body>

        <nav class="navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="nav1">
                    <div class="container nav1Content">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <img src="http://images.cooltext.com/3871786.png" width="447" height="55" alt="GhackShopping.com" class="ghacklogo" />

                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class=" col-lg-6 col-xs-12 col-sm-12 col-md-6 pull-right">
                                <div class="col-lg-4 c0l-md-4 col-sm-4 col-xs-4">
                                    <div class="row">
                                        <img src="images/ecommerce-websites-online-shops2.png" height="100" alt="" class="col-md-12 col-lg-12">
                                    </div>
                                </div>

                                <div class="searchWrap col-lg-8 col-md-8 col-sm-8 col-xs-8 pull-right">
                                    <div class="row">
                                        <div class="headerform input-group">

                                            <input type="text" class="form-control">
                                            <span class="searchbtnbg input-group-btn">
                                                <button class="searchbtn glyphicon glyphicon-search" type="button">
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

        </nav>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <div class="orangeline"></div>
                    <div class="modal-body">
                        <div id ="errormessage">

                        </div>
                        <form id="login" role="form" method="post" action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"name="identity">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                                <label><a href="">Forgot Password?</a></label>

                            </div>
                            <button type="submit" class="btn btn-default">Login</button>
                            <label>New User?? <a href="user/sign_up">Register</a></label>
                        </form>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->

        </div><!-- /.modal -->
        <!--nav2-->

        <div class="nav2Wrapper">
            <div class="nav2Contents container">

                <div class="btn-group collapse navbar-collapse nav2child">
                    <div class="nav2Menu mega-dropdown dropdown-toggle" data-toggle="dropdown">Categories </div>

                    <ul class="dropdown-menu mega-dropdown-menu col-sm-12 col-md-9 col-lg-9 col-xs-12 nav2childdropdwn">

                        <li class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
                            <ul>
                                <li class="dropdown-header">Dresses</li>
                                <li><a href="#">Unique Features</a></li>
                                <li><a href="#">Image Responsive</a></li>
                                <li><a href="#">Auto Carousel</a></li>
                                <li><a href="#">Newsletter Form</a></li>
                                <li><a href="#">Four columns</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Tops</li>
                                <li><a href="#">Good Typography</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
                            <ul>
                                <li class="dropdown-header">Jackets</li>
                                <li><a href="#">Easy to customize</a></li>
                                <li><a href="#">Glyphicons</a></li>
                                <li><a href="#">Pull Right Elements</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Pants</li>
                                <li><a href="#">Coloured Headers</a></li>
                                <li><a href="#">Primary Buttons & Default</a></li>
                                <li><a href="#">Calls to action</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
                            <ul>
                                <li class="dropdown-header">Accessories</li>
                                <li><a href="#">Default Navbar</a></li>
                                <li><a href="#">Lovely Fonts</a></li>
                                <li><a href="#">Responsive Dropdown </a></li>							
                                <li class="divider"></li>
                                <li class="dropdown-header">Newsletter</li>

                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="btn-group collapse navbar-collapse nav2child">
                    <div class="nav2Menu mega-dropdown dropdown-toggle" data-toggle="dropdown">Brand </div>

                    <ul class="dropdown-menu mega-dropdown-menu col-sm-12 col-md-9 col-lg-9 col-xs-12 nav2childdropdwn">

                        <li class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
                            <ul>
                                <li class="dropdown-header">Dresses</li>
                                <li><a href="#">Unique Features</a></li>
                                <li><a href="#">Image Responsive</a></li>
                                <li><a href="#">Auto Carousel</a></li>
                                <li><a href="#">Newsletter Form</a></li>
                                <li><a href="#">Four columns</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Tops</li>
                                <li><a href="#">Good Typography</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
                            <ul>
                                <li class="dropdown-header">Jackets</li>
                                <li><a href="#">Easy to customize</a></li>
                                <li><a href="#">Glyphicons</a></li>
                                <li><a href="#">Pull Right Elements</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Pants</li>
                                <li><a href="#">Coloured Headers</a></li>
                                <li><a href="#">Primary Buttons & Default</a></li>
                                <li><a href="#">Calls to action</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
                            <ul>
                                <li class="dropdown-header">Accessories</li>
                                <li><a href="#">Default Navbar</a></li>
                                <li><a href="#">Lovely Fonts</a></li>
                                <li><a href="#">Responsive Dropdown </a></li>							
                                <li class="divider"></li>

                            </ul>
                        </li>

                    </ul>
                </div>


                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Sales </div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">New products </div>
                    <ul class="nav2ScrollDwn dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">Contact us</div>

                </div>

                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="dropdown">About us </div>

                </div>
                <div class="btn-group">
                    <div class="nav2Menu" data-toggle="modal" data-target="#myModal">Login</div>

                </div>
                <div class="clearfix"></div>
            </div> 

            <div class="clearfix"></div>
            <div class="clearfix"></div>
        </div>

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
                                    <li><a href="<?php base_url(); ?>home/rating/<?php echo $category['cat_slug']; ?>"><?php echo $category['cat_title']; ?></a></li>

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
                                        <img src="<?php echo base_url(); ?>assests/images/bg1-bannersequence.jpg" alt="...">

                                        <div class="carousel-caption">
                                            arnav izzo
                                        </div>
                                    </div>
                                    <div class="item">

                                        <img src="<?php echo base_url(); ?>assests/images/bg2-bannersequence.jpg" alt="...">
                                        <div class="carousel-caption">
                                            jenisha shakya
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
                                <img src="<?php echo base_url(); ?>assests/images/block1.jpg" alt="advertisement 1">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3 ">
                            <div class="advertisement">
                                <img src="<?php echo base_url(); ?>assests/images/block2.jpg" alt="advertisement 1">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                            <div class="advertisement">
                                <img src="<?php echo base_url(); ?>assests/images/block3.jpg" alt="advertisement 1">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
                            <div class="advertisement">
                                <img src="<?php echo base_url(); ?>assests/images/banner1-images.png" alt="advertisement 1">
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
                        <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product myclass" style="height:20px; width:20px; background-color: black; margin:10px" value="<?php echo $p['product_id'];?>">
                            <?php echo $p['product_id'];?>
                        </div>

                            <?php if ($p['featured'] == 1) { ?>

                                <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">    
                                    <a href="product_details.html">
                                        <img src="<?php echo base_url(); ?>uploads/product/original/<?php echo $p['product_image']; ?>" class="product_img" height="250" ></a>

                                    <div class="new" value="<?php echo $p['product_id']; ?>">
                                        <div class="pdesc">
                                            <p><a href="home/singleProduct/<?php echo $p['product_slug']; ?>"><?php echo $p['product_name']; ?></a></p>
                                            <p><?php echo $p['price']; ?></p>
                                            <div id="wrapper" class="col-md-10 col-xs-12 col-sm-12 col-lg-10 center-block">
                                                <input type="radio" name="star"  value="1" class="star" />
                                                <label for="star1"></label>
                                                <input type="radio" id="star2" name="star" class="star"  value="2" data-id="<?php echo $p['product_id']; ?>"/>
                                                <label for="star2"></label>
                                                <input type="radio" id="star3" name="star" class="star"  value="3" checked="checked"/>
                                                <label for="star3"></label>
                                                <input type="radio" id="star4" name="star" class="star" value="4"/>
                                                <label for="star4"></label>
                                                <input type="radio" id="star5" name="star" class="star"  value="5"/>
                                                <label for="star5"></label>
                                            </div>
                                        </div>     
                                    </div>
                                    <a href=""><span class="addtocart pull-left"><i class="fa fa-shopping-cart"></i> Add to Cart</span></a> 

                                    <a href=""><span class="addtocart pull-right"><i class="fa fa-heart"></i> WishList</span></a>


                                </div>
                            <?php } ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="fifth">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="footer2">
                            <div class="footernoteleft">
                                <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 SocialIcon">
                                    <div class="socialIconBody col-sm-12 col-xs-12">
                                        <ul>
                                            <li class="facebook"><a href="" target="_blank"><span class="fa fa-facebook"></span></a> </li>
                                            <li class="twitter"><a href="" target="_blank"><span class="fa fa-twitter"></span></a></li>
                                            <li class="gplus"><a href="" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                                            <li class="rss"><a href="" target="_blank"><span class="fa fa-rss"></span></a></li>
                                            <li class="pinterest"><a href="" target="_blank"><span class="fa fa-pinterest"></span></a></li>
                                            <li class="linkedin"><a href="" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                                            <li class="flickr"><a href="" target="_blank"><span class="fa fa-flickr"></span></a></li>
                                            <li class="instagram"><a href="" target="_blank"><span class="fa fa-instagram"></span></a></li>
                                            <li class="youtube"><a href="" target="_blank"><span class="fa fa-youtube-play"></span></a></li>
                                            <li class="tumblr"><a href="" target="_blank"><span class="fa fa-tumblr"></span></a></li>
                                            <li class="dribble"><a href="" target="_blank"><span class="fa fa-dribbble"></span></a></li>
                                            <li class="xing"><a href=""><span class="fa fa-xing-square"></span></a></li>
                                        </ul>
                                    </div>
                                </div>            <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                                    G-Hackademy All rights reserved
                                    <br>Designed by sylvia
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 footernoteright pull-right">
                                <address>
                                    Twitter, Inc.<br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    P : (123) 456-7890
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </section>
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assests/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assests/js/jquery.js"></script>
    </body>
</html>
