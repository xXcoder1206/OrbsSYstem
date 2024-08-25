 <?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM userss WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO userss  (firstname, lastname, email, username, phonenumber, address,  password)
					VALUES ('$firstname', '$lastname', '$email', '$username', '$phonenumber', '$address', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				$_SESSION['username'] = $row['username'];
				header("Location: verification.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: #ddd;
}
.container{
  max-width: 800px;
  width: 100%;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
  align-content: center;
	

	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
  padding: 20px 10px;
    margin: 2%;
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  
  margin-left: 10%;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(to right, #fb5283, #ff3527);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
  margin-left: 15%;
  
}
form .user-details .input-group{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
  margin-left: 50px;
  
}

.user-details .input-group input{
  height: 45px;
  width: 170%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 10px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.6s ease;
  background-color: rgba(230, 230, 230, 0.6);
}
.user-details .input-group input:focus,
.user-details .input-group input:valid{
  border-color: #9b59b6;
}
 
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 40px;
   margin-left: 50px 0
   
 }
 form .button input{
  display: block;
  width: 200%;
  padding: 15px 20px;
  margin-left: 200%;
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
 form .button input:hover{
  transform: translateY(-5px);
   
  /* transform: scale(0.99); */
  background: linear-gradient(to right, #fb5283, #ff3527);

  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-group{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
.login-register-text {
  color: rgb(12, 11, 11);
  font-weight: 600;
  margin-top: 4%;
  text-align: center;

}

.login-register-text a {
  text-decoration: none;
  color: #5ce7b2;
  
}

.login-register-text a:hover
{
color: #ffc107;
}

.right{
	background: url("register.gif") no-repeat center;
	background-size: cover;
	height: 80%;
  margin-top: 50px;
  margin-left: 50px;
 
}

.left{
	padding: 25px 50px;
}
.container .login-text:after{
	content: '';
    position: absolute;
    left: 780px;
   margin-top: 40px;
    transform: translateX(-50%);
    height: 4px;
    width: 37px;
    border-radius: 2px;
    background: linear-gradient(to right, #fb5283, #ff3527);
}
.container .login-email .input-group .btn {
    display: block;
    width: 130%;
    
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #a29bfe;
    outline: none;
    border-radius: 27px;
    font-size: 1.2rem;
    background: linear-gradient(to right, #fb5283, #ff3527);
    cursor: pointer;
    transition: .3s;
    margin-left: 30px;
  }

.container .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: linear-gradient(to right, #fb5283, #ff3527);
  

}

</style>
   </head>
   <body>
    <div class="container">
      <div class="right"></div>
        <form action="" method="POST" class="login-email">
          <div class="user-details">
            <p class="login-text" style="font-size: 2rem; font-weight: 500 ;">Registration Form</p>
            <div class="input-group">
                <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" maxlength="11" placeholder="Phone Number" name="phonenumber" value="<?php echo $phonenumber; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="home.php">Login Here</a>.</p>
          </div>
        </form>
    </div>
</body>
</html>

