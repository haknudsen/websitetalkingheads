<title>Send Files and Code</title>
<?
$email = $_POST['email'];
$company = $_POST['company'];
$note = $_POST['note'];
$directory = $_POST['directory'];
$numberofvideos = $_POST['numberofvideos'];
$model2web = $_POST['model2web'];
if (isset($model2web)) {
	$from = 'support@model2web.com';
	$mainBG ="#FFF";
	$bg2 ="#3EA4D8";
	$bgColor ='#3ea4d8';
	$videoColor='#f9a11b';
	$logo='Model2Web-logo.png';
	$banner ='M2W-banner-large.png';
	$bannerMedium = "M2W-banner-medium.jpg";
	$bannerSmall = "model2web-banner-small.png";
}else{
	$from = 'support@websitetalkingheads.com';
	$subject = 'Files and Code for ' .$company . ' Video Spokesperson';
	$mainBG ="#DCF0FF";
	$bg2 ="#DDEEFF";
	$bgColor ='#ddeeff';
	$videoColor='#007ABF';
	$logo='TalkingHeadsLogo.png';
	$banner ='WTH+banner-large.jpg';
	$bannerMedium = "WTH-banner-medium.jpg";
	$bannerSmall = "WTH-banner-small.jpg";
	}
$demos = '
	<tr>
			<td align="center" valign="middle" style="padding: 10px 0px 10px 0px;" >
				<A  class="linkButton" href="http://www.websitetalkingheads.com/create-canvas/' . $directory . '" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Video 1</A>
			</td>
	</tr>';
$subject = 'Files and Code for ' .$company . ' Video Spokesperson';


if ($numberofvideos > 1) {
for ($i = 2; $i <= $numberofvideos; $i++) {
	$demos .='
	<tr>
			<td align="center" valign="middle" style="padding: 10px 0px 10px 0px;" >
				<A  class="linkButton" href="http://www.websitetalkingheads.com/create-canvas/' . $directory . '/index' . $i . '.html" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Video ' . $i . '</A>
			</td>
			</tr>';
	}
	$demoText='Demo Links:';
	}else{
		$demoText='Demo Link:';
	}
$message = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Order from Website Talking Heads<sup>&#174;</sup></title>
        <style type="text/css">
        body{width: 100%; height: 100%;  margin:0 auto; padding:0; -webkit-font-smoothing: antialiased;background-color:#DCF0FF;}
        h1{
            padding: 0px;
            margin:0px;
            font-size:26px;
            color: #000000;
            text-align: center;
            text-shadow: 0px 1px 2px rgba(0,0,0,0.7);
        }
			.footer{
            border-radius: 20px;
            border: 4px solid #062C3F;
            -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.5);
            box-shadow: 0px 1px 2px rgba(0,0,0,0.5);
            line-height:24px;
            width:70%;
            margin: 0 auto;
            margin-bottom:10px;
			font-weight:bold;
            background-color: '.$bg2.';
        }	
        .theMessage {
            width: 80%;
            margin: 0 auto;
            max-width: 600px;
			margin-bottom:20px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            border-radius: 18px;
            background-color: #FFF;
            -webkit-box-shadow: 0px 2px 1px rgba(0,0,0,0.5);
            box-shadow: 0px 2px 1px  rgba(0,0,0,0.5);
            border: 2px solid #1981FF;
			list-style-type: none;
			margin: 0px auto ;
        }
        a{
            color"#00A3FF;
            text-decoration:none;
        }
        video {
            padding:10px 0px 5px 0px; 
        }
		.linkButton{
			background-color: #FF9100;
			color:#fff; 
			margin:10px; 
			padding: 5px 10px; 5px 10px; 
			border-radius: 10px; 
			border: 1px solid #1981FF; 
			text-decoration:none; 
			text-shadow: 0px 1px 2px #3a5606
		}
        </style>
        
        <style type="text/css"> 
        
@media only screen and (max-width: 800px){
                table[class=container]{width:560px !important;}
                td.promos table{width:100% !important;}
                td[class=headline]{padding:5px 0px 0px 5px !important;}
                td[class=headline] h1{font-size:28px !important;}
                td[class=banner] img{display:none;}
                td[class=banner]{width:560px; height:100px; background:url(https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/'. $bannerMedium .') no-repeat 0px 0px;}
                .promo img{display:none;}
                table[class=promo_1] {width:500px !important;margin:0px !important;}
                table[class=promo_2] {width:500px !important;margin:0px !important;}
                table[class=promo_3] {width:500px !important;margin:0px !important;}
                table[class=promo_1] td{background:url(https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/video_demo-small.png) no-repeat 0px 40px; 0px 40px 140px !important;padding: 0px 0px 10px 140px !important;}
                table[class=promo_2] td{background:url(https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/whiteboard_demo-small.png) no-repeat 0px 40px; 0px 40px 140px !important;padding: 0px 0px 10px 140px !important;}
                table[class=promo_3] td{background:url(https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/animation_demo-small.png) no-repeat 0px 40px; 0px 40px 140px !important;padding: 0px 0px 10px 140px !important;}
        }
@media only screen and (max-width: 500px){
                table[class=container]{width:440px !important;}
                td[class=headline] h1{font-size:20px !important;}
                td[class=banner]{width:240px; height:65px; background:url(https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/'. $bannerSmall . ') no-repeat 100px 0px; background-color:#FFFFFF;}
                td.promos td h1{margin-bottom:8px !important;}		
                td.promos td img{display:none !important;}		
                video{width:320px !important; height:180px !important;}
                video img{width:320px !important; height:180px !important;}
                table[class=promo_1] {width:400px !important;margin:0px !important;}
                table[class=promo_2] {width:400px !important;margin:0px !important;}
                table[class=promo_3] {width:400px !important;margin:0px !important;}
                
        } 
         @media only screen and (max-width: 360px){
                body{width:auto!important;}
                table[class=container]{width:280px !important;}
                table[class=promo_1] {width:300px !important;margin:0px !important;}
                table[class=promo_2] {width:300px !important;margin:0px !important;}
                table[class=promo_3] {width:300px !important;margin:0px !important;}
                        
                }
        } </style>
</head>

<body bgcolor="#3DACEB">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="'.$mainBG.'" >
      <tr>
        <td>
        <table class="container" width="860" align="center" border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td valign="middle" class="banner" bgcolor="#ffffff" style="padding: 10px 0px 0px 0px; font-family: Arial, Helvetica, sans-serif; align:center;" >
                        <img src="https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/'.$banner.'" width="860" height="100" alt="Website Talking Heads<sup>&#174;</sup> Video Production"/>
                 </td>
            </tr>
            <tr>
                <td align="center" valign="top" bgcolor="#ffffff" class="headline" style="padding: 5px 10px 15px 10px; border-top: 1px solid #00A3FF; border-right: 1px solid #00A3FF; border-left: 1px solid #00A3FF; font-family: Arial, Helvetica, sans-serif;">
                <h1 style = "font-size:32px; color:#000000; text-align: center;">Thank you for your order</h1>
                </td>
            </tr>
			<tr>
			    <td valign="top" bgcolor="#FFFFFF" class="order" style="padding: 30px 30px 30px 30px; font-family:Arial, Helvetica, sans-serif; font-size: 16px; line-height:22px; color: #654308; text-align:left;border-right: 1px solid #00A3FF; border-left: 1px solid #00A3FF;">
			<table class="theMessage">
			<tr>
				<td>' . $note . '</td>
			</tr>
			<tr>
				<td style="padding: 10px 0px 5px 0px;">Below you will find links to view a demo of your video(s) and a link to download your files and code.</td>
			</tr>
			<tr>
				<td>Your demo is generally shown on your home page, but the video can be placed on any page within your domain.</td>
			</tr>
			<tr>
				<td style="padding: 10px 0px 10px 0px;"><b>' . $demoText . '</b></td>
			</tr>
			' . $demos . '
			<tr>
				<td style="padding: 10px 0px 5px 0px;">Click the link below to download your files and read the instructions on how to install your video.</td>
			</tr>
			<tr>
				<td align="center" style="padding:20px;" >
					<A class="linkButton" href="http://www.websitetalkingheads.com/create-canvas/' . $directory . '/download.html" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Download</a>
					</td>
			</tr>
			<tr>
				<td>If you are having difficulties, please check the support tips on your download page. If your question is not addressed there, you can contact support via email by clicking the link below.</td>
			</tr>
			<tr>
				<td align="center" style="padding:20px;" ><A class="linkButton" href="mailto:support@websitetalkingheads.com" sstyle="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Support</A></td>
			</tr>
				
			</table>
			</td>
			</tr>
                <tr>
            	<td valign="top" bgcolor="'.$bgColor.'" class="promo" style="background-color: '.$bgColor.'; padding: 0px;">
                	<h1>Learn About Some of Our Other Products</h1>
                </td>
            </tr>
        <tr>
            <td valign="middle" bgcolor="'.$bgColor.'" class="promo" style="background-color: '.$bgColor.'; padding: 10px; border: 2px solid 0057bb;">
            
		<table class="promo_1" width="240" align="left" border="0" cellspacing="0" cellpadding="0" style="margin-top:16px">
			<tr>
				<td valign="top" style="margin-left:20px; padding-left: 20px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height: 16px; color: #000000;">
								<img class="promo" alt="Custom Video Presentations" src="https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/video_demo.png">
								<h1 style="font-size:16px;padding:4px 0px 4px 0px;">Custom Video Presentations</h1>
								Our company can create professional and affordable custom video presentations for your personal use or for your business. Our videos are all shot and built here at our headquarters to maintain quality and precision.
								<br><br>
								<a class="linkButton" href="http://www.websitetalkingheads.com/videopresentations/custompresentations.php" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Learn more</a></td>
			</tr>
		</table>
		<br />
		<table class="promo_2" width="240" align="left" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td valign="top" style="padding-left: 20px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height: 16px; color: #000000;">
								<img class="promo" alt="Video Animation" src="https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/animation_demo.png " >
								<h1 style="font-size:16px;padding:4px 0px 4px 0px;">Video Animation</h1>
								Need a eye-catching sales message for advertising, your website, YouTube, or video SEO?  We can create an Animated Video to meet your needs!  Our personalized approach is what sets us apart from the competition.
								<br><br>
								<a class="linkButton" href="http://www.websitetalkingheads.com/videopresentations/animation.php" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Learn more</a>
							</td>
			</tr>
		</table>
		<br />
		<table class="promo_3" width="240" align="left" border="0" cellspacing="0" cellpadding="0"style="margin-top:-20px">
			<tr>
				<td valign="top" style="margin-left:20px; padding-left: 20px;  font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height: 16px; color: #000000;">
								<img class="promo" alt="Whiteboard Video" src="https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/whiteboardvideo_demo.png">
								<h1 style="font-size:16px;padding:4px 0px 4px 0px;">Whiteboard Video</h1>
							   We use fast-paced, brain stimulated imagery and content to ignite your customers build their interest in your solution and ignite their buying habits.  We look forward to working with you to take your business to the next level!<br><br>
								<a class="linkButton" href="http://www.websitetalkingheads.com/whiteboard/index.php" style="background-color: #FF9100; color:#fff; margin:10px; padding: 5px 10px; 5px 10px; border-radius: 8px; border: 1px solid #1981FF; text-decoration:none; text-shadow: 0px 1px 0px 2px #3a5606">Learn more</a>
								</td>
			</tr>
		</table>
                  
         </td>
         </tr>
            <tr>
            	<td align="center" bgcolor="'.$videoColor.'"  style="padding: 20px 0px 20px 0px;>
					<video width="480" height="270" poster="http://dev.websitetalkingheads.com/mail/video/TalkingHeadsMailDemo.png" controls>
						<source src="http://dev.websitetalkingheads.com/mail/video/TalkingHeadsDemo.mp4" type="video/mp4">
						<a href="http://youtu.be/E2RwcoXhPG0"><img src="http://dev.websitetalkingheads.com/mail/video/TalkingHeadsMailDemoLink.jpg" width="480" height="270"  alt="Website Talking Heads<sup>&#174;</sup> Video Production"/></a>
					</video>
				</td>
            </tr>
            <tr>
                <td align="center" valign="middle" bgcolor="#ffffff" style="padding: 0px 30px 0px 30px; border-top: 1px solid #00A3FF;border-right: 1px solid #00A3FF; border-left: 1px solid #00A3FF;"><a href="http://websitetalkingheads.com/"><img src="https://s3-us-west-2.amazonaws.com/talking-heads-mail/images/'.$logo.'" width="280" height="109" alt="Website Talking Heads<sup>&#174;</sup> Video Production"/></a>
                </td>
            </tr>
            <tr>
                <td valign="top"  style="padding: 10px 0px 10px 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #b2a16e; text-align:center; color:#000000;border-bottom: 1px solid #00A3FF;border-right: 1px solid #00A3FF; border-left: 1px solid #00A3FF;" bgcolor="#FFFFFF">
                <div class="footer">&copy; Website Talking Heads</div>
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

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: ' .$from ."\r\n" .
    		'Reply-To: ' .$from . "\r\n" .
			'CC: support@websitetalkingheads.com, eric@websitetalkingheads.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

		mail($email, $subject, 	$message, $headers);
		?>

<html>
<head>
<meta charset="utf-8">
<title>Create javascripts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="http://www.websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/create-files.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section class="page-header">
  <h1>Files and code have been sent. </h1>
</section>
<section class="container">
  <h2><a href="http://websitetalkingheads.com/create-canvas/">Return to Create Files and Code</a></h2>
</section>
</body>
</html>