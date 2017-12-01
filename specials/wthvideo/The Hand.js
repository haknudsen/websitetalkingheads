// Copyright 2013 Website Talking Heads
// JavaScript Document
if (typeof wthvideo2 == "undefined") {
	wthvideo2 = new Object();
}
wthvideo2.params = {
	width:320,
	height:320,
	position:"absolute",
	doctype:"strict",
	left:"50%",
	right:"auto",
	top:"460px",
	bottom:"auto",
	centeroffset:"-390px",
	color:0xCCCCCC,
	volume:10,
	autostart:"loop",
	fadein:0,
	fadeout:2,
	flip:"no",
	delay:0,
	delayclose:0,
	buffertime:3,
	controlbar:"mouse",
	exitbtn:"no",
	playbtn:"NewPlayButton.png",
	playposition:"center",
	playtop:"bottom",
	exitoncomplete:"no",
	oncepersession:"no",
	vidlink:"no",
	openin:"_blank",
	path:"http://websitetalkingheads.com/featuredactor/wthvideo",
	actorpic:"TheHand.png",
	flv:"TheHand.flv",
	h264:"TheHand.mp4"};

var topPx = parseFloat(wthvideo2.params.top);
var bottomPx = parseFloat(wthvideo2.params.bottom);

function hideDiv2(){
	var child= document.getElementById('wthvideo2');
	var parent= child.parentNode;
	parent.removeChild(child);
}
function onlyOnce() {
if (document.cookie.indexOf("hasSeen=true") == -1) {
var later = new Date();
later.setFullYear(later.getFullYear()+10);
document.cookie = 'hasSeen=true;path=/;';
wthvideo2.drawVideo();
}
}
function onlyOnce2() {
if (document.cookie.indexOf("hasSeen=true") == -1) {
var later = new Date();
later.setFullYear(later.getFullYear()+10);
document.cookie = 'hasSeen=true;path=/;';
wthvideo2.drawVideo();
}
}
var btnTop = (wthvideo2.params.height)-(122);
var btnLeft = (wthvideo2.params.width/2)-(51);
wthvideo2.drawVideo= function(){
	var markUp = '';
	markUp += '<style type="text/css">';
	markUp += '#wthvideo2 {position:'+wthvideo2.params.position+';width:'+wthvideo2.params.width+'px;height:'+wthvideo2.params.height+'px;margin-left:'+wthvideo2.params.centeroffset+';left:'+wthvideo2.params.left+';right:'+wthvideo2.params.right+';top:'+wthvideo2.params.top+';bottom:'+wthvideo2.params.bottom+';z-index:99999;cursor: pointer;}';
	markUp +=  '#wthvideo2 img{opacity:\1;padding-top:'+btnTop+'px;;padding-left:'+btnLeft+'px;border-style: none;opacity:1;}'; 
	markUp +=  '#wthvideo2 img:hover{opacity:0.9;}'; 
	markUp +=  '#wthvideo2 div{background-image:url("'+wthvideo2.params.path+'/'+wthvideo2.params.actorpic+'")';
	markUp += '</style>';
	markUp += '<div id="wthvideo2">';
	markUp += '  <object id="objvideo" style="outline:none;" type="application/x-shockwave-flash" width="'+wthvideo2.params.width+'" height="'+wthvideo2.params.height+'" data="'+wthvideo2.params.path+'/wthplayer2.swf">';
	markUp += '    <param name="movie" value="'+wthvideo2.params.path+'/wthplayer2.swf" />';
	markUp += '    <param name="quality" value="high" />';
	markUp += '    <param name="flashvars" value="vurl='+wthvideo2.params.flv+'&amp;vwidth='+wthvideo2.params.width+'&amp;vheight='+wthvideo2.params.height+'&amp;actorpic='+wthvideo2.params.path+'/'+wthvideo2.params.actorpic+'&amp;autostart='+wthvideo2.params.autostart+'&amp;exitoncomplete='+wthvideo2.params.exitoncomplete+'&amp;vbuff='+wthvideo2.params.buffertime+'&amp;vdelay='+wthvideo2.params.delay+'&amp;vcolor='+wthvideo2.params.color+'&amp;vlink='+wthvideo2.params.vidlink+'&amp;openin='+wthvideo2.params.openin+'&amp;delayclose='+wthvideo2.params.delayclose+'&amp;fadein='+wthvideo2.params.fadein+'&amp;fadeout='+wthvideo2.params.fadeout+'&amp;vvol='+wthvideo2.params.volume+'&amp;playbtn='+wthvideo2.params.path+'/'+wthvideo2.params.playbtn+'&amp;playposition='+wthvideo2.params.playposition+'&amp;playtop='+wthvideo2.params.playtop+'&amp;hflip='+wthvideo2.params.flip+'&amp;controlbar='+wthvideo2.params.controlbar+'&amp;exitbtn='+wthvideo2.params.exitbtn+'" />';
	markUp += '    <param name="wmode" value="transparent" />';
	markUp += '    <param name="allowscriptaccess" value="always" />';
	markUp += '    <param name="swfversion" value="9.0.45.0" />';
	markUp +=  '    <div>';
		markUp += '<video width="'+wthvideo2.params.width+'" height="'+wthvideo2.params.height+'" poster="'+wthvideo2.params.path+'/'+wthvideo2.params.actorpic+'" controls>';
		markUp += '    <source src="'+wthvideo2.params.path+'/'+wthvideo2.params.h264+'" type="video/mp4">';
		markUp += '    Your Browser Does Not support the video tag';
		markUp += '  </video>';
	markUp +=  '	   </div>';
	markUp += '  </object>';
	markUp += '</div>';
	if (wthvideo2.params.position == "fixed") {
		if (wthvideo2.params.doctype == "quirks") {
			if (wthvideo2.params.top == "auto") {
						markUp += '<!--[if IE]>';
						markUp += '<style type="text/css">';
						markUp += '#wthvideo2 {position:absolute; top: expression(offsetParent.scrollTop - 1 + (offsetParent.clientHeight-this.clientHeight) + '+bottomPx+' + "px")}';
						markUp += '</style>';
						markUp += '<![endif]-->';}
					else {
							markUp += '<!--[if IE]>';
							markUp += '<style type="text/css">';
							markUp += '#wthvideo2 {position: absolute !important;top: expression(((document.documentElement.scrollTop || document.body.scrollTop) + (!this.offsetHeight && 0)) + '+topPx+' + "px")';
							markUp += '</style>';
							markUp += '<![endif]-->';}
					}
				else {
						markUp += '<!--[if lte IE 6]>';
						markUp += '<style type="text/css">';
						markUp += 'html, body{height: 100%;overflow: auto;}#wthvideo2 {position: absolute;}';
						markUp += '</style>';
						markUp += '<![endif]-->';
			}
		}

	
document.write(markUp);

	
}
function hideDiv() {
	wthvideo2.hideDiv();
}

if (wthvideo2.params.autostart=="oncethenpic") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;path=/;';
		wthvideo2.params.autostart = "yes";
		}
	else {
		wthvideo2.params.autostart = "no";

	}
}

if (wthvideo2.params.autostart=="oncethenmute") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;path=/;';
		wthvideo2.params.autostart = "yes";
		}
	else {
		wthvideo2.params.autostart = "mute";
	}
}

if (wthvideo2.params.autostart=="onceonly") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		wthvideo2.params.autostart = "yes";
		}
	else {
		wthvideo2.params.autostart = "mute";
	}
}

if (wthvideo2.params.autostart=="onceonlythenmute") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		wthvideo2.params.autostart = "yes";
		}
	else {
		wthvideo2.params.autostart = "mute";
	}
}
if (wthvideo2.params.autostart=="onceonlythenpic") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		wthvideo2.params.autostart = "yes";
		}
	else {
		wthvideo2.params.autostart = "no";

	}
}

if (wthvideo2.params.oncepersession == "yes") {
	onlyOnce();}
	else {
		if (wthvideo2.params.oncepersession == "onceonly") {
			onlyOnce2();}
		else {
		wthvideo2.drawVideo();
	}
	}


function thisMovie(movieName) {
         if (navigator.appName.indexOf("Microsoft") != -1) {
             return window[movieName];
         } else {
             return document[movieName];
         }
     }

function exitWTH() {
	thisMovie('objvideo').exitVideoWTH();
}
function pauseWTH() {
	thisMovie('objvideo').pauseVideoWTH();
}

function unpauseWTH() {
	thisMovie('objvideo').unpauseVideoWTH();
}
function playWTH() {
	thisMovie('objvideo').playVideoWTH();
}
function stopWTH() {
	thisMovie('objvideo').stopVideoWTH();
}
function muteWTH() {
	thisMovie('objvideo').muteVolWTH();
}
function unmuteWTH() {
	thisMovie('objvideo').startVolWTH();
}