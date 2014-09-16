<div class="clearfix"></div>
<section id="seventh">
    <div class="content container ">
           <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
            <div class="sidebar_heading_group1">
                <div class="sidebar_heading1 underline">Welcome vendor!</div>
                <div class="clearfix"></div>
            </div> 
            <div class="col-md-8 col-md-offset-2 col-lg-8 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="panel-title lead">Add Category</label>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST">
                            <div class="form-group">
                                <label class="col-sm-5 control-label ">Category Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control"name="cat_title" value="<?php echo set_value('cat_title'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">Category Description</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="3" name="cat_desc" value="<?php echo set_value('cat_desc'); ?>"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 control-label" >
                                <div class="col-sm-4">
                                    <button type="submit" name="submit" class="btn btn-default">Add</button>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-3">
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div>      

                </div>
            </div>

            </section>

            <div class="clearfix"></div>
