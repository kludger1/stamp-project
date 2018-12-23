<?php include "partials/header.php";
include_once '../includes/dbh.inc.php';
?>
<div class="nav-container">
<a href="add_album.php">add album</a>
    <a href="login.php">Log Out</a>
</div>


<p>Hello <span><?php echo $_SESSION["email"]?></span>, gald to have you here!</p>

<div class="container flex-column-center">
<h1>All Albums</h1>
<div class="search-container">
<input type="search" name="album_search" placeholder="Name of album">
<button>Search</button>
</div>
<?php if(strpos($fullUrl, "message=successful") == true) {
	echo " <p class='message success'>Sign up is successful! </p ";
	exit();
}?>

<div class="container">
<div><a class="album display name" href="album_stamp_collection.php">Name</a></div>
<div><a class="album display name" href="album_stamp_collection.php">Name</a></div>
<div><a class="album display name" href="album_stamp_collection.php">Name</a></div><br>
</div>
    </div>


<?php include "partials/footer.php"; ?>