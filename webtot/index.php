<?php

    include('./connection/connection.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>University of Kalaniya</title>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div class="navbar" >
            <h2>Supplier Product Details</h2>
        </div>
        <form action="index.php" method="post">
            <div class ="table" align ="center"> 
                <div id="overflowTest">  
            
                    <table>
                        <tr>
                            <th></th>
                            <th>Item Code</th>
                            <th>Category</th>
                        </tr>

      
                    <?php 
                        while($row = mysqli_fetch_array($query))
                            {
                                echo '<tr><td><input type="checkbox" name="check_list[]" value=' . $row ['code']. '></td><td><label>' . $row['code'] . '</label></td><td><label>' . $row ['category']. '</label></td></tr>';
                            }
                
                    ?>

                    </table>
                </div> <br> 
            </div><br>


            <div align="center" >
                <button class="button button1" type="submit" name="submit">Total <i class="fa fa-refresh"></i></button><br>

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
            </div> 
        </form>
                <?php
                    mysqli_close($conn);
                ?>

        <footer class="footer">
            <p class=""><h4>University of Kalaniya &copy; ICT Center <?php echo date('Y'); ?></h4></p>
        </footer>
    </body>
</html>
