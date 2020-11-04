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
				<h2>Sign In</h2>
			
			</div>
			<!-- This for field Email -->
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
			</div>
			<!-- This for field Password -->
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="pass" placeholder="Password" autocomplete="off" required>
			</div>
			<!-- This for forgot password -->
			<div class="small">Forgot password? <a href="forgot_pass.php">Click Here</a></div><br>
			<!-- This for field Button submit -->
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button>
			</div>
			<?php include("signin_user.php"); ?>
		</form>
		<!-- This for Button and if don't have account -->
		<div class="text-center small" style="color: #67428B;">Don't have an account? <a href="signup.php">Create one</a></div>
	</div>
</body>
</html>
