<!DOCTYPE html>

<html>
    <head>
        <title>login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/backend/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/backend/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/backend/css/font-awesome.min.css">
    </head>
    <body>
        <!--login-->
        <div class="container">
            <div clas="image">
            <img src="<?php echo base_url();?>assests/backend/images/cross_button.png" alt="cross" class="cross">
            </div>
                    <div clas="image">
                        <img src="<?php echo base_url();?>assests/backend/images/cart.jpg" alt="shopping-cart" class="img-rounded cart" >
                    
                   <h3 class="header">WELCOME TO <br> SHOPPING CART</h3>
                      </div>
                     
                          <!--form part--> 
                           <form class="form-horizontal login-form" role="form" method="POST">
                                <div class="form-group">
                                  <label for="username" class="col-sm-2 control-label">Email / Username:</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control input-form" id="inputEmail3" 
                                          placeholder="username" name="$identity">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputPassword3" class="col-sm-2 control-label">
                                      <?php echo lang('login_password_label', 'password');?></label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control input-form" id="Password3"
                                          name="$password" placeholder="Password">
                                  </div>
                                </div>
                               
                               <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Remember me
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default sign"><a><?php echo form_submit('submit', lang('login_submit_btn'));?></a></button>
                                  <a class="reset">Forgot your password?</a>
                                </div>
                              </div>
                              
                            </form>
                   
      
            </div>
        
      
       
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url();?>assests/backend/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assests/backend/js/jquery.js"></script>
    </body>
</html>