


<!DOCTYPE html>
<html>
<head>
	<title>user reg system</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="header">
	<h2>home page </h2>
</div>
<div class="content">
	<?php if(isset($_SESSION['success'])):?>
		<div class=" error success">
			<h3>
				<?php 
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>
	<?php
	if(isset($_SESSION["username"])):?>
		<p> welcome <strong><?php echo $_SESSION['username'];?></strong></p>
		<p><a href="login.php" style="color:red;">Logout</a></p>
		<?php endif ?>
		

</div>
</body>
</html>