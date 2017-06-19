<?php
 $referersite = strtolower($_SERVER['HTTP_REFERER']);
//echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));
$name= $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$company = $_REQUEST['company'];
$message = htmlspecialchars($_REQUEST['theMessage']);
if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARTDED_FOR'] != '') {
    $sentIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $sentIP = $_SERVER['REMOTE_ADDR'];
}

$verified = true;

foreach ($_REQUEST as $key => $value)  {
	$testField = array("href", "url=");
		foreach ($testField as $tF){
  		$fieldFinder = strripos($value, $tF);
		 if(is_numeric($fieldFinder)){
			 $verified = false;
			 break;
         }else{
		 }
		 }
}

if($message == "Message"){$message="";}
if($company == "Company"){$company="";}
if ($company == "google"){
	$verified = false;
}

//PHONE AND EMAIL TEST
$phoneVerified = true;
$phone = preg_replace("/[^0-9]/","",$phone);

$phoneLength =strlen($phone);
if ($phoneLength ==0){
		$phoneVerified = false;
}
if ($phoneLength <10 || $phoneLength >12){
		$phoneVerified = false;
}
$emailVerified = true;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // The email address is valid
} else {
  $emailVerified = false;
}
// check email and phone together
if($emailVerified === false && $phoneVerified === false){
		$verified = false;
}
//block 123456

if($phone === "123456"){
		$verified = false;
}

//name and ip test
if ($name == "" || is_null($name)||  $sentIP == "" || is_null($sentIP)  ){
	$verified = false;
}
//theMessage test
$searchString=array("blog", "ugg", "jersey","http", "channel", "vuitton", "Ÿ", "ã", "sina", "outlet", ".asp", "¥","Œ","ã","goose", "url", "lululemon");
$arrlength=count($searchString);

for($x=0;$x<$arrlength;$x++) {
   $searchFor= $searchString[$x];
   $pos = strpos($message, $searchFor);
     if ($pos != false) {
	$verified = false;
     }
}
//$company test
$searchString=array("blog", "ugg", "jersey","http", "channel", "vuitton", "Ÿ", "ã", "sina", "outlet", ".asp", "¥","Œ","ã","goose", "url", "lululemon","wordpress");
$arrlength=count($searchString);

for($x=0;$x<$arrlength;$x++) {
   $searchFor= $searchString[$x];
   $companyLower = strtolower($company);
   $pos = strpos($companyLower, $searchFor);
     if ($pos != false) {
	$verified = false;
     }
}
//Sending the email
if ($verified){

//Building the email
$to = 'andy@websitetalkingheads.com,sales@websitetalkingheads.com,ericka@websitetalkingheads.com';
$subject = "Contact Form on ".$referersite;


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";



// More headers
	$headers .= "From: forms@websitetalkingheads.com\r\n";
	$email_message = "Contact Form on ".$referersite."<br>";
	$email_message .= "Name:" .$name. "<br>";
	$email_message .= "Company: ".$company." <br>";
	$email_message .= "Email: ".$email."<br>";
	$email_message .= "Phone: ".$phone." <br>";
	$email_message .= "Message: ".$message."<br>";
	$email_message .= "Sent From: ".$sentIP."<br>";
	$email_message .= "From Page: ".$referersite."<br>";
	$email_message .= "verified: ".$verified."<br>";

	mail($to,$subject,$email_message,$headers);
	$message_send = "Thank You for Submitting Form";	
	
}
$refererSiteWTH = strpos($referersite, 'websitetalkingheads');
if($refererSiteWTH === false){
	$skin = "other";
}else{
	$skin = "wth";
}
if(isset($_REQUEST["destination"])){
      header("Location: {$_REQUEST["destination"]}");
  }else if(isset($_SERVER["HTTP_REFERER"])){
      header("Location: {$_SERVER["HTTP_REFERER"]}");
  }else{
       /* some fallback, maybe redirect to index.php */
  }

?>
