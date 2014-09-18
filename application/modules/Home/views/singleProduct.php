        <div class="clearfix"></div>
        <section id="second">
            <div class="container">
                <div class="row">
   
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
     <?php echo $singleProduct['product_name'];?> 
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
        