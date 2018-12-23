<?php

$_SESSION["email"] ='Oats@gamil.com';
$_SESSION["pwd"] = 'd';

 $ablum_name =  $_POST['album_name'];
 $album_descr = $_POST['album_description'];

 include_once 'dbh.inc.php';
    $sql = "SELECT `user_id`,`user_email`,`user_first`,`password` FROM `users` WHERE `user_email`=? AND `password`=?";
    $stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "SQL statement failed";
  } else {
      mysqli_stmt_bind_param($stmt, "ss", $email, $confirm_pwd);
      mysqli_stmt_execute($stmt); 
      $result = mysqli_stmt_get_result($stmt);
      while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["user_id"]. " - Name: " . $row["user_first"]. " " . $row["user_email"]. "<br>";
    } 
  }


  // ran out of time

// if(isset($_POST['add_album_btn'])) {
    
//     // getAccountInfo($conn,$email,$confirm_pwd);
//     // insertAlbumDB($ablum_name, $album_descr);
// };


// header("Location: ../views/album_collection.php");