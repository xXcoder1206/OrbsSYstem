<?php 
	

	include 'config.php';

	error_reporting(0);
	
	
	session_start(); 

		if (isset($_POST['submit'])){
			$name = $_POST['name'];	
		$departure = $_POST['departure'];
	$destination = $_POST['destination'];
	$date = $_POST['date'];
	$adult = $_POST['adult'];
	$child = $_POST['child'];
	$contact = $_POST['contact'];
	$busnum = $_POST['busnum'];

	$sql = "INSERT INTO user_reserve (name, departure, destination, date, adult, child, contact, busnum) 
	values ('$name', '$departure', '$destination', '$date', '$adult', '$child', '$contact', $busnum)";
	$result = mysqli_query($conn, $sql);
	header('location:succ.html');
 }
?>