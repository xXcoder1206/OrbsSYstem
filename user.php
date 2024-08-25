
<?php
	
	session_start();
	
	
	unset($_SESSION['SESS_MEMBER_ID']);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
    <title>user page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

	
	
		<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
		

	

		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
				

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				
				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				
				if(dt == 0) return;

				
				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				
				ed.setRangeLow( dt );
				
			
				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

	
		</script> 
	
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body {
    background: #ddd;
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
    position: relative;
    float: left;
    color: white;
    font-size: 30px;
    font-weight: 600;
    padding-left: 10px;
}
.menu {
    margin-left: 130px;
    padding-top: 60px;
}


nav ul {
    list-style: none;
    margin-right: 30    px;

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
	background-image: linear-gradient(to right top, #de1e2e, #dd3c40, #db5051, #d86262, #d37272);
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

input {
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
}
#date{
	color: grey;
}
.content {
    margin-top: 50%;
    display: flex;
}

</style>
<body>
    <nav>
        <div class="logo">OSBRS<span class="las la-bus"></span></div>
            <div class="menu">    
                <ul>
                    <li><a href="user.php" class="dash"><span class="las la-igloo"></span>Dashboard</a></li>
                    <li><a href="travel-history.php"><span class="las la-digital-tachograph"></span>Transaction/Travel History</a></li>
                    <li><a href="FareAndSched.html"><span class="las la-digital-tachograph"></span>Fare And Schedule</a></li>
                   
                    <li><a href="userroute.html"><span class="las la-globe"></span>Map</a></li>
                    <li><a href=""><span class="las la-user-circle"></span>Profile<span class="las la-angle-down"></a>
						<ul>
                            <li><a href="manageaccount.php">manage account</a></li>
							<li><a href="home.php"><span class="las la-sign-out-alt"></span>sign out</a></li>
                        </ul>
					</li>
                    <li><a href=""><span class="las la-phone-alt"></span>Contact Us<span class="las la-angle-down"></a>
						<ul>
                            <li><a href=""><span class="las la-phone"></span>09566850669</a></li>
							<li><a href="https://www.facebook.com/OSBR-System-109878088116344">Facebook Page</a></li>
							<li><a href="mailto:osbrbus@gmail.com">Email</a></li>
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
    
    <div id="logo" style="left: 600px; height: auto; top: 150px; width: 260px; position: absolute; z-index:4;">
					
					<div class="content">
                    <div class="accordion-content" >
						<form action="selectset.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Select Route: 
						<select name="route" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						<?php
						include('config.php');
						$result = mysqli_query($conn,"SELECT * FROM route");
						while($row = mysqli_fetch_array($result))
							{
								echo '<option value="'.$row['id'].'">';
								echo $row['route'].'  :'.$row['type'].'  :'.date("h:i A",strtotime("2020-01-01 ".$row['time']));
								echo '</option>';
							}
						?>
						</select>
						</span><br>
						<span style="margin-right: 11px;">Date: 
						<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10" readonly="readonly" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						</span><br>
						<span style="margin-right: 11px;">No. of Passenger: 
						<select name="qty" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						</select>
						</span><br><br>
						<input type="submit" id="submit" value="Next" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
                    </div>
					
					
    
    <br>
    <br>
    <br>
   
</body>    

</html>