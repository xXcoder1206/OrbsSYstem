<?php
	include('config.php');
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$phonenumber=$_POST['phonenumber'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
 
	mysqli_query($conn,"insert into `userss` (firstname,lastname,address,phonenumber,username,email,password) values ('$firstname','$lastname','$address','$phonenumber','$username','$email','$password')");
	header('location:manageuser.php');
 
?>