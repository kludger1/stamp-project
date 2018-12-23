<?php
include "../functions/functions.php";
include "../views/login.php";

if(isset($_POST['login'])) {
    include_once 'dbh.inc.php';
    $email= $_POST['email'];
    $confirm_pwd= $_POST['pwd'];

 
    checkIfAccountExist($conn,$email,$confirm_pwd);
    if ($GLOBALS['account'] === TRUE) {
        $_SESSION["email"] = $email;
        $_SESSION["pwd"] = $confirm_pwd;
        header("Location: ../includes/success_login.php");
        exit();
      }elseif ($GLOBALS['account'] === FALSE) {
        header("Location: ../views/login.php?login=accountdontexist");
        exit();
           }

       
} else {
     header("Location: ../views/login.php?login=error");
     exit();
}





// if not empty connect to data base

// check for email and pass in users

// if false send error 

// redirect to login page

// if true  start session 

// redirect to views/album_collection
// header("Location: ../views/album_collection.php");





























// include_once 'dbh.inc.php';

// $data = "john@example.com"

// $sql = "SELECT `user_email` FROM `users` WHERE `user_email`=? ";


// function selectAndDisplay($conn,$sql,$dat) {
//     $stmt = mysqli_stmt_init($conn);
// if(!mysqli_stmt_prepare($stmt, $sql)){
//     echo "SQL statement failed"
// } else {
//     mysqli_stmt_bind_param($stmt, "s", $data);
//     mysqli_stmt_execute($stmt); 
//     while($row = mysqli_fetch_assoc($result)) {
//         // echo data
//     }
// }

// }
// function selectAndDisplay($conn,$sql,$dat) {
//     $stmt = mysqli_stmt_init($conn);
// if(!mysqli_stmt_prepare($stmt, $sql)){
//     echo "SQL statement failed"
// } else {
//     mysqli_stmt_bind_param($stmt, "s", $data);
//     mysqli_stmt_execute($stmt); 
//     if ($result->num_rows > 0) {
//         echo "account exist";
//     } else {
//         echo "account dont exist";
//     }
//     $conn->close();
// }

// }

// selectAndDisplay($conn,$sql,$dat)


















// $error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;



