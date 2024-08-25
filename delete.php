<?php
	$ID=$_GET['id'];
	include('config.php');
	mysqli_query($conn,"delete from `userss` where id='$ID'");
	header('location:manageuser.php');
?>