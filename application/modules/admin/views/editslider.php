<?php
include'side.php';
?>
   <div id="page-wrapper">
                           
            <div class="row">
                    <div class="col-lg-12 gallery">
                        <h1 class="page-header">
                            Slider <small>Gallery</small>
                        </h1>
                        <ol class="breadcrumb topic">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file-photo-o"></i>Gallery
                            </li>
                        </ol>
                       
                    </div>
                </div>
            
                        <div class="dash-tile dash-tile-2x">
                                                <div class="dash-tile-content">
                        <div class="dash-tile-content-inner-fluid">
                       
                            
                    
                  <div class="table-list ">
                    <form id="mainform ">
               
                          <div class="table-responsive">
                                   
                          <div class="table-responsive">
                            <table class="table">
                            <tr class="active">
                                  
					<th class="table-header-repeat line-left minwidth-1"><a href="">Slider Title</a></th>
					<th class="table-header-repeat line-left"style="width: 18em;"><a href="">Slider Image</a></th>
					
                                        <th class="table-header-repeat line-left"><a href="">Edit</a></th>
                                        
				</tr>
                                    <?php foreach ($sliderdata as $s):?>
                                <tr class="warning">
                                     <td><a><?php echo $s->title; ?></a></td>
                                    <td><a><img src="<?php echo base_url();?>uploads/slider/thumb/<?php echo $s->image; ?>" style="height:10em;width: 10em;"></a></td>
                                   
                                  
                                    <td> <a href="<?php echo site_url();?>/slider/editimage/<?php echo $s->id;?>" title="" class="btn btn-xs btn-primary" >
                                            <i class="fa fa-edit"></i></a>
                                         <a href="<?php echo site_url();?>/slider/removeimage/<?php echo $s->id;?>"  class="btn btn-xs btn-danger" >
                                            <i class="fa fa-times"></i></a>
                                        
                                           
                                    </td>
                              
                               
                                
                               
                              
                                 <div class="col-sm-7 col-xs-12 clearfix"></div>
                   
    
<!--        <tr>
        
            <td><img src="<?php echo base_url();?>uploads/slider/thumb/<?php echo $s->image; ?>"></td>
               <form method="post" action="<?php echo site_url(); ?>/slider/edit" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $s->id;?>">
            <td><input type="file" name="userfile">
            <input type="submit" name="replace" value="Replace image"></td>
               <td><input type="submit" name="remove" value="Remove image"></td>
        </form>
        </tr>-->
        <?php endforeach;?>
    
                          </div>
               </form> 
            </div>
          </div>
         
                 
            
         </div>
        

    </div>
      </div>
   
            <!-- /#page-wrapper -->
        </div>