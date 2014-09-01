<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css"/>
        <script src="<?php echo base_url();?>assets/js/ajax.js"></script>
      

    </head>
    <body>
  <section id="sixth">
    <div class="container register_wrapper">
                <div id="registration_form">
                    <div class="r1"><label class="lead">Registration Form</label></div>
                    <div class="r2"></div>
                   
                   <div class="col-md-12">
                       <div class="wrapper">
                    <form class="form-horizontal" role="form">
  
    <div class="form-group">
    <label for="inputtext" class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputFname3" placeholder="First Name" name="fname">
    </div>
    </div>
    <div class="form-group">
    <label for="inputtext" class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputLname3" placeholder="Last Name" name="lname">
    </div>
    </div>
    <div class="form-group">
    <label for="inputtext" class="col-sm-3 control-label">Company</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputLname3" placeholder="Company" name="company">
    </div>
    </div>
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Re-Password</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Retype-Password" name="repassword">
    </div>
  </div>
   <div class="form-group">
    <label for="inputtext" class="col-sm-3 control-label">User Type</label>
    <div class="col-sm-9">
     <select class="form-control" name="utype">
  <option>User</option>
  <option>Vendor</option>
 </select>
    </div>
    </div>
  
    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="agree"> I agree the terms and conditions.
        </label>
      </div>
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
                    </div>
                    </div>
                </div>
      </div>
</section>
    
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
    </body>
</html>
