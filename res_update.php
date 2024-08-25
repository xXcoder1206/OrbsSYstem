<?php
	include('config.php');
	$ID=$_GET['ID'];
 
	$departure=$_POST['departure'];
	$destination=$_POST['destination'];
	$date=$_POST['date'];
	$adult=$_POST['adult'];
	$child=$_POST['child'];
	$contact=$_POST['contact'];
 
 
	mysqli_query($conn,"update `user_reserve` set departure='$departure', destination='$destination', date='$date', adult='$adult', child='$child', contact='$contact' where res_id='$res_id'");
	header('location:managereserve.php');
?>