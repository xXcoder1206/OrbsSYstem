
<!DOCTYPE html>
<html>
    
<head>
    <title>User page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	
</head>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
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
.dash {
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

.reserve {
	width: 350px;
    margin: auto;
    margin-top: 70px;
    border-radius: 8px;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 10px 12px 15px 15px rgba(0,0,0,0.15);
}
.reserve .user {
    display: grid;
    display:inline-block;
	margin-right:10px;
    display: block; 
}
input {
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.6s ease;  
}
input {
    margin: auto;
    color: rgb(14, 13, 13);
    margin-bottom: 7%; 
}
label {
    margin-left: 4px;
}
.num-info{
	color: grey;
}
.num-info1,
.num-info2{
	color: grey;
}
#flex, #flex1 {
	width: 25%;
}
#flex1{
	right: 0;
}
#date{
	color: grey;
}

button {
    font-weight: 600;
    width: 140px;
    border: 2px solid #111;
    padding: 12px 10px;
    outline: none;
    color: #f5f5f5;
    background: #111;
    margin-left: 65px;
    margin-top: 20px;
    border-radius: 8px;
    transition: all 300ms ease-in-out;
}

button:hover {
    color: #111;
    background: #f5f5f5;
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
                    <li><a href=""><span class="las la-user-circle"></span>Profile<span class="las la-angle-down"></span></a>
                        <ul>
                            <li><a href="edit2.php">manage account</a></li>
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

    <div class="reserve">
         <div class="user">
			<form action="reserve.php" method="POST" >
                <input type="text" name="firstname" placeholder="Firstname" required>
                <input type="text" name="lastname" placeholder="Lastname" required>
				<input type="text" name="departure" placeholder="Departure" required>
				<input type="text" name="destination"placeholder="Destination" required>
				<input id="date" type="date" name="date"placeholder="Date" required>
				<label class="num-info">Type and Quantity of Passenger:</label><br><br>
					<label class="num-info1">Adult</label>
						<input id="flex" type="number" name="adult" placeholder="0">
					<label class="num-info2">Children</label>
						<input id="flex1"type="number" name="child"placeholder="0">
				<input type="int" name="contact" placeholder="Contact Number" required>
				</div>
				<div class="con">
					<button name="submit" onclick="remind()">Continue</button>
				</div>
			</form>
    </div>
    <script>
        function remind(){
            window.location("succ.html");
        }
    </script>
</body>    

</html>