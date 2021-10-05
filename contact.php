<!DOCTYPE html>
<html>
<head>
	<title> Contact </title>
	<link rel="stylesheet" href="mainstyle.css" >
</head>
<?php
    include("header.php");	
    include("config.php");
	session_start();

	$address1 =$address2 =$city= $post = $country= $contact = $phone =$fax =$email   = "";
	$address1Err = $address2Err = $cityErr = $postErr = $countryErr = $contactErr = $phoneErr = $faxErr =$emailErr = $requireErr = $confirmMessage = "";
	$address1Holder = $address2Holder = $cityHolder = $postHolder = $countryHolder = $contactHolder  = $phoneHolder  = $faxHolder = $emailHolder= $usernameHolder = "";
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		if(!empty($_POST['txtaddress1'])) {
			$address1Holder = $_POST['txtaddress1'];
			$resultValidate_address1 = validate_address1($_POST['txtaddress1']);
			if($resultValidate_address1 == 1) {
				$address1 = $_POST['txtaddress1'];
			}
			else{
				$address1Err = $resultValidate_address1;
			}
		}
		if(!empty($_POST['txtaddress2'])) {
			$address2Holder = $_POST['txtaddress2'];
			$resultValidate_address2 = validate_address2($_POST['txtaddress2']);
			if($resultValidate_address2 == 1) {
				$address2 = $_POST['txtaddress2'];
			}
			else{
				$address2Err = $resultValidate_address2;
			}
		}
		if(!empty($_POST['txtcity'])) {
			$cityHolder = $_POST['txtcity'];
			$resultValidate_city = validate_city($_POST['txtcity']);
			if($resultValidate_city == 1) {
				$city = $_POST['txtcity'];
			}
			else {
				$cityErr = $resultValidate_city;
			}
		}
		if(!empty($_POST['txtpost'])) {
			$postHolder = $_POST['txtpost'];
			$resultValidate_post = validate_post($_POST['txtpost']);
			if($resultValidate_post == 1) {
				$post = $_POST['txtpost'];
			}
			else {
				$postErr = $resultValidate_post;
			}
		}
		if(!empty($_POST['txtcountry'])) {
			$countryHolder = $_POST['txtcountry'];
			$resultValidate_country = validate_country($_POST['txtcountry']);
			if($resultValidate_country == 1) {
				$country = $_POST['txtcountry'];
			}
			else {
				$countryErr = $resultValidate_country;
			}
		}
		if(!empty($_POST['txtcontact'])) {
			$contactHolder = $_POST['txtcontact'];
			$resultValidate_contact = validate_contact($_POST['txtcontact']);
			if($resultValidate_contact == 1) {
				$contact = $_POST['txtcontact'];
			}
			else {
				$contactErr = $resultValidate_contact;
			}
		}
		if(!empty($_POST['txtPhone'])) {
			$phoneHolder = $_POST['txtPhone'];
			$resultValidate_phone = validate_phone($_POST['txtPhone']);
			if($resultValidate_phone == 1) {
				$phone = $_POST['txtPhone'];
			}
			else {
				$phoneErr = $resultValidate_phone;
			}
		}
		if(!empty($_POST['txtfax'])) {
			$faxHolder = $_POST['txtfax'];
			$resultValidate_fax = validate_fax($_POST['txtfax']);
			if($resultValidate_fax == 1) {
				$fax = $_POST['txtfax'];
			}
			else {
				$faxErr = $resultValidate_fax;
			}
		}
		if(!empty($_POST['txtEmail'])) {
			$emailHolder = $_POST['txtEmail'];
			$resultValidate_email = validate_email($_POST['txtEmail']);
			if($resultValidate_email == 1) {
				$email = $_POST['txtEmail'];
			}
			else {
				$emailErr = $resultValidate_email;
			}
		}
		
		
		if($address1 != null && $address2 != null && $city != null && $post != null&& $country != null && $contact != null&& $phone != null&& $fax != null&& $email != null) {
			$query_contact = "INSERT INTO contact(address1,address2,city,post_code,country,contact,phone,fax,email) VALUES('$address1','$address2','$city','$post','$country','$contact','$phone','$fax','$email')";
			if(mysqli_query($con,$query_contact)) {
				echo "<script> alert(\"Contact Added Successfully\"); </script>";
				header('Refresh:0');
			}
			else {
				$requireErr = "Adding Contact Failed";
			}
		}
		else {
			$requireErr = "* All Fields are Compulsory with valid values";
		}
	}


?>
<section>
	<div class="form">
		<h1><b><center>Supplier Contact Details</center></b></h1>
		<form action="" method="POST" class="form-2">

			<div class="label-block"> <label>Address Line 01</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtaddress1" placeholder="ddress1" value="<?php echo $address1Holder; ?>" required /> </div><span class="error_message"><?php echo $address1Err; ?></span> 
			<br>
			

			<div class="label-block"> <label>Address Line 02</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtaddress2" placeholder="Address2" value="<?php echo $address2Holder; ?>" required /> </div> <span class="error_message"><?php echo $address2Err; ?></span>
			<br>

			<div class="label-block"> <label>City</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtcity" placeholder="City" value="<?php echo $cityHolder; ?>" required /> </div> <span class="error_message"><?php echo $cityErr; ?></span>
			<br>
			
			<div class="label-block"> <label>Postal Code</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtpost" placeholder="Postal Code" value="<?php echo $postHolder; ?>" required /> </div> <span class="error_message"><?php echo $postErr; ?></span>
			<br>

			<div class="label-block"> <label>Country</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtcountry" placeholder="Country" value="<?php echo $countryHolder; ?>" required /> </div> <span class="error_message"><?php echo $countryErr; ?></span>
			<br>

			<div class="label-block"> <label>Mobile No</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtcontact" placeholder="Mobile No" value="<?php echo $contactHolder; ?>" required /> </div> <span class="error_message"><?php echo $contactErr; ?></span>
			<br>

			<div class="label-block"> <label>Alternative Contact No</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtphone" placeholder="Contact No" value="<?php echo $phoneHolder; ?>" required /> </div> <span class="error_message"><?php echo $phoneErr; ?></span>
			<br>

			<div class="label-block"> <label>Fax No</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtfax" placeholder="Fax No" value="<?php echo $faxHolder; ?>" required /> </div> <span class="error_message"><?php echo $faxErr; ?></span>
			<br>

			<div class="label-block"> <label>Email</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtemail" placeholder="Email" value="<?php echo $emailHolder; ?>" required /> </div><span class="error_message"><?php echo $emailErr; ?></span> 
			<br>
			
			<input type="submit" value="Add Contact" class="submit_button" /> <span class="error_message"> <?php echo $requireErr; ?> </span><span class="confirm_message"> <?php echo $confirmMessage; ?> </span>
			<a href="addsupplier.php"><button type="button" class="submit_button">previous</button></a>
			<a href="bank.php"><button type="button" class="submit_button">Next</button></a>
			<br>
		</div>
		</form>
    </div>
	</section>

<?php
include("footer.php");
?>