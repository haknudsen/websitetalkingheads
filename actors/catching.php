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
<!-- InstanceEndEditable -->
</head>
<body>
<!-- InstanceBeginEditable name="MainContent" -->
<div id="container">
<?php include ('../includes/header2.php'); ?>
<?php
	$name = $_GET['name'];
?>
	<div align="center">
         <form>
           <div id="backpage"><input name="backpage" type="backpage" class="backpage" id="backpage" onClick="javascript: history.go(-1)"></div>
      </form>  
  </div>
<div id="ipadvideobox">
    <div id="ipadvideoboxleft">
        <img src="../carimages/<?=$name?>.png" width="160" height="180" id='.$actor.' alt='.$actor.' ></a>
    </div>
    <div id="ipadvideoboxbottom">
		<div id="ipadname"> <?=$name?>   </div>
         <br />
         <p><a href="../order.php">Order <?=$name?> Now</a></p>
      </div>
</div>
	<div id="ipadvideo">
             <video width="540" height="360" controls="controls" preload="auto" id="actor" poster="../carimages/<?=$name?>.png">
               <source src="../videos/<?=$name?>.mp4" type="video/mp4" />
               Your browser does not support the video tag.
             </video> 
	</div>
	<div id="c"></div>
</div>
	

 
<?php include ('../includes/footer.php'); ?>   
</div>

<?php include ('../includes/chatform.php'); ?>  
<!-- InstanceEndEditable -->  
</body>
<!-- InstanceEnd --></html>