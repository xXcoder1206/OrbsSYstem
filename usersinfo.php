<?php
	include('config.php');
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$phonenumber=$_POST['phonenumber'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
 
	mysqli_query($conn,"update `userss` set firstname='$firstname', lastname='$lastname', address='$address', phonenumber='$phonenumber', username='$username', email='$email', password='$password' where id='$ID'");
	header('location:manageaccount.php');
 
?>