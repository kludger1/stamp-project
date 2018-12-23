<?php include "partials/header.php"; ?>



<div class="container simple-border flex-column-center user-form">
<h1>Sign Up</h1>
<form action="../includes/signup.inc.php" method="post">
	<div>
		<input type="email" name="email" placeholder="Email" required /><br>
		<input type="text" name="first" placeholder="First Name" required /><br>
		<input type="text" name="last" placeholder="Last Name" required /><br>
		<input type="password" name="pwd" placeholder="Password" required /><br>
		<input type="password" name="confirm_pwd" placeholder="Confirm Password" required />
	</div>

	<button type="submit" name="register" >Register</button>
	<a href="login.php">Back</a>

</form>
</div>

<?php


if(strpos($fullUrl, "signup=char") == true) {
	echo "<p class='message error'>You used invalid characters!</p";
	exit();
}elseif(strpos($fullUrl, "signup=passwordnomatch") == true) {
	echo "<p class='message error'>Password do not match!</p";
	exit();
}elseif(strpos($fullUrl, "signup=accountexist") == true) {
	echo "<p class='message error'>This email already exist!</p";
	exit();
}elseif(strpos($fullUrl, "signup=successful") == true) {
	echo "<p class='message success'>Sign up is successful!</p";
	exit();
}
?>

<?php include "partials/footer.php"; ?>