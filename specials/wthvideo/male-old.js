// Copyright 2014 Website Talking Heads
// JavaScript Document
var male = document.getElementById('male').innerHTML
//Variables for Player
	var width= "320";
	var height= "320";
	var position= "absolute";
	var doctype= "strict";
	var left= "50%";
	var right= "auto";
	var divTop= "490";
	var bottom= "auto";
	var centeroffset= "-390";
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
	var actorpic= male;//Just name,not extension
	var flv= male;//Just name,not extension
	var h264= male;//Just name,not extension
	var posterImg= male;//Just name,not extension.  use a jpg for iOS, if left blank the png will be used.	
	var inListenerMale = null;
	var outListenerMale = null;
	var delayOutMale = null;
	var delayInMale = null;
// end Vars	

// convert vars to something useful

	var playerBarHeight = ((width/4) *.6)+4;
	posterImg = path + "/" + posterImg + ".jpg";
	actorpic = path + "/" + actorpic + ".png";
	var imagePath =  path + "/";
	var buttonPath = imagePath + "buttons" +"/" ;
	var barImage = "url(" + imagePath + "PlayerBar.png)"; 
	var playerPath = path+"/wthplayer-male.swf";
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
	newDiv.id = "wthvideoMale"; 
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
		newFlashVars += "&amp;playerCloseMale="+playerCloseMale;
		///add swf object
		var markUp = '';
		markUp += '  <object id="objvideoMale" style="outline:none;" type="application/x-shockwave-flash" data="'+playerPath+'">';
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
		var objCSS = document.getElementById('objvideoMale').style;
		objCSS.height = height+"px";
		objCSS.width = width+"px";
	
		//add html5 fallback
		var newP = document.createElement("div");
		newP.id = "h264FallbackMale";
		var videoMarkUp = '';
		videoMarkUp += '<video id="videoBoxMale" width="'+width+'" height="'+height+'" poster="'+posterImg+'" >';
		videoMarkUp += '    <source src="'+hVideo+'" type="video/mp4">';
		videoMarkUp += 'Your Browser Does Not support the video tag';
		videoMarkUp += '  </video>';
		newP.innerHTML = videoMarkUp;
		newP.style.position = "relative";
		newP.style.zIndex = 10000;
		newP.style.height = height+"px";
		newDiv.style.width = width+"px";
		var dv = document.getElementById("objvideoMale");
		var h264FallbackMale = newP;
		dv.appendChild(h264FallbackMale);
		document.getElementById("videoBoxMale").style.position = "relative";
		document.getElementById("videoBoxMale").style.zIndex=1010;
		
		//Create playerbar
		var newP = document.createElement("div");
		newP.id = "PlayerBarMale";
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
		var dv = document.getElementById("h264FallbackMale");
		var PlayerBarMale = newP;
		dv.appendChild(PlayerBarMale);
		
		//Create PlayButton
		var newDiv = document.createElement("img");
		newDiv.id = "PlayPauseBtnMale";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "PlayBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = "inherit";
		newDiv.style.marginLeft = "2%";
		var dv = document.getElementById("PlayerBarMale");
		newP.style.position = "PlayPauseBtnMale";
		var PlayButton = newDiv;
		dv.appendChild(PlayButton);
				
		//Create Mute
		var newDiv = document.createElement("img");
		newDiv.id = "muteBtnMale";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "VolumeBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = "inherit";
		var dv = document.getElementById("PlayerBarMale");
		var muteBtnMale = newDiv;
		dv.appendChild(muteBtnMale);
			

			
		//Create Restart
		var newDiv = document.createElement("img");
		newDiv.id = "restartBtnMale";
		newDiv.style.width = "24%";
		newDiv.style.float = "left";
		newDiv.src = buttonPath + "RestartBtn.png";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = 10050;
		var dv = document.getElementById("PlayerBarMale");
		var restartBtnMale = newDiv;
		dv.appendChild(restartBtnMale);
		
		//Create exit button
		var newDiv = document.createElement("img");
		newDiv.id = "playerCloseMale";
		newDiv.style.width = "24%";
		newDiv.style.position = "relative";
		newDiv.style.zIndex = 99050;
		newDiv.style.float = "right";
		newDiv.src = buttonPath + "ExitBtn.png";
		newDiv.style.paddingRight = "2%";
		var dv = document.getElementById("PlayerBarMale");
		var playerCloseMale = newDiv;
		dv.appendChild(playerCloseMale);
		document.getElementById("videoBoxMale").setAttribute("style","-webkit-filter:brightness(108.5%)");
		document.getElementById("videoBoxMale").setAttribute("style","filter:brightness(108.5%)");
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
		addEventListenersMale();
	if(autostart == "yes"){
				document.getElementById('videoBoxMale').autoplay=true;
				document.getElementById('PlayPauseBtnMale').src= buttonPath+"PauseBtn.png";
				document.getElementById('PlayerBarMale').style.opacity = "0";
			}else{
				document.getElementById('PlayerBarMale').style.opacity = "1";
		}
	if(exitoncomplete=="yes"){
		eoc=document.getElementById('videoBoxMale');
		eoc.addEventListener('ended', exitWTH, false);
	}
}

	
function addEventListenersMale(){	
//add eventlisteners
	em = document.getElementById('PlayPauseBtnMale');//Play Pause
	em.addEventListener('mouseover', playPauseOver, false);
	em.addEventListener('mouseout', playPauseOut, false);
	em.addEventListener('click', playToggle, false);
	emb = document.getElementById('muteBtnMale');//mute
	emb.addEventListener('mouseover', muteOver, false);
	emb.addEventListener('mouseout', muteOut, false);
	emb.addEventListener('click', muteToggle, false);
	er = document.getElementById('restartBtnMale');//restart 
	er.addEventListener('mouseover', restartOver, false);
	er.addEventListener('mouseout', restartOut, false);
	er.addEventListener('click', restartClick, false);
	ec = document.getElementById('playerCloseMale');//restart 
	ec.addEventListener('mouseover', exitOver, false);
	ec.addEventListener('mouseout', exitOff, false);
	ec.addEventListener('click', closePlayer, false);
	// event listener for video ending
	myVidPlayedMale=document.getElementById("videoBoxMale");
	myVidPlayedMale.addEventListener('ended', videoEnded, false); 

//end eventlisteners
}

//Play Toggle Functions
function playPauseOver(e){
	if (document.getElementById('videoBoxMale').paused){
		document.getElementById('PlayPauseBtnMale').src=  buttonPath +"PlayBtn_on.png";
		}else{
	document.getElementById('PlayPauseBtnMale').src=  buttonPath +"PauseBtn_on.png";
		}
	}	
function playPauseOut(e){
	if (document.getElementById('videoBoxMale').paused){
		document.getElementById('PlayPauseBtnMale').src=  buttonPath +"PlayBtn.png";
		}else{
		document.getElementById('PlayPauseBtnMale').src=  buttonPath +"PauseBtn.png";
		}
	}
function playToggle(e){
		if (document.getElementById('videoBoxMale').paused){
		  document.getElementById('videoBoxMale').play();
		document.getElementById('PlayPauseBtnMale').src= buttonPath+"PauseBtn.png";
		document.getElementById('PlayerBarMale').style.opacity = "1";
		  } else {
			document.getElementById('PlayPauseBtnMale').src= buttonPath+"PlayBtn.png";
		  	document.getElementById('videoBoxMale').pause();
		  }
		}
		
//Mute Button Functions
function muteOver(){
	if (document.getElementById('videoBoxMale').muted){
		document.getElementById('muteBtnMale').src=  buttonPath +"VolumeBtnMute_on.png";
		}else{
		document.getElementById('muteBtnMale').src=  buttonPath +"VolumeBtn_on.png";
		}
	}	
function muteOut(){
	if (document.getElementById('videoBoxMale').muted){
		document.getElementById('muteBtnMale').src=  buttonPath +"VolumeBtnMute.png";
		}else{
		document.getElementById('muteBtnMale').src=  buttonPath +"VolumeBtn.png";
		}
	}

function muteToggle(){
		if (document.getElementById('videoBoxMale').muted){
		  	document.getElementById('videoBoxMale').muted=false;
			document.getElementById('muteBtnMale').src= buttonPath +"VolumeBtn.png";
		  } else {
			document.getElementById('muteBtnMale').src= buttonPath +"VolumeBtnMute.png";
		  	document.getElementById('videoBoxMale').muted=true;
		  }
		}
		
//Restart Button
function restartOver(){
	document.getElementById('restartBtnMale').src=  buttonPath +"RestartBtn_on.png";
	}
function restartOut(){
		document.getElementById('restartBtnMale').src= buttonPath +"RestartBtn.png";
	}	
function restartClick(){
	document.getElementById('videoBoxMale').currentTime = 0;
	document.getElementById('videoBoxMale').play();
		}
	
//Exit Button
function exitOver(){
		document.getElementById('playerCloseMale').src=  buttonPath +"ExitBtn_on.png";
	}
function exitOff(){
		document.getElementById('playerCloseMale').src= buttonPath +"ExitBtn.png";
	}

function closePlayer(){
		document.getElementById('objvideoMale').style.visibility = "hidden";
		document.getElementById('videoBoxMale').pause();
	}
	
//function for when video Ends
function videoEnded(e) { 
	clearInterval(outListenerMale);
	var opacity = .2;
	var interval = 30;
	var inListenerMale = null;
	var id = PlayerBarMale;
	inListenerMale = setInterval(function(){opacity = fadeInInterval(opacity, id, inListenerMale);} , interval);
	document.getElementById('PlayPauseBtnMale').src= buttonPath+"PlayBtn.png";
};		


function MalePlayerBarOver(){
	clearInterval(delayOutMale);
	clearInterval(outListenerMale);
	var opacity = 1;
	var interval = 30;
	var inListenerMale = null;
	var idM = PlayerBarMale;
	inListenerMale = setInterval(function(){opacity = fadeInInterval(opacity, idM, inListenerMale);} , interval);
}
function MalePlayerBarOut(){
	delayOutMale=setTimeout(function(){	clearInterval(inListenerMale);
	var opacity = 1;
	var interval = 40;
	var idM = PlayerBarMale;
	outListenerMale = setInterval(function(){opacity = fadeOutInterval(opacity, idM, outListenerMale);} , interval);},300);
}
function fadeOutInterval(opacity, idM, outListenerMale){
	opacity = opacity - 0.1;
	setOpacity(idM, opacity);
	if(opacity <0)
	clearInterval(outListenerMale);
	return opacity;
}
function fadeInInterval(opacity, idM, inListenerMale){
	opacity = opacity + 0.1;
	setOpacity(idM, opacity);
	if(opacity >1)
	clearInterval(inListenerMale);
	return opacity;
}
function setOpacity(idM, level){
	document.getElementById('PlayerBarMale').style.opacity = level;	
}

//Functions to access player from html
function exitWTHmale() {
	if(flvTest === true){
	thisMovie("objvideoMale").exitVideoWTHmale();
	}else{
		closePlayer();
	}
}
function pauseWTHmale() {
	if(flvTest === true){
	thisMovie("objvideoMale").pauseVideoWTHmale();
	}else{
	document.getElementById('videoBoxMale').pause();
	}
}

function unpauseWTHmale() {
	if(flvTest === true){
	thisMovie("objvideoMale").unpauseVideoWTHmale();
	}else{
	document.getElementById('videoBoxMale').play();
	}
}
function playWTHmale() {
	if(flvTest === true){
	thisMovie("objvideoMale").playVideoWTHmale();
	}else{
	document.getElementById('videoBoxMale').play();
	}
}
function stopWTHmale() {
	if(flvTest === true){
	thisMovie("objvideoMale").stopVideoWTHmale();
	}else{
	document.getElementById('videoBoxMale').currentTime = 0;
	document.getElementById('videoBoxMale').pause();
	}
}
function muteWTHmale() {
	if(flvTest === true){
	thisMovie("objvideoMale").muteVolWTHmale();
	}else{
	muteToggle();
	}
}
function unmuteWTHmale() {
	if(flvTest === true){
	thisMovie('objvideoMale').startVolWTHmale();
	}else{
	muteToggle();
	}
}

function hideDivMale() {
	var child= document.getElementById("wthvideoMale");
	var parent= child.parentNode;
	parent.removeChild(child);
}
