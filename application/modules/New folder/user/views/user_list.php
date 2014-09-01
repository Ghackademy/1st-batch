<html>
    <body>
        <table border="10">
            <tr>
                <td>Username</td>
                <td>Password</td>
                <td colspan="2" align="center">Action</td>  
            </tr>
           
           
           <?php foreach($users as $n):?>
            <tr> 
               <td><?php echo $n->username; ?></td> 
                 <td><?php echo $n->password; ?></td> 
                <td>Edit</td>
                <td>Delete</td>
            </tr>
           <?php endforeach;?>
        </table>           
    </body>
</html>
