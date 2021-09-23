<!DOCTYPE html>
<html>
<head>
	<title>Categories </title>
	<link rel="stylesheet" href="mainstyle.css" >
</head>
<?php
    include("header.php");	
    include("admin.php");	
    include("config.php");
?>
   
        <form action="categories.php" method="post">
            <div class ="table" align ="center"> 
                <div id="overflowTest">  
            
                    <table>
                        <tr>
                            <th></th>
                            <th>Item Code</th>
                            <th>Category</th>
                        </tr>

      
                    <?php 
                    $query = mysqli_query($conn,"SELECT * FROM category");
                    $row		= mysqli_fetch_array($query);
                        while($row = mysqli_fetch_array($query))
                            {
                                echo '<tr><td><input type="checkbox" name="check_list[]" value=' . $row ['code']. '></td><td><label>' . $row['code'] . '</label></td><td><label>' . $row ['category']. '</label></td></tr>';
                            }
                
                    ?>

                    </table>
                </div> <br> 
            </div><br>


            <div align="center" >
                <button class="submit_button" type="submit" name="submit">Total <i class="fa fa-refresh"></i></button>

                    <?php 
                        if (isset($_POST['submit'])) {
                            $checked_count =0;
                        if (isset($_POST['check_list'])) {
                            $checked_count = count($_POST['check_list']);
                        }
                        else{
                            echo "<b> Please select atleast one option";
                        }

                            $totPrice =0;
                        if($checked_count >= 1 && $checked_count <=3 ){
                            $totPrice =600;
                        }else if($checked_count > 3){
                            $totPrice = 600 + ($checked_count -3)*200;
                        }

                            echo "<h2> Total Price is : Rs.".$totPrice."/= </h2>" ;
                        }

                    ?>
             
            <input type="submit" value="Next" class="submit_button" /> 
            </div>
        </form>
        <?php
		include("footer.php");
	    ?>

       
    </body>
</html>
