<?php
	include('config.php');
    if(isset($_GET['id'])){
	$ID=$_GET['id'];

	$query = mysqli_query($conn,"SELECT * FROM `userss` where id='$ID'");
	$row = mysqli_fetch_array($query);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Manage your account</title>
</head>
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body {
    background: #ddd;
}
nav {
    background: linear-gradient(to right, #fb5283, #ff3527);
}
nav:after {
    content: '';
    clear: both;
    display: table;
}
nav .logo {
    float: left;
    color: white;
    font-size: 30px;
    font-weight: 600;
    line-height: 70px;
    padding-left: 30px;
}
.menu {
    margin-left: 200px;
    padding-top: 60px;
}


nav ul {
    list-style: none;
    margin-right: 40px;

}
nav ul li {
    display: inline-block;
    
    margin: 0 5px;
}
nav ul li a {
    color: rgb(12, 1, 1);
    text-decoration: none;
    line-height: 70px;
    font-size: 18px;
    padding: 8px 15px;
}
nav ul li a:hover {
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #e0ebeb,
                0 0 5px #dfe7e7;
}
.userprofile {
    color: rgb(13, 14, 14);
    border-radius: 5px;
    box-shadow: 0 0 5px #e0ebeb,
                0 0 5px #dfe7e7;
    height: 40px;
}
nav ul ul li a:hover {
    color: #fff;
    box-shadow: none;
}
nav ul li a:hover .la-angle-down {
    transform: rotate(180deg);
}
nav ul ul {
    position: absolute;
    top: 200px;
    border-top: 3px solid #9b59b6;;
    opacity: 0;
    visibility: hidden;
    transition: top .5s;
}
nav ul ul ul {
    border-top: none;
}
nav ul li:hover > ul {
    top: 130px;
    opacity: 1;
    visibility: visible;
}
nav ul ul li {
    position: relative;
    margin: 0px;
	background: linear-gradient(to right, #fb5283, #ff3527);
    display: list-item;
    border-bottom: 1px solid rgba(252, 246, 246, 0.3);
}
nav ul ul li a {
    line-height: 50px;
	text-align: center;
}
nav ul ul ul li {
    top: -130px;
    left: 150px;
}
.sbox{
	float: right;
	margin-right: 40px;
	margin-top: -120px;
}
.sbox .search-box {
	position: relative;
	height: 40px;
	width: 50px;
	margin: auto;
	box-shadow: 0 5px 10px rgba(0,0,0,0.25);
	border-radius: 25px;
	transition: 0.3s ease;
}
#check:checked ~ .search-box {
	width: 300px;
}
.search-box input {
	position: absolute;
	height: 100%;
	width: 100%;
	border-radius: 20px;
	background: #fff;
	outline: none;
	border: none;
	padding-left: 20px;
	font-size: 18px;
}
.search-box .icon {
	position: absolute;
	right: -2px;
	top: 0;
	width: 60px;
	background: #fff;
	height: 100%;
	text-align:center;
	padding-top: 8px;
	color: #FF676D;
	font-size: 25px;
	border-radius: 20px;
}
#check:checked ~ .search-box .icon {
	background: #FF676D;
	color: #fff;
	width: 50px;
	border-radius: 0 25px 25px 0;
}
#check{
	display: none;
}


.edit-box {
    position: relative;
    width: 600px;
    height: 400px;
    top: 25%;
    left: 30%;
    background: #f1f1f1;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 2px 3px 4px #333;

}
.editform-box {
    position: absolute;
    width: 100%;
    height: 400px;
    margin-top: 10px;
}
.editform-box label {
    font-size: 15px;
    font-weight: 600;
    margin-right: 10px;
    margin-left: 30px;
}
.edit-box input {
    height: 30px;
    width: 400px;
    margin: 5px;
}
.btn input {
    width: 100px;
    height: 30px;
    font-size: 12px;
    font-weight: 600;
    background: #ff3527;
    border: 2px solid #ff3527;
    border-radius: 20px;
    color: #fff;
}
.btn input:hover {
    background: #fff;
    color: #ff3527;
} 
</style>
<body>

    <nav>
        <div class="logo">OSBRS<span class="las la-bus"></span></div>
            <div class="menu">    
                <ul>
                    <li><a href="user.php" class="dash"><span class="las la-igloo"></span>Dashboard</a></li>
                    <li><a href="travel_history.php"><span class="las la-digital-tachograph"></span>Transaction/Travel History</a>
                    </li>
                    <li><a href="FareAndSched.html"><span class="las la-globe"></span>Fare&Schedule</a></li>
                    <li><a href=""><span class="las la-globe"></span>Map</a></li>
                    <li><a href=""><span class="las la-phone-alt"></span>Contact Us<span class="las la-angle-down"></span></a>
						<ul>
                            <li><a href=""><span class="las la-phone"></span>09396097985</a></li>
							<li><a href="https://www.facebook.com/OSBR-System-109878088116344">Facebook Page</a></li>
							<li><a href="mailto:osbrbus@gmail.com">Email</a></li>
                        </ul>
					</li>
                    <li><a href="" class="userprofile"><span class="las la-user-circle"></span>Profile<span class="las la-angle-down"></span></a>
                        <ul>
                            <li><a href="manageaccount.php">manage account</a></li>
                            <li><a href="home.php"><span class="las la-angle-left"></span>sign out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sbox">
				<input type="checkbox" id="check">
				<div class="search-box">
					<input type="text" placeholder="Search...">
					<label for="check" class="icon">
						<span class="las la-search"></span>
					</label>
				</div>
			</div>
    </nav>

    <div class="edit-box">
        <center>
            <h3>Update your Profile</h3>
        </center>
		<div class="editform-box">
			<form method="POST" action="#">
				<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname"><br>
				<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname"><br>
				<label>Address:</label><input type="text" value="<?php echo $row['address']; ?>" name="address"><br>
				<label>Phone number:</label><input type="int" value="<?php echo $row['phonenumber']; ?>" name="phonenumber"><br>
				<label>Username:</label><input type="text" value="<?php echo $row['username']; ?>" name="username"><br>
				<label>Email:</label><input type="email" value="<?php echo $row['email']; ?>" name="email"><br>
				<label>Password:</label><input type="password" value="<?php echo $row['password']; ?>" name="password"><br>
				<div class="btn">
                    
                    <center>
                        <input type="submit" name="submit">
					    <a href="user 2.php"><input type="submit" value="Back"></a>
                    </center>
				</div>
			</form>
		</div>
	</div>

    <?php
	include('config.php');

    if(isset($_GET['id'])){
	$ID=$_GET['id'];
 
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