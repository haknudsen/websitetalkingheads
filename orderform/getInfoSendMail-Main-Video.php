<?php
 $referersite = strtolower($_SERVER['HTTP_REFERER']);

$name= $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$website = $_REQUEST['website'];
$VideoType = $_REQUEST['Video-Type'];
$videoLength = $_REQUEST['videoLength'];
$ActorName = $_REQUEST['ActorName'];
$Wardrobe = $_REQUEST['Wardrobe'];
$videoLength = $_REQUEST['videoLength'];
$Positioning = $_REQUEST['Positioning'];
$crop = $_REQUEST['crop'];
$Autostart = $_REQUEST['Autostart'];
$OncePerSession = $_REQUEST['OncePerSession'];
$Appearance = $_REQUEST['Appearance'];
$ourWordCount =$_REQUEST['ourWordCount'];
$background =$_REQUEST['background'];
$agree = $_REQUEST['agree'];
$script = $_REQUEST['script'];
$clientInstructions = $_REQUEST['clientInstructions'];

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


//Sending the email
if ($verified){

//Building the email
$to = 'andy@websitetalkingheads.com,sales@websitetalkingheads.com,sales@websitetalkingheads.com';
$subject = "Video Purchase from Main Order From ".$referersite;


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";



// More headers
$headers .= "From: forms@websitetalkingheads.com\r\n";
$email_message =  '
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order from Website Talking Heads</title>
<style type="text/css">
body {
	width: 100%;
	height: 100%;
	margin: 0 auto;
	padding: 0;
	-webkit-font-smoothing: antialiased;
	background-color: #DCF0FF;
}
h1 {
	padding: 0px;
	margin: 0px;
	font-size: 26px;
	color: #000000;
	text-align: center;
	text-shadow: 0px 1px 2px rgba(0,0,0,0.7);
}
h2 {
	padding: 0px;
	margin: 0px;
	font-size: 22px;
	color: #000000;
	text-align: center;
	text-shadow: 0px 1px 1px rgba(0,0,0,0.7);
}
.center {
	text-align: center;
	font-size: 90%;
}
ul {
	padding-left: 40px;
}
.theMessage {
	margin: 0px auto;
	width: 80%;
	margin: 0 auto;
	max-width: 600px;
	margin-bottom: 10px;
	margin-top: 10px;
	padding-top: 20px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 20px;
	border-radius: 18px;
	background-color: #FFF;
	-webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.6);
	box-shadow: 0px 1px 12px rgba(0,0,0,0.6);
	border: 2px solid #1981FF;
	list-style-type: none;
}
a {
 color"#00A3FF;
	text-decoration: none;
}
video {
	padding: 10px 0px 5px 0px;
}
.linkButton {
	background-color: #FF9100;
	color: #fff;
	margin: 10px;
	padding: 5px 10px;
5px 10px;
	border-radius: 10px;
	border: 1px solid #1981FF;
	text-decoration: none;
	text-shadow: 0px 1px 0px 2px #3a5606
}
</style>
<style type="text/css">
@media only screen and (max-width: 800px) {
table[class=container] {
	width: 560px !important;
}
td.promos table {
	width: 100% !important;
}
td[class=headline] {
	padding: 5px 0px 0px 5px !important;
}
td[class=headline] h1 {
	font-size: 28px !important;
}
td[class=banner] img {
	display: none;
}
td[class=banner] {
	width: 560px;
	height: 100px;
	background: url(
../create-canvas/assets/WTH-banner-medium.jpg) no-repeat 0px 0px;
}
.promo img {
	display: none;
}
table[class=promo_1] {
	width: 500px !important;
	margin: 0px !important;
}
table[class=promo_2] {
	width: 500px !important;
	margin: 0px !important;
}
table[class=promo_3] {
	width: 500px !important;
	margin: 0px !important;
}
table[class=promo_1] td {
	background: url(
../create-canvas/assets/video_demo-small.png) no-repeat 0px 40px;
0px 40px 140px !important;
	padding: 0px 0px 10px 140px !important;
}
table[class=promo_2] td {
	background: url(
../create-canvas/assets/whiteboard_demo-small.png) no-repeat 0px 40px;
0px 40px 140px !important;
	padding: 0px 0px 10px 140px !important;
}
table[class=promo_3] td {
	background: url(
../create-canvas/assets/animation_demo-small.png) no-repeat 0px 40px;
0px 40px 140px !important;
	padding: 0px 0px 10px 140px !important;
}
}

@media only screen and (max-width: 500px) {
table[class=container] {
	width: 440px !important;
}
td[class=headline] h1 {
	font-size: 20px !important;
}
td[class=banner] {
	width: 240px;
	height: 65px;
	background: url(
../create-canvas/assets/WTH-banner-small.jpg) no-repeat 100px 0px;
	background-color: #FFFFFF;
}
td.promos td h1 {
	margin-bottom: 8px !important;
}
td.promos td img {
	display: none !important;
}
video {
	width: 320px !important;
	height: 180px !important;
}
video img {
	width: 320px !important;
	height: 180px !important;
}
table[class=promo_1] {
	width: 400px !important;
	margin: 0px !important;
}
table[class=promo_2] {
	width: 400px !important;
	margin: 0px !important;
}
table[class=promo_3] {
	width: 400px !important;
	margin: 0px !important;
}
ul {
	padding-left: 20px;
}
}

@media only screen and (max-width: 360px) {
body {
	width: auto!important;
}
table[class=container] {
	width: 280px !important;
}
table[class=promo_1] {
	width: 300px !important;
	margin: 0px !important;
}
table[class=promo_2] {
	width: 300px !important;
	margin: 0px !important;
}
table[class=promo_3] {
	width: 300px !important;
	margin: 0px !important;
}
ul {
	padding-left: 10px;
}
}
}
</style>
</head>

<body bgcolor="#3DACEB">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#DCF0FF" >
  <tr>
    <td><table class="container" width="860" align="center" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td valign="middle" class="banner" bgcolor="#ffffff" style="padding: 10px 0px 0px 0px; font-family: Arial, Helvetica, sans-serif; align:center;" ><img src="
../create-canvas/assets/WTH-banner-large.jpg" width="860" height="100" alt="Website Talking Heads Video Production"/></td>
          </tr>
          <tr>
            <td align="center" valign="top" bgcolor="#ffffff" class="headline" style="padding: 5px 10px 15px 10px; font-family: Arial, Helvetica, sans-serif;"><h1 style = "font-size:32px; color:#000000; text-align: center;">Thank you for your order</h1></td>
          </tr>
			<tr>
				<td>
            <table class="theMessage">
			<tr>
				<td>
					  <ul>
						<li>Name: ' . $name . '
						</li>
						<li>Email:
						  ' . $email . '
						</li>
						<li>Phone:
						  '.$phone.'
						</li>
						<li>Website:
						  ' .$website. '
						</li>
						<li>Video Type:
						  ' .$VideoType. '
						</li>
						<li>Video Length:
						  ' .$videoLength. '
						</li>
						<li>Actor:
						  ' .$ActorName. '
						</li>
						<li>Wardrobe:
						  ' .$Wardrobe. '
						</li>
						<li>Video Crop:
						  ' .$crop. '
						</li>
						<li>Video Length:
						  ' .$videoLength. '
						</li>
						<li>Word Count:
						  ' .$ourWordCount. '
						</li>';

						 
	switch($VideoType){
		case "Basic Video":
			$email_message .=  '<li>Background: ' . $background . '
						</li>';
			break;
		case "Website Spokesperson":
			$email_message .=  '<li>Positioning: ' . $Positioning . '
						</li>
						<li>Autostart: ' . $Autostart . '</li>
						<li>OncePerSession: ' . $OncePerSession . '
						</li>
						<li>Appearance: ' . $Appearance .'
						</li>';
		default:
			$email_message .=  '';
			break;
							}
$email_message .=  '						<li>Instructions:
						  ' .$clientInstructions. '
						</li>
						<li>Terms:
						  ' .$agree. '
						</li>
						<li>Sent From:
						  ' .$referersite. '
						</li>
						<li>IP:
						  ' .$sentIP. '
						</li>
						<li>Verified:
						  ' .$verified. '
						</li>
					  </ul>
					  </td>
					  </tr>
                <tr>
                  <td><h2>Script: </h2>
					  ' .$script. '
			</tr>
              </table>
              <table class="theMessage">
			<tr>
				<td class="center">If you have any questions please contact us at the link below or Call 801-748-2281</td>
			</tr>
			<tr>
				<td align="center" style="padding:20px;" ><A class="linkButton" href="mailto:sales@websitetalkingheads.com" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Contact Us</A></td>
			</tr>
				
			</table>
			</td>
			</tr>
                <tr>

            	<td valign="top" bgcolor="#55315d" class="promo" style="background-color: #ddeeff; padding: 0px;border-right: 1px solid #00A3FF; border-top: 1px solid #00A3FF; border-left: 1px solid #00A3FF;">
                	<h1>Learn About Some of Our Other Products</h1>
                </td>
            </tr>
        <tr>
            <td valign="middle" bgcolor="#ddeeff" class="promo" style="background-color: #ddeeff; padding: 10px; border-right: 1px solid #00A3FF; border-bottom: 1px solid #00A3FF; border-left: 1px solid #00A3FF;">
            
		<table class="promo_1" width="240" align="left" border="0" cellspacing="0" cellpadding="0" style="margin-top:16px">
			<tr>
				<td valign="top" style="margin-left:20px; padding-left: 20px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height: 16px; color: #000000;">
								<img class="promo" alt="Custom Video Presentations" src="
../create-canvas/assets/video_demo.png">
								<h1 style="font-size:16px;padding:4px 0px 4px 0px;">Custom Video Presentations</h1>
								Our company can create professional and affordable custom video presentations for your personal use or for your business. Our videos are all shot and built here at our headquarters to maintain quality and precision.
								<br><br>
								<a class="linkButton" href="
../videopresentations/custompresentations.php" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Learn more</a></td>
			</tr>
		</table>
		<br />
		<table class="promo_2" width="240" align="left" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td valign="top" style="padding-left: 20px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height: 16px; color: #000000;">
								<img class="promo" alt="Video Animation" src="
../create-canvas/assets/video_animation_demo.png" >
								<h1 style="font-size:16px;padding:4px 0px 4px 0px;">Video Animation</h1>
								Need a eye-catching sales message for advertising, your website, YouTube, or video SEO?  We can create an Animated Video to meet your needs!  Our personalized approach is what sets us apart from the competition.
								<br><br>
								<a class="linkButton" href="
../videopresentations/animation.php" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Learn more</a>
							</td>
			</tr>
		</table>
		<br />
		<table class="promo_3" width="240" align="left" border="0" cellspacing="0" cellpadding="0"style="margin-top:-20px">
			<tr>
				<td valign="top" style="margin-left:20px; padding-left: 20px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height: 16px; color: #000000;">
								<img class="promo" alt="Whiteboard Video" src="
../create-canvas/assets/whiteboardvideo_demo.png">
								<h1 style="font-size:16px;padding:4px 0px 4px 0px;">Whiteboard Video</h1>
							   We use fast-paced, brain stimulated imagery and content to ignite your customers build their interest in your solution and ignite their buying habits.  We look forward to working with you to take your business to the next level!<br><br>
								<a class="linkButton" href="
../whiteboard/index.php" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Learn more</a>
								</td>
			</tr>
		</table>
                  
         </td>
         </tr>
            <tr>
            	<td align="center" bgcolor="#007ABF">
					<video width="480" height="270" poster="https://dev.websitetalkingheads.com/mail/video/TalkingHeadsMailDemo.png" controls>
						<source src="https://dev.websitetalkingheads.com/mail/video/TalkingHeadsDemo.mp4" type="video/mp4">
						<a href="https://youtu.be/E2RwcoXhPG0"><img src="https://dev.websitetalkingheads.com/mail/video/TalkingHeadsMailDemoLink.jpg" width="480" height="270"  alt="Website Talking Heads Video Production"/></a>
					</video>
				</td>
            </tr>
            <tr>
                <td align="center" valign="middle" bgcolor="#ffffff" style="padding: 0px 30px 0px 30px; border-top: 1px solid #00A3FF;border-right: 1px solid #00A3FF; border-left: 1px solid #00A3FF;"><a href="
https://websitetalkingheads.com/"><img src="
../create-canvas/assets/logo.png" width="280" height="109" alt="Website Talking Heads Video Production"/></a>
                </td>
            </tr>
        </tbody>
    </table>
    </td>
   </tr>
</table>
</body>
</html>

</html>';





	mail($to,$subject,$email_message,$headers);
	$customerMessage = $email_message;
	mail($email,"Video Order From Website Talking Heads",$customerMessage,$headers);
	
}
$refererSiteWTH = strpos($referersite, 'websitetalkingheads');
if($refererSiteWTH === false){
	$skin = "other";
}else{
	$skin = "wth";
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="../css/products.css" rel="stylesheet" type="text/css" />
<link href="../css/orderform.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css?v=<?php echo rand(1,100); ?>" rel="stylesheet" type="text/css" />
<link href="report.css" rel="stylesheet" type="text/css" />
<link href="../css/fluid.css" rel="stylesheet" type="text/css" />
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php include ('../includes/header.php'); ?>
<section class="container">
<h1>Thanks for Ordering from Website Talking Heads<sup>&#174;</sup>.</h1>
<h2 id = "orderMessage">One of our Project Managers will be in touch with you within 2 business days.</h2>
<h3 id = "callUs">If you would like to talk to us immediately please call us at<span class="blueText"> 801-748-2281</span>.</h3>
</section>
<section class="container">
  <div class="row center-block">
    <div class="col-lg-9 col-lg-offset-2">
      <h2>Your Order</h2>
      <ul>
        <li>Name:
          <?=$name?>
        </li>
        <li>Email:
          <?=$email?>
        </li>
        <li>Phone:
          <?=$phone?>
        </li>
        <li>Website:
          <?=$website?>
        </li>
        <li>Video Type:
          <?=$VideoType?>
        </li>
        <li>Video Length:
          <?=$videoLength?>
        </li>
        <li>Actor:
          <?=$ActorName?>
        </li>
        <li>Wardrobe:
          <?=$Wardrobe?>
        </li>
        <li>Video Crop:
          <?=$crop?>
        </li>
        <li>Video Length:
          <?=$videoLength?>
        </li>
        <li>Word Count:
          <?=$ourWordCount?>
        </li>
        <?php 
			switch($VideoType){
				case "Basic Video":
        	echo "<li>Background: " . $background . "
        </li>";
		break;
				case "Website Spokesperson":
        	echo "<li>Positioning: " . $Positioning . "
        </li>
        <li>Autostart: " . $Autostart . "
        </li>
        <li>OncePerSession: " . $OncePerSession . "
        </li>
        <li>Appearance: " . $Appearance ."
        </li>";
		default:
			echo "";
			}
        ?>
        <li>Instructions:
          <?=$clientInstructions?>
        </li>
        <li>Terms:
          <?=$agree?>
        </li>
        <li>Sent From:
          <?=$referersite?>
        </li>
        <li>IP:
          <?=$sentIP?>
        </li>
        <li>Verified:
          <?=$verified?>
        </li>
      </ul>
    </div>
  </div>
  <div class="c"></div>
</section>
<section class="container">
  <div class="row center-block">
    <div class="col-lg-2 col-lg-offset-1 scriptPart" >
      <h2>Script: </h2>
    </div>
    <div class="col-lg-9">
      <div class="scriptReport">
        <?=$script?>
      </div>
    </div>
  </div>
  </div>
</section>
</div>
<div class="c"></div>
<section class="paypalBox">
  <h2 class = "paymentText">Please make payment using paypal below or call us at 801-748-2281.</h2><br />
  <?php
  switch($videoLength){
	  case "30 second":
		  $videoCost = "EJV8KPXELGUEG";
	  break;
	  case "60 second":
		  $videoCost = "WB2V5FPKAWKNE";
	 	break;
	  case "Featured Actor-30 second":
		  $videoCost = "3SGQ22X2TMWCY";
		 break;
	case "Featured Actor-60 second":
		  $videoCost = "84RUJ6CHY7DUW";
	  		break;
	case "Featured Actor-4*30 second":
		  $videoCost = "E4WU6DA3USZCL";
	  		break;
	case "Featured Actor-10*30 second":
		  $videoCost = "E4WU6DA3USZCL";
	  		break;
	case "Featured Actor-5*60 second":
		  $videoCost = "E4WU6DA3USZCL";
	  		break;
	case "Longer":
		  $videoCost = "E4WU6DA3USZCL";
	  		break;
	default:
		  $videoCost = "E4WU6DA3USZCL";
		  echo "default";
	  		break;
		  
  }
  ?>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="<?=$videoCost?>">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
  </form>
</section>
</div>
<?php include ('../includes/footer.php');?>

<?php include ('../includes/chatform.php'); ?>
</body>
</html>