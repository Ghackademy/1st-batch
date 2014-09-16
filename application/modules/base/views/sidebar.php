      <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div id="sidebar">

                            <div id="sidebar_heading_group">
                                <img src="<?php echo base_url(); ?>assests/images/orange.png" id="sidebar_heading_pic">
                                <div id="sidebar_heading">Categories</div><div class="clearfix"></div>
                            </div>
                            <ul class="sidebarlist">
                                <?php foreach (array_slice($allcategory, 0, 5) as $category): ?>
                                    <li><a href="<?php base_url(); ?>home/allpost/<?php echo $category['cat_slug']; ?>"><?php echo $category['cat_title']; ?></a></li>

                                <?php endforeach; ?>
                            </ul>             
                        </div>
                    </div>