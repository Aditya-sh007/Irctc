

<?php
session_start();
?>


<!DOCTYPE html>
<html>
<body>
	</br> </br>
	<?php
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 
	?>
	
	</br> </br>
	Thanks for Visiting Our Website . . . Have A Good And Safe Journey !!

	</br> </br>
	<a href="IRCTC.html">Click here to go back to login page</a>
	
</body>
</html>