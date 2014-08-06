<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopping cart Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assests/backend/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assests/backend/css/style.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assests/backend/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assests/backend/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-----------------------Navigation---------------------------------- -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
             <div class="navbar-header">
                
                 <a class="navbar-brand" href="index.html">Shopping cart Admin</a>
            </div>
            
            
          
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <div class="navbar-search">
               
                    <div class="col-lg-4">
                    <div class="input-group search">
                      <input type="text" class="form-control" placeholder="search">
                      <span class="input-group-btn ">
                          <button class="btn btn-default" type="button">
                              <span class="glyphicon glyphicon-search search-img"></span>
                          </button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                
               
            </div>  
                    </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                           <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="customer.html"><i class="fa fa-fw fa-table"></i> customer</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i>
                            Products<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse side nav">
                            
                            <li>
                                 <a href="product.html">view Product</a>
                                <a href="Add_product.html">Add Product</a>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="shipping.html"><i class="fa fa-fw fa-desktop"></i> shipping</a>
                    </li>
                  
                            <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-edit"></i>
                          Slider<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse side nav">
                            
                            <li>
                                 <a href="Gallery.html">view Gallery</a>
                                <a href="Add_slider.html">Add Slider</a>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>
                            Create Group<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse side nav">
                            <li>
                                <label class="form"><a href="#">User type </a></label>
                            </li>
                            <li>
                                <a href="#"><select class="form-control ">
                                        <option>Admin</option>
                                        <option>vendor</option>
                                        <option>user</option>
                                    </select></a>
                        </ul>
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Add Product <small>details</small>
                        </h1>
                        <ol class="breadcrumb topic">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Form 
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="row">
                 <div class="dash-tile dash-tile-2x">
                        <div class="dash-tile-header">
                        
                            <i class="fa fa-shopping-cart" style="color: #fff; margin-left: 1em;"></i> <a>New Entry</a>
                        </div>
                        <div class="dash-tile-content">
                        <div class="dash-tile-content-inner-fluid">
                       <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><a>Title</a></label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control select-input" id="inputEmail3" placeholder="Product-title" name="pname" value="<?php echo set_value('pname');?>">
                              </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><a>Category</a></label>
                              <div class="col-sm-10">
                                       <select name="category">
                     <?php foreach($allcategory as $c): ?>        
                        <option value=<?php echo $c['cat_id'];?>><?php echo $c['cat_title'];?></option>
                     <?php endforeach;  ?>
               </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label"><a>Image1</a></label>
                              <div class="col-sm-10">
                                <input type="file" class="form-control select-input" id="inputPassword3" >
                              </div>                             
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label"><a>Preview</a></label>
                              <div class="col-sm-10">
                                  <img src="images/slider1.jpg">
                              </div>
                            </div>
                           
                                                        
                           <div class="form-group">
                                <label  class="col-sm-2 control-label"><a>Description</a></label>
                              <div class="col-sm-10">
                                <textarea class="form-control" rows="6"style="width: 40em;"name="pdescription" value="<?php echo set_value('pname');?>"></textarea>
                              </div> 
                            </div>
                           
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><a>Price</a></label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control select-input" id="inputEmail3" placeholder="Product-title"name="pprice" value="<?php echo set_value('pprice');?>">
                              </div>
                            </div>
                             <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><a>Stock-info</a></label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control select-input" id="inputEmail3" placeholder="Product-title"name="pdetails" value="<?php echo set_value('pdetails');?>">
                              </div>
                            </div>
                           <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><a>Quantity</a></label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control select-input" id="inputEmail3" placeholder="Product-title" name="pquantity" value="<?php echo set_value('pquantity');?>">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Upload</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        </div>
                 </div>
                    </div>
             
                    <div class="col-sm-7 col-xs-12 clearfix"></div>
                                           
         </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assests/backend/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assests/backend/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assests/backend/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assests/backend/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>assests/backend/js/plugins/morris/morris-data.js"></script>

</body>

</html>
