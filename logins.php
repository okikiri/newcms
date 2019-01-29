<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title> registration</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="header">
	<h2>LOGIN</h2>
</div>
<form method="POST" action="login.php">

	<?php include('errors.php');?>
<div class="input-group">
		<label>username</label>
		<input type="text" name="username">
	</div>
	
	<div class="input-group">
		<label>password</label>
		<input type="password" name="password">
	</div>
	
<div class="input-group">
	<button type="submit"name="login"class="btn">login</button>
</div>

<p>not yet a member?<a href="index.php">Sign up</a></p>
</form>



</body>
</html>
