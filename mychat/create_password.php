<!DOCTYPE html>
<html>
<head>
	<title>Login to your account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/signin.css"> <!-- link for css sign in -->
</head>
<body>

	<!-- <img src="../images/logo.png"> -->
	<!-- This create block for sign in -->
	<div class="signin-form">
		<form action="" method="post">
			<!-- This for topic -->
			<div class="form-header">
				<h2>Create New Password</h2>
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" class="form-control" name="pass1" placeholder="Password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="pass2" placeholder="Confirm Password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
			</div>

		</form>
	</div>
	<?php

    session_start();

    include("include/connection.php");

    if(isset($_POST['change'])){
        $user = $_SESSION['user_email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        if($pass1 != $pass2){
            echo"
                <div class='alert alert-danger'>
                    <strong>Your New password didn't match with confirm password</strong>
                </div>
            ";
        }

        if($pass1 < 9 AND $pass2 < 9){
            echo"
                <div class='alert alert-danger'>
                    <strong>Use 9 or more than 9 characters</strong>
                </div>
            ";
        }
        if($pass1 == $pass2){
            $update_pass = mysqli_query($con,"UPDATE users SET user_pass='$pass1' WHERE user_email='$user'");
            session_destroy();

            echo"<script>alert('Go ahead and signin')</script>";
            echo"<script>window.open('signin.php', '_self')</script>";

        }
    }



	?>
</body>
</html>