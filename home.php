

<?php 

include 'config.php';

session_start();

error_reporting(0);


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password =($_POST['password']);
    $error= "";


    $sql = "SELECT * FROM userss WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_assoc($result);
	
    if ($row["usertype"]=="user") {
        $_SESSION['email'] = $row['email'];
        $error = "";
        header("Location: user.php");
    } else if ($row["usertype"]=="admin"){
		$_SESSION['email'] = $row['email'];
        $error = "";
        header("Location: admin.php");
    } 
    else {
       
         $error= "Incorrect username or password.";
        $success = "";
    } 
    
	
}
?>

<!DOCTYPE html>
<html>
    
<head>
    <title>HOMEPAGE</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body {
    background-color: #ddd;
    background-position: center;
    background-size: cover;
    background-attachment: fixed; 
}
nav {
    background-image: linear-gradient(to right top, #de1e2e, #dd3c40, #db5051, #d86262, #d37272);
}
nav:after {
    content: '';
    clear: both;
    display: table;
}
nav .logo {
    float: left;
    color: white;
    font-size: 45px;
    font-weight: 600;
    line-height: 70px;
    padding-left: 30px;
}
.menu {
    margin-left: 370px;
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
nav ul li a:hover .la-angle-down {
    transform: rotate(180deg);
}
.home {
    color: rgb(13, 14, 14);
    border-radius: 5px;
    box-shadow: 0 0 5px #ece7ee,
                0 0 5px #e9e5eb;
    height: 40px;
}
nav ul ul li a:hover {
    color: #fff;
    box-shadow: none;
}
nav ul ul {
    position: absolute;
    top: 200px;
    border-top: 3px solid #b65959;
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
	background-image: linear-gradient(to right top, #de1e2e, #dd3c40, #db5051, #d86262, #d37272);
    display: list-item;
    border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a {
    line-height: 50px;
	text-align: center;
}
nav ul ul ul li {
    top: -130px;
    left: 150px;
}






.container {
    width: 450px;
    min-height: 2000%;
    padding: 40px 30px;
    position: center;
    margin-left: 35%;
    margin-top: 8%;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 10px 12px 15px 15px rgba(0,0,0,0.15);
    
}


.container .login-text {
    color: rgb(17, 17, 17);
    font-weight: 500;
    font-size: 1.1rem;
    
    margin-bottom: 20px;
    text-transform: capitalize;
    margin-left: 10px;
}
.container .login-text:after{
	content: '';
    position: absolute;
    left: 590px;
    margin-top: 40px;
    transform: translateX(-50%);
    height: 4px;
    width: 37px;
    border-radius: 2px;
    background: linear-gradient(to right, #fb5283, #ff3527);
}

.container .login-social {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
    margin-bottom: 25px;
}
.container .login-social a {
    padding: 12px;
    margin: 10px;
    border-radius: 3px;
    box-shadow: 0 0 5px rgba(165, 19, 19, 0.3);
    text-decoration: none;
    font-size: 1rem;
    text-align: center;
    color: #FFF;
    transition: .3s;
}



.container .login-email .input-group {
    width: 100%;
    height: 45px;
    margin-bottom: 25px;
    
}

.container .login-email .input-group input {
    height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.6s ease;
  background-color: rgba(230, 230, 230, 0.6);
   
}

.container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
    background-color: #fff;
    border-color: #9b59b6;
}

.container .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: linear-gradient(to right, #fb5283, #ff3527);
	background-attachment: fixed;  
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: rgb(19, 17, 17);
    cursor: pointer;
    
    
}

.container .login-email .input-group .btn:hover {
    transform: translateY(-5px);
   
    /* transform: scale(0.99); */
    background: linear-gradient(to right, #fb5283, #ff3527);
}

.login-register-text {
    color: rgb(14, 15, 15);
    font-weight: 500;

}

.login-register-text a {
    text-decoration: none;
    color: #42e2da;
    margin-left: 2%;
    
}

.login-register-text a:hover
{
	color: #ffc107;
}

@media (max-width: 430px) {
    .container {
        width: 100px;
    }
    .container .login-social {
        display: block;
    }
    .container .login-social a {
        display: block;
    }
}
.search {
    display: inline-flex;
    float: right;
    padding-right: 30px;
    color: rgb(24, 22, 22);
    font-size: 30px;
    font-weight: 800;
    list-style: none;
    margin-top: -110px;
}
.search-logo a span:hover {
    color: cyan;
    transform: rotate(270deg);
}
.search-logo {
    padding-left: 5px;
    padding-top: 5px;
}
.search-bar {
    border-radius: 5px;
   
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
input, label {
    margin: auto;
    color: rgb(14, 13, 13);
    margin-bottom: 7%;
   
}
label {
    margin-left: 4px;
   

}

.error{
    text-align: center;
    color: red;
    
    
}
.logo{
size: 30%;
}

</style>

</head>
<body>
    <nav>
        <div></div>
		<div class="logo">OSBRS<span class="las la-bus"></span></div>
        <div class="menu">    
            <ul>
                <li><a href="home.php" class="home"><span class="las la-home"></span>Home</a></li>
                <li><a href="AboutUs.html" class="about"><span class="las la-users"></span>About Us</a></li>
                    
                <li><a href="" class="guide"><span class="las la-clipboard"></span>Guidelines<span class="las la-angle-down"></span></a>
                    <ul>
                        <li><a href="Terms&Conditions.html">Terms&Condition </a></li>
					</ul>
                </li>
                <li><a href="Map.html"><span class="las la-globe"></span>Map</a></li>
                <li><a href=""><span class="las la-phone-alt"></span>Contact Us<span class="las la-angle-down"></span></a>
					<ul>
                        <li><a href=""><span class="las la-phone"></span>09566850669</a></li>
						<li><a href="https://www.facebook.com/OSBR-System-109878088116344">Facebook Page</a></li>
						<li><a href="mailto:osbrbus@gmail.com">Email</a></li>
                    </ul>
				</li>
            </ul>
        </div>
           
            <div class="search">
                <div class="search-bar">
                    <input type="search" placeholder="Search..."/>
                </div>
				<div class="search-logo">
                    <a href=""><span class="las la-search"></span></a>
                </div>
            </div>
    
        </nav>
    
    <div class="container">
        <p class="error"><?php echo $error; ?></p>
    
    <form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Login</button>
        </div>
        <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
    </form>
</div>

</body>

</html>