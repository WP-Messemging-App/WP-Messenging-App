<!DOCTYPE html>
<?php
session_start();
include("include/connection.php");
include("include/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: signin.php");
}
else { ?>
<html>
<head>
		<title>Account Settings</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<?php
			$user = $_SESSION['user_email'];
			$get_user = "select * from users where user_email='$user'";
			$run_user = mysqli_query($con, $get_user);
			$row = mysqli_fetch_array($run_user);

			$user_name = $row['user_name'];
			$user_pass = $row['user_pass'];
			$user_email = $row['user_email'];
			$user_profile = $row['user_profile'];
			$user_country = $row['user_country'];
			$user_gender = $row['user_gender'];

		?>

		<div class="col-sm-8">
			<form action="" method="post" enctype="multipart/form-data">
				<table class="table table-border table-hover">
					<tr align="center">
						<td colspan="6" class="active"><h2>Change Account Settings</h2></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Change Your Username</td>
						<td>
							<input type="text" name="u_name" class="form-control" required value="<?php
							echo $user_name;?>"/>
						</td>
					</tr>
					<tr><td></td><td><a class="btn btn-default" style="text-decoration:none;font-size: 15px; " href="upload.php">
						<i class="fa fa-user" aria-hidden="true"></i>Change Profile</a></td></tr>

						<tr>
						<td style="font-weight: bold;">Change Your Email</td>
						<td>
							<input type="email" name="u_email" class="form-control" required value="<?php
							echo $user_email;?>"/>
						</td>
					</tr>
					
					<tr>
						<td style="font-weight: bold;">Country</td>
						<td>
							<select class="form-control" name="user_country">
								<option><?php echo $user_country;
								?></option>
								<option>USA</option>
								<option>UK</option>
								<option>UAE</option>
								<option>Saudi Arabia</option>
							</select>
						</td>
					</tr>

					<tr>
						<td style="font-weight: bold;">Gender</td>
						<td>
							<select class="form-control" name="user_gender">
								<option><?php echo $user_gender;
								?></option>
								<option>Male</option>
								<option>Female</option>
								<option>others</option>
							</select>
						</td>
					</tr>

					<tr>
						<td style="font-weight: bold;" >Forgotten Password</td>
						<td>
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Forgotten Password</button>
							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											<form action="recovery.php?id=<?php echo $user_id?>" method="post" id="f" >
												<strong>What is your School Best Friend Name</strong>
												<textarea class="form-control" cols="83" rows="4" name="content" placeholder="Someone"></textarea><br>
												<input class="btn btn-default" type="submit" name="sub" value="Submit" style="width: 100px;"><br><br>
												<pre>Answer the above question we will ask you this question if you forgot your <br>Password.</pre>
												<br><br>
											</form>
											<?php

											if(isset($_POST['sub'])){

												$bfn = htmlentities($_POST['content']);
												if($bfn ==''){
													
													echo "<script>alert('Please Enter Something.')</script>";
													echo "<script>window.open('account_settings.php','_self')</script";
													exit();

												}
												else{
													$update = "update users set forgotten_answer='$bfn' where user_email='$user'";

													$run = mysqli_query($con, $update);

													if($run){
														echo "<script>alert('Working...')</script>";
														echo "<script>window.open('account_settings.php','_self')</script";

													}else{
														echo "<script>alert('Error while Updating Information.')</script>";
														echo "<script>window.open('account_settings.php','_self')</script";
													}

												}

											}



											?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											
										</div>

									</div>
									
								</div>
							</div>
					</tr>

					<tr><td></td><td><a class="btn btn-default" style="text-decoration: none; font-size: 15px; " href="change_password.php"><i class="fa fa-key fa-fw" aria-hidden="true"></i> Change Password</td></tr>

						<tr align="center">
							<td colspan="6">
								<input type="submit" value="Update" name="update" class="btn btn-info">
							</td>
						</tr>
					</table>	
			</form>
			<?php
				if(isset($_POST['update'])){
					$user_name =htmlentities($_POST['u_name']);
					$email = htmlentities($_POST['u_email']);
					$u_country = htmlentities($_POST['u_country']);
					$u_gender =htmlentities($_POST['u_gender']);


					$update = "update users set user_name = '$user_name', user_email = '$email', user_country = '$u_country', user_gender= '$u_gender' where user_email='$user'";

					$run = mysqli_query($con, $update);

					if($run){
						echo "<script>window.open('account_settings.php','_self')</script";
					}
				}

			?>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
</body>
</html>
<?php } ?>