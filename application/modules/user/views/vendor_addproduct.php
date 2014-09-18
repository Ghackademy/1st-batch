<div class="clearfix"></div>

<section id="seventh">
    <div class="container ">
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
                                    <input type="text" class="form-control"name="pname" value="<?php echo set_value('pname'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">Product Description</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="3" name="pdescription" value="<?php echo set_value('pdescription'); ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">Category</label>
                                <div class="col-sm-7">
                                    <select name="category">
                                        <?php foreach ($allcategory as $c): ?>        
                                            <option value=<?php echo $c['cat_id']; ?>><?php echo $c['cat_title']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">Product Price</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="pprice" value="<?php echo set_value('pprice'); ?>">
                                </div> 
                            </div>

                            <div class="form-group">
                                <label class="col-sm-5 control-label">Product Quantity</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="pquantity" value="<?php echo set_value('pquantity'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-5 control-label">Shipping Details</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control"  name="pdetail" value="<?php echo set_value('pdetail'); ?>">
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
                                    <input type="file" name="userfile" class="form-control select-input" id="inputPassword3" value="<?php echo set_value('pimage'); ?>>
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
