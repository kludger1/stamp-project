<?php include "partials/header.php"; ?>

<div class="container simple-border flex-column-center user-form">
	<h1>Login</h1>
<form action="../includes/login.inc.php" method="POST">
	<div>
		<input type="email" name="email" placeholder="email" required /><br>
		<input type="password" name="pwd" placeholder="password" required />
	</div>

	<button type="submit" name="login" >Login</button>
	<a href="signup.php">Sign Up</a>

</form>

</div>
<?php
if(strpos($fullUrl, "signup=successful") == true) {
	echo "<p class='message success'>Sign up is successful!</p";
	exit();
}elseif(strpos($fullUrl, "login=accountdontexist") == true) {
	echo "<p class='message error'>Wrong login info!</p";
	exit();
}elseif(strpos($fullUrl, "login=error") == true) {
	echo "<p class='message error'>Someething went wrong... :(</p";
	exit();
}
?>
<?php include "partials/footer.php"; ?>
