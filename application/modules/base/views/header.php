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
              $(".center-block").click(function() {
                    var product_id = $(this).attr('value');
                 for($k=1;$k<6;$k++){        
                $("#star"+$k).click(function() {                        
                    var rating = $(this).val();
                    
                       var dataString = 'rating=' + rating + '&product_id=' + product_id;
                        alert(dataString);return false;
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
                    };
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
                                        <img src="<?php echo base_url(); ?>assests/images/ecommerce-websites-online-shops2.png" height="100" alt="" class="col-md-12 col-lg-12">
                                    </div>
                                </div>

                                <div class="searchWrap col-lg-8 col-md-8 col-sm-8 col-xs-8 pull-right">
                                    <div class="row">
                                         <form name="" method="GET" action="home/search">
                                        <div class="headerform input-group">
                                           
                                            <input type="text" name="keyword" class="form-control">
<!--                                             <input type="submit" value="Submit" />-->
                                            <span class="searchbtnbg input-group-btn">
                                                
                                              <button class="searchbtn glyphicon glyphicon-search"  type="submit">
                                                </button>
                                            </span
                                          
                                        </div>
                                         </form> 
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
                                <label><a href="<?php echo base_url();?>user/forgot_password">Forgot Password?</a></label>

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
 <?php foreach (array_slice($allcategory, 0, 5) as $category): ?>
                        <li class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
                              
                            <ul>
                             
                                <li class="dropdown-header"><a href="<?php base_url(); ?>home/allpost/<?php echo $category['cat_slug']; ?>"><?php echo $category['cat_title']; ?></a></li>
                                <li><a href="#">Unique Features</a></li>
                                <li><a href="#">Image Responsive</a></li>
                                <li><a href="#">Auto Carousel</a></li>
                                <li><a href="#">Newsletter Form</a></li>
                                <li><a href="#">Four columns</a></li>
                                <li class="divider"></li>
                           </ul>
                       </li>
                               <?php endforeach;?>
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
                    <a href="<?php echo base_url();?>home/staticpages">Contact us</a>

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
