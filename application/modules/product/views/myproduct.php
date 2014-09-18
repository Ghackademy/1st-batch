<div class="clearfix"></div>
<section id="second">
    <div class="container">
        <div class="row">
                      <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                <div class="sidebar_heading_group1">
                    <div class="sidebar_heading1 underline">Welcome vendor <?php echo $this->session->userdata('username'); ?></div>
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

