<!DOCTYPE html>

<html>
<head>
	<title>New Users</title>
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
.container {
	margin: 10px;
	width: 97%;
	padding: 5px 10px 10px 10px;
	border-radius: 8px;
	background: #e6e6fa;
	box-shadow: 5px 7px 12px 12px rgba(0,0,0,0.15);
}
.container h3 {
	padding: 10px;
	border-radius: 8px 8px 0 0;
	background: grey;
	color: #fff;
}
table {
	background: #e6e6fa;
}
table th {
	border-collapse: collapse;
	padding: 15px;
}
table td {
	padding: 15px;
}
table td a{
	padding: 5px;
}
table td input {
	padding: 2px;
	cursor: pointer;
	color: #fff;
	border-radius: 5px;
	background: black;
}
button {
	float: right;
	margin-top: -40px;
	width: 5%;
	height: 40px;
	background: black;
	color: #fff;
	border-radius: 8px;	
}
</style>
<body>
	<div class="container">
			<h3>List of Users</h3>
			<a href="admin.php"><button>Back</button></a>
			<table>
				<thead>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
					<th>Phone number</th>
					<th>Username</th>
					<th>E-mail</th>
					<th>Password</th>
					<th>Type</th>
				</thead>
				<tbody>
					<?php
						include('config.php');
						$query=mysqli_query($conn,"select * from `userss` order by id desc limit 7");
						while($row=mysqli_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['phonenumber']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['usertype']; ?></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
</body>

</html>