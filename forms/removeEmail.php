<?php
 $referersite = strtolower($_SERVER['HTTP_REFERER']);

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
//echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));

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
if($emailVerified === false && $phoneVerified === false){
		$verified = false;
}

//name and ip test
if ($name == "" || is_null($name)||  $sentIP == "" || is_null($sentIP)  ){
	$verified = false;
}



//Sending the email
if ($verified){

//Building the email
$to = 'jed@websitetalkingheads.com';
$subject = "Contact Form on ".$referersite;


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";



// More headers
$headers .= "From: forms@websitetalkingheads.com\r\n";
	$email_message = "Email remove Form on ".$referersite."<br>";
	$email_message .= "Email: ".$email."<br>";
	$email_message .= "Sent From: ".$sentIP."<br>";
	$email_message .= "From Page: ".$referersite."<br>";
	mail($to,$subject,$email_message,$headers);
	$message_send = "Thank You for Submitting Form";	
	
}
$refererSiteNum = strpos($referersite, '.com');
$refererSiteURL = substr($referersite, 0, $refererSiteNum);
if($refererSiteURL == "https://www.websitetalkingheads"){
	$skin = "wth";
}else{
	$skin = "other";
}


?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>website talking heads - add an online video spokesperson to your website, virtual spokesperson, website video spokesperson, web spokesperson, website actor</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
<meta name="description" content="online video spokesperson.  for only $199, add a virtual spokesperson to your website.  an online presenter can increase traffic conversion rates on your website.  integrate flash video, website video, website actor and objects to create dynamic streaming video and easily add it your existing website.">
<meta name="robots" content="index, follow">
<!-- (robot commands: all, none, index, no index, follow, no follow) -->
<meta name="revisit-after" content="30 days">
<meta name="distribution" content="global">
<meta name="rating" content="general">
<meta name="content-language" content="english">
<meta name="verify-v1" content="ynespqoawk51pmbv7/pfklg0agx7aqpkhxxcyaxggf8=" />
<meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/fluid.css" rel="stylesheet" type="text/css" />
<link href="../css/contact.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
    <?php include ('../includes/header.php'); ?>
    <h1>Thank You</h1>
    <h2>You have been unsubscribed.  please allow 24 to 48 hours to take effect.</h2>
</div>
<?php include ('../includes/footer.php');?>
<?php include ('../includes/chatform.php'); ?>
</body>
</html>
</html>