<?php include'side.php';?> 
<?php // print_r($val);?>
<div id="page-wrapper">
            <div class="row">
                    <div class="col-lg-12 gallery">
                        <h1 class="page-header">
                           Add Slider <small>Thumbnails</small>
                        </h1>
                        <ol class="breadcrumb topic">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file-photo-o"></i>Upload
                            </li>
                        </ol>
                    </div>
            </div>
            <div class="row">
                       <form class="form-horizontal" role="form" name="uploadform" method="post" action="<?php echo site_url(); ?>/slider/updateslider/<?php echo $val->id;?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"><a>Title</a></label>
                              <div class="col-sm-10">
                                <input type="text" name="title" value="<?php echo $val->title;?>" class="form-control select-input" id="inputEmail3" placeholder="slider-title">
                              </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label"><a>Select</a></label>
                              <div class="col-sm-10">
                                <input type="file" class="form-control select-input" id="inputPassword3" name="userfile">
                              </div>
                            </div>
                           
                          
                            
                             
                           <div class="form-group">
                                <label  class="col-sm-2 control-label"><a>Description</a></label>
                              <div class="col-sm-10">
                                <textarea class="form-control" rows="6"style="width: 40em;" name="description"><?php echo $val->description;?></textarea>
                              </div> 
                           </div>
                           
                            
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit"  name="add" class="btn btn-default">
                                <!--<button type="reset" class="btn btn-default">Reset</button>-->
                              </div>
                            </div>
                          </form>
                    </div>
          </div>
        <!-- /#page-wrapper -->