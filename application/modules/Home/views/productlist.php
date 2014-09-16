<div class="clearfix"></div>

<div class="container">
    <div class="row">

        <div class="col-md-3 col-xs-12 col-sm-4 col-lg-3">  
            <div id="second">
                <div class="row">

                    <div id="sidebar">

                        <div id="sidebar_heading_group">
                            <img src="<?php echo base_url(); ?>assests/images/orange.png" id="sidebar_heading_pic">
                            <div id="sidebar_heading">Categories</div><div class="clearfix"></div>
                        </div>
                        <ul class="sidebarlist">
                            <?php foreach (array_slice($allcategory, 0, 5) as $all): ?>
                                <li><a href="<?php echo base_url(); ?>category/allpost/<?php echo $all['cat_slug']; ?>"><?php echo $all['cat_title']; ?></a></li> 
                            <?php endforeach; ?>
                        </ul>             
                    </div>



                </div>
            </div>


        </div>


        <div class="rightContent col-sm-8 col-md-9 col-xs-12 col-lg-9">
            <?php foreach ($getpost as $product): ?>
                <div class="rightContentChild col-sm-6 col-md-4 col-xs-12 col-lg-4">
                    <div class="thumbnail">

                        <img src="<?php echo base_url(); ?>uploads/product/resized/<?php echo $product->product_image; ?>" data-src="holder.js/300x300" alt="...">
                        <div class="caption">
                            <p class="pdesc"> <?php echo $product->product_name; ?><br><?php echo $product->price; ?> <br>
                            <div id="wrapper" class="col-md-10 col-xs-12 col-sm-12 col-lg-10 center-block" >
                                <input type="radio" id="star1" name="star" class="star"  value="1"/>
                                <label for="star1"></label>
                                <input type="radio" id="star2" name="star" class="star"  value="2"/>
                                <label for="star2"></label>
                                <input type="radio" id="star3" name="star" class="star"  value="3" checked="checked"/>
                                <label for="star3"></label>
                                <input type="radio" id="star4" name="star" class="star" value="4"/>
                                <label for="star4"></label>
                                <input type="radio" id="star5" name="star" class="star"  value="5"/>
                                <label for="star5"></label>
                            </div>
                            </p>       


                            <a href=""><span class="addtocart pull-left"><i class="fa fa-shopping-cart"></i> Add to Cart</span></a> 

                            <a href=""><span class="addtocart pull-right"><i class="fa fa-heart"></i> WishList</span></a>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>



        <div class="clearfix"></div>




        <div class="clearfix"></div>

        <section id="fifth">

