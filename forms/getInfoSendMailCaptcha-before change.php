<?php
require_once __DIR__ . '/vender/autoload.php';
$siteKey = '6Lf3qw4TAAAAAAIO861UoBcvmB3I7RaXmzC_q8uR';
$secret = '6Lf3qw4TAAAAAOM2qRlX8F9nux4mJzJKPXNTyqmc';
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
if ($resp->isSuccess()){
 $referersite = strtolower($_SERVER['HTTP_REFERER']);

$name= $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$company = $_REQUEST['company'];
$message = htmlspecialchars($_REQUEST['description']);
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
$to = 'andy@websitetalkingheads.com';
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
	mail($to,$subject,$email_message,$headers);
	$message_send = "Thank You for Submitting Form";	
	
}
$refererSiteNum = strpos($referersite, '.com');
$refererSiteURL = substr($referersite, 0, $refererSiteNum);
$pageContent = "<h2>Thank you for contacting us. One of our Project Managers will be in touch with you within 2 business days.</h2>
    <div id = 'callUs'>If you would like to talk to us immediately please call us at<span class='blueText'> 801-748-2281</span>.</div>
    <div class='contactInfo'>
        <div class='valueNames'>
            <ul>
                <li>Name:";
$pageContent .= $name;
$pageContent .= "                </li>
                <li>Company:";
 $pageContent .= $company;
 $pageContent .= "               </li>
                <li>Email:";
$pageContent .= "$email;
                </li>
                <li>Phone:";
$pageContent .= $phone;
$pageContent .= "                </li>
                <li>Message:";
$pageContent .= $message;
 $pageContent .= "               </li>
                <li>Sent From:";
$pageContent .= $referersite;
$pageContent .= "               </li>
                <li>IP:";
$pageContent .= $sentIP;
$pageContent .= "                </li>
                <li>Verified:";
$pageContent .= $verified;
$pageContent .= "                </li>
                <li>test</li>
            </ul>
        </div>
    </div>";
}else{
	$pageContent = "<h1>FAIL</>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website Talking Heads - Add an Online Video Spokesperson to Your Website, Virtual Spokesperson, Website Video Spokesperson, Web Spokesperson, Website Actor</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
<meta name="description" content="Online video spokesperson.  For only $199, add a virtual spokesperson to your website.  An online presenter can increase traffic conversion rates on your website.  Integrate flash video, website video, website actor and objects to create dynamic streaming video and easily add it your existing website.">
<META NAME="robots" CONTENT="index, follow">
<!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="distribution" CONTENT="global">
<META NAME="rating" CONTENT="general">
<META NAME="Content-Language" CONTENT="english">
<meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8=" />
<meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="../css/contact.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/fluid.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <?php include ('../includes/header.php'); ?>
<section id="container">
    <?=$pageContent?>
    <div id="c"></div>
    <div class="returnBtn"><a href=".$referersite.">Return to Previous Page</a></div>
    
</section>
<section class="formContent" style="height:300px">
<form id="__vtigerWebForm" name="VideoPresentation" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <fieldset>
        <input type="hidden" name="publicid" value="3df69c158f3d078190790b8ebd04864e">
        <input type="hidden" name="name" value="VideoPresentation">
        <input name="lastname" data-label="Last Name" class="form-control input-md" id="lastname" type="text" value="<?=$name?>">
        <input  type="text" name="company" data-label="Company" value="<?=$company?>">
        <input name="email"  data-label="Email" class="form-control input-md" id="email" required="" type="text" value="<?=$email?>">
        <input type="text" name="phone" data-label="Phone" class="form-control input-md" value="<?=$phone?>">
        <textarea name="description" class="form-control input-md" id="description" value="<?=$message?>"><?=$message?></textarea>
    </fieldset>
 </form>
 </section>
<!-- <script>document.getElementById("__vtigerWebForm").submit();</script>-->
</body>
</html>