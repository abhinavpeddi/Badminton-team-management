<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
img {
	vertical-align: middle;
	 width: 20%;
  height: 50%;
  border-radius: 100%;
}
</style>
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">
<center><img src="images/admin_profile.png" alt="Avatar" style="width:200px"></center>
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
		<center>	<button type="submit" class="btn" name="login_btn">Login</button></center>
		</div>
		<p>
			<center> <a href="register.php">forgot password</a></center>
		</p>
	</form>


</body>
</html>