<div class="clearfix"></div>
<section id="second">
    <div class="container">
        <?php foreach ($searchitem as $search) : ?>
            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 product">    
                <a href="product_details.html">
                    <img src="<?php echo base_url(); ?>uploads/product/original/<?php echo $search['product_image']; ?>" class="product_img" height="250" ></a>

                <div class="new" value="<?php echo $search['product_id']; ?>">
                    <div class="pdesc">
                        <p><a href="home/singleProduct/<?php echo $search['product_slug']; ?>"><?php echo $search['product_name']; ?></a></p>
                        <p><?php echo $search['price']; ?></p>

                    </div>     
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

