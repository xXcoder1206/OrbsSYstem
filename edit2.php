<?php
	include('config.php');
	$ID=$_GET['id'];
	$query = mysqli_query($conn,"select * from `userss` where id='$ID'");
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
		<h2>Update your profile</h2>
		<div class="form-box">
			<form method="POST" action="update2.php?id=<?php echo $ID; ?>">
				<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
				<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname"><br>
				<label>Address:</label><input type="text" value="<?php echo $row['address']; ?>" name="address">
				<label>Phone number:</label><input type="int" value="<?php echo $row['phonenumber']; ?>" name="phonenumber"><br>
				<label>Username:</label><input type="text" value="<?php echo $row['username']; ?>" name="username">
				<label>Email:</label><input type="email" value="<?php echo $row['email']; ?>" name="email"><br>
				<label>Password:</label><input type="password" value="<?php echo $row['password']; ?>" name="password">
				<div class="btn">
					<input type="submit" name="submit">
					<a href="manageaccount.php"><input type="submit" value="Back"></a>
				</div>
			</form>
		</div>
	</div>

    <?php
	include('config.php');

    if(isset($_GET['id'])){
	$ID=$_GET['id'];
    $query = mysqli_query($conn,"SELECT * FROM `userss` where id='$ID'");
	$row = mysqli_fetch_array($query);
    
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$phonenumber=$_POST['phonenumber'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
 
 
	mysqli_query($conn,"update `userss` set firstname='$firstname',
     lastname='$lastname', address='$address', phonenumber='$phonenumber',
      username='$username', email='$email', password='$password', where id='$ID'");
    }
?>
</body>
</html>