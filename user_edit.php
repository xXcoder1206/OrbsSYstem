<?php
	
	
	
	include('config.php');
	$ID= $_GET['id'];
	$query = mysqli_query($conn,"select * from `user_reserve` where id='$ID'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit reservation page</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
* {
	margin: 0;
	padding: 0;
	font-family: 'Poppins',sans-serif;
}
body {
	background: linear-gradient(to right, #fb5283, #ff3527);
	
}
.box {
	margin-top: 50px;
	margin-left: 80px;
	width: 80%;
	padding: 40px;
	background: #e6e6fa;
	border-radius: 8px;
	box-shadow: 5px 7px 12px 12px rgba(0,0,0,0.15);
}
.box .form-box label {
	margin-left: 30px;
	font-size: 18px;
	font-weight: 600;
}
.box .form-box input {
	margin: 20px;
	height: 35px;
	width: 200px;
	outline: none;
	font-size: 18px;
	border-radius: 8px;
	
}
.btn {
	margin-left: 30%;
}
.btn input {
	cursor: pointer;
	background: black;
	color: #fff;
}

</style>
<body>
	<div class="box">
		<h2>Edit Reservation</h2>
		<div class="form-box">
			<form method="POST" action="res_update.php?id=<?php echo $ID; ?>">
				<label>Departure:</label><input type="text" value="<?php echo $row['departure']; ?>" name="departure">
				<label>Destination:</label><input type="text" value="<?php echo $row['destination']; ?>" name="destination">
				<label>Date:</label><input type="text" value="<?php echo $row['date']; ?>" name="date"><br>
				<label>Adult:</label><input type="int" value="<?php echo $row['adult']; ?>" name="adult">
				<label>Child:</label><input type="int" value="<?php echo $row['child']; ?>" name="child">
				<label>Contact:</label><input type="int" value="<?php echo $row['contact']; ?>" name="contact">
	
				<div class="btn">
					<input type="submit" name="submit">
					<a href="user.php"><input type="submit" value="Back"></a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>