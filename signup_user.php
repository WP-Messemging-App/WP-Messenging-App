<?php
include("include/connection.php");

    if(isset($_POST['sign_up'])){
        $name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
        $pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
        
        $birthday = htmlentities(mysqli_real_escape_string($con, $_POST['user_birthday']));
        $gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
        $rand = rand(1, 2);

        if($name == ''){
            echo"<script>aler('We can not verify your name')</script>";
        }
        if(strlen($pass)<8){
            echo"<script>aler('Password should be minimum 8 character!')</script>";
            exit();
        }

        $check_email = "select * from user where user_email='$email'";
        $run_email = mysli_query($con, $check_email);

        $check = mysqli_num_rows($run_email);
        
        if($check==1){
            echo"<script>aler('Email already exist, please try again!')</script>"; 
            echo"<script>window.open('home.php', '_self')</script>";
            exit();
        }
        if($rand == 1)
            $profile_pic = "image/profile1.png";
        else if($rand == 2)
            $profile_pic = "image/profile2.png";
        $insert = "insert into users (user_name, user_lastname, user_gmaill, user_password, user_brith, user_gender, user_profile)
                values('$name', '$lastname', '$email', '$pass', '$birthday', '$gender', '$profile_pic')";

        $squery = mysqli_query($con, $insert);

        if($squery){
            echo"<script>aler('Congratulation $name, your account has been create successfully')</script>";
        
            echo"<script>windo.open('home.php', '_self)</script>";
        }
        else{
            echo"<script>aler('Registration failed, try again!')</script>";
            echo"<script>window.open('home.php, _self')</script>";
        }
    }
?>