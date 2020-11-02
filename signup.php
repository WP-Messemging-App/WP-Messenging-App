<!DOCTYPE html>
<html>
<head>
	<title>Create a new Account</title>
    <meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googlepis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script stc="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/signup.css"> <!-- link for css sign in -->
</head>
<body>
    
	<img src="../images/logo.png">
	<!-- This create block for sign in -->
	<div class="signup-form">
		<form action="" method="post">
			<!-- This for topic -->
			<div class="form-header">
				<h2>Sign Up</h2>
			
            </div>
            <!-- This for field Username -->
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_email" placeholder="Example: Nursuraida" autocomplete="off" required>
            </div>
            <!-- This for field Password -->
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
			</div>
			<!-- This for field Email -->
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
            </div>
            <!-- This for field Country -->
			<div class="form-group">
				<label>Country</label>
				<select class="form-group" name="user_country" required>
                    <option disabled="">Select a Country</option>
                    <option >Malaysia</option>
                    <option >Thailand</option>
                    <option >UK</option>
                    <option >Korea</option>
                    <option >Japan</option>
                    <option >China</option>
                </select>
            </div>
            <!-- This for field Gender -->
			<div class="form-group">
				<label>Gender</label>
				<select class="form-group" name="user_country" required>
                    <option disabled="">Select your Gender</option>
                    <option >Male</option>
                    <option >Female</option>           
                </select>
            </div>
            <!-- This check -->
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of User</a> &amp; <a href="#">Privacy Policy</a> </label>
            </div>
		
			<!-- This for field Button submit -->
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			<!-- <?php //include("signup_user.php"); ?> -->
		</form>
		<!-- This for Button and if don't have account -->
		<div class="text-center small" style="color: #67428B;">Already have an account? <a href="signin.php">Signin here</a></div>
	</div>
</body>
</html>
