


<?php
	// Check if session is not registered, redirect back to main page. 
	session_start();
	if(!isset($_SESSION['username'])) {
		header("location:main_login.php");
	}
?>

<html>
<body>
	</br> </br>
	<?php
		//print_r($_SESSION);
	?>

	</br> </br>
	Welcome <?php echo $_SESSION['username']; ?>
	</br> </br>
	<a href="logout.php">Click here to LOGOUT</a> 
<h1>hashg</h1>
</body>
</html>