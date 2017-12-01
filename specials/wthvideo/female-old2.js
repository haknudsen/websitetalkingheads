// Copyright 2014 Website Talking Heads
// JavaScript Document
var female = document.getElementById('female').innerHTML
//Variables for Player
	var width= "320";
	var height= "320";
	var position= "absolute";
	var doctype= "strict";
	var left= "50%";
	var right= "auto";
	var divTop= "490";
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
	var actorpic= female;//Just name,not extension
	var flv= female;//Just name,not extension
	var h264= female;//Just name,not extension
	var posterImg= female;//Just name,not extension.  use a jpg for iOS, if left blank the png will be used.	
	var inListenerFemale = null;
	var outListenerFemale = null;
	var delayOutFemale = null;
	var delayInFemale = null;
// end Vars	

// convert vars to something useful

	var playerBarHeight = ((width/4) *.6)+4;
	posterImg = path + "/" + posterImg + ".jpg";
	actorpic = path + "/" + actorpic + ".png";
	var imagePath =  path + "/";
	var buttonPath = imagePath + "buttons" +"/" ;
	var barImage = "url(" + imagePath + "PlayerBar.png)"; 
	var playerPath = path+"/wthplayer-female.swf";
	var hVideo = path+"/"+h264+".mp4";
	var hBtn = buttonPath+"/"+playbtn;
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
	playerBarMarginTop = -2 +"px";
	if(!posterImg == ".jpg"){
		posterImg = actorpic;
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
	newDiv.alt = "Video Spokesperson";
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
		newFlashVars += "&amp;playerCloseFemale="+playerCloseFemale;
		///add swf object
		var markUp = '';
		markUp += '  <object id="objvideoFemale" style="outline:none;" type="application/x-shockwave-flash" data="'+playerPath+'">';
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
		var objCSS = document.getElementById('objvideoFemale').style;
		objCSS.height = height+"px";
		objCSS.width = width+"px";
	
		//add html5 fallback
		var newP = document.createElement("div");
		newP.id = "h264FallbackFemale";
		var videoMarkUp = '';
		videoMarkUp += '<video id="videoBoxFemale" width="'+width+'" height="'+height+'" poster="'+posterImg+'" >';
		videoMarkUp += '    <source src="'+hVideo+'" type="video/mp4">';
		videoMarkUp += 'Your Browser Does Not support the video tag';
		videoMarkUp += '  </video>';
		newP.innerHTML = videoMarkUp;
		newP.style.position = "relative";
		newP.style.zIndex = 10000;
		newP.style.height = height+"px";
		newDiv.style.width = width+"px";
		var dv = document.getElementById("objvideoFemale");
		var h264FallbackFemale = newP;
		dv.appendChild(h264FallbackFemale);
		document.getElementById("videoBoxFemale").style.position = "relative";
		document.getElementById("videoBoxFemale").style.zIndex=1010;
		
		//Create playerbar
		var newP = document.createElement("div");
		newP.id = "PlayerBarFemale";
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
		var PlayerBarFemale = newP;
		dv.appendChild(PlayerBarFemale);
		
		//Create PlayButton
		var newDiv = document.createElement("img");
		newDiv.id = "PlayPauseBtnFemale";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "PlayBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = "inherit";
		newDiv.style.marginLeft = "2%";
		var dv = document.getElementById("PlayerBarFemale");
		newP.style.position = "PlayPauseBtnFemale";
		var PlayButton = newDiv;
		dv.appendChild(PlayButton);
				
		//Create Mute
		var newDiv = document.createElement("img");
		newDiv.id = "muteBtnFemale";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "VolumeBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = "inherit";
		var dv = document.getElementById("PlayerBarFemale");
		var muteBtnFemale = newDiv;
		dv.appendChild(muteBtnFemale);
			

			
		//Create Restart
		var newDiv = document.createElement("img");
		newDiv.id = "restartBtnFemale";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "RestartBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = 10050;
		var dv = document.getElementById("PlayerBarFemale");
		var restartBtnFemale = newDiv;
		dv.appendChild(restartBtnFemale);
		
		//Create exit button
		var newDiv = document.createElement("img");
		newDiv.id = "playerCloseFemale";
		newDiv.style.width = "24%";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = 99050;
		newDiv.style.float = "right";
		newDiv.src = buttonPath + "ExitBtn.png";
		newDiv.style.paddingRight = "2%";
		var dv = document.getElementById("PlayerBarFemale");
		var playerCloseFemale = newDiv;
		dv.appendChild(playerCloseFemale);
		document.getElementById("videoBoxFemale").setAttribute("style","-webkit-filter:brightness(108.5%)");
		document.getElementById("videoBoxFemale").setAttribute("style","filter:brightness(108.5%)");
}






if (autostart=="oncethenpic") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;path=/;';
		autostart = "yes";
		}
	else {
		autostart = "no";

	}
}

if (autostart=="oncethenmute") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;path=/;';
		autostart = "yes";
		}
	else {
		autostart = "mute";
	}
}

if (autostart=="onceonly") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		autostart = "yes";
		}
	else {
		autostart = "mute";
	}
}

if (autostart=="onceonlythenmute") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		autostart = "yes";
		}
	else {
		autostart = "mute";
	}
}
if (autostart=="onceonlythenpic") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		autostart = "yes";
		}
	else {
		autostart = "no";

	}
}

if (oncepersession == "yes") {
	onlyOnce();}
	else {
		if (oncepersession == "onceonly") {
			onlyOnce2();}
		else {
		createDiv();
	}
	}


//hasSeen functions creating cookies
function onlyOnce() {
if (document.cookie.indexOf("hasSeen=true") == -1) {
var later = new Date();
later.setFullYear(later.getFullYear()+10);
document.cookie = 'hasSeen=true;path=/;';
createDiv();
}
}
function onlyOnce2() {
if (document.cookie.indexOf("hasSeen=true") == -1) {
var later = new Date();
later.setFullYear(later.getFullYear()+10);
document.cookie = 'hasSeen=true;path=/;';
createDiv();
}
}
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
//HTML5 Autostart




if (flvTest == false){
		addEventListenersFemale();
	if(autostart == "yes"){
				document.getElementById('videoBoxFemale').autoplay=true;
				document.getElementById('PlayPauseBtnFemale').src= buttonPath+"PauseBtn.png";
				document.getElementById('PlayerBarFemale').style.opacity = "0";
			}else{
				document.getElementById('PlayerBarFemale').style.opacity = "1";
		}
	if(exitoncomplete=="yes"){
		eoc=document.getElementById('videoBoxFemale');
		eoc.addEventListener('ended', exitWTH, false);
	}
}

	
function addEventListenersFemale(){	
//add eventlisteners
	em = document.getElementById('PlayPauseBtnFemale');//Play Pause
	em.addEventListener('mouseover', playPauseOver, false);
	em.addEventListener('mouseout', playPauseOut, false);
	em.addEventListener('click', playToggle, false);
	emb = document.getElementById('muteBtnFemale');//mute
	emb.addEventListener('mouseover', muteOver, false);
	emb.addEventListener('mouseout', muteOut, false);
	emb.addEventListener('click', muteToggle, false);
	er = document.getElementById('restartBtnFemale');//restart 
	er.addEventListener('mouseover', restartOver, false);
	er.addEventListener('mouseout', restartOut, false);
	er.addEventListener('click', restartClick, false);
	ec = document.getElementById('playerCloseFemale');//restart 
	ec.addEventListener('mouseover', exitOver, false);
	ec.addEventListener('mouseout', exitOff, false);
	ec.addEventListener('click', closePlayer, false);
	// event listener for video ending
	myVidPlayedFemale=document.getElementById("videoBoxFemale");
	myVidPlayedFemale.addEventListener('ended', videoEnded, false); 

//end eventlisteners
}

//Play Toggle Functions
function playPauseOver(e){
	if (document.getElementById('videoBoxFemale').paused){
		document.getElementById('PlayPauseBtnFemale').src=  buttonPath +"PlayBtn_on.png";
		}else{
	document.getElementById('PlayPauseBtnFemale').src=  buttonPath +"PauseBtn_on.png";
		}
	}	
function playPauseOut(e){
	if (document.getElementById('videoBoxFemale').paused){
		document.getElementById('PlayPauseBtnFemale').src=  buttonPath +"PlayBtn.png";
		}else{
		document.getElementById('PlayPauseBtnFemale').src=  buttonPath +"PauseBtn.png";
		}
	}
function playToggle(e){
		if (document.getElementById('videoBoxFemale').paused){
		  document.getElementById('videoBoxFemale').play();
		document.getElementById('PlayPauseBtnFemale').src= buttonPath+"PauseBtn.png";
		document.getElementById('PlayerBarFemale').style.opacity = "1";
		  } else {
			document.getElementById('PlayPauseBtnFemale').src= buttonPath+"PlayBtn.png";
		  	document.getElementById('videoBoxFemale').pause();
		  }
		}
		
//Mute Button Functions
function muteOver(){
	if (document.getElementById('videoBoxFemale').muted){
		document.getElementById('muteBtnFemale').src=  buttonPath +"VolumeBtnMute_on.png";
		}else{
		document.getElementById('muteBtnFemale').src=  buttonPath +"VolumeBtn_on.png";
		}
	}	
function muteOut(){
	if (document.getElementById('videoBoxFemale').muted){
		document.getElementById('muteBtnFemale').src=  buttonPath +"VolumeBtnMute.png";
		}else{
		document.getElementById('muteBtnFemale').src=  buttonPath +"VolumeBtn.png";
		}
	}

function muteToggle(){
		if (document.getElementById('videoBoxFemale').muted){
		  	document.getElementById('videoBoxFemale').muted=false;
			document.getElementById('muteBtnFemale').src= buttonPath +"VolumeBtn.png";
		  } else {
			document.getElementById('muteBtnFemale').src= buttonPath +"VolumeBtnMute.png";
		  	document.getElementById('videoBoxFemale').muted=true;
		  }
		}
		
//Restart Button
function restartOver(){
	document.getElementById('restartBtnFemale').src=  buttonPath +"RestartBtn_on.png";
	}
function restartOut(){
		document.getElementById('restartBtnFemale').src= buttonPath +"RestartBtn.png";
	}	
function restartClick(){
	document.getElementById('videoBoxFemale').currentTime = 0;
	document.getElementById('videoBoxFemale').play();
		}
	
//Exit Button
function exitOver(){
		document.getElementById('playerCloseFemale').src=  buttonPath +"ExitBtn_on.png";
	}
function exitOff(){
		document.getElementById('playerCloseFemale').src= buttonPath +"ExitBtn.png";
	}

function closePlayer(){
		document.getElementById('objvideoFemale').style.visibility = "hidden";
		document.getElementById('videoBoxFemale').pause();
	}
	
//function for when video Ends
function videoEnded(e) { 
	clearInterval(outListenerFemale);
	var opacity = .2;
	var interval = 30;
	var inListenerFemale = null;
	var id = PlayerBarFemale;
	inListenerFemale = setInterval(function(){opacity = fadeInInterval(opacity, id, inListenerFemale);} , interval);
	document.getElementById('PlayPauseBtnFemale').src= buttonPath+"PlayBtn.png";
};		


function FemalePlayerBarOver(){
	clearInterval(delayOutFemale);
	clearInterval(outListenerFemale);
	var opacity = 1;
	var interval = 30;
	var inListenerFemale = null;
	var idM = PlayerBarFemale;
	inListenerFemale = setInterval(function(){opacity = fadeInInterval(opacity, idM, inListenerFemale);} , interval);
}
function FemalePlayerBarOut(){
	delayOutFemale=setTimeout(function(){	clearInterval(inListenerFemale);
	var opacity = 1;
	var interval = 40;
	var idM = PlayerBarFemale;
	outListenerFemale = setInterval(function(){opacity = fadeOutInterval(opacity, idM, outListenerFemale);} , interval);},300);
}
function fadeOutInterval(opacity, idM, outListenerFemale){
	opacity = opacity - 0.1;
	setOpacity(idM, opacity);
	if(opacity <0)
	clearInterval(outListenerFemale);
	return opacity;
}
function fadeInInterval(opacity, idM, inListenerFemale){
	opacity = opacity + 0.1;
	setOpacity(idM, opacity);
	if(opacity >1)
	clearInterval(inListenerFemale);
	return opacity;
}
function setOpacity(idM, level){
	document.getElementById('PlayerBarFemale').style.opacity = level;	
}

//Functions to access player from html
function exitWTHfemale() {
	if(flvTest === true){
	thisMovie("objvideoFemale").exitVideoWTHfemale();
	}else{
		closePlayer();
	}
}
function pauseWTHfemale() {
	if(flvTest === true){
	thisMovie("objvideoFemale").pauseVideoWTHfemale();
	}else{
	document.getElementById('videoBoxFemale').pause();
	}
}

function unpauseWTHfemale() {
	if(flvTest === true){
	thisMovie("objvideoFemale").unpauseVideoWTHfemale();
	}else{
	document.getElementById('videoBoxFemale').play();
	}
}
function playWTHfemale() {
	if(flvTest === true){
	thisMovie("objvideoFemale").playVideoWTHfemale();
	}else{
	document.getElementById('videoBoxFemale').play();
	}
}
function stopWTHfemale() {
	if(flvTest === true){
	thisMovie("objvideoFemale").stopVideoWTHfemale();
	}else{
	document.getElementById('videoBoxFemale').currentTime = 0;
	document.getElementById('videoBoxFemale').pause();
	}
}
function muteWTHfemale() {
	if(flvTest === true){
	thisMovie("objvideoFemale").muteVolWTHfemale();
	}else{
	muteToggle();
	}
}
function unmuteWTHfemale() {
	if(flvTest === true){
	thisMovie('objvideoFemale').startVolWTHfemale();
	}else{
	muteToggle();
	}
}

function hideDivFemale() {
	var child= document.getElementById("wthvideoFemale");
	var parent= child.parentNode;
	parent.removeChild(child);
}
