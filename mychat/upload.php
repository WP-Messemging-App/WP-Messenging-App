<!DOCTYPE html>
<?php
session_start();
include("include/connection.php");
include("include/header.php");

if(!isset($_SESSION['user_email'])){

	header("location:signin.php");
}
else{?>
<!DOCTYPE html>
<html>
<head>
	<title>Change profile picture</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootsrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jqury.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
	 <!-- style from profile -->
</style>
<body>
<?php
  $user=$_SESSION['user_email'];
  $get_user="select* from users whre user_email='$user'";
  $run_user=mysqli_query($con,$get_user);
  $row=mysqli_fetch_array($run_user);

  $user_name=$row['user_name'];
  $user_profile=$row['user_profile'];

  echo"
	 <div class='card'>
		 <img src'$user_profile'>
		 <h1>$user_name</h1>
		 <form method='post' enctype='multipar/form-data'>
		    <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i>Select profile<input type='file' name='u_image' size='60'></label>
		    <button id='button_profile' name='update'>&nbsp&nbsp&nbsp<i class='fa fa-heart' aria-hidden='true'></i>Update Prpfile</button>
		  </form>
	 </div><br></br>

  ";

if(isset($_POST['update'])){

	$u_image=$_FILES['u_image']['name'];
	$image_tmp=$_FILES['u_image']['tmp_name'];
	$random_number=rand(1,100);

	if($u_image==''){
		echo "<script>alaert('Please Select Profile')</script>";
		echo "<script>window.open('upload.php','_self')</script>";
		exit();
	}else{

		move_uploaded_file($images_tmp,"images/$u_image.$random_number");

		$update="update users set user_profile='images/$u_image.$random_number'where user_email='$user'";

        $run=mysql_query($con,$update);

        if($run){
        	echo"<script>alert('Your Profile Updated!')</script>";
        	echo"<script>window.open('upload.php','_self')</script>";
        }


	 }
	}



?>
</body>
</html>
<?php 

}?>