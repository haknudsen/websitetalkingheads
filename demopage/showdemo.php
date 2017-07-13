<?php
$s = "not used";
$referersite = strtolower( $_SERVER[ 'HTTP_REFERER' ] );
$url = $_REQUEST[ 'website' ];
if ( preg_match( '#^https?://#i', $url ) === 1 ) {
    $s = "https";
    $website = $url;
} else {
    $website = "http://" . $url;
    $s = "http";
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

if ( $s !== "http" ) {
    $page = file_get_contents( $website );
    $utf = is_Utf8($page);
    if ( $utf ) {
        $page = '<!doctype html>
            <html>
            <head>
            <meta charset="utf-8">
            <title>Talking Heads Demo</title>
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
    } else {
        $page = '
            <!doctype html>
            <html>
            <head>
            <meta charset="utf-8">
            <title>Talking Heads Demo</title>
            <style type="text/css">
            body {
                padding: 0;
                margin: 0;
            }
            </style>
            </head>
            <body>
            <h1 style="text-align:center">The page you entered does not let us display a copy of it.</h1>
            <h2 style="text-align:center">Not Problem.</h2>
            <h2 style="text-align:center">A real spokesperson will work on your REAL website.</h2>
            <h3 style="text-align:center">Call us to learn more: <a href="tel:8017482281" title="Call Now">801-748-2281</a></h3>
            <a href="../index.php" title="Return to Home Page" style="margin: 20px auto">
            <div  style="margin: 20px auto;width:280px">
            <img src="../create-canvas/assets/logo.jpg" width="280" height="109" alt="Website Talking Heads Logo" style="margin: 20px auto" />
            </div>
            </a>
            <script src="wthvideo/wthvideo.js"></script>
            </body>
            </html>';

    }
} else {
    $loc = 'location: http://www.talkingheads.video/demopage/show-http.php?loc=' . $website;
    header( $loc );
}
print_r( $page );

function is_Utf8( $string ) {
    if ( function_exists( "mb_check_encoding" ) && is_callable( "mb_check_encoding" ) ) {
        return mb_check_encoding( $string, 'UTF8' );
    }

    return preg_match( '%^(?:
          [\x09\x0A\x0D\x20-\x7E]            # ASCII
        | [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
        |  \xE0[\xA0-\xBF][\x80-\xBF]        # excluding overlongs
        | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
        |  \xED[\x80-\x9F][\x80-\xBF]        # excluding surrogates
        |  \xF0[\x90-\xBF][\x80-\xBF]{2}     # planes 1-3
        | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
        |  \xF4[\x80-\x8F][\x80-\xBF]{2}     # plane 16
    )*$%xs', $string );

}
?>
