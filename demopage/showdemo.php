<?php
$referersite = strtolower( $_SERVER[ 'HTTP_REFERER' ] );
$url = $_REQUEST[ 'website' ];
if ( preg_match( '#^https?://#i', $url ) === 1 ) {
    $website = $url;
} else {
    $website = "http://" . $url;
}
if ( isset( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) && $_SERVER[ 'HTTP_X_FORWARTDED_FOR' ] != '' ) {
    $ip_address = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
} else {
    $ip_address = $_SERVER[ 'REMOTE_ADDR' ];
}

$to = 'andy@websitetalkingheads.com, sales@websitetalkingheads.com';
$subject = "Email Demo Link -  " . $referersite;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: forms@websitetalkingheads.com\r\n";
$email_message = "Email Demo Link -  " . $referersite . "<br>";
$email_message .= "Website Demoed:" . $website . "<br>";
$email_message .= "Viewed From: " . $ip_address . "<br>";
mail( $to, $subject, $email_message, $headers );

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Website Talking Heads</title>
    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <iframe src="<?php echo($website)?>" frameborder="0" width="100%" height="2000" scrolling="No" id="theFrame" name="theFrame"></iframe>
    <script type="text/javascript" src="wthvideo/wthvideo.js"></script>
    <script>
        window.onload = function () {
            console.log( 'loaded' );
            wthplayer();
        }
    </script>
    </body>
</html>