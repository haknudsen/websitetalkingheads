<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website Talking Heads - Add an Online Video Spokesperson to Your Website, Virtual Spokesperson, Website Video Spokesperson, Web Spokesperson, Website Actor</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
<meta name="description" content="Online video spokesperson.  For only $199, add a virtual spokesperson to your website.  An online presenter can increase traffic conversion rates on your website.  Integrate flash video, website video, website actor and objects to create dynamic streaming video and easily add it your existing website.">
<META NAME="robots" CONTENT="index, follow">
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="distribution" CONTENT="global">
<META NAME="rating" CONTENT="general">
<META NAME="Content-Language" CONTENT="english">
<meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8=" />
<meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" />
<link href="http://websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/style.css?v=<?php echo rand(1,100); ?>" rel="stylesheet" type="text/css" />
<link href="assets/homeplayer.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section class="container">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="920" height="460" id="FlashID" title="Reseller Demo">
      <param name="movie" value="final.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="9.0.45.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="../../Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. --> 
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="final.swf" width="920" height="460">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="9.0.45.0" />
        <param name="expressinstall" value="../../Scripts/expressInstall.swf" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div class="HTML5system">
          <div id="MyPlayer">
            <video id="videoBox" width="540" height="360" alt="video spokesperson" poster="assets/poster.png" >
              <source src="http://www.websitetalkingheads.com/videos/Jed.mp4" type="video/mp4">
              Your browser does not support the video tag. </video>
            <div id="videoBoxText">Jed</div>
            <div class="PlayerBar">
              <a href="#" onClick="muteToggle()"><img src="assets/VolumeBtn.png" alt="Volume" id="muteBtn" class="playerBtn" /></a>
              <a href="#" onClick="playToggle()"><img  id="PlayPauseBtn" src="assets/PlayBtn.png" alt="Play Pause Button"  class="playerBtn"/></a>
              <a href="#" onClick="restartToggle()"><img  id="RestartBtn" src="assets/RestartBtn.png" alt="Restart Button"  class="playerBtn"/></a> 
              <a href="#" onClick="closePlayer()" ><img src="assets/ExitBtn.png" alt="Close Player" id="exitBtn"  class="playerBtn"/></a>
            </div>
          </div>
          <div class="MyPlayerHolder">
            <?php include ('assets/flashbackup.php'); ?>
          </div>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="assets/changeVideo.js" type="text/javascript"></script>
</body>
</html>