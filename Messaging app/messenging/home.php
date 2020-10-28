<!DOCTYPE html>
<html>

<head>
	<title>Marsin</title>
	<meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googlepis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script stc="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/home.css"> <!-- link for css home -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<img src="image/logo.png">
		<!-- This create block for sign up -->
		<div class="container right-panel-active">
			<div class="container__form container--signup">
				<!-- This for topic -->
				<form action="" class="form" id="form1" method="post">
					<h2 class="form__title">Sign Up</h2>
					<!-- This for Name -->
					<input type="text" placeholder="Name" class="input" name="user_name"  autocomplete="on" required
					pattern="[a-zA-Z]{5}" title="At lest 5 or more characters ,Try it without NUMBER">
					
					<!-- This for Last Name -->
					<input type="text" placeholder="Last-Name" class="input" name="user_lastname"  autocomplete="on" required
					pattern="[a-zA-Z]{5}" title="At lest 5 or more characters ,Try it without NUMBER">
					<!-- This for Email -->
					<input type="email" placeholder="Email" class="input" name="user_email"  autocomplete="on" required
					pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Check it again">
					<!-- This for Password -->
					<input type="password" placeholder="Password" class="input" name="user_password"  autocomplete="on" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
				    title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
					<!-- This for choose date --> 
				    <input type="date" placeholder="Birthday" class="input" id="birthday" name="user_birthday">
					<!-- This for choose gender -->
					<select name="user_gender" id="gender"class="input">
						<option disabled="">Select your Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
					<!-- This button -->
					<button type="submit" class="btn" name="sign_up">Register</button>
					<!-- <?php //include("signup_user.php");?> -->
					<!-- <div class="text-center small" style="color: #67428B;">Already have accound? <a href="signup.php">Create one</a></div> -->
				</form>
			</div>

			<!-- This create block for sign in -->
			<div class="container__form container--signin">
				<form action="/action_page.php" class="form" id="form2" autocomplete="on">
					<h2 class="form__title">Sign In</h2>
					<!-- This for Email -->
					<input type="email" placeholder="someone@site.com" class="input" name="email"  autocomplete="on" required >
					<!-- This for password -->
					<input type="password" placeholder="Password" class="input" name="pass"  autocomplete="on" required >
					<a href="forgot_pass.php" class="link">Forgot your password?</a>
					<button type="submit" class="btn" name="sign_in" >Log-In</button>
					<!-- <?php //include("signin_user.php");?> -->
					<!-- <div class="text-center small" style="color: #67428B;">Don't have an account? <a href="signin.php">Sign in here</a></div> -->
				</form>
			</div>

			<!-- Overlay -->
			<div class="container__overlay">
				<div class="overlay">
					<div class="overlay__panel overlay--left">
						<button class="btn" id="signIn">Sign In</button>
					</div>
					<div class="overlay__panel overlay--right">
						<button class="btn" id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const fistForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");

signInBtn.addEventListener("click", () => {
	container.classList.remove("right-panel-active");
});

signUpBtn.addEventListener("click", () => {
	container.classList.add("right-panel-active");
});

fistForm.addEventListener("submit", (e) => e.preventDefault());
secondForm.addEventListener("submit", (e) => e.preventDefault());

		</script>
</body>
</html>
