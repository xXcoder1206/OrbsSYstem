<?php

include 'config.php';

error_reporting(0);

session_start(); 
?>



<!DOCTYPE html>
<html>
<head>
<title>History</title>
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
	padding: 5px 10px 10px 10px;
	border-radius: 8px;
	background: #e6e6fa;
	box-shadow: 5px 7px 12px 12px rgba(0,0,0,0.15);
}
.container h3 {
	padding: 10px;
	border-radius: 8px 8px 8px 0;
	background: grey;
	color: #fff;
}
table {
	background: #e6e6fa;
	margin: auto;
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
.btn {
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
			<h3>Transaction History</h3>
			<a href="user.php"><button class="btn">Back</button></a>
			<table>
				<thead>
					
					<th>Departure</th>
					<th>Destination</th>
					<th>Date</th>
					<th>Adult</th>
					<th>Child</th>
					
				</thead>
				<tbody>
					<?php
						include('conn.php');
						$query=mysqli_query($conn,"select * from `user_reserve`");
						while($row=mysqli_fetch_array($query)){
							?>
							<tr>
								
								<td><?php echo $row['departure']; ?></td>
								<td><?php echo $row['destination']; ?></td>
								<td><?php echo $row['date']; ?></td>
								<td><?php echo $row['adult']; ?></td>
								<td><?php echo $row['child']; ?></td>
								
							</tr>
							<?php
						}
					?>
				</tbody>
			</table>
		</div>
</body>
</html>