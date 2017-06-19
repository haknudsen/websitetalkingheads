
<head>
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3598588-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<?php
$name= $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$company = $_REQUEST['company'];
$message = htmlspecialchars($_REQUEST['description']);
$cf_1001 = $_REQUEST['cf_1001'];
if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARTDED_FOR'] != '') {
    $sentIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $sentIP = $_SERVER['REMOTE_ADDR'];
}
$verified = true;
if ($verified){
$refererSiteNum = strpos($referersite, '.com');
$refererSiteURL = substr($referersite, 0, $refererSiteNum);$pageContent = "<section class='formContent' style='height:300px'>
        <form id='__vtigerWebForm' name='Animation Video Lead' action='https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php' method='post' accept-charset='utf-8' enctype='multipart/form-data'><input type='hidden' name='__vtrftk' value='sid:cf8318efc21ea6d8b885c8168173923b88195d69,1464294553'>
                        <input type='hidden' name='publicid' value='9f942915f19a0001a9368c082bebb1a7'>
                        <input type='hidden' name='urlencodeenable' value='1'>
                        <input type='hidden' name='name' value='Animation Video Lead'>";
$pageContent .= "'
			<input name='lastname' data-label='Last Name' id='lastname' type='hidden' value='";
$pageContent .= $name;
$pageContent .= "'>
       	 <input  type='hidden' name='company' value='";
 $pageContent .= $company;
 $pageContent .= "'>
      	  <input name='email' type='hidden' value='";
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
$pageContent .= "	</form>
</section>
<!-- Google Code for Previous Visitors --> 
<!-- Remarketing tags may not be associated with personally identifiable 
information or placed on pages related to sensitive categories. For 
instructions on adding this tag and more information on the above 
requirements, read the setup guide: google.com/ads/remarketingsetup --> 
<script type='text/javascript'>
/* <![CDATA[ */
var google_conversion_id = 1058129782;
var google_conversion_label = '-jOyCO6ZkAIQ9o7H-AM';
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
   </script> 
<script type='text/javascript' 
src='//www.googleadservices.com/pagead/conversion.js'>
</script>
<noscript>
<div style='display:inline;'> <img height='1' width='1' style='border-style:none;' alt='' 
src='//googleads.g.doubleclick.net/pagead/viewthroughconversion/1058129782/?value=0&amp;label=-jOyCO6ZkAIQ9o7H-AM&amp;guid=ON&amp;script=0'/> </div>
</noscript>
<script>document.getElementById('__vtigerWebForm').submit();</script>";
}

echo $pageContent;
?>