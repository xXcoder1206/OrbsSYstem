
<html>
<head>
	<title>customer table</title>
</head>
<style>
body {
	background: linear-gradient(to right, #fb5283, #ff3527);
}
.butt {
	margin-left: 110px;
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
.content {
	margin: auto;
	padding: 20px;
	width: 600px;
	border-radius: 8px;
	background: #e6e6fa;
}
.content {
	margin-top: 20px;
}
table {
	margin: auto;
	width: 500px;
	background: #e6e6fa;
	border-collapse: collapse;
	border-radius: 8px;
}
table tr th {
	padding: 15px;
}
table tr td {
	padding: 15px;
}

</style>
<body>
	<div class="butt">
		<a href="admin.php"><button>Back</button></a>
	</div>
	<div class="content">
		<table>
			<tr>
				<th colspan="5"><h2>Customer Record</h2></th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
				<th>Phone Number</th>
			</tr>
			<?php
				include('config.php');
				$query=mysqli_query($conn,"select * from `userss` where usertype='user'");
				while($row=mysqli_fetch_array($query)){
			?>
				<tr>
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['phonenumber']; ?></td>
				</tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>