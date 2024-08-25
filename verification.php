<?php
//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode,$passwd){
    $url = 'https://www.itexmo.com/php_api/api.php';
    $itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
    $param = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($itexmo),
        ),
    );
    $context  = stream_context_create($param);
    return file_get_contents($url, false, $context);
}
//##########################################################################

                            
if(isset($_POST['login'])){
$number=$_POST['num'];
$msg = "Your verification code is ";
$api = "ST-EARLJ850669_SPJHF";
$password = "em&guht!8#";
$otp = mt_rand(100000, 999999);
setcookie("otp", $otp);
$text = "From: Osbrs"."\n".$msg.$otp;


$result = itexmo($number,$text, $api, $password );
if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
Please CONTACT US for help. ";	
}else if ($result == 0){
    echo "The code sent successfully!";
}
else{	
echo "Error Num ". $result . " was encountered!";
}
}
if(isset($_POST['ver'])) {
    $verifyotp = $_POST['otp'];
    if ($verifyotp == $_COOKIE['otp']) {
        header("Location: home.php");
    }
    else {
        echo "The verification code you entered is incorrect!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify your Account</title>
</head>
<style>
    .container {
        position: relative;
        width: 250px;
        height: 250px;
        margin-top: 15%;
        left: 40%;
        border-radius: 8px;
        padding: 5px;
        box-shadow: 3px 5px 8px #222;
        background-color: #ff3527
    }
    form {
        padding: 10px;
        border-radius: 8px;
        background-color: #fff;
    }
    form input {
        height: 35px;
        width: 200px;
        padding: 8px;
        outline: none;
        border: none;
        border-radius: 20px;
        background-color: #e9d6d5;
        font-size: 17px;
    }
    form .btn {
        width: 150px;
        height: 35px;
        border: 3px solid #ff3527;
        background-color: #ff3527;
        color: #fff;
        border-radius: 20px;
        font-size: 20px;
        cursor: pointer;
    }
    form .btn:hover {
        background-color: #fff;
        color: #ff3527;
    }

</style>
<body>
    <div class="container">
            <form method="POST" action="verification.php">
                <center>
                    <input type="text" name="num" placeholder="Enter phone number again"><br><br>
                    <button name="login" class="btn">Send code</button><br><br>
                    <input type="text" name="otp" placeholder="Enter verification code"><br><br>
                    <button name="ver" class="btn">Verify code</button>
                </center>
            </form>
        
    </div>
</body>
</html>