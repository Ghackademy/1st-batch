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
                       <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label  class="col-sm-2 control-label"><a>Upload New media</a></label>
                              <div class="col-sm-10">
                                <input type="file" name="userfile" class="form-control select-input" id="inputPassword3" >
                              </div>                             
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="submit" class="btn btn-default">Upload</button>
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