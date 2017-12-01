// Copyright 2010 Website Talking Heads
// JavaScript Document
if (typeof wthvideo3 == "undefined") {
	wthvideo3 = new Object();
}
wthvideo3.params = {
	width:300,
	height:170,
	position:"absolute",
	doctype:"strict",
	left:"50%",
	right:"auto",
	top:"340px",
	bottom:"auto",
	centeroffset:"200px",
	volume:70,
	autostart:"yes",
	fadein:0,
	fadeout:2,
	flip:"no",
	delay:0,
	delayclose:0,
	buffertime:3,
	controlbar:"mouse",
	exitbtn:"no",
	playbtn:"",
	playposition:"center",
	playtop:"bottom",
	exitoncomplete:"yes",
	oncepersession:"no",
	vidlink:"no",
	openin:"_blank",
	path:"http://websitetalkingheads.com/featuredactor/wthvideo",
	actorpic:"",
	flv:"USFlagAlpha.flv"};

var topPx = parseFloat(wthvideo3.params.top);
var bottomPx = parseFloat(wthvideo3.params.bottom);

wthvideo3.hidDiv3 = function(){
	document.getElementById('wthvideo3').style.visibility = 'hidden';
}
function onlyOnce() {
if (document.cookie.indexOf("hasSeen2=true") == -1) {
var later = new Date();
later.setFullYear(later.getFullYear()+10);
document.cookie = 'hasSeen=true;path=/;';
wthvideo3.drawVideo();
}
}

wthvideo3.drawVideo= function(){
	var markUp = '';
	markUp += '<style type="text/css">';
	markUp += '#wthvideo3 {position:'+wthvideo3.params.position+';width:'+wthvideo3.params.width+'px;height:'+wthvideo3.params.height+'px;margin-left:'+wthvideo3.params.centeroffset+';left:'+wthvideo3.params.left+';right:'+wthvideo3.params.right+';top:'+wthvideo3.params.top+';bottom:'+wthvideo3.params.bottom+';z-index:99999;}';
	markUp += '</style>';
	markUp += '<div id="wthvideo3">';
	markUp += '  <object id="objvideo" style="outline:none;" type="application/x-shockwave-flash" width="'+wthvideo3.params.width+'" height="'+wthvideo3.params.height+'" data="'+wthvideo3.params.path+'/wthplayer.swf">';
	markUp += '    <param name="movie" value="'+wthvideo3.params.path+'/wthplayer.swf" />';
	markUp += '    <param name="quality" value="high" />';
	markUp += '    <param name="flashvars" value="vurl='+wthvideo3.params.flv+'&amp;vwidth='+wthvideo3.params.width+'&amp;vheight='+wthvideo3.params.height+'&amp;actorpic='+wthvideo3.params.path+'/'+wthvideo3.params.actorpic+'&amp;autostart='+wthvideo3.params.autostart+'&amp;exitoncomplete='+wthvideo3.params.exitoncomplete+'&amp;vbuff='+wthvideo3.params.buffertime+'&amp;vdelay='+wthvideo3.params.delay+'&amp;vcolor='+wthvideo3.params.color+'&amp;vlink='+wthvideo3.params.vidlink+'&amp;openin='+wthvideo3.params.openin+'&amp;delayclose='+wthvideo3.params.delayclose+'&amp;fadein='+wthvideo3.params.fadein+'&amp;fadeout='+wthvideo3.params.fadeout+'&amp;vvol='+wthvideo3.params.volume+'&amp;playbtn='+wthvideo3.params.path+'/'+wthvideo3.params.playbtn+'&amp;playpos='+wthvideo3.params.playposition+'&amp;playtop='+wthvideo3.params.playtop+'&amp;hflip='+wthvideo3.params.flip+'&amp;controlbar='+wthvideo3.params.controlbar+'&amp;exitbtn='+wthvideo3.params.exitbtn+'&amp;hidediv=hidDiv3()" />';
	markUp += '    <param name="wmode" value="transparent" />';
	markUp += '    <param name="allowscriptaccess" value="always" />';
	markUp += '    <param name="swfversion" value="9.0.45.0" />';
	markUp += '  </object>';
	markUp += '</div>';
	if (wthvideo3.params.position == "fixed") {
		if (wthvideo3.params.doctype == "quirks") {
			if (wthvideo3.params.top == "auto") {
						markUp += '<!--[if IE]>';
						markUp += '<style type="text/css">';
						markUp += '#wthvideo3 {position:absolute; top: expression(offsetParent.scrollTop - 1 + (offsetParent.clientHeight-this.clientHeight) + '+bottomPx+' + "px")}';
						markUp += '</style>';
						markUp += '<![endif]-->';}
					else {
							markUp += '<!--[if IE]>';
							markUp += '<style type="text/css">';
							markUp += '#wthvideo3 {position: absolute !important;top: expression(((document.documentElement.scrollTop || document.body.scrollTop) + (!this.offsetHeight && 0)) + '+topPx+' + "px")';
							markUp += '</style>';
							markUp += '<![endif]-->';}
					}
				else {
						markUp += '<!--[if lte IE 6]>';
						markUp += '<style type="text/css">';
						markUp += 'html, body{height: 100%;overflow: auto;}#wthvideo3 {position: absolute;}';
						markUp += '</style>';
						markUp += '<![endif]-->';
			}
		}
	document.write(markUp);
}
function hidDiv3() {
	wthvideo3.hidDiv3();
}
if (wthvideo3.params.autostart=="loop") {
		wthvideo3.params.autostart = "loop";

}
if (wthvideo3.params.autostart=="oncethenpic") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;path=/;';
		wthvideo3.params.autostart = "yes";
		}
	else {
		wthvideo3.params.autostart = "no";

	}
}

if (wthvideo3.params.autostart=="oncethenmute") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;path=/;';
		wthvideo3.params.autostart = "yes";
		}
	else {
		wthvideo3.params.autostart = "mute";
	}
}

if (wthvideo3.params.autostart=="onceonly") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		wthvideo3.params.autostart = "yes";
		}
	else {
		wthvideo3.params.autostart = "mute";
	}
}

if (wthvideo3.params.autostart=="onceonlythenmute") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		wthvideo3.params.autostart = "yes";
		}
	else {
		wthvideo3.params.autostart = "mute";
	}
}
if (wthvideo3.params.autostart=="onceonlythenpic") {
	if (document.cookie.indexOf("hasSeen=true") == -1) {
		var later = new Date();
		later.setFullYear(later.getFullYear()+10);
		document.cookie = 'hasSeen=true;expires='+later.toGMTString();
		wthvideo3.params.autostart = "yes";
		}
	else {
		wthvideo3.params.autostart = "no";

	}
}



if (wthvideo3.params.oncepersession == "yes") {
	onlyOnce();}
	else {
		wthvideo3.drawVideo();
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