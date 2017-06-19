<!doctype html>
<html><!-- InstanceBegin template="/Templates/NewPhp.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Website Talking Heads - Add an Online Video Spokesperson to Your Website, Virtual Spokesperson, Website Video Spokesperson, Web Spokesperson, Website Actor</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
<meta name="description" content="Online video spokesperson.  For only $199, add a virtual spokesperson to your website.  An online presenter can increase traffic conversion rates on your website.  Website video, website actor and objects to create dynamic streaming video and easily add it your existing website.">
<meta name="robots" CONTENT="index, follow"> <!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
<meta name="revisit-after" CONTENT="30 days">
<meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8=" />
<meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="https://websitetalkingheads.com/css/style.css?v=<?php echo rand(1,100); ?>" rel="stylesheet" type="text/css" />
<link href="https://www.websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- InstanceBeginEditable name="head" -->
<link href="../styles.css" rel="stylesheet" type="text/css" />
<link href="../css/examples.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="VideoBox/js/mootools.js"></script>
<script type="text/javascript" src="VideoBox/js/swfobject.js"></script>
<script type="text/javascript" src="VideoBox/js/videobox.js"></script>
<link media="screen" type="text/css" rel="stylesheet" href="VideoBox/css/videobox.css" />
<script type="text/javascript" src="http://www.websitetalkingheads.com/videopresentations/includes/examples.js"></script>
<!-- InstanceEndEditable -->
</head>
<body>
<!-- InstanceBeginEditable name="MainContent" -->
<?php
// displays all the file nodes
if(!$xml=simplexml_load_file('http://www.websitetalkingheads.com/videopresentations/includes/examples-power.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
}
$myCount = $xml->count();
$myStop = rand(1, $myCount-1);
$i=0;
foreach($xml as $example){
$target[$i] = $example->target;
$video[$i] = str_replace("'", "", $example->name);
$i++;
}
?>
<div id="container">
<?php include ('../includes/header.php'); ?>

<div class="exampleTitle">Power Punch Videos</div>
     <div class="powerpunch">
        <div id="powerpunchsales">15-30 Second Sales Videos with Punch!</div>
		<div id="powerpunchseo">Need a quick sales message for video advertising, your website, YouTube, or video SEO?</div>
      </div>
<div class="vpbanner">
    <div class="vpbanner-left">
    	<div align="center"><img src="../images/VideoProduction60.gif" width="166" height="163" alt="Best in Video Production"  id="BestInSearch" onmouseover="onBestInSearch()" onmouseout="outBestInSearch()" />
  	  </div>
	</div>

    <div class="vpbanner-center">
	         Easy As 1-2-3
        <ol>
        	<li>Send us your script and 5 images.</li>
        	<li>Choose an Actor and Music.</li>
        	<li>We do the rest!</li>
        </ol>  
    </div>
    <div class="vpbanner-right">
    	<a href="../../order.php"><img src="images/PowerPunchtitle219.png" width="219" height="146" alt="Power Punch Video Sales" id = "Power Punch Video Sales"  onmouseover="onPPResults()" onmouseout="outPPResults()"/></a>
    </div>
</div>
  <div class="c"></div>  
<div class="clearSpace"></div>

     <div class="examples">
	 	<?php include ('includes/examples-powerFull.php'); ?>
     </div>
  <div class="c"></div>  

<?php include ('../forms/requestQuote.php'); ?>
<?php include ('../includes/footer.php'); ?>   
</div>

<?php include ('../includes/chatform.php'); ?>  
<?php include ('../includes/googlescripts.php'); ?>
<!-- InstanceEndEditable -->  
</body>
<!-- InstanceEnd --></html>