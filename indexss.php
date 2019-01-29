<?php 
include('server.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" href="style.css">
	

</head>
<body>
<div class="header">
	<h2>REGISTER</h2>
</div>
<form method="POST" action="index.php">
	<?php include('errors.php');?>

	
	

         <div class="input-group">
		<label>username</label>
		<input type="text" name="username" placeholder="username"value="<?php echo $username;?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="Email" placeholder="Email"value="<?php echo $email;?>">
	</div>
	<div class="input-group">
		<label>password</label>
		<input type="password" name="password_1" placeholder="password">
	</div>
	<div class="input-group">
		<label>comfirm password</label>
		<input type="password" name="password_2" placeholder=" confirm password">
	</div>
<div class="input-group">
	<button type="submit"name="REGISTER"class="btn">REGISTER</button>
</div>
<p>already a member?<a href="login.php">SignIn</a></p>
</form>
	
</body>
</html>


