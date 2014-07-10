<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>

        <h2>Registration Here</h2>
        <form method="post" action="signup" enctype="multipart/form-data">
            First Name:<input type="text" name="fname" value="<?php echo set_value('fname');?>"><br><?php echo form_error('fname');?>
            Last Name:<input type="text" name="lname" value="<?php echo set_value('lname');?>"><?php echo form_error('lname');?><br>
             Country:<input type="text" name="country" value="<?php echo set_value('country');?>"><br>
             City:<input type="text" name="city" value="<?php echo set_value('city');?>"><br>
             Zip Code:<input type="text" name="zcode" value="<?php echo set_value('zcode');?>"><br>
             P.O box no.:<input type="text" name="postbox" value="<?php echo set_value('postbox');?>"><br>
              Email:<input type="text" name="email" value="<?php echo set_value('email');?>"><?php echo form_error('email');?><br>
               Phone:<input type="text" name="phone" value="<?php echo set_value('phone');?>"><?php echo form_error('phone');?><br>
               Gender:
   		Male
		<input name="gender" type="radio" value="male" >
		Female
		<input name="gender" type="radio" value="female" ><br>
                Image:<input type="file" name="userfile"/><br>
                Password:<input type="password" name="password" ><?php echo form_error('password');?><br>
                Confirm Password:<input type="password" name="passconf" ><?php echo form_error('passconf');?><br>
                User Type:<select name="usertype">
                    <option selected="selected">user</option>
                    <option>vendor</option>
                </select><br>
                <input type="submit" name="submit">
        </form>
        <h2>Already have an account <a href="login">login here</a></h2>
    </body>
</html>