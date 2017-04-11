<?php
$connect=mysqli_connect('localhost','root','','user');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>