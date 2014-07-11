<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <form method="post" action="">

=======
       <?php  $msg = $this->session->flashdata('msg');
                //$res = $this->session->userdata('res');
                if(!empty($msg)) { echo  $msg;} ?> <br>

            Username:<input type="text" name="email" placeholder="enter your email"><br>
            Password:<input type="password" name="password" placeholder="enter your passsword"><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>