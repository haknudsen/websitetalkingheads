<?php

/****************************************************************************
 * WebsiteTalkingHeads Demo
 *
 * Loads data from a web page at address $_GET['url'] and injects code into it
 * to render a demo flash video over the rest of the content.
 *
 * Parameters:
 *   $_GET['url'] - URL to fetch
 *   $_GET['pos'] - Position of the flash video.  Valid values:
 *     top_left, top_center, top_right, center_right, bottom_lower,
 *     bottom_center, bottom_left, center_left, centered.
 *     (Defaults to bottom_right)
 *   $_GET['video'] - Demo video to play
 *
 *****************************************************************************/

/*
 * CONFIGURATION - Edit any of these values below to modify functionality
 */

/* Demo videos address, for example, http://www.yoursite.com/demos
 * SHOULD NOT CONTAIN A TRAILING SLASH
 */
$emailAdd = $_GET['email'];
$site = "http://www.websitetalkingheads.com/resellers/player";
$path =  $_GET['video'];
define('PLAYER_URL', $site);
/* This is the URL people will be returned to if an error occurs */
define('ERROR_URL', 'http://www.websitetalkingheads.com');
/* Site email address - if provided, this is used for sending you lead
 * information every time someone tries the demo.
 */
define('EMAIL_ADDRESS', $emailAdd) ;
/* Dimensions of video */
define('VIDEO_WIDTH', 400);
define('VIDEO_HEIGHT', 360);
/* User agent to use in the request.  Some sites send weird data when cURL is
 * used, so instead we pose as IE7 on Vista
 */
define('USER_AGENT', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)');
/* Timeout in seconds before the script stops trying to get website data */
define('TIMEOUT', 15);
/*
 * END CONFIGURATION
 */

/* main
 * Loads page HTML, modifies it and outputs the result
 */
function main() {
  /* Error checking */
  if (!isset($_GET['url']))
    error_out('Please provide a valid URL and try again.');
  if (!isset($_GET['video']))
    error_out('Please specify an actor video you would like to see.');

  /* Strip protocol off the front of the URL */
  if (strstr($_GET['url'], "://"))
    list($protocol, $url) = explode("://", $_GET['url']);
  else {
    $url = $_GET['url'];
    $protocol = 'http';
  }

  /* Filter protocols */
  if ($protocol != 'http' && $protocol != 'https' && $protocol != 'ftp')
    $protocol = 'http';

  /* Decide on a position for the video */
  $pos = array('top_left' => array(0, 0),
               'top_center' => array(0, 1),
               'top_right' => array(0, 2),
               'center_right' => array(1, 2),
               'bottom_right' => array(2, 2),
               'bottom_center' => array(2, 1),
               'bottom_left' => array(2, 0),
               'center_left' => array(1, 0),
               'centered' => array(1, 1));
  if (isset($pos[$_GET['pos']])) $pos = $pos[$_GET['pos']];
  else $pos = $pos['bottom_right'];

  /* Get page data */
  $data = '';
  if (function_exists('curl_exec'))
    $data = curlGetData($protocol . '://' . $url);
  else
    $data = fallbackGetData($protocol . '://' . $url);

  /* Format injection strings */
  $replaceDoctype = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';

  $injectHead = '<base href="' . $protocol . '://' . $url . '" />
<style type="text/css">
<!--

#talkinghead {
  position: fixed;
  z-index: 5000000;';

  /* Position the video */
  if ($pos[0] == 0) {
    $injectHead .= '
  top: 0;
  margin-top: 0;';
  }
  else if ($pos[0] == 1) {
    $injectHead .= '
  top: 50%;
  margin-top: -' . (VIDEO_HEIGHT / 2) . 'px;';
  }
  else {
    $injectHead .= '
  top: 100%;
  margin-top: -' . (VIDEO_HEIGHT) . 'px;';
  }

  if ($pos[1] == 0) {
    $injectHead .= '
  left: 0;
  margin-left: 0;';
  }
  else if ($pos[1] == 1) {
    $injectHead .= '
  left: 50%;
  margin-left: -' . (VIDEO_WIDTH / 2) . 'px;';
  }
  else {
    $injectHead .= '
  left: 100%;
  margin-left: -' . (VIDEO_WIDTH) . 'px;';
  }

  /* Finish off $injectHead */
  $injectHead .= '
}

-->
</style>
<!--[if lte IE 6]>
<style type="text/css">
html, body {
  height: 100%;
  overflow: auto;
}
#talkinghead {
  position: absolute;
}
</style>
<![endif]-->';

  /* Body code */
  $injectBody = '<div id="talkinghead">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
width="' . VIDEO_WIDTH . '" height="' . VIDEO_HEIGHT . '">
<param name="movie" value="' . PLAYER_URL . '/demotest.swf" />
<param name="wmode" value="transparent" />
<param name="flashvars" value="vurl='.$_GET['video'].'" />
<embed src="' . PLAYER_URL . '/demotest.swf" width="' . VIDEO_WIDTH . '" height="' . VIDEO_HEIGHT . '" wmode="transparent" flashvars="vurl='.$_GET['video'].'" pluginspage="http://www.macromedia.com/go/getflashplayer">
</embed>
</object>
</div>';

  /* Inject code */
  $pattern = '/<!DOCTYPE[^>]*>/i';
  if (preg_match($pattern, $data))
    $data = preg_replace($pattern, $replaceDoctype, $data);
  else
    $data = $replaceDoctype . "\n" . $data;
  $data = preg_replace('/<head([^>]*)>/i', "<head\\1>\n" . $injectHead, $data);
  $data = preg_replace('/<\/body>/i', $injectBody . "\n</body>", $data);

  /* Output */
  echo $data;

  /* Send an email with lead information */
  email_data();
}

/* curlGetData
 * Uses cURL to load page data from a URL
 * Parameters:
 *   $url - URL to fetch
 * Returns:
 *   String with page data
 */
function curlGetData($url) {
  /* Get data */
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_USERAGENT, USER_AGENT);
  curl_setopt($ch, CURLOPT_TIMEOUT, TIMEOUT);
  $data = curl_exec($ch);
  $error = curl_errno($ch);

  /* Did we get an error? */
  if ($error != 0) {
    $str = str_replace('\'', '\\\'', curl_error($ch));
    curl_close($ch);
    error_out('An error occurred when processing your request.\n\nError returned: ' . $error . ' - ' . $str);
  }
  curl_close($ch);

  return $data;
}

/* fallbackGetData
 * Fallback for retrieving page data using PHP fopen URL wrappers
 * Parameters:
 *   $url - URL to fetch
 * Returns:
 *   String with page data
 */
function fallbackGetData($url) {
  /* First set some INI settings */
  ini_set('user_agent', USER_AGENT);
  ini_set('default_socket_timeout', TIMEOUT);

  /* Try to open a file handle */
  $page = fopen($url, "r");
  if (!$page) error_out('Failed to load page data.  Please try again later.');

  /* Download the data */
  $data = '';
  while (!feof($page))
    if ($chunk = fread($page, 8192)) $data .= $chunk;
    else error_out('An error occurred while reading page data.  Please try again later.');

  /* Reset INI values */
  ini_restore('user_agent');
  ini_restore('default_socket_timeout');

  /* All done */
  fclose($page);
  return $data;
}

/* error_out
 * Outputs an error message and redirects back to the main page
 * Parameters:
 *   $err - Error string
 */
function error_out($err) {
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>An error has occurred</title>
<meta http-equiv="refresh" content="5;url=<?php echo ERROR_URL ?>" />
<script type="text/javascript">
<!--

function out() {
  alert('<?php echo $err ?>');
  document.location = "<?php echo ERROR_URL ?>";
}

// -->
</script>
</head>

<body onload="out()">
</body>

</html>
<?php
  exit(0);
}

/* email_data
 * Emails the reseller that a website was tested
 */
function email_data() {
  $subject = 'WebsiteTalkingHeads demo lead';
  $message = "A potential customer just tried out the demo!\r\n\r\n" . $_GET['url'] ."\r\n";
  $headers = 'From: noreply@websitetalkingheads.com';
  mail(EMAIL_ADDRESS, $subject, $message, $headers);
}

/* Output */
main();

?>
