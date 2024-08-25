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

                            
if($_POST){
$number=$_POST['number'];
$name= $_POST['name'];
$msg=$_POST['msg'];
$api = "ST-EARLJ850669_SPJHF";
$password = "em&guht!8#";
$text = "From: ".$name. "\n".$msg;


$result = itexmo($number,$text, $api, $password );
if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
Please CONTACT US for help. ";	
}else if ($result == 0){
echo "Message Sent!";
}
else{	
echo "Error Num ". $result . " was encountered!";
}
}



?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Comapatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scales=1">
    <title> Message your customer </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <style>
        .container {
            margin: 10px auto;
            padding: 10px;
            width: 800px;
            height: 630px;
            border: 2px solid green;
            border-radius: 8px;
        }
        .container h2 {
            text-align: center;
        }
        .row {
            width: 800px;
            height: 90%;
            padding: 10px;
            margin-left:40px;
        }
        .name-number {
            display: inline-flex;
        }
        .form-group {
            margin-right: 50px;
            width: 300px;
            height: 35px;
            border-radius: 10px;
        }
        .name-number .form-group label {
            font-size: 20px;
            font-weight: 600;
        }
        .form-group-msg {
            margin-top: 40px;
        }
        .form-group-msg label {
            font-size: 20px;
            font-weight: 600;
        }
        .form-group-msg .form-control-area {
            width: 650px;
        }
        .content {
            margin: 50px;
        }
    </style>
    <body>
        <div class="container">
            <a href="admin.php"><button type="submit" class="btn btn-success">Back</button></a>
            <h2>Send a Message to Customers</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <form method="POST" action="sms.php">
                        <div class="name-number">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" msxlength="20" class="form-control" id="name" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Recipient's Mobile Number</label>
                                <input type="text" maxlength="11" class="form-control" id="number" placeholder="Mobile Number" name="number" required>
                            </div>
                        </div>   
                        <div class="form-group-msg">
                            <label for="msg">Your Message</label>
                            <br><textarea class="form-control-area" rows="13" name="msg" placeholder="Message Here" onkeyup="countChar(this)" required></textarea>
                        </div>
                        <p class="text-right" id="charNum">460</p>
                        <div class="send">
                            <button type="submit" class="btn btn-success">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function countChar(val){
            var len = val.value.length;
            if(len>= 460){
                val.value = val.value.substring(0,460);
            }else{
                $('#charNum').text(460 - len);
            }
        }
    </script>

    <div class="content">
                <div class="content-msg">
                    <div class="content-heading">
                        <p>
                            <h2>Copy and Paste in the text area to send the message to the customers. </h2>
                        </p>
                    </div>
                    <div class="content-text">
                        <h2>This message is for transactions or reservations.</h2><br>
                        <h3>Message Content #1: </h3>
                            <p>
                                From: OSBRS
                                <br><br>
                                You have successfully reserved a seat. Please follow the 
                                steps provided in our site to pay your Transaction and Get your E-ticket. Thank you!!
                            </p><br>
                        <h3>Message Content #2: </h3>
                            <p>
                                From: OSBRS
                                <br><br>We received your payment, your seat is now secured!
                                <br><br>Here's your ticket, Enjoy your ride!!
                                <br><br>
                                Name:
                                <br>Departure:
                                <br>Destination:
                                <br>Date:
                                <br>Adult:
                                <br>Children:
                                <br>Contact #:
                                <br><br>
                                For more information, Please read the terms and conditions in our site about ticket validation.
                            </p>
                    </div>
                </div>
            </div>

    </body>
</html>