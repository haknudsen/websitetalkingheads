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

if($company="Message"){$message="";}
if($company="Company"){$company="";}
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
$to = 'andy@websitetalkingheads.com, sales@websitetalkingheads.com';
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
if($refererSiteURL == "https://www.websitetalkingheads"){
	$skin = "wth";
}else{
	$skin = "other";
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website Talking Heads - Add an Online Video Spokesperson to Your Website, Virtual Spokesperson, Website Video Spokesperson, Web Spokesperson, Website Actor</title>
<link href="../css/contact.css" rel="stylesheet" type="text/css" />
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
<meta name="description" content="Online video spokesperson.  For only $199, add a virtual spokesperson to your website.  An online presenter can increase traffic conversion rates on your website.  Integrate flash video, website video, website actor and objects to create dynamic streaming video and easily add it your existing website.">
<META NAME="robots" CONTENT="index, follow"> <!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="distribution" CONTENT="global">
<META NAME="rating" CONTENT="general">
<META NAME="Content-Language" CONTENT="english">
<meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8=" />
<meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr" />
<link href="../styles.css" rel="stylesheet" type="text/css" />
<?php include ('../includes/googlescripts.php'); ?> 
</head>
<body>
<div id="container">
    <?php 
if($skin=="wth"){
	include ('../includes/header.php'); 
}else{
	
}
if($skin == "wth"){
$contactMessage = "Thank you for contacting us at WebsiteTalkingHeads<sup>&#174;</sup>. One of our Project Managers will be in touch with you within 2 business days.";
}else{
	$contactMessage = "Thank you for contacting us. One of our Project Managers will be in touch with you within 2 business days.";
}
?>
    
    
    
    <div id="contactHeader">Thank you for Contacting  Us.</div>
    <div id = "contactMessage"><?=$contactMessage?></div>
    <div id = "callUs">If you would like to talk to us immediately please call us at<span class="blueText"> 801-748-2281</span>.</div>
    <div class="contactInfo">
        <div class="valueNames">
            <ul>    
                <li>Name: <?=$name?></li>
                <li>Company: <?=$company?></li>
                <li>Email: <?=$email?></li>
                <li>Phone: <?=$phone?></li>
                <li>Message: <?=$message?></li>
                <li>Sent From: <?=$referersite?></li>
                <li>IP: <?=$sentIP?></li>
                <li>Verified: <?=$verified?></li>
            </ul>
        </div>
        
        
    </div>
    <div id="c"></div>
    <div class="returnBtn">
        <?php 
if($skin!="wth"){
	 Echo "<a href=".$referersite.">Return to Previous Page</a>";
}
?>  
</div>
    <?php 
if($skin=="wth"){
	 include ('../includes/footer.php');
}?>   
</div>

<?php 
if($skin=="wth"){
	 include ('../includes/chatform.php'); 
}

?>  
</body>
</html>