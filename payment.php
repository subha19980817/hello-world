<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" href="mainstyle.css" >
</head>
<?php
    include("header.php");	
    include("config.php");
?>

<script>
function text(x){
if(x==0)
{
	document.getElementById("mycode").style.visibility="visible";
}
else(x==1)
{
	document.getElementById("code").style.visibility="visible";
}
}
</script>

<body>
<section>
	<div class="form">
		<h1><b><center>Payment Details</center></b></h1>
		<form action="" method="POST" class="form-2">

            <div class="label-block"> <label>Payment Type</label> </div>
			<input type="radio" name="registred" onclick="text(0)" value="1">Upload
			<input type="radio" name="registred" onclick="text(1)" value="2">Getway
			<br>

            <div class="label-block" id="mycode"> <label>File Upload</label> </div><br>
	        <div class="input-box"> <input type="File" id="" name="file" value="" required /> </div> 
            <br>	

			
			<div class="label-block" id="code"> <label>SWIFT Code</label> </div>
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
