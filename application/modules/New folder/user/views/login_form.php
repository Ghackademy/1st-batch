
<html>
    <head>
    <title>Login Page</title>
    </head>

    <body>
    <form name= "login_form" method="post" action="<?php echo site_url();?>/user/index">
       Name:<input type="text" name="name"><BR/>
       Password:<input type="text" name="password"><BR/>
        
      
         <?php
         //echo $datas; 
         ?>
       <br/>
       <input type="submit" name="btnSubmit"/>
       
      </form>
    </body>
</html>
