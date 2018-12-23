<?php include "partials/header.php"; ?>

<div class="nav-container">
<a href="album_collection.php">Albums</a>
    <a href="login.php">Log Out</a>
</div>

<div class="container flex-column-center">
<h1>Add Album</h1>

<form action="../includes/add_album.inc.php" method="post">
	<div>
		<input type="text" name="album_name" placeholder="Album Name" required /><br>
		<textarea rows="5" cols="30" name="album_description" placeholder="Enter album's description here..." maxlength="250"></textarea>
	</div>

	<button type="submit" name="add_album_btn" >Add</button>


</form>

</div>
<?php include "partials/footer.php"; ?>