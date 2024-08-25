<?php
	include('config.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$phonenumber=$_POST['phonenumber'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$usertype=$_POST['usertype'];
 
 
	mysqli_query($conn,"update `userss` set firstname='$firstname', lastname='$lastname', address='$address', phonenumber='$phonenumber', username='$username', email='$email', password='$password', usertype='$usertype' where id='$id'");
	header('location:manageuser.php');
?>