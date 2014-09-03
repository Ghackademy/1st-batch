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
       
<link rel="stylesheet" href="<?php echo base_url(); ?>assests/lean-slider.css" type="text/css" />
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
        <form role="form" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
      <label><a href="">Forgot Password?</a></label>
      
  </div>
            <button type="submit" class="btn btn-default">Login</button>
            <label>New User?? <a href="">Register</a></label>
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

        <section id="seventh">
        <div class="container ">
         <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                    <div id="sidebar1">

                                <div class="sidebar_heading_group1">
                                   
                                    <div class="sidebar_heading1 underline">Dashboard</div>
                                    <div class="clearfix"></div>
                                </div>
                                <ul class="sidebarlist1">
                                    <li><a href="vendor_dashboard.html" >Account Dashboard</a></li> 
                                    <li><a href="add_category.html">Add Category</a></li>
                                    <li><a href="add_product.html" class="currentsidebar1">Add Product</a></li>
                                    <li><a href="my_product.html">My Product</a></li>
                                    <li><a href="">My Products Reviews</a></li>
                                    <li><a href="">Billing Agreements</a></li>
                                </ul>             
                            </div>
                </div>
             <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                   <div class="sidebar_heading_group1">
                                   <div class="sidebar_heading1 underline">Welcome vendor!</div>
                                    <div class="clearfix"></div>
                                    </div> 
             
                 <div class="col-md-8 col-md-offset-2 col-lg-8 col-sm-12 col-xs-12">
                <div class="panel panel-default">
  <div class="panel-heading">
    <label class="panel-title lead">Add Product</label>
  </div>
  <div class="panel-body">
       <form class="form-horizontal" role="form" method="post"enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-5 control-label">Product Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control"name="pname" value="<?php echo set_value('pname');?>">
    </div>
  </div>
 <div class="form-group">
    <label class="col-sm-5 control-label">Product Description</label>
    <div class="col-sm-7">
      <textarea class="form-control" rows="3" name="pdescription" value="<?php echo set_value('pdescription');?>"></textarea>
    </div>
  </div>
                <div class="form-group">
    <label class="col-sm-5 control-label">Category</label>
    <div class="col-sm-7">
                      <select name="category">
                     <?php foreach($allcategory as $c): ?>        
                        <option value=<?php echo $c['cat_id'];?>><?php echo $c['cat_title'];?></option>
                     <?php endforeach;  ?>
 </select>
    </div>
  </div>
                 <div class="form-group">
    <label class="col-sm-5 control-label">Product Price</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="pprice" value="<?php echo set_value('pprice');?>">
    </div> 
  </div>
  
                 <div class="form-group">
    <label class="col-sm-5 control-label">Product Quantity</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="pquantity" value="<?php echo set_value('pquantity');?>">
    </div>
  </div>
                
    <div class="form-group">
    <label class="col-sm-5 control-label">Shipping Details</label>
    <div class="col-sm-7">
      <input type="text" class="form-control"  name="pdetail" value="<?php echo set_value('pdetail');?>">
    </div>
  </div>
     <div class="form-group">
    <label class="col-sm-5 control-label">Rating</label>
    <div class="col-sm-7">
    <input type="checkbox"name="prating" value="1">
    </div>
  </div>
    <div class="form-group">
    <label class="col-sm-5 control-label">Publish</label>
    <div class="col-sm-7">
      <input type="checkbox" name="publish" value="1">
    </div>
  </div>
    <div class="form-group">
    <label class="col-sm-5 control-label">Feature</label>
    <div class="col-sm-7">
      <input type="checkbox" name="feature" value="1">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-5 control-label">Product Image</label>
    <div class="col-sm-7">
    <input type="file" name="userfile" class="form-control select-input" id="inputPassword3" value="<?php echo set_value('pimage');?>>
    </div>
   
    </div>
               
                <div class="col-sm-12 control-label" >
                    <div class="col-sm-4">
                 <input type="submit" class="btn btn-default" value="Add" name="submit">
                    </div>
                    <div class="col-sm-4"></div>
                     <div class="col-sm-3">
                 <button type="reset" class="btn btn-default">Reset</button>
                     </div>
                </div>
                </form>
  </div>
</div>
                     </div>
                </div>
             </div>
            </div>
       
        </section>
       
         <div class="clearfix"></div>
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
