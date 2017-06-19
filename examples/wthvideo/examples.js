// Copyright 2014 Website Talking Heads
// JavaScript Document

//Variables for Player
	var width= "336";
	var height= "288";
	var position= "absolute";
	var doctype= "strict";
	var left= "50%";
	var right= "auto";
	var divTop= "244";
	var bottom= "auto";
	var centeroffset= "-400";
	var color= 0xCCCCCC;
	var volume= 70;
	var autostart= "oncethenpic";
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
	var exitoncomplete= "yes";
	var oncepersession= "no";
	var vidlink= "no";
	var openin= "_blank";
	var path= "http://websitetalkingheads.com/wthvideo";
	var actorpic= "chantelhome";//Just name,not extension
	var flv= "chantelhome";//Just name,not extension
	var h264= "chantelhome";//Just name,not extension
// end Vars	

// convert vars to something useful
	actorpic = path + "/" + actorpic + ".png";
	var btnTop = (height)-(122);
	var btnLeft = (width/2)-(51);
	var playerPath = path+"/wthplayer.swf";
	var hVideo = path+"/"+h264+".mp4";
	var hBtn = path+"/"+playbtn;
	var playbtnPath =	path+"/"+playbtn;
	var exitButton=path+"/"+"exitBtn.png";
	btnTop+="px";
	btnLeft+="px";
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
// start creating divs

function createDiv() {
	var my_div = null;
	var newDiv = null;
	var newDiv = document.createElement("div");
	newDiv.id = "wthvideo"; 
	newDiv.style.position = position;
	newDiv.style.top = divTop;
	newDiv.style.width = width;
	newDiv.style.height = height;
	newDiv.style.left = left;
	newDiv.style.right = right;
	newDiv.style.bottom = bottom;
	newDiv.style.marginLeft = centeroffset;
	newDiv.style.cursor = "pointer";
	newDiv.style.zIndex = 99999;
	
	
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
		newFlashVars += "&amp;exitbtn="+exitbtn;
		///add swf object
		var markUp = '';
		markUp += '  <object id="objvideo" style="outline:none;" type="application/x-shockwave-flash" width="'+width+'" height="'+height+'" data="'+playerPath+'">';
		markUp += '    <param name="movie" value="'+playerPath+'" />';
		markUp += '    <param name="quality" value="high" />';
		markUp +=  ' 	<param name="flashvars" value="'+newFlashVars+'">';
		markUp += '    <param name="wmode" value="transparent" />';
		markUp += '    <param name="allowscriptaccess" value="always" />';
		markUp += '    <param name="swfversion" value="9.0.45.0" />';
		markUp += '  </object>';
		newDiv.innerHTML = markUp;
		my_div = document.getElementById("org_div1");
		document.body.insertBefore(newDiv, my_div);

		
		//add html5 fallback
		var newP = document.createElement("div");
		newP.id = "h264Fallback";
		var videoMarkUp = '';
	
		videoMarkUp += '<video width="'+width+'" height="'+height+'" poster="'+actorpic+'" controls>';
		videoMarkUp += '    <source src="'+hVideo+'" type="video/mp4">';
		videoMarkUp += '    Your Browser Does Not support the video tag';
		videoMarkUp += '  </video>';

		newP.innerHTML = videoMarkUp;
		var dv = document.getElementById("objvideo");
		var h264Fallback = newP;
		dv.appendChild(h264Fallback);
		
	
}



function hideDiv() {
	var child= document.getElementById("wthvideo");
	var parent= child.parentNode;
	parent.removeChild(child);
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


function thisMovie(movieName) {
         if (navigator.appName.indexOf("Microsoft") != -1) {
             return window[movieName];
         } else {
             return document[movieName];
         }
     }

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

function exitWTH() {
	thisMovie("objvideo").exitVideoWTH();
}
function pauseWTH() {
	thisMovie("objvideo").pauseVideoWTH();
}

function unpauseWTH() {
	thisMovie("objvideo").unpauseVideoWTH();
}
function playWTH() {
	thisMovie("objvideo").playVideoWTH();
}
function stopWTH() {
	thisMovie("objvideo").stopVideoWTH();
}
function muteWTH() {
	thisMovie("objvideo").muteVolWTH();
}
function unmuteWTH() {
	thisMovie("objvideo").startVolWTH();
}