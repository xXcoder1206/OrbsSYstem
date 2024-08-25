<?php
	$id=$_GET['id'];
	include('config.php');
	mysqli_query($conn,"delete from `userss` where id='$id'");
	header('location:admin.php');
?>