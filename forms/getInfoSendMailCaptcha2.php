<?php
require_once __DIR__ . '/vender/autoload.php';
$siteKey = '6Lf3qw4TAAAAAAIO861UoBcvmB3I7RaXmzC_q8uR';
$secret = '6Lf3qw4TAAAAAOM2qRlX8F9nux4mJzJKPXNTyqmc';
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
if ($resp->isSuccess()){
 $referersite = strtolower($_SERVER['HTTP_REFERER']);

$lastname= $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$company = $_REQUEST['company'];
$message = $_REQUEST['description'];
$cf_1001 = $_REQUEST['cf_1001'];
if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARTDED_FOR'] != '') {
    $sentIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $sentIP = $_SERVER['REMOTE_ADDR'];
}

$verified = true;
//echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));

if ($verified){
$refererSiteNum = strpos($referersite, '.com');
$refererSiteURL = substr($referersite, 0, $refererSiteNum);
$pageContent = "<section class='formContent' style='height:300px'>
        <form id='__vtigerWebForm' name='Website Spokesperson Contact' action='https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php' method='post' accept-charset='utf-8' enctype='multipart/form-data'>
		<input name='__vtrftk' value='sid:1f5e5ea9658fb99ec3d3cf03e79581daac0508b0,1456174908' type='hidden'>
            <input name='publicid' value='91676e440e7c4b55d8006ddc8ab0059f' type='hidden'>
            <input name='urlencodeenable' value='1' type='hidden'>
            <input name='name' value='Website Spokesperson Contact' type='hidden'>";
$pageContent .= "
</form>
</section>";
$pageContent .= "<script>document.getElementById('__vtigerWebForm').submit();</script>";
}
}else{
	$_SERVER[$referersite];
}
echo $pageContent;
?>