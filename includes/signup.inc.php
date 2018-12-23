<?php

include "../functions/functions.php";

if(isset($_POST['register'])) {

    $email= $_POST['email'];
    $first= $_POST['first'];
    $last= $_POST['last'];
    $pwd= $_POST['pwd'];
    $confirm_pwd= $_POST['confirm_pwd'];

   validateSignUp($email,$first,$last,$pwd,$confirm_pwd);
     
} else {
    header("Location: ../views/signup.php?signup=error");
    exit();
}









// header("Location: ../views/login.php?signup=successful");






// $email =  mysqli_real_escape_string($conn, $_POST['email']);
// $first =  mysqli_real_escape_string($conn, $_POST['first']);
// $last =  mysqli_real_escape_string($conn, $_POST['last']);
// $pwd=  mysqli_real_escape_string($_POST['pwd']);
// $confirm_pwd =  mysqli_real_escape_string($conn, $_POST['confirm_pwd']);








// if not empty connect to data base

// check for email in users table

// if send send error "Account already exist"

// redirect to signin page

// if true create user row in users table

// send success message


// redirect to views/album_collection
// header("Location: ../views/login.php");

