        <div class="clearfix"></div>

        <div class="container">
            <div class="row">

               <div class="col-md-3 col-xs-12 col-sm-4 col-lg-3">  
                <div id="second">
                        <div class="row">

             <div class="col-md-3 col-xs-12 col-sm-4 col-lg-3">  
                </div>

                        </div>
                    </div>


                </div>


                <div class="col-md-9 col-xs-12 col-sm-8 col-lg-9">
                    <div id ="rightContent">
                              <?php foreach ($allProductList as $p): ?>
                        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-4" >
                            <div class="rightContentChild">
                                <div class="row"> 
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>uploads/product/original/<?php echo $p->product_image; ?>" data-src="holder.js/300x300" alt="...">
                                    <div class="caption">
                                        <p class="pdesc"><?php echo $p->product_description; ?><br>$<?php echo $p->price; ?><br>
                                        </p>  
                                                    <div id="wrapper" class="col-md-10 col-xs-12 col-sm-12 col-lg-10 center-block"value="<?php echo $p->product_id; ?>">
                                                <input type="radio" id="star1" name="star"  value="1" class="star" />
                                                <label for="star1"></label>
                                                <input type="radio" id="star2" name="star" class="star"  value="2"/>
                                                <label for="star2"></label>
                                                <input type="radio" id="star3" name="star" class="star"  value="3"/>
                                                <label for="star3"></label>
                                                <input type="radio" id="star4" name="star" class="star" value="4"/>
                                                <label for="star4"></label>
                                                <input type="radio" id="star5" name="star" class="star"  value="5"/>
                                                <label for="star5"></label>
                                            </div>
                                        
                                        <a  href="<?php echo base_url(); ?>cart/addToCart/<?php echo $p->product_slug; ?>"><span class="addtocart col-md-6 pull-left "><i class="fa fa-shopping-cart"></i>Add to Cart</span></a>  
                                            <a href=""><span class="addtocart col-md-6 pull-right"><i class="fa fa-heart"></i>Wishlist</span></a> 
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    </div>
                               
                                </div>
                           
                            </div>
                        </div>
                          <?php endforeach;?>
                    </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>




        <div class="clearfix"></div>

      