<!DOCTYPE html>
<html>
<head>
	<title>Supplier Details </title>
	<link rel="stylesheet" href="mainstyle.css" >
</head>
<?php
    include("header.php");	
    include("config.php");
	session_start();

	$query_selectBusiness = "SELECT business_id,business_type FROM business_type";
	$query_selectForeginLocal = "SELECT fl_id,types FROM foregin_local";
	$query_selectNature  = "SELECT id, nature_business FROM nature";


	$result_selectBusiness = mysqli_query($conn,$query_selectBusiness);
	$result_selectForeginLocal = mysqli_query($conn,$query_selectForeginLocal);
	$result_selectNature = mysqli_query($conn,$query_selectNature);

	$business_type = $foregin_local = $nature = $reg_no = $vat = $ictad = $web_url = $registred = "";
	$reg_noErr = $vatErr = $ictadErr = $web_urlErr = $requireErr = $confirmMessage = "";
	$reg_noHolder =  $vatHolder = $ictadHolder =  $web_urlHolder = "";

		if($_SERVER['REQUEST_METHOD'] == "POST") {
			
			
			if(isset($_POST['cmbBusiness'])) {
				$business_type = $_POST['cmbBusiness'];
			}
			if(isset($_POST['cmbForeginLocal'])) {
				$foregin_local = $_POST['cmbForeginLocal'];
			}
			if(isset($_POST['cmbNature'])) {
				$nature = $_POST['cmbNature'];
			}

			if(!empty($_POST['txtreg_no'])) {
				$reg_noHolder = $_POST['txtreg_no'];
				$reg_no = $_POST['txtreg_no'];
			}
			if(!empty($_POST['txtvat '])) {
				$vatHolder = $_POST['txtvat '];
				$vat = $_POST['txtvat '];
			}
			if(!empty($_POST['txtictad'])) {
				$ictadHolder = $_POST['txtictad'];
				$ictad = $_POST['txtictad'];
			}
			if(!empty($_POST['txtweb_url'])) {
				$web_urlHolder = $_POST['txtweb_url'];
				$web_url = $_POST['txtweb_url'];
			}



			if(empty($_POST['registred'])) {
					$registred = "";
			}
			else {
				if($_POST['registred'] == 1) {
						$registred = 1;
				}
				else if($_POST['registred'] == 2) {
						$registred = 2;
				}
			}

		
			}

			if($business_type != null && $foregin_local != null && $nature != null && $reg_no != null && $vat != null && $ictad != null && $web_url != null && $registred == 1) {
					$registred  = 0;
					$query_addsupplier = "INSERT INTO information(business_type,foregin_local,nature,reg_no,vat,ictad,web_url,registred ) VALUES('$business_type','$foregin_local','$nature','$reg_no','$vat','$ictad','$web_url','$registred')";
				if(mysqli_query($conn,$query_addsupplier)) {
						echo "<script> alert(\"supplier Added Successfully\"); </script>";
						header('Refresh:0');
				}
				else {
						$requireErr = "Adding supplier Failed";
				}
			}
			else if($business_type != null && $foregin_local != null && $nature != null && $reg_no != null && $vat != null && $ictad != null && $web_url != null && $registred == 2) {
				$query_addsupplier = "INSERT INTO information(business_type,foregin_local,nature,reg_no,vat,ictad,web_url,registred ) VALUES('$business_type','$foregin_local','$nature','$reg_no','$vat','$ictad','$web_url','$registred',NULL)";
				if(mysqli_query($conn,$query_addsupplier)) {
						echo "<script> alert(\"supplier Added Successfully\"); </script>";
						header('Refresh:0');
				}
				else {
						$requireErr = "Adding supplier Failed";
				}
			}
			else {
					$requireErr = "* All Fields are Compulsory with valid values ";
			}
		
?>

<section>
	<div class="form">
		<h1><b><center>Supplier Information</center></b></h1>
		<form action="" method="POST" class="form-2">
		

			<div class="label-block"> <label>Bussiness Type</label> </div>
			<div class="input-box">
			<select name="cmbBusiness" id="">
				<option value="" disabled selected>--- Select ---</option>
				<?php while($row_selectBusiness = mysqli_fetch_array($result_selectBusiness)) { ?>
				<option value="<?php echo $row_selectBusiness["business_id"]; ?>"> <?php echo $row_selectBusiness["business_type"]; ?> </option>
				<?php } ?>
			</select>
			</div>
			<br>


			<div class="label-block"> <label>Foregin / Local</label> </div>
			<div class="input-box">
			<select name="cmbForeginLocal" id="">
				<option value="" disabled selected>--- Select ---</option>
				<?php while($row_selectForeginLocal = mysqli_fetch_array($result_selectForeginLocal)) { ?>
				<option value="<?php echo $row_selectForeginLocal["fl_id"]; ?>"> <?php echo $row_selectForeginLocal["types"]; ?> </option>
				<?php } ?>
			</select>
			</div>
			<br>

			<div class="label-block"> <label>Nature of Business</label> </div>
			<div class="input-box">
			<select name="cmbNature" id="">
				<option value="" disabled selected>--- Select ---</option>
				<?php while($row_selectNature = mysqli_fetch_array($result_selectNature)) { ?>
				<option value="<?php echo $row_selectNature["id"]; ?>"> <?php echo $row_selectNature["nature_business"]; ?> </option>
				<?php } ?>
			</select>
			</div>
			<br>

			<div class="label-block"> <label>Business Registration No</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtreg_no" placeholder="Business Reg No" value="<?php echo $reg_noHolder; ?>" required /> </div> <span class="error_message"><?php echo $reg_noErr; ?></span>
			<br>
			

			<div class="label-block"> <label>VAT Registration No</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtvat" placeholder="VAT Reg No" value="<?php echo $vatHolder ; ?>" required /> </div> <span class="error_message"><?php echo $vatErr; ?></span>
			<br>

			<div class="label-block"> <label>ICTAD Registration $ Grading</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtictad" placeholder="ICTAD Reg & Grading" value="<?php echo $ictadHolder; ?>" required /> </div> <span class="error_message"><?php echo $ictadErr; ?></span>
			<br>
			
			<div class="label-block"> <label>Website URL</label> </div>
			<div class="input-box"> <input type="text" id="" name="txtweb_url" placeholder="Website URL" value="<?php echo $web_urlHolder; ?>" required /> </div> <span class="error_message"><?php echo $web_urlErr; ?></span>
			<br>

			<div class="label-block"> <label>Registered on "promise,lk"</label> </div>
			<input type="radio" name="registred" value="1">Yes
			<input type="radio" name="registred" value="2">No
			<br>

			

			<a href="index.php"><button type="button" class="submit_button">previous</button></a>
			<a href="contact.php"><button type="button" class="submit_button">Next</button></a>
			<br>
		</form>
	</div>
	</section>
				
<?php
include("footer.php");
?>