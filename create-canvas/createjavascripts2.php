<?

$directory = $_POST['directory'];
$numberofvideos = $_POST['numberofvideos'];
$numberofimages = $_POST['numberofimages'];
$website = $_POST['website'];
$MP4Canvas = $_POST['mp4Canvas'];
$h264 = $_POST['mp4'];
$gif = $_POST['gif'];
$configSame = $_POST['configSame'];
$responsive = $_POST['responsive'];
$player = $_POST['player'];
$linkWidth = $_POST['linkWidth'];
$imgWidth = $_POST['imgWidth'];
$width = $_POST['Width'];
$height = $_POST['Height'];
$position = $_POST['Position'];
$left = $_POST['Left'];
$divTop = $_POST['Top'];
$right = $_POST['Right'];
$bottom = $_POST['Bottom'];
$centeroffset = $_POST['Centeroffset'];
$color = $_POST['Color'];
$volume = $_POST['Volume'];
$autostart = $_POST['Autostart'];
$fadein = $_POST['Fadein'];
$fadeout = $_POST['Fadeout'];
$flip = $_POST['Flip'];
$delay = $_POST['Delay'];
$delayclose = $_POST['Delayclose'];
$buffertime = $_POST['Buffertime'];
$controlbar = $_POST['Controlbar'];
$exitbtn = $_POST['Exitbtn'];
$playbtn = $_POST['Playbtn'];
$playposition = $_POST['Playposition'];
$playtop = $_POST['Playtop'];
$exitoncomplete = $_POST['Exitoncomplete'];
$oncepersession = $_POST['Oncepersession'];
$vidlink = $_POST['Vidlink'];
$openin = $_POST['Openin'];
$pathtovid = $_POST['Pathtovid'];
$gif = $_POST['gif'];
$flvdef = $_POST['Flvdef'];
$h264def = $_POST['Mp4def'];
if($vidlink === "no"){
	$vidlink = "";
	}
for ($counter = 0; $counter <= $numberofvideos-1; $counter++) {
	$pageNumber = $counter+1;
	if($counter == 0){
			$page = "";
		}else{
			$page = $counter+1;
		}
		
$datatowrite = '// Copyright 2016 Website Talking Heads
// JavaScript Document
//Delay creation until page is loaded
if (window.addEventListener) {
    window.addEventListener("load", wthplayer, false);
} else if (window.attachEvent) {
    window.attachEvent("onload", wthplayer);
} else {
    window.onload = wthplayer;
}

function wthplayer() {
    "use strict";
    //Variables for Player
    var responsive = "' . $responsive .'", //You must place <div id="wthvideo"></div> inside the div you want the video to be in.
	iPhoneWidth = "'. $imgWidth .'",//When the above happens, the witdh of the image
        width = "' . $width .'", //video width
        height = "' . $height .'", //video height
        position = "' . $position .'", //fixed or absolute positioning
        left= "' . $left .'",//if centering on page change this to 50%
        right= "' . $right .'",
        divTop= "' . $divTop .'",
        bottom= "' . $bottom .'",
        centeroffset= "' . $centeroffset .'",//if centering on page negative numbers are left and positive numbers are right
        color = "' . $color .'",//the color of the player bar.
        volume= "' . $volume .'",
        delay = ' .$delay .', //delay start of video
        controlbar = "' . $controlbar .'", //options for showing the controlbar, yes, no, and mouse
        playbtn = "click-to-play.png", //you can set a custom playbuton
		exitbtn = "' . $exitbtn .'",//show or not show exitbtn
        autostart= "' . $autostart .'",//autostart options yes, no, mute, oncethenpic, oncethenmute, onceonlythenpic, onceonlythenmute, and loop
        exitoncomplete = "' . $exitoncomplete .'", //option for player to close after video completes. "yes" or "no"
        oncepersession = "' . $oncepersession .'", //option for number of times video plays "yes", "no", or "onceonly"
        vidLink = "' . $vidlink .'", //make the Talking Heads Player a link. Either leave this set to "no" or you can put a complete URL inside the quotes.
        openIn = "_blank",
        path = "' . $pathtovid .'", //path to where the files are located
        actorpic = "' . substr($gif[$counter], 0, -4) .'", //transparent gif
        canvasVideo= "'  . substr($MP4Canvas[$counter], 0, -4)  .'",//Just name,not extension
        h264= "' . substr($h264[$counter], 0, -4) .'",//Just name,not extension h264
        // end Main Player Vars
        imagePath=path+"/",gb=imagePath+actorpic,gifBackground="url(\'"+gb+".gif\')",buttonPath=imagePath+"buttons"+"/",hVideo=path+"/"+canvasVideo+".mp4",hBtn=buttonPath+playbtn,leftEnd=left.charAt(left.length-1),overflow="hidden",setWidth=200,iOS=!1,isDevice=!1,isMobileDevice=(navigator.userAgent.match(/iPhone/i)),platform=navigator.platform,ua=navigator.userAgent.toLowerCase(),isAndroid=ua.indexOf("android")>-1,playerBarWidth=132,btnWidth=32,playerBarHeight=btnWidth+2,playerBarMarginBase=(playerBarHeight*(-1))+"px",playerBarMargin=(width-playerBarWidth)/2,hasSeenLS,hasSeenSS=!1,theParent,actorGif,iPhoneVideo,clickImage,thplayer,spokespersonImage,thb,thv,PlayerBar,newP,playerClose,restartBtn,muteBtn,createTH,dv,playingS,outputCanvas,theCanvas,thc,imgLink=null,vendors=["-moz-","-webkit-","-o-","-ms-","-khtml-",""],i10,toLoop,toMute=!1,toPlay=true,hasSeen="hasSeen"+canvasVideo;btnWidth=btnWidth+"px";delay=delay*1000;actorGif=imagePath+actorpic+".gif";buttonPath=imagePath+"buttons"+"/";leftEnd=left.charAt(left.length-1);switch(leftEnd){case "%":break;case "o":break;default:left+="px"}if(divTop!=="auto"){divTop+="px"}if(right!=="auto"){right+="px"}if(centeroffset!=="auto"){centeroffset+="px"}if(bottom!=="auto"){bottom+="px"}ua.indexOf("iphone os 10")>-1?i10=!0:("iPad"!==platform&&"iPhone"!==platform&&"iPod"!==platform||(iOS=!0),(iOS||isAndroid||null!==isMobileDevice)&&(isDevice=!0));;if(!isDevice){hVideo=path+"/"+canvasVideo+".mp4"}else{hVideo=path+"/"+h264+".mp4"}hasSeenSS=sessionStorage.getItem(hasSeen);hasSeenLS=localStorage.getItem(hasSeen);if(hasSeenLS===null){if(autostart!=="no"||autostart==="mute"){toPlay=!0;autostart="yes"}}else{oncepersessionSwitch();autostartSwitch()}if(hasSeenSS!==null){switch(autostart){case "oncethenmute":case "mute":case "loop":toLoop=!0;toMute=!0;autostart="mute";break;case "oncethenpic":case "onceonlythenpic":autostart="no";break}}sessionStorage.setItem(hasSeen,!0);localStorage.setItem(hasSeen,!0);if(toPlay===!0){setTimeout(function(){createDiv()},delay)}else{return}function autostartSwitch(){switch(autostart){case "onceonlythenmute":autostart="mute";break;case "onceonlythenpic":autostart="no";break;default:break}}function oncepersessionSwitch(){switch(oncepersession){case "yes":if(hasSeenSS==="true"){toPlay=!1}else{toPlay=!0}break;case "onceonly":if(hasSeenLS==="true"){toPlay=!1}else{toPlay=!0}break;default:toPlay=!0;break}}function createDiv(){if(responsive==="yes"){createTH=document.getElementById("wthvideo");createTH.style.position="relative";createTH.style.left="50%";createTH.style.marginLeft=(width/2)*-1+"px";createTH.style.top="auto";createTH.style.bottom=0}else{createTH=document.createElement("div");createTH.id="wthvideo";createTH.style.position=position;createTH.style.marginLeft=centeroffset;createTH.style.left=left;createTH.style.right=right;createTH.style.marginLeft=centeroffset;createTH.style.top=divTop;createTH.style.bottom=bottom;var wthbody=document.body||document.getElementsByTagName("body")[0];wthbody.insertBefore(createTH,wthbody.childNodes[0])}thv=document.getElementById("wthvideo");createTH.style.height=height+"px";createTH.style.width=width+"px";createTH.style.zIndex=9999;createTH.style.cursor="pointer";createTH.style.overflow=overflow;if(isDevice){if(platform==="iPhone"){iPhoneCreate();addListeners()}else{createVideo();createControls();startBtnCreate()}}else{createVideo();createControls();createCanvas();HTML5Autostart()}}function createVideo(){var v=document.createElement("VIDEO");v.id="talkinghead";v.setAttribute("playsinline","playsinline");v.src=hVideo;v.zIndex=1;if(isDevice){v.poster=actorGif}else{v.poster=actorGif;v.style.display="none"}v.volume=volume;v.style.width=width+"px";if(toLoop){v.loop=!0}if(toMute){v.muted=!0;if(autostart!=="loop"){startBtnCreate()}}if(!isDevice){v.style.height=height*2+"px"}else{v.style.height=height+"px"}thv.appendChild(v);thplayer=document.getElementById("talkinghead");var p=document.createElement("p");p.innerHTML="Your Browser does not support the <video> tag";v.appendChild(p)}function createCanvas(){thb=document.createElement("CANVAS");thb.id="bufferCanvas";thb.width=width;thb.height=height*2;thb.style.display="none";thb.style.position="absolute";thv.appendChild(thb);thc=document.createElement("CANVAS");thc.style.position="absolute";thc.style.top="0";thc.style.left="0";thc.id="talkingCanvas";thc.width=width;thc.height=height*2;thv.appendChild(thc)}function createControls(){var newD=document.createElement("div");newD.id="playholder";newD.style.position="relative";newD.style.width=width+"px";newD.style.height=height+"px";thv.appendChild(newD);if(exitbtn==="yes"){var newI=document.createElement("img");newI.id="htmlClose";newI.style.marginLeft=(width-20)+"px";newI.style.width="16px";newI.style.display="block";newI.style.position="relative";newI.src=buttonPath+"ExitBtn-full.png";newI.style.zIndex=10020;dv=document.getElementById("playholder");var windowClose=newI;dv.appendChild(windowClose)}newP=document.createElement("div");newP.id="PlayerBar";newP.style.height=playerBarHeight+"px";newP.style.width=playerBarWidth+"px";newP.style.borderRadius="8px";newP.style.paddingLeft="3px";newP.style.paddingTop="1px";newP.style.marginTop="0px";newP.style.left=playerBarMargin+"px";newP.style.bottom="0px";if(isDevice){newP.style.position="absolute"}else{newP.style.position="relative"}newP.style.zIndex=10020;newP.style.background=color;PlayerBar=newP;thv.appendChild(PlayerBar);createTH=document.createElement("img");createTH.style.maxWidth=btnWidth;createTH.id="PlayPauseBtn";createTH.style.float="left";createTH.src=buttonPath+"PlayBtn.png";createTH.style.position="relative";createTH.style.zIndex="inherit";dv=document.getElementById("PlayerBar");newP.style.position="PlayPauseBtn";var PlayButton=createTH;dv.appendChild(PlayButton);createTH=document.createElement("img");createTH.style.width=btnWidth;createTH.id="muteBtn";if(document.getElementById("talkinghead").muted){createTH.src=buttonPath+"VolumeBtnMute.png"}else{createTH.src=buttonPath+"VolumeBtn.png"}createTH.style.float="left";dv=document.getElementById("PlayerBar");muteBtn=createTH;dv.appendChild(muteBtn);createTH=document.createElement("img");createTH.style.width=btnWidth;createTH.id="restartBtn";createTH.style.float="left";createTH.src=buttonPath+"RestartBtn.png";createTH.style.position="relative";createTH.style.float="left";createTH.style.zIndex=10050;dv=document.getElementById("PlayerBar");restartBtn=createTH;dv.appendChild(restartBtn);createTH=document.createElement("img");createTH.style.width=btnWidth;createTH.id="playerClose";createTH.style.position="relative";createTH.style.zIndex=99050;createTH.style.float="left";createTH.src=buttonPath+"ExitBtn.png";dv=document.getElementById("PlayerBar");playerClose=createTH;dv.appendChild(playerClose);addListeners();if("ontouchstart" in window||controlbar==="yes"){document.getElementById("PlayerBar").style.marginTop=playerBarMarginBase}else{setCss3Style(document.getElementById("PlayerBar"),"transition","all 1s")}}function startPlaying(){theCanvas=document.getElementById("talkingCanvas");outputCanvas=document.getElementById("bufferCanvas");try{thplayer.play();document.getElementById("PlayPauseBtn").src=buttonPath+"PauseBtn.png"}catch(err){}if(theCanvas&&theCanvas.getContext){var ctx=theCanvas.getContext("2d");if(ctx){playingS=setInterval(function(){showVideo()},16)}}}function showVideo(){try{var theCanvas=document.getElementById("talkingCanvas"),ctx=theCanvas.getContext("2d"),srcVid=thplayer,buffer=outputCanvas.getContext("2d");buffer.drawImage(srcVid,0,0);var image=buffer.getImageData(0,0,width,height),imageData=image.data,alphaData=buffer.getImageData(0,height,width,height).data;for(var i=3,len=imageData.length;i<len;i=i+4){imageData[i]=alphaData[i-1]}ctx.putImageData(image,0,0,0,0,width,height)}catch(err){}}function HTML5Autostart(){if(autostart==="yes"||toLoop===!0){thplayer.oncanplay=function(){if(thplayer.paused===!0){autostart="cant auto play";addBackground()}}}if(autostart==="yes"||toLoop===!0){thplayer.autoplay=!0;document.getElementById("PlayPauseBtn").src=buttonPath+"PauseBtn.png";document.getElementById("PlayerBar").style.opacity="1";startPlaying()}else{addBackground()}if(exitoncomplete==="yes"){thplayer.addEventListener("ended",closePlayer,!1)}}function addListeners(){theParent=document.querySelector("#wthvideo");theParent.addEventListener("click",doSomething,!1);theParent.addEventListener("mouseover",overVideo,!1);theParent.addEventListener("mouseout",outVideo,!1);function outVideo(e){if(e.target!==e.currentTarget){switch(e.target.id){case "talkingCanvas":document.getElementById("PlayerBar").style.marginTop="0px";break;case "PlayPauseBtn":case "muteBtn":case "restartBtn":case "playerClose":case "htmlClose":case "imgLnk":e.target.style.opacity=1;break}}e.stopPropagation()}function overVideo(e){if(e.target!==e.currentTarget){switch(e.target.id){case "talkingCanvas":document.getElementById("PlayerBar").style.marginTop=playerBarMarginBase;break;case "PlayPauseBtn":case "muteBtn":case "restartBtn":case "playerClose":case "htmlClose":case "imgLnk":e.target.style.opacity=0.5;document.getElementById("PlayerBar").style.marginTop=playerBarMarginBase;break}}e.stopPropagation()}function doSomething(e){if(e.target!==e.currentTarget){if(toMute){removeMuted()}switch(e.target.id){case "PlayPauseBtn":if(spokespersonImage){console.log(spokespersonImage.style.display);if(spokespersonImage.style.display==="none"){playToggle()}}else{playToggle()}break;case "muteBtn":muteToggle();break;case "restartBtn":restartClick();break;case "playerClose":case "htmlClose":closePlayer();break;case "click-to-play":case "spokespersonImage":playClick();break;case "talkingCanvas":case "talkinghead":if(vidLink!==""){openLink()}else{try{document.getElementById("click-to-play").parentNode.removeChild(document.getElementById("click-to-play"))}catch(err){}playToggle()}break;case "imgLnk":case "Spokesperson":case "videoBtn":iPhonePlay();break;case "talkinghead":if(platform==="iPhone"){iPhonePlay()}else{openLink()}break}}e.stopPropagation()}try{thplayer.addEventListener("ended",videoEnded,!1)}catch(err){}try{iPhoneVideo.addEventListener("ended",iPhoneEnded,!1)}catch(err){}}function setCss3Style(el,prop,val){for(var i=0,l=vendors.length;i<l;i++){el.style[toCamelCase(vendors[i]+prop)]=val}}function toCamelCase(str){return str.toLowerCase().replace(/(\-[a-z])/g,function($1){return $1.toUpperCase().replace("-","")})}function videoEnded(){document.getElementById("PlayPauseBtn").src=buttonPath+"PlayBtn.png";if(exitoncomplete==="yes"){closePlayer()}else if(isDevice){startBtnCreate()}else{addBackground()}}function playClick(){try{spokespersonImage.style.display="none"}catch(err){}try{document.getElementById("click-to-play").parentNode.removeChild(document.getElementById("click-to-play"))}catch(err){}if(isDevice){thplayer.play();document.getElementById("PlayPauseBtn").src=buttonPath+"PauseBtn.png"}else{startPlaying()}}function playToggle(){if(thplayer.paused){thplayer.play();document.getElementById("PlayPauseBtn").src=buttonPath+"PauseBtn.png";document.getElementById("PlayerBar").style.opacity="1"}else{document.getElementById("PlayPauseBtn").src=buttonPath+"PlayBtn.png";thplayer.pause()}}function muteToggle(){if(thplayer.muted){thplayer.muted=!1;document.getElementById("muteBtn").src=buttonPath+"VolumeBtn.png"}else{document.getElementById("muteBtn").src=buttonPath+"VolumeBtnMute.png";thplayer.muted=!0}}function restartClick(){thplayer.currentTime=0;document.getElementById("PlayPauseBtn").src=buttonPath+"PauseBtn.png";playClick();thplayer.play()}function closePlayer(){thplayer.pause();clearInterval(playingS);try{thv.parentNode.removeChild(document.getElementById("wthvideo"))}catch(err){}return}function addBackground(){spokespersonImage=document.createElement("DIV");spokespersonImage.id="spokespersonImage";spokespersonImage.style.backgroundImage=gifBackground;spokespersonImage.style.backgroundRepeat="no-repeat";spokespersonImage.style.position="absolute";spokespersonImage.style.cursor="pointer";spokespersonImage.style.height=height+"px";spokespersonImage.style.width=width+"px";spokespersonImage.style.zIndex=100;thv.insertBefore(spokespersonImage,thv.firstChild);spokespersonImage=document.getElementById("spokespersonImage");startBtnCreate()}function startBtnCreate(){var startBtn=document.createElement("img");startBtn.id="click-to-play";startBtn.src=hBtn;startBtn.alt="Click to Play";startBtn.style.zIndex=100;startBtn.style.width=setWidth+"px";startBtn.style.left=(width-setWidth)/2+"px";startBtn.style.bottom="30px";startBtn.style.cursor="pointer";startBtn.style.position="absolute";if(isDevice){thv.appendChild(startBtn)}else{if(toMute){thv.appendChild(startBtn)}else{spokespersonImage.appendChild(startBtn)}}clickImage=document.getElementById("click-to-play")}function iPhoneCreate(){imgLink=document.createElement("div");imgLink.style.width=iPhoneWidth+"px";imgLink.style.cursor="pointer";imgLink.id="imgLnk";imgLink.style.left=(width-iPhoneWidth)/2+"px";imgLink.style.top="0px";iPhoneVideo=document.createElement("VIDEO");iPhoneVideo.id="talkinghead";iPhoneVideo.src=hVideo;iPhoneVideo.style.width=iPhoneWidth+"px";iPhoneVideo.style.display="none";iPhoneVideo.style.bottom="0px";iPhoneVideo.style.left="0px";iPhoneVideo.style.width="0px";iPhoneVideo.style.position="absolute";var img=document.createElement("img");img.src=actorGif;img.id="Spokesperson";img.style.width=iPhoneWidth+"px";img.style.position="absolute";var btnImg=document.createElement("img");btnImg.id="videoBtn";btnImg.src=hBtn;btnImg.style.top=iPhoneWidth/2+"px";btnImg.style.width=iPhoneWidth+"px";btnImg.style.position="absolute";thv.appendChild(imgLink);imgLink.appendChild(iPhoneVideo);imgLink.appendChild(img);imgLink.appendChild(btnImg);thplayer=document.getElementById("talkinghead")}function iPhoneEnded(){iPhoneVideo.style.display="none"}function iPhonePlay(){iPhoneVideo.play();iPhoneVideo.style.display="inherit"}function openLink(){document.getElementById("PlayPauseBtn").src=buttonPath+"PlayBtn.png";thplayer.pause();window.open(vidLink,openIn)}function removeMuted(){document.getElementById("muteBtn").src=buttonPath+"VolumeBtn.png";toMute=!1;toLoop=!1;thplayer.muted=!1;thplayer.loop=!1;setTimeout(function(){restartClick()},150)}}';



$indextowrite = '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Talking Heads</title>
   <style type="text/css">
    
        body {
            padding: 0;
            margin: 0;
        }
</style>
</head>

<body>
<script type="text/javascript" src="wthvideo/wthvideo' . $page . '.js"></script>
<iframe src="http://' . $website . '" frameborder="0" width="100%" height="2000" scrolling="No" id="iframe" name="iframe"></iframe>

</body>
</html>';

$wthvideo = '' . $directory . '/wthvideo/wthvideo' . $page . '.js';
$index = '' . $directory . '/index' . $page . '.html';
$Openindex = fopen($index, 'w+');
$Openfile = fopen($wthvideo, 'w+');
fwrite($Openfile, $datatowrite);
fclose($Openfile);
fwrite ($Openindex, $indextowrite);
fclose ($Openindex);
}
	



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Demos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/create-files.css" rel="stylesheet" type="text/css" />
<link href="../css/fluid.css" rel="stylesheet" type="text/css" />
</head>

<body>
<section class="page-header"><h1>Test Demos</h1>
<blockquote><? var_dump($_POST);?></blockquote>
</section>
<section class="black thin create-files">
  <form id="form1" name="form1" method="post" action="../create-canvas/createzip.php">
    <input name="directory" type="hidden" value="<? echo $directory; ?>"id="directory"/>
    <input name="numberofvideos" type="hidden" id="numberofvideos" value="<? echo $numberofvideos; ?>" />
    <input name="numberofimages" type="hidden" id="numberofimages" value="<? echo $numberofimages; ?>" />
    <? for ($j = 0; $j < $numberofvideos; $j++) {
	echo '<input name="flv[]" id="flv[]" type="hidden" value="' . $flv[$j] . '" />';
	echo '<input name="png[]" id="png[]" type="hidden" value="' . $png[$j] . '" />';
}
?>
    <? echo '<h2><a href="https://www.websitetalkingheads.com/create-canvas/' . $directory . '" target="_blank">Demo 1</a></h2>'; ?>
    <?
if ($numberofvideos > 1){
	for ($f2 = 2; $f2 <= $numberofvideos; $f2++) {
	echo '<h2><a href="https://www.websitetalkingheads.com/create-canvas/' . $directory . '/index' . $f2 . '.html" target="_blank">Demo ' . $f2 . '</h2></a><br />';
	}
}
?>
    <p class="text-center">If ALL demos look good, press submit to create the files and code for the customer.</p>
    <div align="center"><button name="submit" class="btn btn-primary" id="Submit" ">Submit</button></div>
  </form>
</section>
<section>
</section>
</body>
</html>