<!DOCTYPE html>
<html>
<head>
	<title>Supplier Details </title>
	<link rel="stylesheet" href="mainstyle.css" >
</head>
<?php
    include("header.php");	
    include("config.php");
	include("validate.php");
	session_start();

	$query_selectBusiness = "SELECT business_id,business_type FROM business_type";
	$query_selectForeginLocal = "SELECT fl_id,types FROM foregin_local";


	$result_selectBusiness = mysqli_query($conn,$query_selectBusiness);
	$result_selectForeginLocal = mysqli_query($conn,$query_selectForeginLocal);

	$business_type = $reg_no = $nic_no = $foregin_local = $vat = $ictad = $web_url = $registred = "";
	$reg_noErr =$nic_noErr = $vatErr = $ictadErr = $web_urlErr = $requireErr = $confirmMessage = "";
	$reg_noHolder =$nic_noHolder=  $vatHolder = $ictadHolder =  $web_urlHolder = "";


	if($_SERVER['REQUEST_METHOD'] == "POST") {
		if(isset($_POST['cmbbusiness_type'])) {
			$business_type = $_POST['cmbbusiness_type'];
		}
		if(!empty($_POST['txtreg_no'])) {
			$reg_noHolder = $_POST['txtreg_no'];
			$reg_no = $_POST['txtreg_no'];
		}
		if(!empty($_POST['txtnic_no'])) {
			$nic_no = $_POST['txtnic_no'];
			$nic_noHolder = $_POST['txtnic_no'];
		}
		if(isset($_POST['cmbForeginLocal'])) {
			$ForeginLocal = $_POST['cmbForeginLocal'];
		}
		if(isset($_POST['txtvat'])) {
			$vatHolder = $_POST['txtvat'];
			$vat = $_POST['txtvat'];
		}
		if(isset($_POST['txtictad'])) {
			$ictad = $_POST['txtictad'];
			$ictadHolder = $_POST['txtictad'];
		}
		if(isset($_POST['txtweb_url'])) {
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
	

			if($business_type != null && $reg_no != null && $nic_no != null && $ForeginLocal != null &&  $vat != null && $ictad != null && $web_url != null && $registred == 1) {
					$registred  = 0;
					$query_addsupplier = "INSERT INTO information(business_type,,reg_no,nic_no,ForeginLocal,vat,ictad,web_url,registred ) VALUES('$business_type','$reg_no','$nic_no','$ForeginLocal','$vat','$ictad','$web_url','$registred')";
				if(mysqli_query($conn,$query_addsupplier)) {
						echo "<script> alert(\"supplier Added Successfully\"); </script>";
						header('Refresh:0');
				}
				else {
						$requireErr = "Adding supplier Failed";
				}
			}
			else if($business_type != null && $reg_no != null  && $nic_no != null && $ForeginLocal != null &&  $vat != null && $ictad != null && $web_url != null && $registred == 2) {
				$query_addsupplier = "INSERT INTO information(business_type,,reg_no,nic_no,ForeginLocal,nature,vat,ictad,web_url,registred ) VALUES('$business_type','$reg_no','$nic_no','$ForeginLocal','$vat','$ictad','$web_url','$registred',NULL)";
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
		}
	
?>


<section>
	<div class="form">
		<h1><b><center>Supplier Information</center></b></h1>
		<form action="" method="POST" class="form-2">
		

			<div class="label-block" > <label>Bussiness Type</label> </div>
			<div class="input-box">
			<select name="cmbbusiness_type" id="business">
				<option value="" disabled selected>--- Select ---</option>
				<option value="SP">Sale Proprietor</option>
				<option value="P">Partnership</option>
				<option value="PC">Public Company</option>
				<option value="LG">Cpmpany Limited by Guarantee</option>
				<option value="PVT">PVT(Ltd) Company</option>
			</select>
			</div>
			<br>


			<div class="label-block"> <label>Business Registration No</label> </div>
			<div class="input-box"> <input type="text" id="reg" name="txtreg_no" placeholder="Business Reg No" value="<?php echo $reg_noHolder; ?>" required /></div> <span class="error_message">* <?php echo $reg_noErr; ?> </span>
			<br>
			<div class="label-block"> <label>NIC No</label> </div>
			<div class="input-box"> <input type="text" id="nic" name="txtnic_no" placeholder="NIC No" value="<?php echo $nic_noHolder ; ?>" required /> </div> <span class="error_message"><?php echo $nic_noErr; ?></span>
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

			
			<input type="submit" value="add supplier" class="submit_button" /> <span class="error_message"> <?php echo $requireErr; ?> </span><span class="confirm_message"> <?php echo $confirmMessage; ?> </span>
			<a href="index.php"><button type="button" class="submit_button">previous</button></a>
			<a href="contact.php"><button type="button" class="submit_button">Next</button></a>
			<br>
		</form>
	</div>
	</section>
				
<?php
include("footer.php");
?>