<?php
 $conn = mysqli_connect('localhost','root','','happyhouse'); 
 
if(!$conn)
{
	die("Error Establishing Connection" . mysqli_error($conn));
}
?>