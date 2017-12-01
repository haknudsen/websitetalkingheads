// Copyright 2014 Website Talking Heads
// JavaScript Document

//Variables for Player
	var responsive= "no";
	var html5= "yes";
	var width= "320";
	var height= "320";
	var position= "absolute";
	var doctype= "strict";
	var left= "50%";
	var right= "auto";
	var divTop= "460";
	var bottom= "auto";
	var centeroffset= "70";
	var color= 0xCCCCCC;
	var volume= 70;
	var autostart= "mute";
	var fadein= 0;
	var fadeout= 2;
	var flip= "no";
	var delay= 0;
	var delayclose= 0;
	var buffertime= 3;
	var controlbar= "mouse";
	var exitbtn= "no";
	var playbtn= "PlayVideo.png";
	var playposition= "center";
	var playtop= "bottom";
	var exitoncomplete= "no";
	var oncepersession= "no";
	var vidlink= "no";
	var openin= "_blank";
	var path= "http://websitetalkingheads.com/featuredactor/wthvideo";
	var actorpic= "Chantel";//Just name,not extension
	var flv= "Chantel";//Just name,not extension
	var h264= "Chantel";//Just name,not extension
	var posterImg= "Chantel";//Just name,not extension.  use a jpg for iOS, if left blank the png will be used.
	var inListener2 = null;
	var outListener2 = null;
	var delayOut2 = null;
	var delayIn2 = null;
	 
// end Vars	

// convert vars to something useful

	var playerBarHeight = ((width/4) *.6)+4;
	actorpic = path + "/" + actorpic + ".png";
	var imagePath =  path + "/";
	var buttonPath = imagePath + "buttons" +"/" ;
	var barImage = "url(" + buttonPath + "PlayerBar.png)"; 
	var playerPath = path+"/wthplayer.swf";
	var hVideo = path+"/"+h264+".mp4";
	var hBtn = buttonPath+playbtn;
	flv+= ".flv"
	var leftEnd = left.charAt(left.length -1);
	switch (leftEnd)
	 {
	case "%":
		break;
	case "o":
		break;
	default:
		left +="px";
	}
	if (divTop != "auto"){
		divTop+="px";}
	if (right != "auto"){
		right+="px";}
	if (centeroffset != "auto"){
		centeroffset+="px";}

//Detect iOS
	var iOS = false,
	p = navigator.platform;
	if( p === "iPad" || p === "iPhone" || p === "iPod" ){iOS = true;}
	if(iOS == true){
	overflow = "visible";
	playerBarMarginTop = -2 +"px";
	posterImg = path + "/" + posterImg + ".jpg";
	if(bottom<playerBarHeight){bottom=playerBarHeight;}
	}else{
	playerBarMarginTop = (-1)*(playerBarHeight + 10)+"px";
	posterImg = actorpic;
	overflow = "hidden";
	}

	if (bottom != "auto"){
		bottom+="px";}
		
// start creating divs
function createDiv() {
	var my_div = null;
	var newDiv = null;
	if(responsive == "yes"){
		var newDiv = document.getElementById("wthvideo2");
		position= "relative";
		left= "50%";
		right= "auto";
		divTop= "0";
		bottom= "auto";
		centeroffset= "-160";
	}else{
		var newDiv = document.createElement("div");
		newDiv.id = "wthvideo2"; 
	}
	newDiv.style.height = height+"px";
	newDiv.style.width = width+"px";
	newDiv.style.position = position;
	newDiv.style.top = divTop;
	newDiv.style.left = left;
	newDiv.style.right = right;
	newDiv.style.bottom = bottom;
	newDiv.style.marginLeft = centeroffset;
	newDiv.style.zIndex = 9999;
	newDiv.style.overflow = overflow;
	

	//create flashvars value
		var newFlashVars ="";
		newFlashVars += "vurl=" +flv;
		newFlashVars += "&amp;vwidth=" +width;
		newFlashVars += "&amp;vheight=" +height;
		newFlashVars += "&amp;actorpic=" +actorpic;
		newFlashVars += "&amp;autostart=" +autostart;
		newFlashVars += "&amp;exitoncomplete=" +exitoncomplete;
		newFlashVars += "&amp;vbuff=" +buffertime;
		newFlashVars += "&amp;vdelay=" +delay;
		newFlashVars += "&amp;vcolor=" +color;
		newFlashVars += "&amp;vlink=" +vidlink;
		newFlashVars += "&amp;openin=_blank";
		newFlashVars += "&amp;fadein=" +fadein;
		newFlashVars += "&amp;fadeout=" +fadeout;
		newFlashVars += "&amp;vvol=" +volume;
		newFlashVars += "&amp;playbtn=" +hBtn;
		newFlashVars += "&amp;playpos=" +playposition;
		newFlashVars += "&amp;playtop=" +playtop;
		newFlashVars += "&amp;hflip=" +flip;
		newFlashVars += "&amp;controlbar=" +controlbar;
		newFlashVars += "&amp;playerClose="+exitbtn;
		///add swf object
		var markUp = '';
		markUp += '  <object id="objvideo2" style="outline:none;" type="application/x-shockwave-flash"  width="'+width+'" height="'+height+'" data="'+playerPath+'">';
		markUp += '    <param name="movie" value="'+playerPath+'" />';
		markUp += '    <param name="quality" value="high" />';
		markUp += ' 	<param name="flashvars" value="'+newFlashVars+'">';
		markUp += '    <param name="wmode" value="transparent" />';
		markUp += '    <param name="allowscriptaccess" value="always" />';
		markUp += '    <param name="swfversion" value="9.0.45.0" />';
		markUp += '  </object>';
		newDiv.innerHTML = markUp;
		if(responsive != "yes"){
			var body   = document.body || document.getElementsByTagName("body")[0];
			body.insertBefore(newDiv,body.childNodes[0]);
			var objCSS = document.getElementById("objvideo2").style;
			objCSS.height = height+"px";
			objCSS.width = width+"px";
		}
		if(html5 != "no"){
		//add html5 fallback
		var newP = document.createElement("div");
		newP.id = "h264Fallback2";
		var videoMarkUp = '';
		videoMarkUp += '<video id="videoBox2" width="'+width+'" height="'+height+'" poster="'+posterImg+'" >';
		videoMarkUp += '    <source src="'+hVideo+'" type="video/mp4">';
		videoMarkUp += 'Your Browser Does Not support the video tag';
		videoMarkUp += '  </video>';
		newP.innerHTML = videoMarkUp;
		newP.style.position = "relative";
		newP.style.zIndex = 10000;
		newP.style.height = height+"px";
		newP.style.width = width+"px";
		var dv = document.getElementById("objvideo2");
		var h264Fallback2 = newP;
		dv.appendChild(h264Fallback2);
		document.getElementById("videoBox2").style.position = "relative";
		document.getElementById("videoBox2").style.zIndex=1010;
		
		//Create playerbar
		var newP = document.createElement("div");
		newP.id = "PlayerBar2";
		newP.style.height=playerBarHeight+6+"px";
		newP.style.width = "70%";
		newP.style.margin = "0 auto";
		newP.style.marginTop = playerBarMarginTop;
		newP.style.cursor = "pointer";
		newP.style.position = "relative";
		newP.style.zIndex = 10020;
		newP.style.paddingTop = "4px";
		newP.style.backgroundImage= barImage;
		newP.style.backgroundRepeat= "no-repeat";
		newP.style.backgroundSize= "100% 100%";
		var dv = document.getElementById("h264Fallback2");
		var PlayerBar2 = newP;
		dv.appendChild(PlayerBar2);
		
		//Create PlayButton
		var newDiv = document.createElement("img");
		newDiv.id = "PlayPauseBtn2";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "PlayBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = "inherit";
		newDiv.style.marginLeft = "2%";
		var dv = document.getElementById("PlayerBar2");
		newP.style.position = "PlayPauseBtn2";
		var PlayButton = newDiv;
		dv.appendChild(PlayButton);
				
		//Create Mute
		var newDiv = document.createElement("img");
		newDiv.id = "muteBtn2";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "VolumeBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = "inherit";
		var dv = document.getElementById("PlayerBar2");
		var muteBtn2 = newDiv;
		dv.appendChild(muteBtn2);
			

			
		//Create Restart
		var newDiv = document.createElement("img");
		newDiv.id = "restartBtn2";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "RestartBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = 10050;
		var dv = document.getElementById("PlayerBar2");
		var restartBtn2 = newDiv;
		dv.appendChild(restartBtn2);
		
		//Create exit button
		var newDiv = document.createElement("img");
		newDiv.id = "playerClose2";
		newDiv.style.width = "24%";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = 99050;
		newDiv.style.float = "right";
		newDiv.src = buttonPath + "ExitBtn.png";
		newDiv.style.paddingRight = "2%";
		var dv = document.getElementById("PlayerBar2");
		var playerClose2 = newDiv;
		dv.appendChild(playerClose2);
		}
}

//HTML5 cookies	
var hasSeenSS = sessionStorage.getItem("hasSeen");
var hasSeenLS = localStorage.getItem("hasSeen");
if(hasSeenSS == "yes"){
	switch(autostart) {
		 case "oncethenpic":
			autostart = "no";
			break;
		 case "oncethenmute":
			autostart = "mute";	
			break;
	}
}
if(hasSeenLS == "yes"){
	switch(autostart) {
		 case "onceonly":
			exit;
			break;
		 case "onceonlythenmute":
			autostart = "mute";	
			break;
		 case "onceonlythenpic":
			autostart = "no";
			break;
	
		 default:
			break;
	} 
}
switch(oncepersession){
	case "yes":    
		if (sessionStorage.getItem("hasSeen") != "yes") {
		sessionStorage.setItem("hasSeen", "yes");
		createDiv();
		}
		break;
    case "onceonly":
		if (localStorage.getItem("hasSeen") != "yes") {
		localStorage.setItem("hasSeen", "yes");
		createDiv();
		}
        break;
     default:
	 	createDiv();
        break;
}
	localStorage.setItem("hasSeen", "yes");
	sessionStorage.setItem("hasSeen", "yes");
//End cookie creation


//Not sure what this is
function thisMovie(movieName) {
         if (navigator.appName.indexOf("Microsoft") != -1) {
             return window[movieName];
         } else {
             return document[movieName];
         }
     }


//flash test
var flvTest = false;
try {
  var fo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
  if (fo) {
    flvTest = true;
  }
} catch (e) {
  if (navigator.mimeTypes
        && navigator.mimeTypes['application/x-shockwave-flash'] != undefined
        && navigator.mimeTypes['application/x-shockwave-flash'].enabledPlugin) {
    flvTest = true;
  }
}
//html5 test
if (html5 =="no" && flvTest == false){
		document.getElementById("objvideo2").style.visibility = "hidden";
		var div=document.getElementById("objvideo2");
		div.parentNode.removeChild(div);
		var div=document.getElementById("wthvideo2");
		div.parentNode.removeChild(div);
}
if (flvTest == false){
	addListeners2();
	if(autostart == "yes" &&iOS == false && html5 != "no"){
				document.getElementById("videoBox").autoplay=true;
				document.getElementById("PlayPauseBtn").src= buttonPath+"PauseBtn.png";
				document.getElementById("PlayerBar2").style.opacity = "1";
		}
	if(exitoncomplete=="yes" && html5 != "no"){
		eoc=document.getElementById("videoBox");
		eoc.addEventListener("ended", exitWTH, false);
	}
}

function addListeners2(){
	//add eventlisteners
	e = document.getElementById("PlayPauseBtn2");//Play Pause
	e.addEventListener("mouseover", playPauseOver2, false);
	e.addEventListener("mouseout", playPauseOut2, false);
	e.addEventListener("click", playToggle2, false);
	e = document.getElementById("muteBtn2");//mute
	e.addEventListener("mouseover", muteOver2, false);
	e.addEventListener("mouseout", muteOut2, false);
	e.addEventListener("click", muteToggle2, false);
	e = document.getElementById("restartBtn2");//restart 
	e.addEventListener("mouseover", restartOver2, false);
	e.addEventListener("mouseout", restartOut2, false);
	e.addEventListener("click", restartClick2, false);
	e = document.getElementById("playerClose2");//restart 
	e.addEventListener("mouseover", exitOver2, false);
	e.addEventListener("mouseout", exitOff2, false);
	e.addEventListener("click", closePlayer2, false);
	//PlayerBar2 mouse functions	
	e = document.getElementById("h264Fallback2");//Play Pause
	e.addEventListener("mouseover", h264FallbackOver2, false);
	e.addEventListener("mouseout", h264FallbackOut2, false);
	// event listener for video ending
	myVidPlayed=document.getElementById("videoBox2");
	myVidPlayed.addEventListener('ended', html5Complete2, false); 
}

//Play Toggle Functions
function playPauseOver2(e){
	if (document.getElementById("videoBox2").paused){
		document.getElementById("PlayPauseBtn2").src=  buttonPath +"PlayBtn_on.png";
		}else{
	document.getElementById("PlayPauseBtn2").src=  buttonPath +"PauseBtn_on.png";
		}
	}	
function playPauseOut2(e){
	if (document.getElementById("videoBox2").paused){
		document.getElementById("PlayPauseBtn2").src=  buttonPath +"PlayBtn.png";
		}else{
		document.getElementById("PlayPauseBtn2").src=  buttonPath +"PauseBtn.png";

		}
	}
function playToggle2(e){
		if (document.getElementById("videoBox2").paused){
		  document.getElementById("videoBox2").play();
		document.getElementById("PlayPauseBtn2").src= buttonPath+"PauseBtn.png";
		document.getElementById("PlayerBar2").style.opacity = "1";
		  } else {
			document.getElementById("PlayPauseBtn2").src= buttonPath+"PlayBtn.png";
		  	document.getElementById("videoBox2").pause();
		  }
		}
		
//Mute Button Functions
function muteOver2(){
	if (document.getElementById("videoBox2").muted){
		document.getElementById("muteBtn2").src=  buttonPath +"VolumeBtnMute_on.png";
		}else{
		document.getElementById("muteBtn2").src=  buttonPath +"VolumeBtn_on.png";
		}
	}	
function muteOut2(){
	if (document.getElementById("videoBox2").muted){
		document.getElementById("muteBtn2").src=  buttonPath +"VolumeBtnMute.png";
		}else{
		document.getElementById("muteBtn2").src=  buttonPath +"VolumeBtn.png";
		}
	}

function muteToggle2(){
		if (document.getElementById("videoBox2").muted){
		  	document.getElementById("videoBox2").muted=false;
			document.getElementById("muteBtn2").src= buttonPath +"VolumeBtn.png";
		  } else {
			document.getElementById("muteBtn2").src= buttonPath +"VolumeBtnMute.png";
		  	document.getElementById("videoBox2").muted=true;
		  }
		}
		
//Restart Button
function restartOver2(){
	document.getElementById("restartBtn2").src=  buttonPath +"RestartBtn_on.png";
	}
function restartOut2(){
		document.getElementById("restartBtn2").src= buttonPath +"RestartBtn.png";
	}	
function restartClick2(){
	document.getElementById("videoBox2").currentTime = 0;
	document.getElementById("PlayPauseBtn2").src= buttonPath+"PauseBtn.png";
	document.getElementById("videoBox2").play();
		}
	
//Exit Button
function exitOver2(){
		document.getElementById("playerClose2").src=  buttonPath +"ExitBtn_on.png";
	}
function exitOff2(){
		document.getElementById("playerClose2").src= buttonPath +"ExitBtn.png";
	}

function closePlayer2(){
		document.getElementById("objvideo2").style.visibility = "hidden";
		document.getElementById("videoBox2").pause();
	}
	
//function for when video Ends
function videoEnded(e) { 
	clearInterval(outListener2);
	var opacity = .2;
	var interval = 30;
	var inListener2 = null;
	var id = PlayerBar2;
	inListener2 = setInterval(function(){opacity = fadeInInterval2(opacity, id, inListener2);} , interval);
	document.getElementById("PlayPauseBtn2").src= buttonPath+"PlayBtn.png";
};		


function h264FallbackOver2(){
	clearInterval(delayOut2);
	clearInterval(outListener2);
	var opacity = 1;
	var interval = 30;
	var inListener2 = null;
	var id = PlayerBar2;
	inListener2 = setInterval(function(){opacity = fadeInInterval2(opacity, id, inListener2);} , interval);
}
function h264FallbackOut2(){
	delayOut2 = setTimeout(function(){	clearInterval(inListener2);
	var opacity = 1;
	var interval = 40;
	var id = PlayerBar2;
	outListener2 = setInterval(function(){opacity = fadeOutInterval2(opacity, id, outListener2);} , interval);},300);
}
function fadeOutInterval2(opacity, id, outListener2){
	opacity = opacity - 0.1;
	setOpacity2(id, opacity);
	if(opacity <0)
	clearInterval(outListener2);
	return opacity;
}
function fadeInInterval2(opacity, id, inListener2){
	opacity = opacity + 0.1;
	setOpacity2(id, opacity);
	if(opacity >1)
	clearInterval(inListener2);
	return opacity;
}
function setOpacity2(id, level){
	document.getElementById("PlayerBar2").style.opacity = level;	
}

//Functions to access player from html
function exitWTH2() {
	if(flvTest === true){
	thisMovie("objvideo2").exitVideoWTH2();
	}else{
		closePlayer();
	}
}
function pauseWTH2() {
	if(flvTest != true){
	document.getElementById("videoBox2").pause();
	}else{
	thisMovie("objvideo2").pauseVideoWTH();
	}
}

function unpauseWTH2() {
	if(flvTest === true){
	thisMovie("objvideo2").unpauseVideoWTH();
	}else{
	document.getElementById("videoBox2").play();
	}
}
function playWTH2() {
	if(flvTest === true){
	thisMovie("objvideo2").stopVideoWTH();
	thisMovie("objvideo2").playVideoWTH();
	}else{
	document.getElementById("videoBox2").play();
	document.getElementById("PlayPauseBtn2").src= buttonPath+"PauseBtn.png";
	}
}
function stopWTH2() {
	if(flvTest === true){
	thisMovie("objvideo2").stopVideoWTH();
	}else{
	document.getElementById("videoBox2").currentTime = 0;
	document.getElementById("videoBox2").pause();
	}
}
function muteWTH2() {
	if(flvTest === true){
	thisMovie("objvideo2").muteVolWTH();
	}else{
	muteToggle();
	}
}
function unmuteWTH2() {
	if(flvTest === true){
	thisMovie("objvideo2").startVolWTH();
	}else{
	muteToggle();
	}
}
function html5Complete2(){
	if (exitoncomplete == "yes"){
		exitWTH2();
	}else{
		pauseWTH2();
	}
}