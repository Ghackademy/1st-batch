<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assests/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assests/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assests/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
                <script type="text/javascript">
            $(document).ready(function(){
            $("#login").submit(function() {
               var data  = $('#login').serialize();
              // alert(data);return false;
               $.ajax({
                   
                   type:'POST',
                   data:data,
                   dataType:'json',
                  url:'<?php echo base_url();?>user/login',
                   success:function(res)
           {
               // alert(res);return false;
               if (res =="success"){
                  
             window.location="<?php echo base_url(); ?>user/index";
               }
               else{
                   $('#infoMessage').html(res);
               }
           }
           
               });
               return false;

            });
            });
        </script>
       
<link rel="stylesheet" href="<?php echo base_url();?>/assests/lean-slider.css" type="text/css" />
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

                        <form id="login" role="form" method="post" action="">
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
                           <img src="images/orange.png" id="sidebar_heading_pic">
                           <div id="sidebar_heading">Categories</div><div class="clearfix"></div>
                        </div>
                         <ul class="sidebarlist">
                                    <li><a href="add_category.html">AddCategory</a></li> 
                                    <li><a href="add_product.html">AddProduct</a></li>
                                    <li><a href="my_product.html">MyProduct</a></li>
                                    <li><a href="">Option1</a></li>
                                    <li><a href="">Option2</a></li>
                                    <li><a href="">Option3</a></li>
                                </ul>            
                                </div>
                </div>
                      <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                          <div class="panel panel-default">
</div>
             </div> 
                   
                    <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
                        
                        <div class="product_detail">
<div class="col-md-7">
<img src="<?php echo base_url();?>uploads/product/resized/<?php echo $singleProduct['product_image'];?>" class="product_detail_img" />
</div>
<div class="col-md-5">
    <div class="product_detail_heading">
    NUNC FACILISIS
</div>
    <div class="product_detail_desc">
     <?php echo $singleProduct['product_description'];?> 
    </div>
    <div class="product_detail_price">
       <?php echo $singleProduct['price'];?> 
    </div>
        <div class="product_detail_heading">
   <?php echo $singleProduct['stock_info'];?>
</div>
    <div class="quantity"><?php echo $singleProduct['shipping_detail'];?></div>  
                    
                     
    </div>
                            
    
</div>
                </div>
                    </div> 
            </div>
            </div>
        </section>
        
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url();?>/assests/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assests/js/jquery.js"></script>
    </body>
</html>
