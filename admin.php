<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			list-style-type: none;
			text-decoration: none;
			font-family: 'Poppins' , sans-serif;
		}
		
		.sidebar{
			width: 345px;
			position: fixed;
			left: 0;
			top: 0;
			height: 100%;
			background: linear-gradient(to right, #fb5283, #ff3527);
			z-index:100;
			transition: width 300ms;
		}
		
		.sidebar-head{
			height: 90px;
			padding: 16px 0px 16px 32px;
			color: #fff;
		}
		
		.sidebar-head span {
			display: inline-block;
			padding-right: 16px;
		}
		.sidebar-menu{
			margin-top: 16px;
		}
		.sidebar-menu li {
			width: 100%;
			margin-bottom: 27px;
			padding-left: 32px;
		}
		
		.sidebar-menu a {
			padding-left: 10px;
			display: block;
			color: #fff;
			font-size: 18px;
		}
		.sidebar-menu ul li a:hover {
			background: #fff;
			color: black;
			padding-top: 17px;
			padding-bottom: 15px;
			border-radius: 30px 0px 0px 30px;
		}
		.sidebar-menu a span:first-child {
			font-size: 24px;
			padding-right: 16px;
		}
		#nav-toggle:checked + .sidebar {
			width: 70px;
		}
		#nav-toggle:checked + .sidebar .sidebar-head,
		#nav-toggle:checked + .sidebar li {
			padding-left: 16px;
			text-align: center;
		}
		#nav-toggle:checked + .sidebar li a {
			padding-left: 0px;
		}
		#nav-toggle:checked + .sidebar .sidebar-head h2 span:last-child,
		#nav-toggle:checked + .sidebar li a span:last-child{
			display: none;
		}
		#nav-toggle:checked ~ .main-content {
			margin-left: 70px;
		}
		#nav-toggle:checked ~ .main-content header {
			width: calc(100% - 70px);
			left: 70px;
		}
		.main-content{
			transition: margin-left 300ms;
			margin-left: 345px;
		}
		header{
			background: #fff;
			display: flex;
			justify-content: space-between;
			padding: 16px 24px;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
			position: fixed;
			left: 345px;
			width: calc(100% - 345px);
			top: 0;
			z-index: 100;
			transition: left 300ms;
		}
		#nav-toggle {
			display: none;
		}
		.header h3{
			color: #222;
		}
		.header label span{
			font-size: 27px;
			padding-right: 16px;
		}
		.search{
			border: 1px solid #ccc;
			border-radius: 30px;
			height: 50px;
			display: flex;
			align-items: center;
			overflow-x: hidden;
		}
		.search span{
			display: inline-block;
			padding: 0px 16px;
			font-size: 24px;
		}
		.search input{
			height: 100%;
			padding: 8px;
			border: none;
			outline: none;
		}
		.user-box{
			display: flex;
			align-items: center;
		}
		.user-box span{
			font-size: 40px;
			margin-left: 16px;
		}
		.user-box small{
			display: inline-block;
			color: grey;
		}
		
		main {
			margin-top: 85px;
			padding: 32px 24px;
			background: #f1f5f9;
			min-height: calc(100vh - 90px);
		}
		.blocks {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-gap: 32px;
			font-size: medium;
		}
		.block-single{
			display: flex;
			justify-content: space-between;
			background: #fff;
			padding: 32px;
			border-radius: 2px;
			box-shadow: 5px 8px 10px 10px rgba(0,0,0,0.15);
		}
		.block-single div:last-child span {
			font-size: 3rem;
			color: black;
		}
		.block-single div:first-child span {
			color: grey;
		}
		.block-single:last-child {
			background: linear-gradient(to right, #fb5283, #ff3527);
		}
		.block-single:last-child h1,
		.block-single:last-child div:first-child span,
		.block-single:last-child div:last-child span {
			color: #fff;
		}
		
		.recent-grid {
			margin-top: 56px;
			display: grid;
			grid-template-columns: 70% auto;
		}
		.card {
			background: #fff;
			border-radius: 5px;
		}
		.card-header {
			padding: 16px;
		}
		.card-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			border: 1px solid #f0f0f0;
		}
		.card-header button {
			background: linear-gradient(to right, #fb5283, #ff3527);
			border-radius:10px;
			color: #fff;
			font-size: 12px;
			padding: 8px 16px;
			border: 1px solid #ff3527;
		}
		table{
			border-collapse: collapse;	
		}
		thead tr {
			border-top: 1px solid #f0f0f0;
			border-bottom: 2px solid #f0f0f0;
			padding: 8px 0px;
		}
		thead td {
			font-weight: 700;
		}
		td {
			padding: 8px 16px;
			font-size: 15px;
			color: #222;
		}
		
		.table-responsive {
			width: 100%;
			overflow-x: auto;
		}
		
		.new-user {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 8px 13px;
			font-weight: 700;
		}
		
		.info {
			display: flex;
			align-items: center;
		}
		.info h4 {
			font-size: 12px;
				color: #222;
		}
		.info small {
			font-weight: 600;
			color: grey;
		}
		.contact span {
			font-size: 18px;
			display: inline-block;
			margin-left: 8px;
			color: black;
		}
		
		
		
		@media only screen and (max-width: 1200px) {
			.sidebar {
				width: 70px;
			}
			.sidebar .sidebar-head,
			.sidebar li {
				padding-left: 16px;
				text-align: center;
			}
			.sidebar li a {
				padding-left: 0px;
			}
			.sidebar .sidebar-head h2 span:last-child,
			.sidebar li a span:last-child{
				display: none;
			}
			.main-content {
				margin-left: 70px;
			}
			.main-content header {
				width: calc(100% - 70px);
				left: 70px;
			}
			
			.sidebar:hover {
				width: 345px;
				z-index: 200;
			}
			.sidebar:hover .sidebar-head,
			.sidebar:hover li {
				padding-left: 32px;
				text-align: left;
			}
			.sidebar:hover li a {
				padding-left: 16px;
			}
			.sidebar:hover .sidebar-head h2 span:last-child,
			.sidebar:hover li a span:last-child{
				display: inline;
			}
		}
		
		
		@media only screen and (max-width: 960px) {
			.blocks {
				grid-template-columns: repeat(3, 1fr);
			}
			.recent-grid {
				grid-template-columns: 60% 40%;
			}
		}
		
		
		@media only screen and (max-width: 768px) {
			.blocks {
				grid-template-columns: repeat(2, 1fr);
			}
			.recent-grid {
				grid-template-columns: 100%;
			}
			.search {
				display: none;
			}
			.sidebar {
				left: -100% !important;
			}
			
			header h2 {
				display: flex;
				align-items: center;
			}
			
			header h2 label {
				display: inline-block;
				background: deeppink;
				padding-right: 0px;
				margin-right: 16px;
				height: 40px;
				width: 40px;
				border-radius: 50%;
				color: #fff;
				display: flex;
				align-items: center;
				justify-content: center !important;
			}
			
			header h2 span {
				text-align: center;
				padding-right: 0px;
			}
			header h2 {
				font-size: 17px;
			}
			.main-content {
				width: 100%;
				margin-left: 0px;
			}
			header {
				width: 100% !important;
				left: 0 !important;
			}
			#nav-toggle:checked + .sidebar {
				left: 0 !important;
				z-index: 100;
				width: 345px;
			}
			#nav-toggle:checked + .sidebar .sidebar-head,
			#nav-toggle:checked + .sidebar li {
				padding-left: 32px;
				text-align: left;
			}
			#nav-toggle:checked + .sidebar li a {
				padding-left: 16px;
			}
			#nav-toggle:checked + .sidebar .sidebar-head h2 span:last-child,
			#nav-toggle:checked + .sidebar li a span:last-child{
				display: inline;
			}
		}
		
		
		@media only screen and (max-width: 560px) {
			.blocks {
				grid-template-columns: 100%;
			}
		}
	</style>
</head>

<body>
	
	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-head">
			<h2><span class="las la-bus-alt"></span> <span>OBRS Admin</span></h2>
		</div>
		
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="" class="active"><span class="las la-igloo"></span>
					<span>Dashboard</span></a>
				</li>
				
				<li>
					<a href="printer.php"><span class="las la-users"></span>
					<span>Customers</span></a>
				</li>
				
				<li>
					<a href="manageuser.php"><span class="las la-user-circle"></span>
					<span>Manage Users</span></a>
				</li>
				
				<li>
					<a href="managereserve.php"><span class="las la-shopping-bag"></span>
					<span>Manage Reservations</span></a>
				</li>
				
				<li>
					<a href="route.php"><span class="las la-route"></span>
					<span>Route</span></a>
				</li>

				<li>
					<a href="sms.php"><span class="lab la-telegram"></span>
					<span>Send a Message</span></a>
				</li>
				
				<li>
					<a href="home.php"><span class="las la-sign-out-alt"></span>
					<span>Log out</span></a>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="main-content">
		<header>
			<h2>
				<label for="nav-toggle">
					<span class="las la-bars"></span>
				</label>
					
				Dashboard
			</h2>
				
			<div class="search">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here"/>
			</div>
				
			<div class="user-box">
				<span class="las la-user-circle"></span>
				<div>
					<?php
						include('config.php');
						$query=mysqli_query($conn,"select * from `userss` where usertype='admin' ");
						while($row=mysqli_fetch_array($query)){
						?>	
							<h4><?php echo $row['firstname']; echo $row['lastname'];?></h4>
							<small><?php echo $row['usertype']; ?></</small>
					<?php
						}
					?>
				</div>
			</div>
		</header>
			
		<main>
				
		<div class="blocks">
				<div class="block-single">
				<?php
				include('config.php');
				$query=mysqli_query($conn,"SELECT * FROM `userss` order by ID desc limit 1");
				while($row=mysqli_fetch_array($query)){
				?>	
					<h1><?php echo $row['ID']; ?></h1>
				<?php
					}
				?>
					<span>Customers</span>
					<div>
					<span class="las la-users"></span>
					</div>
				</div>
				
					
				<div class="block-single">
					<?php
					include('config.php');
					$query=mysqli_query($conn,"SELECT * FROM `userss` order by ID desc limit 1");
					while($row=mysqli_fetch_array($query)){
					?>	
						<h1><?php echo $row['ID']; ?></h1>
					<?php
						}
					?>
					<span>Users</span>
					<div>
					<span class="las la-user-circle"></span>
					</div>
				</div>
				
					
				<div class="block-single">
					<?php
					include('config.php');
					$query=mysqli_query($conn,"select * from `reserve` order by id desc limit 1");
					while($row=mysqli_fetch_array($query)){
					?>	
						<h1><?php echo $row['id']; ?></h1>
					<?php
						}
					?>
					<span>Reservations</span>
					<div>
					<span class="las la-shopping-bag"></span>
					</div>
				</div>
				
				<div class="block-single">
				<?php
				include('db.php');
				$query=mysqli_query($conn,"SELECT * FROM `route` order by id desc limit 1");
				while($row=mysqli_fetch_array($query)){
				?>	
					<h1><?php echo $row['id']; ?></h1>
				<?php
					}
				?>
					<span>Route</span>
					<div>
					<span class="las la-route"></span>
					</div>
				</div>
					
			</div>
			
			<div class="recent-grid">
				<div class="reservation">
					<div class="card">
						<div class="card-header">
							<h3>Recent Reservations</h3>
						
							<a href="dash-recent.php"><button>See all <span class="las la-arrow-right"></span></button></a>
						</div>
						
					
						<div class="cardbody">
							<div class="table-responsive">
								<table width="100%">
									<thead>
										<tr>
											<td>id</td>
											<td>Bus</td>
											<td>Date</td>
											<td>Seat reserve</td>
											<td>Transaction code</td>
											<td>Seat</td>
										</tr>
									</thead>
									<tbody>
									<?php
										include('config.php');
										$query=mysqli_query($conn,"select * from `reserve` order by id desc limit 3");
										while($row=mysqli_fetch_array($query)){
										?>	
												<tr>
													<td><?php echo $row['id']; ?></td>
													<td><?php echo $row['bus']; ?></td>
													<td><?php echo $row['date']; ?></td>
													<td><?php echo $row['seat_reserve']; ?></td>
													<td><?php echo $row['transactionnum']; ?></td>
													<td><?php echo $row['seat']; ?></td>
													
												</tr>
												<?php
											}
										?>
									</tbody>	
								</table>
							</div>
						</div>
					</div>
				</div>
				
				<div class="new-users">
					<div class="card">
						<div class="card-header">
							<h3>New Users</h3>
						
							<a href="newuser.php"><button>See all <span class="las la-arrow-right"></span></button></a>
						</div>
					
					
						<div class="cardbody">
							<div class="new-user">
								<table>
									<tbody>
										<?php
										include('config.php');
										$query=mysqli_query($conn,"select * from `userss` order by ID desc limit 3");
										while($row=mysqli_fetch_array($query)){
										?>
										<tr>
											<td><h4><?php echo $row['firstname']; ?></h4></td>
											<td><h4><?php echo $row['lastname']; ?></h4></td>
											<td><small><?php echo $row['usertype']; ?></small></td>
											<td>
												<a href="newuserdelete.php?id=<?php echo $row['ID']; ?>"><span class="las la-trash"></span></a>
											</td>
										</tr>
										<?php
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>


</html>