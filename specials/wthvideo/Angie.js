// Copyright 2014 Website Talking Heads
// JavaScript Document

//Variables for Player
	var width= "320";
	var height= "320";
	var position= "absolute";
	var doctype= "strict";
	var left= "50%";
	var right= "auto";
	var divTop= "460";
	var bottom= "auto";
	var centeroffset= "70";
	var color= "0x000000";
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
	var actorpic= "Angie";//Just name,not extension
	var flv= "Angie";//Just name,not extension
	var h264= "Angie";//Just name,not extension
	var posterImg= "Angie";//Just name,not extension.  use a jpg for iOS, if left blank the png will be used.
	var inListenerFemale = null;
	var inListenerFemale = null;
	var delayOutFemale = null;
	var delayInFemale = null;
// end Vars	
//HTML5 cookies	
var hasSeen = "hasSeen"+flv;
var hasSeenSS = sessionStorage.getItem(hasSeen);
var hasSeenLS = localStorage.getItem(hasSeen);

if(hasSeenSS == "yes"){
	switch(autostart) {
		 case "oncethenpic":
			autostart = "no";
			break;
		 case "oncethenmute":
			autostart = "mute";	
			break;
	}
}else{
	sessionStorage.setItem(hasSeen, "yes");
	switch(autostart) {
		 case "oncethenpic":
			autostart = "yes";
			break;
		 case "oncethenmute":
			autostart = "yes";	
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
}else{
	localStorage.setItem(hasSeen, "yes");
	switch(autostart) {
		 case "onceonly":
			autostart = "yes";
			break;
		 case "onceonlythenmute":
			autostart = "yes";
			break;
		 case "onceonlythenpic":
			autostart = "yes";
			break;
	}
}
switch(oncepersession){
	case "yes":    
		if (hasSeenSS != "yes") {
		setTimeout(function () {createDiv()}, delay);
		}
		break;
    case "onceonly":
		if (hasSeenSS != "yes") {
		setTimeout(function () {createDiv()}, delay);
		}
        break;
     default:
	 	setTimeout(function () {createDiv()}, delay);
        break;
}
//End cookie creation	
// convert vars to something useful

	var playerBarHeight = ((width/4) *.6)+4;
	actorpic = path + "/" + actorpic + ".png";
	var imagePath =  path + "/";
	var buttonPath = imagePath + "buttons" +"/" ;
	var barImage = "url(" + imagePath + "PlayerBar.png)"; 
	var playerPath = path+"/wthplayer.swf";
	var hVideo = path+"/"+h264+".mp4";
	var hBtn = buttonPath+"/"+playbtn;
	flv+= ".flv"
	var flvTest = true;
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
	if (bottom != "auto"){
		bottom+="px";}
	if (centeroffset != "auto"){
		centeroffset+="px";}

//Detect iOS
var iOS = false,
    p = navigator.platform;

if( p === 'iPad' || p === 'iPhone' || p === 'iPod' ){
    iOS = true;
	overflow = "visible";
	if(bottom != "auto"){
		bottom = parseInt(bottom) + parseInt(playerBarHeight);
	}
	playerBarMarginTop = "0px";
	if(posterImg == ""){
		posterImg = actorpic;
	}else{
		posterImg = path + "/" + posterImg + ".jpg";
	}
}else{
	playerBarMarginTop = (-1)*(playerBarHeight+16)+"px";
	posterImg = actorpic;
	overflow = "hidden";
}
		
		
// start creating divs
function createDiv() {
	var my_div = null;
	var newDiv = null;
	var newDiv = document.createElement("div");
	newDiv.id = "wthvideoFemale"; 
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
		newFlashVars += "&amp;playerClose="+playerClose;
		///add swf object
		var markUp = '';
		markUp += '  <object id="objvideo" style="outline:none;" type="application/x-shockwave-flash" data="'+playerPath+'">';
		markUp += '    <param name="movie" value="'+playerPath+'" />';
		markUp += '    <param name="quality" value="high" />';
		markUp +=  ' 	<param name="flashvars" value="'+newFlashVars+'">';
		markUp += '    <param name="wmode" value="transparent" />';
		markUp += '    <param name="allowscriptaccess" value="always" />';
		markUp += '    <param name="swfversion" value="9.0.45.0" />';
		markUp += '  </object>';
		newDiv.innerHTML = markUp;
		var body   = document.body || document.getElementsByTagName('body')[0];
		body.insertBefore(newDiv,body.childNodes[0]);
		var objCSS = document.getElementById('objvideo').style;
		objCSS.height = height+"px";
		objCSS.width = width+"px";
	
		//add html5 fallback
		var newP = document.createElement("div");
		newP.id = "h264FallbackFemale";
		var videoMarkUp = '';
		videoMarkUp += '<video id="videoBox" width="'+width+'" height="'+height+'" poster="'+posterImg+'" >';
		videoMarkUp += '    <source src="'+hVideo+'" type="video/mp4">';
		videoMarkUp += 'Your Browser Does Not support the video tag';
		videoMarkUp += '  </video>';
		newP.innerHTML = videoMarkUp;
		newP.style.position = "relative";
		newP.style.zIndex = 10000;
		newP.style.height = height+"px";
		newDiv.style.width = width+"px";
		var dv = document.getElementById("objvideo");
		var h264FallbackFemale = newP;
		dv.appendChild(h264FallbackFemale);
		document.getElementById("videoBox").style.position = "relative";
		document.getElementById("videoBox").style.zIndex=1010;
		
		//Create playerbar
		var newP = document.createElement("div");
		newP.id = "FemalePlayerBar";
		newP.style.height=playerBarHeight+10+"px";
		newP.style.width = "70%";
		newP.style.margin = '0 auto';
		newP.style.marginTop = playerBarMarginTop;
		newP.style.cursor = "pointer";
		newP.style.position = "relative";
		newP.style.zIndex = 10020;
		newP.style.paddingTop = "7px";
		newP.style.backgroundImage= barImage;
		newP.style.backgroundRepeat= "no-repeat";
		newP.style.backgroundSize= "100% 100%";
		var dv = document.getElementById("h264FallbackFemale");
		var FemalePlayerBar = newP;
		dv.appendChild(FemalePlayerBar);
		
		//Create PlayButton
		var newDiv = document.createElement("img");
		newDiv.id = "PlayPauseBtn";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "PlayBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = "inherit";
		newDiv.style.marginLeft = "2%";
		var dv = document.getElementById("FemalePlayerBar");
		newP.style.position = "PlayPauseBtn";
		var PlayButton = newDiv;
		dv.appendChild(PlayButton);
				
		//Create Mute
		var newDiv = document.createElement("img");
		newDiv.id = "muteBtn";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "VolumeBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = "inherit";
		var dv = document.getElementById("FemalePlayerBar");
		var muteBtn = newDiv;
		dv.appendChild(muteBtn);
			

			
		//Create Restart
		var newDiv = document.createElement("img");
		newDiv.id = "restartBtn";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "RestartBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = 10050;
		var dv = document.getElementById("FemalePlayerBar");
		var restartBtn = newDiv;
		dv.appendChild(restartBtn);
		
		//Create exit button
		var newDiv = document.createElement("img");
		newDiv.id = "playerClose";
		newDiv.style.width = "24%";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = 99050;
		newDiv.style.float = "right";
		newDiv.src = buttonPath + "ExitBtn.png";
		newDiv.style.paddingRight = "2%";
		var dv = document.getElementById("FemalePlayerBar");
		var playerClose = newDiv;
		dv.appendChild(playerClose);
		
		HTML5Autostart();
		addeventlisteners();
}

function thisMovie(movieName) {
         if (navigator.appName.indexOf("Microsoft") != -1) {
             return window[movieName];
         } else {
             return document[movieName];
         }
     }


function HTML5Autostart(){
if (navigator.mimeTypes ["application/x-shockwave-flash"] == undefined){
	flvTest =false;
}else{
	flvTest = true;
}

if (flvTest == false){
	if(autostart == "yes"){
				document.getElementById('videoBox').autoplay=true;
				document.getElementById('PlayPauseBtn').src= buttonPath+"PauseBtn.png";
				document.getElementById('FemalePlayerBar').style.opacity = "0";
			}else{
				document.getElementById('FemalePlayerBar').style.opacity = "1";
		}
	if(exitoncomplete=="yes"){
		eoc=document.getElementById('videoBox');
		eoc.addEventListener('ended', exitWTH, false);
	}
}
}
	
	
function addeventlisteners(){
e = document.getElementById('PlayPauseBtn');//Play Pause
e.addEventListener('mouseover', playPauseOver, false);
e.addEventListener('mouseout', playPauseOut, false);
e.addEventListener('click', playToggle, false);
e = document.getElementById('muteBtn');//mute
e.addEventListener('mouseover', muteOver, false);
e.addEventListener('mouseout', muteOut, false);
e.addEventListener('click', muteToggle, false);
e = document.getElementById('restartBtn');//restart 
e.addEventListener('mouseover', restartOver, false);
e.addEventListener('mouseout', restartOut, false);
e.addEventListener('click', restartClick, false);
e = document.getElementById('playerClose');//restart 
e.addEventListener('mouseover', exitOver, false);
e.addEventListener('mouseout', exitOff, false);
e.addEventListener('click', closePlayer, false);
// event listener for video ending
myVidPlayed=document.getElementById("videoBox");
myVidPlayed.addEventListener('ended', videoEnded, false); 
	//PlayerBar mouse functions	
	e = document.getElementById('h264FallbackFemale');//Play Pause
	e.addEventListener('mouseover', FemalePlayerBarOver, false);
	e.addEventListener('mouseout', FemalePlayerBarOut, false);

//end eventlisteners
}

//Play Toggle Functions
function playPauseOver(e){
	if (document.getElementById('videoBox').paused){
		document.getElementById('PlayPauseBtn').src=  buttonPath +"PlayBtn_on.png";
		}else{
	document.getElementById('PlayPauseBtn').src=  buttonPath +"PauseBtn_on.png";
		}
	}	
function playPauseOut(e){
	if (document.getElementById('videoBox').paused){
		document.getElementById('PlayPauseBtn').src=  buttonPath +"PlayBtn.png";
		}else{
		document.getElementById('PlayPauseBtn').src=  buttonPath +"PauseBtn.png";
		}
	}
function playToggle(e){
		if (document.getElementById('videoBox').paused){
		  document.getElementById('videoBox').play();
		document.getElementById('PlayPauseBtn').src= buttonPath+"PauseBtn.png";
		document.getElementById('FemalePlayerBar').style.opacity = "1";
		  } else {
			document.getElementById('PlayPauseBtn').src= buttonPath+"PlayBtn.png";
		  	document.getElementById('videoBox').pause();
		  }
		}
		
//Mute Button Functions
function muteOver(){
	if (document.getElementById('videoBox').muted){
		document.getElementById('muteBtn').src=  buttonPath +"VolumeBtnMute_on.png";
		}else{
		document.getElementById('muteBtn').src=  buttonPath +"VolumeBtn_on.png";
		}
	}	
function muteOut(){
	if (document.getElementById('videoBox').muted){
		document.getElementById('muteBtn').src=  buttonPath +"VolumeBtnMute.png";
		}else{
		document.getElementById('muteBtn').src=  buttonPath +"VolumeBtn.png";
		}
	}

function muteToggle(){
		if (document.getElementById('videoBox').muted){
		  	document.getElementById('videoBox').muted=false;
			document.getElementById('muteBtn').src= buttonPath +"VolumeBtn.png";
		  } else {
			document.getElementById('muteBtn').src= buttonPath +"VolumeBtnMute.png";
		  	document.getElementById('videoBox').muted=true;
		  }
		}
		
//Restart Button
function restartOver(){
	document.getElementById('restartBtn').src=  buttonPath +"RestartBtn_on.png";
	}
function restartOut(){
		document.getElementById('restartBtn').src= buttonPath +"RestartBtn.png";
	}	
function restartClick(){
	document.getElementById('videoBox').currentTime = 0;
	document.getElementById('videoBox').play();
		}
	
//Exit Button
function exitOver(){
		document.getElementById('playerClose').src=  buttonPath +"ExitBtn_on.png";
	}
function exitOff(){
		document.getElementById('playerClose').src= buttonPath +"ExitBtn.png";
	}

function closePlayer(){
		document.getElementById('objvideo').style.visibility = "hidden";
		document.getElementById('videoBox').pause();
	}
	
//function for when video Ends
function videoEnded(e) { 
	clearInterval(inListenerFemale );
	var opacityFemale = .2;
	var intervalFemale = 30;
	var inListenerFemale = null;
	var id = FemalePlayerBar;
	inListenerFemale = setInterval(function(){opacityFemale = fadeInIntervalFemale(opacityFemale, id, inListenerFemale );} , intervalFemale);
	document.getElementById('PlayPauseBtn').src= buttonPath+"PlayBtn.png";
};		
function FemalePlayerBarOver(){
	clearInterval(delayOutFemale );
	clearInterval(inListenerFemale );
	var opacityFemale = 1;
	var intervalFemale = 30;
	var inListenerFemale = null;
	var id = FemalePlayerBar;
	inListenerFemale = setInterval(function(){opacityFemale = fadeInIntervalFemale(opacityFemale, id, inListenerFemale );} , intervalFemale);
}
function FemalePlayerBarOut(){
	delayOutFemale =setTimeout(function(){	clearInterval(inListenerFemale );
	var opacityFemale = 1;
	var intervalFemale = 40;
	var id = FemalePlayerBar;
	inListenerFemale = setInterval(function(){opacityFemale = fadeOutIntervalFemale(opacityFemale, id, inListenerFemale );} , intervalFemale);},300);
}
function fadeOutIntervalFemale(opacityFemale, id, inListenerFemale ){
	opacityFemale = opacityFemale - 0.1;
	setOpacityFemale(id, opacityFemale);
	if(opacityFemale <0)
	clearInterval(inListenerFemale );
	return opacityFemale;
}
function fadeInIntervalFemale(opacityFemale, id, inListenerFemale ){
	opacityFemale = opacityFemale + 0.1;
	setOpacityFemale(id, opacityFemale);
	if(opacityFemale >1)
	clearInterval(inListenerFemale );
	return opacityFemale;
}
function setOpacityFemale(id, level){
	document.getElementById('FemalePlayerBar').style.opacity = level;	
}


//Functions to access player from html
function exitWTH() {
	if(flvTest === true){
	thisMovie("objvideo").exitVideoWTH();
	}else{
		closePlayer();
	}
}
function pauseWTH() {
	if(flvTest === true){
	thisMovie("objvideo").pauseVideoWTH();
	}else{
	document.getElementById('videoBox').pause();
	}
}

function unpauseWTH() {
	if(flvTest === true){
	thisMovie("objvideo").unpauseVideoWTH();
	}else{
	document.getElementById('videoBox').play();
	}
}
function playWTH() {
	if(flvTest === true){
	thisMovie("objvideo").playVideoWTH();
	}else{
	document.getElementById('videoBox').play();
	}
}
function stopWTH() {
	if(flvTest === true){
	thisMovie("objvideo").stopVideoWTH();
	}else{
	document.getElementById('videoBox').currentTime = 0;
	document.getElementById('videoBox').pause();
	}
}
function muteWTH() {
	if(flvTest === true){
	thisMovie("objvideo").muteVolWTH();
	}else{
	muteToggle();
	}
}
function unmuteWTH() {
	if(flvTest === true){
	thisMovie('objvideo').startVolWTH();
	}else{
	muteToggle();
	}
}

function hideDiv() {
	var child= document.getElementById("wthvideoFemale");
	var parent= child.parentNode;
	parent.removeChild(child);
}
