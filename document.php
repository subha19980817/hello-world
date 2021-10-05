<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <link rel="stylesheet" href="mainstyle.css" >
</head>
 
<?php 
include("header.php");	
include("config.php");

if (isset($_POST["submit"]))
 {
    
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
     $ictad = rand(1000,10000)."-".$_FILES["file1"]["name"];
     $vat = rand(1000,10000)."-".$_FILES["file2"]["name"];
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    $tname = $_FILES["file1"]["tmp_name"];
    $tname = $_FILES["file2"]["tmp_name"];
     #upload directory path

    //$uploads_dir = 'images';

    #TO move the uploaded file to specific location

    //move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into fileup(upload,ictad,vat) VALUES('$pname','$ictad','$vat')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
 
?>
<body>

<section>
	<div class="form">
		<h1><b><center>Proof Documents</center></b></h1>
        <form method="post" enctype="multipart/form-data"class="form-2">

            <div class="label-block"> <label>File Upload</label> </div><br>
	        <div class="input-box"> <input type="File" id="" name="file" value="" required /> </div> 
            <br>
            
            <div class="label-block"> <label>File Upload</label> </div><br>
	        <div class="input-box"> <input type="File" id="" name="file1" value="" required /> </div> 
            <br>

            <div class="label-block"> <label>File Upload</label> </div><br>
	        <div class="input-box"> <input type="File" id="" name="file2" value="" required /> </div> 
            <br>
            <button type="submit" name="submit"  class="submit_button">submit</button>

           
            
			<a href="categories.php"><button type="button" name="submit"  class="submit_button">Next</button></a>
            <a href="bank.php"><button type="button" class="submit_button">previous</button></a>
			<br>

        </form>
    </div>
</section>	

 </body>
 
</html>
<?php
include("footer.php");
?>
