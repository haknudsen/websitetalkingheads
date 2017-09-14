<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Talking Heads -Reseller</title>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
    <meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
    <meta name="description" content="Talking Heads Reseller Program">
    <META NAME="robots" CONTENT="index, follow">
    <META NAME="revisit-after" CONTENT="30 days">
    <META NAME="distribution" CONTENT="global">
    <META NAME="rating" CONTENT="general">
    <META NAME="Content-Language" CONTENT="english">
    <meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8="/>
    <meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="../css/fluid.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/style.css?v=<?php echo rand(1,100); ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="assets/changeVideo.js" type="text/javascript"></script>
    <link href="assets/homeplayer.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <?php include ('../../includes/header.php'); ?>
    <h1 class="text-center">Website Talking Heads Demo System</h1>
    <section class="container">
        <div class="HTML5system">
            <div id="MyPlayer">
                <video id="videoBox" width="540" height="360" alt="video spokesperson" poster="assets/poster.png">
                    <source src="https://www.websitetalkingheads.com/videos/Jed.mp4" type="video/mp4"> Your browser does not support the video tag. </video>
                <div id="videoBoxText">Jed</div>
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
        </div>
    </section>
    <section class="alert alert-info m-25">
       <div class="container">
        <div class="btn btn-success center-block m-25">Updated!</div>
        <br>
        <p>Reseller system has been updated. HTML5 and compatible with devices.</p>
        <p>Files updated September 14th,2017. If you have downloaded your files prior to this date, please download the latest version and update. </p>
        <p class="text-center"><a href="html5Only.zip">Download the HTML5 version here:</a>
        </p>
        <p class="text-center"><a href="resellerDownload.zip">Download the old FLASH version here:</a>
        </p>
        <p class="text-center"><a href="data.xml">If you want to use your own system here is the xml file that we use:</a>
        </p>
        <div id="contactus">To install</div>
        <ol>
            <li>Download the <a href="resellerDownload.zip">Reseller System</a> to your computer.</li>
            <li>Unzip all the files. You should have 5 files and a folder named <strong>assets</strong> with changeVideo.js, player.css, and a bunch of images.</li>
            <li>Upload the files and folder to the folder that you want the demo system in.</li>
            <li>You can now test the system viewing the test.php page in the folder you uploaded the files to(note for the system to work you <em>MUST</em> upload all the files to the right folder).</li>
            <li>The test.php file shows the exact code needed to put the system in.</li>
        </ol>
        <div id="blueText">You can now customize the player any way that you would like. </div>
        <ul>
            <li>The buttons and player background for the HTML5 fallback are images in the assets folder, you can replace with any buttons or images that you would like. </li>
            <li>The look and positioning of the system is controlled by the player.css file. </li>
            <li>The actors are in the data.xml file. You can change the order, they are displayed in the order that the data.xml file lists them in. You can also remove actors that you do not like.</li>
        </ul>
       </div>
    </section>
    <section class="container">
        <div id="blueText">If you use WordPress or some other system that doesn't allow files to be uploaded to specific folders you can iFrame the demo system, the address is <a href="http://www.websitetalkingheads.com/resellers/player/test.php">http://www.websitetalkingheads.com/resellers/player/test.php</a>
        </div>
        <br/>
        <div id="blueText">You can also iFrame our Video Presentation Demos at <br/>
            <a href="http://www.websitetalkingheads.com/resellers/videopresentationexamples.php">http://www.websitetalkingheads.com/resellers/videopresentationexamples.php</a>
        </div>
    </section>
    <h3 id="seventyfivepercent">If you need any assistance with install please contact Andy at <a href="mailto:andy@websitetalkingheads.com">andy@websitetalkingheads.com</a> or by calling 801-748-2281</h3>
    <?php include ('../../includes/footer.php'); ?>
</body>

</html>