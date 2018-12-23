<?php


function insertAlbumDB($ablum_name, $album_descr) {
  $ablum_name =  mysqli_real_escape_string($conn, $_POST['album_name']);
$album_descr =  mysqli_real_escape_string($conn, $_POST['album_description']);

  $sql = "INSERT INTO `users` (`album_name`, `album_description`)
  VALUES (?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo 'SQL error';
} else {
   mysqli_stmt_bind_param($stmt, "ss", $ablum_name, $album_descr);
   mysqli_stmt_execute($stmt);
} 
}


function insertUserInDB($conn,$email,$first,$last,$pwd,$confirm_pw) {
  $email =  mysqli_real_escape_string($conn, $_POST['email']);
$first =  mysqli_real_escape_string($conn, $_POST['first']);
$last =  mysqli_real_escape_string($conn, $_POST['last']);
$confirm_pwd =  mysqli_real_escape_string($conn, $_POST['confirm_pwd']);

  $sql = "INSERT INTO users (`user_email`, `user_first`, `user_last`, `password`)
VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo 'SQL error';
} else {
   mysqli_stmt_bind_param($stmt, "ssss", $email, $first, $last, $confirm_pwd);
   mysqli_stmt_execute($stmt);
} 
}


function checkIfAccountExist($conn,$email,$confirm_pwd) {
  $sql = "SELECT `user_email`,`password` FROM `users` WHERE `user_email`=? AND `password`=?";
  $stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "SQL statement failed";
  } else {
      mysqli_stmt_bind_param($stmt, "ss", $email, $confirm_pwd);
      mysqli_stmt_execute($stmt); 
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($result);
      if ($result->num_rows > 0) {
         return $GLOBALS['account'] = TRUE;
      } else {
        return $GLOBALS['account'] = FALSE;
           }
  }
}


function validateSignUp($email,$first,$last,$pwd,$confirm_pwd) {
  include_once 'dbh.inc.php';
    if(!preg_match('/^[A-Z]+$/i', $first) || !preg_match('/^[A-Z]+$/i', $last)) {
          header("Location: ../views/signup.php?signup=char");
          exit();
      } else {
         if ($pwd != $confirm_pwd) {
           header("Location: ../views/signup.php?signup=passwordnomatch");
           exit();
         } else {
          checkIfAccountExist($conn,$email);
          if ($GLOBALS['account'] === TRUE) {
            header("Location: ../views/signup.php?signup=accountexist");
               exit();
          }elseif ($GLOBALS['account'] === FALSE) {
            insertUserInDB($conn,$email,$first,$last,$pwd,$confirm_pw);
                header("Location: ../views/login.php?signup=successful");
               exit();
               }
         }
        }
   
}




// function getAccountInfo($conn,$email,$confirm_pwd) {
//   $sql = "SELECT `user_id`,`user_email`,`user_first`,`password` FROM `users` WHERE `user_email`=? AND `password`=?";
//   $stmt = mysqli_stmt_init($conn);
// if(!mysqli_stmt_prepare($stmt, $sql)){
//       echo "SQL statement failed";
//   } else {
//       mysqli_stmt_bind_param($stmt, "ss", $email, $confirm_pwd);
//       mysqli_stmt_execute($stmt); 
//       $result = mysqli_stmt_get_result($stmt);
//       while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["user_id"]. " - Name: " . $row["user_first"]. " " . $row["user_email"]. "<br>";
//     } else {
//       echo "0 results";
//   }
//   }
// }
// function checkedIfLoggedIn(){
//   $username = array_key_exists('username',$_SESSION) && !empty($_SESSION['username']);
//   $password = array_key_exists('password',$_SESSION) && !empty($_SESSION['password']);
//    if(!($username && $password)) {
//        header('Location: login.php');
//    } else {
       
//       echo "You are logged in";
//    }
// }