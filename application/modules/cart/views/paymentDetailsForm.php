
<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap practice test day1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assests/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assests/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assests/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
      

    </head>
    <body>
  <section id="sixth">
    <div class="container register_wrapper">
                <div id="registration_form">
                    <div class="r1"></div>
                    <div class="r2"></div>
                    <h1>Billing Address</h1>
                   <div class="col-md-12">
                       <div class="wrapper">
                    <form class="form-horizontal" role="form" method="POST">
   <?php echo validation_errors(); ?>
    <div class="form-group">
    <label for="inputtext" class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputFname3" placeholder="First Name" name="first_name">
    </div>
    </div>
    <div class="form-group">
    <label for="inputtext" class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputLname3" placeholder="Last Name" name="last_name">
    </div>
    </div>
    <div class="form-group">
    <label for="inputtext" class="col-sm-3 control-label">Postal Code</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPostalCode3" placeholder="ppostal Code" name="postalCode">
    </div>
    </div>
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPhone3" class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPhone3" placeholder="Phone" name="phone">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress3" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputAddress3" placeholder="Address" name="address">
    </div>
  </div>
   <div class="form-group">
    <label for="inputtext" class="col-sm-3 control-label">User Type</label>
    <div class="col-sm-9">
           <select name="user_type">
                     <?php foreach($listgrp as $usertype): ?>
                        <option value=<?php echo $usertype['id'];?>><?php echo $usertype['name'];?></option>
                     <?php endforeach;  ?>
               </select>
    </div>
    </div>
  
    <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <div class="checkbox">
        <label>
          <input type="checkbox"> I agree the terms and conditions.
        </label>
      </div>
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
                    </div>
                    </div>
                </div>
      </div>
</section>
    
        <!--Javascript Section-->
        <script type="text/javascript" src="<?php echo base_url();?>/assests/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assests/js/jquery.js"></script>
    </body>
</html>
