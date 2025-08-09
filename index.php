<?php
//Reads the variables sent via POST from AT gateway 
$sessionID = $_POST["sessionID"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phonenumber"];
$text = $_POST["text"];

if ($text == ) {
    // This is the first request > Note how we start the response with CON 
    $response = "CON What would you want to check \n ";
    $response = "1.My accont No \n ";
    $response = " 2. MY Phone number \n";

}else if ($text == "1") {
    //Business logic for the first level response 
    $response = "CON Choose account information you want to view /n";
    $response = "1. Account Number \n";
    $response = "2. Account Balance \n";

}else if ($text == "2"){
      //Business logic for the first level response 
      //This is a terminal request . Note how we start with END.
      $response = "END Your phone number is " .$phoneNumber;

}else if ($text == "1*1"){
    //This is a second level response where the user selected 1 in the first instance 
    $accountNumber = " ACC1001";

    //This is a terminal request . Start with END 
    $response = "END Your account Number is " .$accountNumber;

}  else if ($text == "1*2"){
    //This id a second level response where the user selected 1 in the first instance. 
    $balance = "KES 10,000";

    // //This is a terminal request . Start with END 
    $response = "END Your balance is " .$balance;
}   
//echo the response to the API. The response depends on the statement that is fulfilled in each instance 
   header ('Content-type; text/plain')
   echo $response:

?>
