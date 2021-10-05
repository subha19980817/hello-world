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
<section>
	<div class="form">
		<h1><b><center>Supplier Bank Details</center></b></h1>
		<form action="" method="POST" class="form-2">

			<div class="label-block"> <label>Bank Name</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtProductName" placeholder="Bank Nmae" value="" required /> </div> 
			<br>
			

			<div class="label-block"> <label>Account Number</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtProductName" placeholder="Account Number" value="" required /> </div> 
			<br>

			<div class="label-block"> <label>Account Name</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtProductName" placeholder="Account Name" value="" required /> </div> 
			<br>
			
			<div class="label-block"> <label>Branch</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtProductName" placeholder="Branch" value="" required /> </div> 
			<br>

			<div class="label-block"> <label>Branch Code</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtProductName" placeholder="Branch Code" value="" required /> </div> 
			<br>

			<div class="label-block"> <label>SWIFT Code</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtProductName" placeholder="SWIFT Code" value="" required /> </div> 
			<br>

			
			<a href="addsupplier.php"><button type="button" class="submit_button">previous</button></a>
			<a href="document.php"><button type="button" class="submit_button">Next</button></a>
			<br>
		</div>
		</form>
    </div>
	</section>	
</body>
</html>
<?php
include("footer.php");
?>