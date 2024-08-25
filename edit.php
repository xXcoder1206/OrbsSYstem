<?php
	include('config.php');
	$ID=$_GET['id'];
	$query = mysqli_query($conn,"select * from `user_reserve` where id='$ID'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>edit page</title>
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
.box .form-box {
	margin-left: 10%;
}
.box .form-box label {
	margin-left: 50px;
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
	margin-left: 20%;
}
.btn input {
	cursor: pointer;
	background: black;
	color: #fff;
}
</style>
<body>
	<div class="box">
		<h2>Edit user information</h2>
		<div class="form-box">
			<form method="POST" action="update.php?id=<?php echo $ID; ?>">
				<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
				<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname"><br>
				<label>Address:</label><input type="text" value="<?php echo $row['address']; ?>" name="address">
				<label>Phone number:</label><input type="int" value="<?php echo $row['phonenumber']; ?>" name="phonenumber"><br>
				<label>Username:</label><input type="text" value="<?php echo $row['username']; ?>" name="username">
				<label>Email:</label><input type="email" value="<?php echo $row['email']; ?>" name="email"><br>
				<label>Password:</label><input type="password" value="<?php echo $row['password']; ?>" name="password">
				<label>Type:</label><input type="text" value="<?php echo $row['usertype']; ?>" name="usertype">
				<div class="btn">
					<input type="submit" name="submit">
					<a href="manageuser.php"><input type="submit" value="Back"></a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>