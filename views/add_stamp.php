<?php include "partials/header.php"; ?>
<div class="nav-container">
<a href="album_stamp_collection.php">back</a>
<a href="album_collection.php">Albums</a>  
    <a href="login.php">Log Out</a>
</div>

<div class="container flex-column-center">
<h1>Add Stamp</h1>

<form action="../includes/add_stamp.inc.php" method="post" enctype="multipart/form-data">
	<div>
    <input type="file" name="stamp_img" required /> <br>
		<input type="text" name="stamp_name" placeholder="Stamp Name" required /><br>
		<textarea rows="5" cols="30" name="stamp_description" placeholder="Enter Stamp's description here..." maxlength="250"></textarea>
	</div>

	<button type="submit" >Add</button>


</form>
</div>
<?php include "partials/footer.php"; ?>