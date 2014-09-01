<?php

?>
<html>
    <head> 
        <style type="text/css">
    .two{
       
        display: none;
        margin-top: 20px;
       
    }
    </style>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).attr("value")=="0"){
                $(".two").toggle();
                $("#options").hide();
                $(".two").on("keyup",function(){
				var num = $("input#number").val(); 
                                //document.write(num);
				var option = new Array();
				
				for(var i=1;i<=num;i++){
					option.push('option name'+i + ': <input type="text" name="optnname'+i+'" class="form-control">option Value'+i +': <input type="text" name="optnval'+i+'" class="form-control"> <br>');
					}
                                        var j=i-1;
                                        option.push('<input type="hidden" name="itemno" value='+j+'>');
				
				$("#writeOptions").show();
				$(".options").html(option);
			});
                
            }
            
        });
    });
</script>
    </head>
    <body>
        <form name="formproduct" method="post" action="<?php echo site_url();?>/product/additem"  enctype="multipart/form-data">
        <div id="one">
            Product name:<input type="text" name="name" required="required"><br/>
            Category:<select name="category"><option value="mobile">Mobile phones</option><option value="access">Acccessories</option><option value="cloth">Clothes</option><option value="cars">Cars and Bikes</option></select><br/>
            Description:<input type="text" name="description"><br/>
            Price:<input type="text" name="price"><br/>
            Image:<input type="file" name="userfile"><br/>
            Feature on slider:<select name="featured"><option value="0">No</option> <option value="1">Yes</option></select><br/>
          
            Additional options: <label><input type="checkbox" name="colorCheckbox" value="0"> Yes</label>
                <label><input type="checkbox" name="colorCheckbox" value="1"> No</label>
       
        </div>
        
        <div class="two">
            Number of options:<input id="number" type="text" name="number">
        </div>
          <div class="form-group" id="writeOptions" style="display:none">              
              <div class=" options">
                
              </div>
            </div>
        
        <div id="three">
            <input type="submit" name="add" value="Add Product">
        </div>
        
    </form>
    </body>
</html>
