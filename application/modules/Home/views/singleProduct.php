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
        