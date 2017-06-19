<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

 <p align="center">
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
                        <video id="videoBox" width="540" height="360" "alt="Jed" >
                    	<source src="http://www.websitetalkingheads.com/videos/Jed.mp4" type="video/mp4">
                   			Your browser does not support the video tag.
                        </video> 
                        <div id="videoBoxText">Jed</div>
                        <div class="PlayerBar">
                        <div id="Volume"><a href="#" onClick="muteToggle()"><img src="assets/VolumeBtn.png" width="30" height="30" alt="Volume" id="muteBtn" /></a></div>
                        
                        <div id="PlayPause">
                        	<a href="#" onClick="playToggle()"><img  id="PlayPauseBtn" src="assets/PlayBtn.png" width="30" height="30" alt="Play Pause Button" /></a>
                          </div>
                        <div id="restartHolder">
                        	 <a href="#" onClick="restartToggle()"><img  id="RestartBtn" src="assets/RestartBtn.png" width="30" height="30" alt="Restart Button" /></a>
                         </div>
                        <div id="playerClose">
                        <a href="#" onClick="closePlayer()" onmouseover="exitOver(this)" onmouseout="exitOff(this)"><img src="assets/ExitBtn.png" width="30" height="30" alt="Close Player" id="exitBtn" /></a></div>
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
</p>
</body>
</html>