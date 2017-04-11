<?php
	
session_start();

?>



<!DOCTYPE html>

<html>

<body>


<?php
	$host="localhost";
 		// Host name 
	
$username="root"; 		
// Mysql username 
	
$password="";
 			// Mysql password 
	
$db_name="user"; 		// Database name 
	
$tbl_name="login"; 	// Table name 

	// Connect to server and select databse.
	
$connection = mysqli_connect('localhost', 'root', '', 'user');
	
if (mysqli_connect_errno()) 
{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}



	// username and password sent from form 
	
$username=$_POST['username']; 
	
$password=$_POST['password']; 

	// To protect MySQL injection 
	
$username = stripslashes($username);
	
$password = stripslashes($password);
	
$username = mysqli_real_escape_string($connection, $username);
	
$password = mysqli_real_escape_string($connection, $password);
	
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";

	
$result=mysqli_query($connection, $sql);

	// Mysql_num_row is counting table row
	
$count=mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	
if($count==1){
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		
$_SESSION["username"]= $username; 
		
$_SESSION["password"]= $password; 
		
header("location:login_success.php");
	}
	
else {
		echo "</br></br>";
		
echo "Wrong Username or Password";}	?>

</body>

</html>

