<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"/>
	<link href="assets/homeplayer.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div class="HTML5system">
		<div id="MyPlayer">
			<div id="videoBoxText">Jed</div>
			<video id="videoBox" width="540" height="360" alt="video spokesperson" poster="assets/poster.png">
				<source src="http://www.websitetalkingheads.com/videos/Jed.mp4" type="video/mp4"/> Your browser does not support the video tag. </video>
			<div class="PlayerBar">
				<a href="#" onClick="muteToggle()"><img src="assets/VolumeBtn.png" alt="Volume" id="muteBtn" class="playerBtn" /></a>
				<a href="#" onClick="playToggle()"><img  id="PlayPauseBtn" src="assets/PlayBtn.png" alt="Play Pause Button"  class="playerBtn"/></a>
				<a href="#" onClick="restartToggle()"><img  id="RestartBtn" src="assets/RestartBtn.png" alt="Restart Button"  class="playerBtn"/></a>
				<a href="#" onClick="closePlayer()"><img src="assets/ExitBtn.png" alt="Close Player" id="exitBtn"  class="playerBtn"/></a>
			</div>
		</div>
		<div class="MyPlayerHolder">
			<?php include ('assets/flashbackup.php'); ?>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="assets/changeVideo.js" type="text/javascript"></script>
</body>

</html>