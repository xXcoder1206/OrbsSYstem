<?php
	include('config.php');
	$ID=$_GET['id'];
	mysqli_query($conn,"delete from `reserve` where id='$ID'");
	header('location:managereserve.php');
?>