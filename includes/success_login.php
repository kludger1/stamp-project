<?php
include "../views/partials/header.php";
include_once 'dbh.inc.php';


if(!isset($_SESSION["email"])){
    header("Location: ../views/login.php?login=error");
} else {
    header("Location: ../views/album_collection.php");
}


