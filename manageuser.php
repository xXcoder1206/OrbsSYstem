<!DOCTYPE html>
<html>
<head>
<title>manage users page</title>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
.content {
	padding-bottom: 5px; 
}
h1 {
	margin-top: 20px;
	text-align: center;
	font-size: 40px;
}
.butt {
	margin-left: 10px;
	padding: 15px;
}
.butt button {
	color: #fff;
	width: 90px;
	padding: 5px 10px;
	outline: none;
	cursor: pointer;
	background: linear-gradient(to right, #fb5283, #ff3527);
	border-radius: 5px;
	border: 2px solid #fff;
	font-weight: 600;
	font-size: 15px;
}
.butt button:hover {
	background: linear-gradient(to right, #ff3527, #fb5283 );
	width: 100px;
}
.container1 {
	margin: 10px;
	width: 97%;
	padding: 5px 10px 10px 10px;
	border-radius: 8px;
	background: #e6e6fa;
	box-shadow: 5px 7px 12px 12px rgba(0,0,0,0.15);
}
.container1 h3 {
	padding: 10px;
	border-radius: 8px 8px 0 0;
	background: black;
	color: #fff;
	opacity: 0.6;
	text-align: center;
}
.container1 label {
	margin-left: 10px;
	font-weight: 600;
}
.container1 input {
	margin-left: 30px;
	height: 35px;
	background: #fff;
	width: 200px;
	outline: none;
	font-size: 15px;
	border-radius: 8px;
}
.container1 .btn1 {
	margin-left: 10%;
}
.container1 .btn {
	height: 35px;
	width: 20%;
	margin-left: 40%;
	outline: none;
	cursor: pointer;
	background: black;
	color: #fff;
	border-radius: 8px;
}
.container2 {
	margin: 10px;
	width: 97%;
	padding: 5px 10px 10px 10px;
	border-radius: 8px;
	background: #e6e6fa;
	box-shadow: 5px 7px 12px 12px rgba(0,0,0,0.15);
}
.container2 h3 {
	padding: 10px;
	border-radius: 8px 8px 0 0;
	background: black;
	color: #fff;
	opacity: 0.6;
}
table {
	background: #e6e6fa;
}
table th {
	border-collapse: collapse;
	padding: 10px;
}
table td {
	padding: 10px;
}
table td input {
	padding: 2px;
	cursor: pointer;
	color: #fff;
	border-radius: 5px;
	background: black;
}
</style>
<body>
	<div class="butt">
		<a href="admin.php"><button>Back</button></a>
	</div>
	<div class="content">
	<h1>Manage Users</h1>
		<div class="container1">
			<form method="POST" action="add.php">
				<h3>Insert New Users</h3><br>
				<label>Firstname:</label><input type="text" name="firstname" required>
				<label>Lastname:</label><input type="text" name="lastname" required>
				<label>Address:</label><input type="text" name="address" required>
				<label>Phone #:</label><input type="int" name="phonenumber" required><br><br>
				<label class="btn1">Username:</label><input type="text" name="username" required>
				<label>E-mail:</label><input type="email" name="email" required>
				<label>Password:</label><input type="password" name="password" required><br><br>
				<button class="btn">Add</button>
			</form>
		</div>
		<br>
		<div class="container2">
			<h3>List of Users</h3>
			<table>
				<thead>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
					<th>Phone number</th>
					<th>Username</th>
					<th>E-mail</th>
					<th>Password</th>
					<th>Type</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						include('config.php');
						$query=mysqli_query($conn,"select * from `userss`");
						while($row=mysqli_fetch_array($query)){
							?>
							<tr>
								<td><?php echo $row['ID']; ?></td>
								<td><?php echo $row['firstname']; ?></td>
								<td><?php echo $row['lastname']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['phonenumber']; ?></td>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['password']; ?></td>
								<td><?php echo $row['usertype']; ?></td>
								<td>
									<a href="edit.php?id=<?php echo $row['ID']; ?>"><input type="submit" value="Edit"></a>
									<a href="delete.php?id=<?php echo $row['ID']; ?>"><input type="submit" value="Delete"></a>
								</td>
							</tr>
							<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</body>

</html>