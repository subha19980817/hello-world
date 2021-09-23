<!DOCTYPE html>
<html>
<head>
	<title>Instruction</title>
	<link rel="stylesheet" href="mainstyle.css" >
</head>
<?php
    include("header.php");	
    include("config.php");
?>
<body>
	<form action="instruction.php" method="post">
        <div class ="table" align ="center"> 
            <div id="overflowTest">  
            
                <table>
                    <tr>
                        <th></th>
                        <th>Item Code</th>
                        <th>Instruction</th>
                    </tr>
				</table>
				</div>
             
					<a href="addsupplier.php"><button type="button" class="submit_button">Next</button></a>
        </div>
    </form>
</body>
</html>
<?php
include("footer.php");
?>