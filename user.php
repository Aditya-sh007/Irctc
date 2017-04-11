<?php include 'database.php'
?>

<?php

// create a variable
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$emailid=$_POST['emailid'];
$phone=$_POST['phone'];
$sex=$_POST['sex'];
$State=$_POST['State'];
$code=$_POST['code'];
$password=$_POST['password'];
$txtarea=$_POST['txtarea'];
$username=$_POST['username'];

//Execute the query

mysqli_query($connect,"INSERT INTO login(FirstName,LastName,emailid,phone,sex,State,code,password,txtarea,username) VALUES('$FirstName','$LastName','$emailid','$phone','$sex','$State','$code','$password','$txtarea','$username')");
?>