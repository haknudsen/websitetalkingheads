<?php
require_once __DIR__ . '/vender/autoload.php';
$siteKey = '6Lf3qw4TAAAAAAIO861UoBcvmB3I7RaXmzC_q8uR';
$secret = '6Lf3qw4TAAAAAOM2qRlX8F9nux4mJzJKPXNTyqmc';
$recaptcha = new\ ReCaptcha\ ReCaptcha( $secret );
$resp = $recaptcha->verify( $_POST[ 'g-recaptcha-response' ], $_SERVER[ 'REMOTE_ADDR' ] );
if ( $resp->isSuccess() ) {
    $referersite = strtolower( $_SERVER[ 'HTTP_REFERER' ] );

    $name = $_REQUEST[ 'lastname' ];
    $email = $_REQUEST[ 'email' ];
    $phone = $_REQUEST[ 'phone' ];
    $company = $_REQUEST[ 'company' ];
    $message = htmlentities( $_REQUEST[ 'description' ] );
    $cf_1001 = $_REQUEST[ 'cf_1001' ];
    if ( isset( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) && $_SERVER[ 'HTTP_X_FORWARTDED_FOR' ] != '' ) {
        $sentIP = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
    } else {
        $sentIP = $_SERVER[ 'REMOTE_ADDR' ];
    }
    $verified = true;
    if ( $verified ) {
        $refererSiteNum = strpos( $referersite, '.com' );
        $refererSiteURL = substr( $referersite, 0, $refererSiteNum );
        $pageContent = "<section class='formContent' style='height:300px'>
        <form id='__vtigerWebForm' name='Contact Form' action='https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php' method='post' accept-charset='utf-8' enctype='multipart/form-data'><input name='__vtrftk' value='sid:9d4892aac8408e88aab65bd5e558e1aa3ce66406,1456186191' type='hidden'>
            <input name='publicid' value='ef97517204418e2e295e1a80b22c72e0' type='hidden'>
            <input name='urlencodeenable' value='1' type='hidden'>
            <input name='name' value='Contact Form' type='hidden'>";
        $pageContent .= "<input name='lastname' data-label='Last Name' id='lastname' type='hidden' value='" . $name . "' >";
       	 $pageContent .= "<input  type='hidden' name='company' value='" . $company . "'>";
       	 $pageContent .= "<input  type='hidden' name='designation' value='" .  $sentIP . "'>";
        $pageContent .= "<input name='email' type='hidden' value='";
        $pageContent .= $email;
        $pageContent .= "'>
       	 <input type='hidden' name='phone' value='";
        $pageContent .= $phone;
        $pageContent .= "'>
       	 <input type='hidden' name='description' value='";
        $pageContent .= $message;
        $pageContent .= "'>
 			<input type='hidden' name='cf_1001' value='";
        $pageContent .= $cf_1001;
        $pageContent .= "'>
	</form>
</section>
<script>document.getElementById('__vtigerWebForm').submit();</script>";
    }
}
echo $pageContent;
?>