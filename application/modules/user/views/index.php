<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="lean-slider.js">
            $(document).ready(function() {
    $('#slider').leanSlider();
});
directionNavPrevBuilder: function(prevText){
    return '<a href="#" class="lean-slider-prev">'+ prevText +'</a>';        
}

directionNavNextBuilder: function(nextText){
    return '<a href="#" class="lean-slider-prev">'+ nextText +'</a>';        
}

controlNavBuilder: function(index, slide){
    return '<a href="#" class="lean-slider-control-nav">'+ (index + 1) +'</a>';
}
        </script>
<link rel="stylesheet" href="lean-slider.css" type="text/css" />
    </head>
    <body>
        <!--headerpart-->
        <section id="topNavigation">
            <div class="container">
            <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
                <div class="clearfix"></div>
            </div>
        </section>
        <section id="second">
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                    <div id="sidebar">
                        
                        <div id="sidebar_heading_group">
                           <img src="assets/images/orange.png" id="sidebar_heading_pic">
                           <div id="sidebar_heading">Categories</div><div class="clearfix"></div>
                        </div>
                        <ul class="sidebarlist">
						<?php foreach($allcategory as $c): ?>
                                    <li><?php echo $c['cat_title'];?></li>
                                
						<?php endforeach; ?>
						</ul>
                                </div>
                </div>
                    <div class="col-md-9 col-xs-9 col-sm-9 col-lg-9">
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
       this is girl
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
                <hr color="orange">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                        <div class="advertisement">
                            <img src="assets/images/block1.jpg" alt="advertisement 1">
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                        <div class="advertisement">
                            <img src="assets/images/block2.jpg" alt="advertisement 1">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                        <div class="advertisement">
                            <img src="assetsimages/block3.jpg" alt="advertisement 1">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                        <div class="advertisement">
                            <img src="assets/images/banner1-images.png" alt="advertisement 1">
                        </div>
                    </div>
                </div>
                <hr color="orange">
            </div>
        </section>
        <section id="fourth">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 contentLeft">
                        <img src="assets/images/banner-left.jpg">
                    </div>
                    <div class="col-md-9 contentRight">
                        <div class="heading">Featured Products</div>
                        <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 product">
                          
                          <img src="assets/images/13.jpg" class="product_img"height="250" >
                          <p class="pdesc">This is converse.<br>$30.99<br>
                              <i class="fa fa-star star"></i>
                          <i class="fa fa-star star"></i>
                          <i class="fa fa-star star"></i>
                          <i class="fa fa-star star"></i></p>
                          
                        </div>
                                     
                        <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 product">
                           
                        <img src="assets/images/30.jpg" class="product_img" height="250" width="250">
                          
                    </div>
                        <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 product">
                           
                          <img src="assets/images/20_1.jpg" class="product_img"height="250">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--Javascript Section-->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.js"></script>
    </body>
</html>
