<?php
<<<<<<< HEAD
$referersite = strtolower( $_SERVER[ 'HTTP_REFERER' ] );
$url = $_REQUEST[ 'website' ];
if ( preg_match( '#^https?://#i', $url ) === 1 ) {
    $s = true;
    $website = $url;
} else {
    $website = "http://" . $url;
    $s = false;
=======
$s = "not used";
$referersite = strtolower( $_SERVER[ 'HTTP_REFERER' ] );
$url = $_REQUEST[ 'website' ];
if ( preg_match( '#^https?://#i', $url ) === 1 ) {
    $s = "https";
    $website = $url;
} else {
    $website = "http://" . $url;
    $s = "http";
>>>>>>> demo page to v a0.2
}
if ( isset( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) && $_SERVER[ 'HTTP_X_FORWARTDED_FOR' ] != '' ) {
    $ip_address = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
} else {
    $ip_address = $_SERVER[ 'REMOTE_ADDR' ];
}
//	$to = 'andy@websitetalkingheads.com, sales@websitetalkingheads.com';
//	$subject = "Email Demo Link -  ".$referersite;
//	$headers = "MIME-Version: 1.0" . "\r\n";
//	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
//	$headers .= "From: forms@websitetalkingheads.com\r\n";
//	$email_message = "Email Demo Link -  ".$referersite."<br>";
//	$email_message .= "Website Demoed:" .$website. "<br>";
//	$email_message .= "Viewed From: ".$ip_address."<br>";
//	mail($to,$subject,$email_message,$headers);
<<<<<<< HEAD
if ( $s ) {
    $page = '
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website Talking Heads</title>
=======
//echo($website);
//echo("protocall = " . $s);
if ( $s !== "http" ) {
    $page = '
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Talking Heads Demo</title>
>>>>>>> demo page to v a0.2
<style type="text/css">
body {
	padding: 0;
	margin: 0;
}
</style>
</head>
<body>
<script src="wthvideo/wthvideo.js"></script>
<iframe src="';
    $page .= $website;
    $page .= '" frameborder="0" width="100%" height="2000" scrolling="No" id="theFrame" name="theFrame"></iframe>
</body>
</html>';
<<<<<<< HEAD

=======
>>>>>>> demo page to v a0.2
}else{
    $loc = 'location: http://www.talkingheads.video/demopage/show-http.php?loc=' . $website;
    header ($loc);
}
print_r( $page );
?>