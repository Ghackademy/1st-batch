<html>
    <body>
        <table border="10">
            <tr>
                <td rowspan="2">Username</td>
                <td rowspan="2">Password</td>
                <td colspan="2" align="center">Action</td>  
            </tr>
            <tr>  
                <td>Edit</td>
                <td>Delete</td>  
            </tr>
           
            <tr> 
                 <?php foreach($name_list as $n):?><td><?php echo $n ?></td> <?php endforeach;?>
                <td>Edit</td>
                <td></td>
            </tr>
           
        </table>           
    </body>
</html>
