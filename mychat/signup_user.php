<?php
include("include/connection.php");

    if(isset($_POST['sign_up'])){

        $name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
        $country = htmlentities(mysqli_real_escape_string($con, $_POST['user_country']));
        $gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
        $rand = rand(1, 2);

        if($name == ''){
            echo"<script>alert('We can not verify your name')</script>";
        }
        if(strlen($pass)<8){
            echo"<script>alert('Password should be minimum 8 character!')</script>";
            exit();
        }

        $check_email = "select * from users where user_email='$email'";
        $run_email = mysqli_query($con, $check_email);

        $check = mysqli_num_rows($run_email);
        
        if($check==1){
            echo"<script>alert('Email already exist, please try again!')</script>"; 
            echo"<script>window.open('signup.php', '_self')</script>";
            exit();
        }
        if($rand == 1)
            $profile_pic = "images/profile1.png";
        else if($rand == 2)
            $profile_pic = "images/profile2.png";
        $insert = "insert into users (user_name, user_pass, user_email, user_profile, user_country, user_gender)
                values('$name', '$pass', '$email', '$profile_pic', '$country', '$gender')";

        $squery = mysqli_query($con, $insert);

        if($squery){
            echo"<script>alert('Congratulation $name, your account has been create successfully')</script>";
        
            echo"<script>window.open('signin.php', '_self')</script>";
        }
        else{
            echo"<script>alert('Registration failed, try again!')</script>";
            echo"<script>window.open('signup.php', '_self')</script>";
        }
    }
?>