<?php
	$referersite = strtolower($_SERVER['HTTP_REFERER']);
	$url = $_REQUEST['website'];
	if (preg_match('#^https?://#i', $url) === 1) {
		$website = $url;
	}else{
		$website = "https://" . $url;
	}
	if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARTDED_FOR'] != '') {
		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip_address = $_SERVER['REMOTE_ADDR'];
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website Talking Heads Player Demo</title>

</head>

<body>
<script type="text/javascript" src="https://www.websitetalkingheads.com/demopage/wthvideo/wthvideo.js"></script>
<script>
/*	var timepast=false; 
	var iframe = document.createElement("iframe");
	var reporter = "test";
	iframe.style.cssText = "position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;";
	iframe.src = "<?php echo($website)?>";  // This won't work
	iframe.id = "theFrame";
	
	// If more then 500ms past that means a page is loading inside the iFrame
	setTimeout(function() {
		timepast = true;
	},500);
	
	if (iframe.attachEvent){
		iframe.attachEvent("onload", function(){
		if(timepast) {
				reporter="It's PROBABLY OK";
			}
			else {
				reporter="It's PROBABLY NOT OK";
			}
		});
	} 
	else {
		iframe.onload = function(){
			if(timepast) {
				reporter="It's PROBABLY OK";
			}
			else {
				reporter="It's PROBABLY NOT OK";
			}
		};
	}
	document.body.appendChild(iframe);
	var reportDiv = document.createElement("div");
	reportDiv.id = "reporter";
	reportDiv.innerHTML = reporter;
	document.body.appendChild(reportDiv);*/
	myPlayer();
</script>
<?php
	$to = 'andy@websitetalkingheads.com';
$subject = "Email Demo Link -  ".$referersite;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: forms@websitetalkingheads.com\r\n";
	$email_message = "Email Demo Link -  ".$referersite."<br>";
	$email_message .= "Website Demoed:" .$website. "<br>";
	$email_message .= "Viewed From: ".$ip_address."<br>";
	mail($to,$subject,$email_message,$headers);
?>
</body>
</html>