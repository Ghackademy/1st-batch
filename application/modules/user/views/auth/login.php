
<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
      

    </head>
    <body>
  <section id="sixth">
    <div class="container register_wrapper">
                <div id="registration_form">
                    <div class="r1"></div>
                    <div class="r2"></div>
                    <h1>Registration Form</h1>
                   <div class="col-md-12">
                       <div class="wrapper">
                    <form class="form-horizontal" role="form" method="post" action="login">
  
   
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="identity">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  
     <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-default" name="submit">Login</button>
    </div>
  </div>
</form>
                    </div>
                    </div>
                    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
<p><?php echo anchor('user/sign_up', lang('index_create_user_link'))?>
                </div>
      </div>
</section>
    
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
    </body>
</html>








<!-- <h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("user/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
<p><?php echo anchor('user/sign_up', lang('index_create_user_link'))?> -->