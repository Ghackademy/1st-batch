<html>
    <head>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#loginForm").submit(function() {
                    $data = $(this).serialize();
                    $.ajax({
                        'data':$data,
                        'url':'<?php echo site_url();?>/product/test/insert',
                        'method':'post',
                        success : function(res){
                            $('#success').html(res);
                        }
                    });
                    return false;
                });

            });
        </script>
    </head>
    <body>
        <div id="success"></div>
        <form name="form1" method="post" action="<?php echo site_url(); ?>/product/test/insert" id="loginForm">
            Name : <input type="text" name="username" id="userName"> <br>
            password : <input type="password" name="password" id="pass"><br>
            <input type="submit" name="submit">

        </form>


    </body>
</html>