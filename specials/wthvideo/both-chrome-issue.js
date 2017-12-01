// Copyright 2014 Website Talking Heads
// JavaScript Document
featuredactors();
function featuredactors(){
  "use strict";
  //Variables for Player
  var responsive = "yes", //You must place <div id="wthvideoFemale"></div> inside the div you want the video to be in.
	  female = document.getElementById('female').innerHTML,
	  html5Female = "yes", //if you want html5Female fallback
	  widthFemale = "320", //video widthFemale
	  heightFemale = "320", //video heightFemale
	  positionFemale = "fixed", //fixed or absolute positioning
	  leftFemale = "0", //if centering on page change this to 50%
	  rightFemale = "auto",
	  divTopFemale = "auto",
	  bottomFemale = "auto",
	  centeroffsetFemale = "auto", //if centering on page negative numbers are leftFemale and positive numbers are right
	  color = 0xCCCCCC, //set the color of the playerbar in flash
	  volume = 70,//some browsers may not support changing volume in HTML5
	  autostartFemale = "no", //autostart options yes, no, mute, oncethenpic, oncethenmute, onceonlythenpic, onceonlythenmute, and loop
	  delay = 0, //delay start of video
	  controlbarFemale = "mouse", //options for showing the controlbar, yes, no, and mouse
	  playbtn = "PlayVideo.png", //you can set a custom playbuton for the flash player
	  playposition = "center", //leftFemale-rigth position of flash play button "leftFemale", "right", or "center"
	  playtop = "bottom", //top-bottom position of flash play button "top", "bottom", or "center"
	  exitoncomplete = "no", //option for player to close after video completes. "yes" or "no"
	  oncepersession = "no", //option for number of times video plays "yes", "no", or "onceonly"
	  vidlink = "no", //make the flashplayer a link. Either leave this set to "no" or you can put a complete URL inside the quotes.
	  openin = "_blank",
	  path = "http://websitetalkingheads.com/featuredactor/wthvideo", //path to where the files are located
	  gifImgFemale = female, phoneImgFemale = female, pngImgFemale = female, flvFemale = female, h264Female = female, //Just name,not extension
  // end Main Player Vars
  
  // convert vars to something useful
	  marginTopFemale = ".5%",
	  posterImgFemale = path + "/" + gifImgFemale + ".gif",
	  pngImgFemale = path + "/" + pngImgFemale + ".png",
	  flvFemale = path + "/" + flvFemale + ".flv",
	  imagePath = path + "/",
	  buttonPath = imagePath + "buttons" + "/",
	  barImage = "url(" + buttonPath + "PlayerBar.png)",
	  playerPath = path + "/wthplayer-female.swf",
	  hVideoFemale = path + "/" + h264Female + ".mp4",
	  hBtn = buttonPath + playbtn,
	  leftFemaleEnd = leftFemale.charAt(leftFemale.length - 1),
	  overflow = "hidden",
	  opacity = 1,
	  doc = window.document,
	  PlayerBarFemale, vidBoxFemale, videoMarkUp, newDiv, newLnk, markUp, newP, newPb, playerBarWidth, playerBarHeight, 
	  cancelFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen ||    doc.msExitFullscreen,
	  iOS = false,
	  flvFemaleTest = true, 
	  platform = navigator.platform,
	  nav = navigator.mimeTypes ["application/x-shockwave-flash"],
	  playerBarMarginTop, e, id, hFall, div, playerCloseFemale, dv, restartBtnFemale, muteBtnFemale, PlayButtonFemale, h264FemaleFallback, objCSSFemale, body, newImg,child, parent, imgLnkFemale = null;
	  iOS = false;
  if(responsive ==="yes"){
			positionFemale= "relative";
			leftFemale= "auto";
			rightFemale= "auto";
			divTopFemale= "auto";
			bottomFemale= "auto";
			centeroffsetFemale= "auto";
	   }
	  var playerBarWidth = Number(widthFemale)*.8;
	  if(playerBarWidth>220){playerBarWidth=220;}
	  var playerBarHeight = (playerBarWidth/4);
	  playerBarMarginTop = (-1)*(playerBarHeight + 5) + "px"
  switch (leftFemaleEnd) {
	  case "%":
	  case "o":
		  break;
	  default:
		  leftFemale += "px";
  }
  if (divTopFemale !== "auto") {
	  divTopFemale += "px";
  }
  if (rightFemale !== "auto") {
	  rightFemale += "px";
  }
  if (centeroffsetFemale !== "auto") {
	  centeroffsetFemale += "px";
  }
  if (bottomFemale !== "auto") {
	  bottomFemale += "px";
  }
  
  //Set Movie Type
  function thisMovie(movieName) {
			 return document[movieName] || window[movieName];
	 }
   //Detect window widthFemale
   var w = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;
  
  if (w<600){
			posterImgFemale = path + "/" + phoneImgFemale + ".gif";
			controlbarFemale = "yes";
  } 
   function playingVidFemale(){
			document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PauseBtn.png";
			document.getElementById("h264FemaleFallback").removeEventListener("click", clickPlayFemale, false);
			document.getElementById("PlayPauseBtnFemale").addEventListener("click", playToggleFemale, false); 
		  document.getElementById("PlayerBarFemale").style.opacity = 1; 
   }
   function pauseVidFemale(){
			document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PlayBtn.png";
			document.getElementById("h264FemaleFallback").addEventListener("click", clickPlayFemale, false);
			document.getElementById("PlayPauseBtnFemale").removeEventListener("click", playToggleFemale, false); 
			  document.getElementById("PlayerBarFemale").style.opacity = 1; 
   }
  function playToggleFemale() {
		  document.getElementById("PlayerBarFemale").style.opacity = 1; 
			if (vidBoxFemale.paused) {
			vidBoxFemale.play();
			document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PauseBtn.png";
			 } else {
				  vidBoxFemale.pause();
				 document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PlayBtn.png";
			 }
			}
  //click to play
  function clickPlayFemale() {
		  document.getElementById("PlayerBarFemale").style.opacity = 1; 
		  document.getElementById("h264FemaleFallback").removeEventListener("click", clickPlayFemale, false);
		  document.getElementById("PlayPauseBtnFemale").addEventListener("click", playToggleFemale, false);     
		   vidBoxFemale.play();
	  }
  //Play Toggle Functions
  function playPauseOverFemale() {
	   if (vidBoxFemale.paused) {
			document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PlayBtn_on.png";
			} else {
			  document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PauseBtn_on.png";
			}
	   }     
  function playPauseOutFemale() {
	   if (vidBoxFemale.paused) {
			document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PlayBtn.png";
			} else {
			document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PauseBtn.png";
  
			}
	   }
			//Mute Button Functions
  function muteOverFemale() {
	   if (vidBoxFemale.muted) {
			document.getElementById("muteBtnFemale").src= buttonPath + "VolumeBtnMute_on.png";
			} else {
			document.getElementById("muteBtnFemale").src= buttonPath + "VolumeBtn_on.png";
			}
	   }     
  function muteOutFemale() {
	   if (vidBoxFemale.muted) {
			document.getElementById("muteBtnFemale").src= buttonPath + "VolumeBtnMute.png";
			} else {
			document.getElementById("muteBtnFemale").src= buttonPath + "VolumeBtn.png";
			}
	   }
  
  function muteToggleFemale() {
			if (vidBoxFemale.muted) {
				  vidBoxFemale.muted=false;
				 document.getElementById("muteBtnFemale").src= buttonPath + "VolumeBtn.png";
			 } else {
				 document.getElementById("muteBtnFemale").src= buttonPath + "VolumeBtnMute.png";
				  vidBoxFemale.muted=true;
			 }
			}
			
  //Restart Button
  function restartOverFemale() {
	   document.getElementById("restartBtnFemale").src= buttonPath + "RestartBtn_on.png";
	   }
  function restartOutFemale() {
			document.getElementById("restartBtnFemale").src= buttonPath + "RestartBtn.png";
	   }     
  function restartClickFemale() {
	   vidBoxFemale.currentTime = 0;
	   document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PauseBtn.png";
	   vidBoxFemale.play();
			}
	   
  //Exit Button
  function exitOverFemale() {
			document.getElementById("playerCloseFemale").src= buttonPath + "ExitBtn_on.png";
	   }
  function exitOffFemale() {
			document.getElementById("playerCloseFemale").src= buttonPath + "ExitBtn.png";
	   }
	   
  
  function closePlayerFemale() {
	  var child = document.getElementById("wthvideoFemale"),
		  parent = document.getElementById("wthvideoFemale").parentNode,
		  hFall = document.getElementById("h264FemaleFallback"),
		  pcbtn = document.getElementById("playerCloseFemale"); //restart 
	  document.getElementById("objvideoFemale").style.visibility = "hidden";
	  document.getElementById("PlayerBarFemale").style.visibility = "hidden";
	  vidBoxFemale.pause();
	  vidBoxFemale.volume = 0;
	  hFall.removeEventListener("click", clickPlayFemale, false);	
	  pcbtn.removeEventListener("mouseover", exitOverFemale, false);
	  pcbtn.removeEventListener("mouseout", exitOffFemale, false);
	  pcbtn.removeEventListener("click", closePlayerFemale, false);
	  parent.removeChild(child);
	   }
  function exitWTH() {
	   if (flvFemaleTest === true) {
	   thisMovie("objvideoFemale").exitVideoWTH();
	   } else {
			closePlayerFemale();
	   }
  }   
  //function for when video Ends
  function videoEndedFemale() { 
	   if (doc.fullscreenElement || doc.mozFullScreenElement || doc.webkitFullscreenElement || doc.msFullscreenElement) {
		 cancelFullScreen.call(doc);  
	   }
	   if (exitoncomplete === "yes") {closePlayerFemale();}
	   vidBoxFemale.load();
	   vidBoxFemale.pause();
	   document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PlayBtn.png";
	  document.getElementById("h264FemaleFallback").addEventListener("click", clickPlayFemale, false);
  }
  
  //Functions to access player from html
  function pauseWTH() {
	   if (flvFemaleTest === true) {
	   thisMovie("objvideoFemale").pauseVidFemaleeoWTH();
	   } else {
	   vidBoxFemale.pause();
	   }
  }
  
  function unpauseWTH() {
	   if (flvFemaleTest === true) {
	   thisMovie("objvideoFemale").unpauseVidFemaleeoWTH();
	   } else {
	   vidBoxFemale.play();
	   }
  }
  function playWTH() {
	   if (flvFemaleTest === true) {
	   thisMovie("objvideoFemale").playVideoWTH();
	   } else {
	   vidBoxFemale.play();
	   }
  }
  function stopWTH() {
	   if (flvFemaleTest === true) {
	   thisMovie("objvideoFemale").stopVideoWTH();
	   } else {
	   vidBoxFemale.currentTime = 0;
	   vidBoxFemale.pause();
	   }
  }
  function muteWTH() {
	   if (flvFemaleTest === true) {
	   thisMovie("objvideoFemale").muteVolWTH();
	   } else {
	   muteToggleFemale();
	   }
  }
  function unmuteWTH() {
	   if (flvFemaleTest === true) {
	   thisMovie("objvideoFemale").startVolWTH();
	   } else {
	   muteToggleFemale();
	   }
  }
  
  function hideDiv() {
	   child = document.getElementById("wthvideoFemale");
	   parent = child.parentNode;
	   parent.removeChild(child);
  }
  function cue0() {
	   pauseWTH();
  }
  
  // start creating divs for iPhone
  function createImgLnk(){
	   if (responsive === "yes") {
			newDiv = document.getElementById("wthvideoFemale");
			centeroffsetFemale= "auto";
	   } else {
			newDiv = document.createElement("div");
			newDiv.id = "wthvideoFemale"; 
	   }
	   newDiv.style.height = heightFemale + "px";
	   newDiv.style.width = widthFemale + "px";
	   newDiv.style.position = positionFemale;
	   newDiv.style.top = divTopFemale;
	   newDiv.style.leftFemale = leftFemale;
	   newDiv.style.right = rightFemale;
	   newDiv.style.bottom = bottomFemale;
	   newDiv.style.marginLeft = centeroffsetFemale;
	   newDiv.style.marginRight = centeroffsetFemale;
	   newDiv.style.zIndex = 9999;
	   newDiv.style.overflow = overflow;
	  
			if (responsive !== "yes") {
				 var body  = document.body || document.getElementsByTagName("body")[0];
				 body.insertBefore(newDiv,body.childNodes[0]);
			}
			//Create Link
			newLnk = document.createElement("a");
			newLnk.href = hVideoFemale;
			document.getElementById('wthvideo').appendChild(newLnk);
			//Create Image
			newImg = document.createElement("img");
			newImg.id = "wthImage";
			newImg.src = posterImg;
			newImg.alt = "WTH Video Spokesperson";
			imgLnkFemale = newImg;
			newLnk.appendChild(imgLnkFemale);
  }
  function addListeners(){     
  //add eventlisteners
	   e = document.getElementById("PlayPauseBtnFemale");//Play Pause
	   e.addEventListener("mouseover", playPauseOverFemale, false);
	   e.addEventListener("mouseout", playPauseOutFemale, false);
	   e.addEventListener("click", playToggleFemale, false); 
	   e = document.getElementById("muteBtnFemale");//mute
	   e.addEventListener("mouseover", muteOverFemale, false);
	   e.addEventListener("mouseout", muteOutFemale, false);
	   e.addEventListener("click", muteToggleFemale, false);
	   e = document.getElementById("restartBtnFemale");//restart 
	   e.addEventListener("mouseover", restartOverFemale, false);
	   e.addEventListener("mouseout", restartOutFemale, false);
	   e.addEventListener("click", restartClickFemale, false);
	   e = document.getElementById("playerCloseFemale");//restart 
	   e.addEventListener("mouseover", exitOverFemale, false);
	   e.addEventListener("mouseout", exitOffFemale, false);
	   e.addEventListener("click", closePlayerFemale, false);
	   // event listener for video ending
	   vidBoxFemale.addEventListener("ended", videoEndedFemale, false); 
	   vidBoxFemale.addEventListener("playing", playingVidFemale, false);
	   vidBoxFemale.addEventListener("pause", pauseVidFemale, false);
  }
  // start creating divs
  function createDiv() {
	   if (responsive === "yes") {
			newDiv = document.getElementById("wthvideoFemale");
	   } else {
			newDiv = document.createElement("div");
			newDiv.id = "wthvideoFemale"; 
	   }
	   newDiv.style.height = heightFemale + "px";
	   newDiv.style.width = widthFemale + "px";
	   newDiv.style.position = positionFemale;
	   newDiv.style.top = divTopFemale;
	   newDiv.style.leftFemale = leftFemale;
	   newDiv.style.right = rightFemale;
	   newDiv.style.bottom = bottomFemale;
	   newDiv.style.marginLeft = centeroffsetFemale;
	   newDiv.style.marginRight = centeroffsetFemale;
	   newDiv.style.zIndex = 9999;
	   newDiv.style.overflow = overflow;
	   newDiv.alt = "WTH Video Spokesperson";
  
	   //create flashvars value
			var newFlashVars ="";
			newFlashVars += "vurl=" + flvFemale;
			newFlashVars += "&amp;vwidth=" +widthFemale;
			newFlashVars += "&amp;vheight=" +heightFemale;
			newFlashVars += "&amp;actorpic=" + pngImgFemale;
			newFlashVars += "&amp;autostart=" +autostartFemale;
			newFlashVars += "&amp;exitoncomplete=" +exitoncomplete;
			newFlashVars += "&amp;vdelay=" +delay;
			newFlashVars += "&amp;vcolor=" +color;
			newFlashVars += "&amp;vlink=" +vidlink;
			newFlashVars += "&amp;openin="+openin;
			newFlashVars += "&amp;vvol=" +volume;
			newFlashVars += "&amp;playbtn=" +hBtn;
			newFlashVars += "&amp;playpos=" +playposition;
			newFlashVars += "&amp;playtop=" +playtop;
			newFlashVars += "&amp;hflip=" + "no";
			newFlashVars += "&amp;controlbar=" +controlbarFemale;
			newFlashVars += "&amp;playerClose="+playerCloseFemale;
			///add swf object
			markUp = '';
			markUp += ' <object id="objvideoFemale" style="outline:none;" type="application/x-shockwave-flash" width="' + widthFemale + '" height="' + heightFemale + '" data="' + playerPath + '">';
			markUp += '  <param name="movie" value="' + playerPath + '" />';
			markUp += '  <param name="quality" value="high" />';
			markUp += '      <param name="flashvars" value="' + newFlashVars + '">';
			markUp += '  <param name="wmode" value="transparent" />';
			markUp += '  <param name="allowscriptaccess" value="always" />';
			markUp += '  <param name="swfversion" value="9.0.45.0" />';
			markUp += ' </object>';
			newDiv.innerHTML = markUp;
			if (responsive !== "yes") {
				 body  = document.body || document.getElementsByTagName("body")[0];
				 body.insertBefore(newDiv,body.childNodes[0]);
				 objCSSFemale = document.getElementById("objvideoFemale").style;
				 objCSSFemale.height = heightFemale + "px";
				 objCSSFemale.width = widthFemale + "px";
			}
			if (html5Female !== "no") {
			//add html5Female fallback
			newP = document.createElement("div");
			newP.id = "h264FemaleFallback";
			videoMarkUp = '';
			if(autostartFemale === "yes"){
				videoMarkUp += '<video id="videoBoxFemale" width="' + widthFemale + '" height="' + heightFemale + '" poster="' + posterImgFemale + '" autoplay >';
			}else{
				videoMarkUp += '<video id="videoBoxFemale" width="' + widthFemale + '" height="' + heightFemale + '" poster="' + posterImgFemale + '" >';
			}
			videoMarkUp += '  <source src="' + hVideoFemale + '" type="video/mp4">';
			videoMarkUp += 'Your Browser Does Not support the video tag';
			videoMarkUp += ' </video>';
			newP.innerHTML = videoMarkUp;
			newP.style.position = "relative";
			newP.style.zIndex = 10000;
			newP.style.height = heightFemale + "px";
			newP.style.width = widthFemale + "px";
			dv = document.getElementById("objvideoFemale");
			h264FemaleFallback = newP;
			dv.appendChild(h264FemaleFallback);
			document.getElementById("videoBoxFemale").style.position = "relative";
			document.getElementById("videoBoxFemale").style.zIndex=1010;
			
			//Create playerbar
			newPb = document.createElement("div");
			newPb.id = "PlayerBarFemale";
			newPb.style.height = playerBarHeight + "px";
			newPb.style.width = playerBarWidth + "px";
			newPb.style.margin = "0 auto";
			newPb.style.marginTop = playerBarMarginTop;
			newPb.style.cursor = "pointer";
			newPb.style.position = "relative";
			newPb.style.zIndex = 10020;
			newPb.style.backgroundImage= barImage;
			newPb.style.backgroundRepeat= "no-repeat";
			newPb.style.backgroundSize= "100% 100%";
			newPb.style.opacity = 1;
			dv = document.getElementById("h264FemaleFallback");
			PlayerBarFemale = newPb;
			dv.appendChild(PlayerBarFemale);
			
			//Create PlayButtonFemale
			newDiv = document.createElement("img");
			newDiv.id = "PlayPauseBtnFemale";
			newDiv.style.heightFemale = "95%";
			newDiv.style.float = "leftFemale";
			newDiv.src = buttonPath + "PlayBtn.png";
			newDiv.style.position = "relative";
			newDiv.style.zIndex = "inherit";
			newDiv.style.marginLeft = "1%";
			newDiv.style.marginTop =marginTopFemale;
			newDiv.style.padding = ".5%";
			dv = document.getElementById("PlayerBarFemale");
			newP.style.position = "PlayPauseBtnFemale";
			PlayButtonFemale = newDiv;
			dv.appendChild(PlayButtonFemale);
					  
			//Create Mute
			newDiv = document.createElement("img");
			newDiv.id = "muteBtnFemale";
			newDiv.style.heightFemale = "95%";
			newDiv.style.float = "leftFemale";
			newDiv.style.marginTop =marginTopFemale;
			newDiv.src = buttonPath + "VolumeBtn.png";
			newDiv.style.position = "relative";
			dv = document.getElementById("PlayerBarFemale");
			newDiv.style.padding = ".5%";
			muteBtnFemale = newDiv;
			dv.appendChild(muteBtnFemale);
				 
			
			//Create Restart
			newDiv = document.createElement("img");
			newDiv.id = "restartBtnFemale";
			newDiv.style.heightFemale = "95%";
			newDiv.style.float = "leftFemale";
			newDiv.style.marginTop =marginTopFemale;
			newDiv.src = buttonPath + "RestartBtn.png";
			newDiv.style.position = "relative";
			newDiv.style.padding = ".5%";
			dv = document.getElementById("PlayerBarFemale");
			restartBtnFemale = newDiv;
			dv.appendChild(restartBtnFemale);
			
			//Create exit button
			newDiv = document.createElement("img");
			newDiv.id = "playerCloseFemale";
			newDiv.style.heightFemale = "95%";
			newDiv.style.position = "relative";
			newDiv.style.marginTop =marginTopFemale;
			newDiv.style.float = "leftFemale";
			newDiv.src = buttonPath + "ExitBtn.png";
			newDiv.style.padding = ".5%";
			dv = document.getElementById("PlayerBarFemale");
			playerCloseFemale = newDiv;
			dv.appendChild(playerCloseFemale);
			
			 vidBoxFemale = document.getElementById("videoBoxFemale");
		  /*vidBoxFemale.setAttribute("style","-webkit-filter:brightness(108.5%)");
		  vidBoxFemale.setAttribute("style","filter:brightness(108.5%)");*/
  
  if (nav === undefined | nav === "[object MimeType]") {
	   flvFemaleTest = false;
	   if (html5Female ==="no") {
			document.getElementById("objvideoFemale").style.visibility = "hidden";
			div = document.getElementById("objvideoFemale");
			div.parentNode.removeChild(div);
			div = document.getElementById("wthvideoFemale");
			div.parentNode.removeChild(div);
	   }
  }
  if(flvFemaleTest === true){vidBoxFemale.pause();}
  if(platform === "iPad"){
			document.getElementById("h264FemaleFallback").addEventListener("click", clickPlayFemale, false);
	  }
  if (flvFemaleTest === false) {
	  if(autostartFemale === "yes"){
		  videoBoxFemale.oncanplay = function() {
	  if(videoBoxFemale.playing !== true){
			document.getElementById("h264FemaleFallback").addEventListener("click", clickPlayFemale, false);
	  }
		  
  };
  }else {
	  videoBoxFemale.autoplay = false;
	  document.getElementById("PlayPauseBtnFemale").src= buttonPath + "PlayBtn.png";
	  document.getElementById("h264FemaleFallback").addEventListener("click", clickPlayFemale, false);
	  }
  }}
  addListeners();
  Male();
	}
  
  function choosePlayer(){ 
	  if(platform !== 'iPhone') {
		  createDiv();
	  } else {
		  createImgLnk();
	  }
  }
  //HTML5 cookies
  var hasSeen = "hasSeen" + flvFemale;
  var hasSeenSS = sessionStorage.getItem(hasSeen);
  var hasSeenLS = localStorage.getItem(hasSeen);
  
  if (hasSeenSS === "yes") {
	   switch (autostartFemale) {
			 case "oncethenpic":
				 autostartFemale = "no";
				 break;
			 case "oncethenmute":
				 autostartFemale = "mute";     
				 break;
	   }
  } else {
	   sessionStorage.setItem(hasSeen, "yes");
	   switch (autostartFemale) {
			 case "oncethenpic":
				 autostartFemale = "yes";
				 break;
			 case "oncethenmute":
				 autostartFemale = "yes";     
				 break;
	   
	   }
  }
  if (hasSeenLS === "yes") {
	   switch (autostartFemale) {
			 case "onceonly":
				return;
			 case "onceonlythenmute":
				 autostartFemale = "mute";     
				 break;
			 case "onceonlythenpic":
				 autostartFemale = "no";
				 break;
	   
			 default:
				 break;
	   } 
  } else {
	   localStorage.setItem(hasSeen, "yes");
	   switch (autostartFemale) {
			 case "onceonly":
				 autostartFemale = "yes";
				 break;
			 case "onceonlythenmute":
				 autostartFemale = "yes";
				 break;
			 case "onceonlythenpic":
				 autostartFemale = "yes";
				 break;
	   }
  }
  switch (oncepersession) {
	   case "yes": 
			if (hasSeenSS !== "yes") {
			choosePlayer();
			}
			break;
	  case "onceonly":
			if (hasSeenSS !== "yes") {
			choosePlayer();
			}
			  break;
	  default:
			 choosePlayer();
			  break;
  }
  //End cookie creation 
	
  function Male(){
	  var responsive = "yes", //You must place <div id="wthvideoMale"></div> inside the div you want the video to be in.
	  male = document.getElementById('male').innerHTML,
	  html5Male = "yes", //if you want html5Male fallback
	  widthMale = "320", //video widthMale
	  heightMale = "320", //video heightMale
	  positionMale = "fixed", //fixed or absolute positioning
	  leftMale = "auto", //if centering on page change this to 50%
	  rightMale = "0",
	  divTopMale = "auto",
	  bottomMale = "0",
	  centeroffsetMale = "auto", //if centering on page negative numbers are leftMale and positive numbers are right
	  color = 0xCCCCCC, //set the color of the playerbar in flash
	  volume = 70,//some browsers may not support changing volume in HTML5
	  autostartMale = "no", //autostart options yes, no, mute, oncethenpic, oncethenmute, onceonlythenpic, onceonlythenmute, and loop
	  delay = 0, //delay start of video
	  controlbarMale = "mouse", //options for showing the controlbar, yes, no, and mouse
	  exitbtn = "no",
	  playbtn = "PlayVideo.png", //you can set a custom playbuton for the flash player
	  playposition = "center", //leftMale-rigth position of flash play button "leftMale", "right", or "center"
	  playtop = "bottom", //top-bottom position of flash play button "top", "bottom", or "center"
	  exitoncomplete = "no", //option for player to close after video completes. "yes" or "no"
	  oncepersession = "no", //option for number of times video plays "yes", "no", or "onceonly"
	  vidlink = "no", //make the flashplayer a link. Either leave this set to "no" or you can put a complete URL inside the quotes.
	  openin = "_blank",
	  path = "http://websitetalkingheads.com/featuredactor/wthvideo", //path to where the files are located
	  gifImgMale = male, phoneImgMale = male, pngImgMale = male, flvMale = male, h264Male = male, //Just name,not extension
  // end Main Player Vars
  
  // convert vars to something useful
	  marginTopMale = ".5%",
	  posterImgMale = path + "/" + gifImgMale + ".gif",
	  pngImgMale = path + "/" + pngImgMale + ".png",
	  flvMale = path + "/" + flvMale + ".flv",
	  imagePath = path + "/",
	  buttonPath = imagePath + "buttons" + "/",
	  barImage = "url(" + buttonPath + "PlayerBar.png)",
	  playerPath = path + "/wthplayer-male.swf",
	  hVideoMale = path + "/" + h264Male + ".mp4",
	  hBtn = buttonPath + playbtn,
	  leftMaleEnd = leftMale.charAt(leftMale.length - 1),
	  overflow = "hidden",
	  opacity = 1,
	  doc = window.document,
	  PlayerBarMale, vidBoxMale, videoMarkUp, newDiv, newLnk, markUp, newP, newPb, playerBarWidth, playerBarHeight, 
	  cancelFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen ||    doc.msExitFullscreen,
	  iOS = false,
	  flvMaleTest = true, 
	  platform = navigator.platform,
	  nav = navigator.mimeTypes ["application/x-shockwave-flash"],
	  playerBarMarginTop, e, id, hFall, div, playerCloseMale, dv, restartBtnMale, muteBtnMale, PlayButtonMale, h264MaleFallback, objCSSMale, body, newImg,child, parent, imgLnkMale = null;
	  iOS = false;
  if(responsive ==="yes"){
			positionMale= "relative";
			leftMale= "auto";
			rightMale= "auto";
			divTopMale= "auto";
			bottomMale= "auto";
			centeroffsetMale= "auto";
	   }
	  var playerBarWidth = Number(widthMale)*.8;
	  if(playerBarWidth>220){playerBarWidth=220;}
	  var playerBarHeight = (playerBarWidth/4);
	  playerBarMarginTop = (-1)*(playerBarHeight + 5) + "px"
  switch (leftMaleEnd) {
	  case "%":
	  case "o":
		  break;
	  default:
		  leftMale += "px";
  }
  if (divTopMale !== "auto") {
	  divTopMale += "px";
  }
  if (rightMale !== "auto") {
	  rightMale += "px";
  }
  if (centeroffsetMale !== "auto") {
	  centeroffsetMale += "px";
  }
  if (bottomMale !== "auto") {
	  bottomMale += "px";
  }
  
  //Set Movie Type
  function thisMovie(movieName) {
			 return document[movieName] || window[movieName];
	 }
   //Detect window widthMale
   var w = window.innerWidth
  || document.documentElement.clientWidth
  || document.body.clientWidth;
  
  if (w<400){
			posterImgMale = path + "/" + phoneImgMale + ".gif";
			controlbarMale = "yes";
  } 
   function playingVidMale(){
			document.getElementById("PlayPauseBtnMale").src= buttonPath + "PauseBtn.png";
			document.getElementById("h264MaleFallback").removeEventListener("click", clickPlayMale, false);
			document.getElementById("PlayPauseBtnMale").addEventListener("click", playToggleMale, false); 
		  document.getElementById("PlayerBarMale").style.opacity = 1; 
   }
   function pauseVidMale(){
			document.getElementById("PlayPauseBtnMale").src= buttonPath + "PlayBtn.png";
			document.getElementById("h264MaleFallback").addEventListener("click", clickPlayMale, false);
			document.getElementById("PlayPauseBtnMale").removeEventListener("click", playToggleMale, false); 
			  document.getElementById("PlayerBarMale").style.opacity = 1; 
   }
  function playToggleMale() {
		  document.getElementById("PlayerBarMale").style.opacity = 1; 
			if (vidBoxMale.paused) {
			vidBoxMale.play();
			document.getElementById("PlayPauseBtnMale").src= buttonPath + "PauseBtn.png";
			 } else {
				  vidBoxMale.pause();
				 document.getElementById("PlayPauseBtnMale").src= buttonPath + "PlayBtn.png";
			 }
			}
  //click to play
  function clickPlayMale() {
		  document.getElementById("PlayerBarMale").style.opacity = 1; 
		  document.getElementById("h264MaleFallback").removeEventListener("click", clickPlayMale, false);
		  document.getElementById("PlayPauseBtnMale").addEventListener("click", playToggleMale, false);     
		   vidBoxMale.play();
	  }
  //Play Toggle Functions
  function playPauseOverMale() {
	   if (vidBoxMale.paused) {
			document.getElementById("PlayPauseBtnMale").src= buttonPath + "PlayBtn_on.png";
			} else {
			  document.getElementById("PlayPauseBtnMale").src= buttonPath + "PauseBtn_on.png";
			}
	   }     
  function playPauseOutMale() {
	   if (vidBoxMale.paused) {
			document.getElementById("PlayPauseBtnMale").src= buttonPath + "PlayBtn.png";
			} else {
			document.getElementById("PlayPauseBtnMale").src= buttonPath + "PauseBtn.png";
  
			}
	   }
			//Mute Button Functions
  function muteOverMale() {
	   if (vidBoxMale.muted) {
			document.getElementById("muteBtnMale").src= buttonPath + "VolumeBtnMute_on.png";
			} else {
			document.getElementById("muteBtnMale").src= buttonPath + "VolumeBtn_on.png";
			}
	   }     
  function muteOutMale() {
	   if (vidBoxMale.muted) {
			document.getElementById("muteBtnMale").src= buttonPath + "VolumeBtnMute.png";
			} else {
			document.getElementById("muteBtnMale").src= buttonPath + "VolumeBtn.png";
			}
	   }
  
  function muteToggleMale() {
			if (vidBoxMale.muted) {
				  vidBoxMale.muted=false;
				 document.getElementById("muteBtnMale").src= buttonPath + "VolumeBtn.png";
			 } else {
				 document.getElementById("muteBtnMale").src= buttonPath + "VolumeBtnMute.png";
				  vidBoxMale.muted=true;
			 }
			}
			
  //Restart Button
  function restartOverMale() {
	   document.getElementById("restartBtnMale").src= buttonPath + "RestartBtn_on.png";
	   }
  function restartOutMale() {
			document.getElementById("restartBtnMale").src= buttonPath + "RestartBtn.png";
	   }     
  function restartClickMale() {
	   vidBoxMale.currentTime = 0;
	   document.getElementById("PlayPauseBtnMale").src= buttonPath + "PauseBtn.png";
	   vidBoxMale.play();
			}
	   
  //Exit Button
  function exitOverMale() {
			document.getElementById("playerCloseMale").src= buttonPath + "ExitBtn_on.png";
	   }
  function exitOffMale() {
			document.getElementById("playerCloseMale").src= buttonPath + "ExitBtn.png";
	   }
	   
  
  function closePlayerMale() {
	  var child = document.getElementById("wthvideoMale"),
		  parent = document.getElementById("wthvideoMale").parentNode,
		  hFall = document.getElementById("h264MaleFallback"),
		  pcbtn = document.getElementById("playerCloseMale"); //restart 
	  document.getElementById("objvideoMale").style.visibility = "hidden";
	  document.getElementById("PlayerBarMale").style.visibility = "hidden";
	  vidBoxMale.pause();
	  vidBoxMale.volume = 0;
	  hFall.removeEventListener("click", clickPlayMale, false);	
	  pcbtn.removeEventListener("mouseover", exitOverMale, false);
	  pcbtn.removeEventListener("mouseout", exitOffMale, false);
	  pcbtn.removeEventListener("click", closePlayerMale, false);
	  parent.removeChild(child);
	   }
  function exitWTH() {
	   if (flvMaleTest === true) {
	   thisMovie("objvideoMale").exitVideoWTH();
	   } else {
			closePlayerMale();
	   }
  }   
  //function for when video Ends
  function videoEndedMale() { 
	   if (doc.fullscreenElement || doc.mozFullScreenElement || doc.webkitFullscreenElement || doc.msFullscreenElement) {
		 cancelFullScreen.call(doc);  
	   }
	   if (exitoncomplete === "yes") {closePlayerMale();}
	   vidBoxMale.load();
	   vidBoxMale.pause();
	   document.getElementById("PlayPauseBtnMale").src= buttonPath + "PlayBtn.png";
	  document.getElementById("h264MaleFallback").addEventListener("click", clickPlayMale, false);
  }
  
  //Functions to access player from html
  function pauseWTH() {
	   if (flvMaleTest === true) {
	   thisMovie("objvideoMale").pauseVidMaleeoWTH();
	   } else {
	   vidBoxMale.pause();
	   }
  }
  
  function unpauseWTH() {
	   if (flvMaleTest === true) {
	   thisMovie("objvideoMale").unpauseVidMaleeoWTH();
	   } else {
	   vidBoxMale.play();
	   }
  }
  function playWTH() {
	   if (flvMaleTest === true) {
	   thisMovie("objvideoMale").playVideoWTH();
	   } else {
	   vidBoxMale.play();
	   }
  }
  function stopWTH() {
	   if (flvMaleTest === true) {
	   thisMovie("objvideoMale").stopVideoWTH();
	   } else {
	   vidBoxMale.currentTime = 0;
	   vidBoxMale.pause();
	   }
  }
  function muteWTH() {
	   if (flvMaleTest === true) {
	   thisMovie("objvideoMale").muteVolWTH();
	   } else {
	   muteToggleMale();
	   }
  }
  function unmuteWTH() {
	   if (flvMaleTest === true) {
	   thisMovie("objvideoMale").startVolWTH();
	   } else {
	   muteToggleMale();
	   }
  }
  
  function hideDiv() {
	   child = document.getElementById("wthvideoMale");
	   parent = child.parentNode;
	   parent.removeChild(child);
  }
  function cue0() {
	   pauseWTH();
  }
  
  // start creating divs for iPhone
  function createImgLnk(){
	   if (responsive === "yes") {
			newDiv = document.getElementById("wthvideoMale");
			centeroffsetMale= "auto";
	   } else {
			newDiv = document.createElement("div");
			newDiv.id = "wthvideoMale"; 
	   }
	   newDiv.style.height = heightMale + "px";
	   newDiv.style.width = widthMale + "px";
	   newDiv.style.position = positionMale;
	   newDiv.style.top = divTopMale;
	   newDiv.style.leftMale = leftMale;
	   newDiv.style.right = rightMale;
	   newDiv.style.bottom = bottomMale;
	   newDiv.style.marginLeft = centeroffsetMale;
	   newDiv.style.marginRight = centeroffsetMale;
	   newDiv.style.zIndex = 9999;
	   newDiv.style.overflow = overflow;
	  
			if (responsive !== "yes") {
				 var body  = document.body || document.getElementsByTagName("body")[0];
				 body.insertBefore(newDiv,body.childNodes[0]);
			}
			//Create Link
			newLnk = document.createElement("a");
			newLnk.href = hVideoMale;
			document.getElementById('wthvideo').appendChild(newLnk);
			//Create Image
			newImg = document.createElement("img");
			newImg.id = "wthImage";
			newImg.src = posterImg;
			newImg.alt = "WTH Video Spokesperson";
			imgLnkMale = newImg;
			newLnk.appendChild(imgLnkMale);
  }
  function addListeners(){     
  //add eventlisteners
	   e = document.getElementById("PlayPauseBtnMale");//Play Pause
	   e.addEventListener("mouseover", playPauseOverMale, false);
	   e.addEventListener("mouseout", playPauseOutMale, false);
	   e.addEventListener("click", playToggleMale, false); 
	   e = document.getElementById("muteBtnMale");//mute
	   e.addEventListener("mouseover", muteOverMale, false);
	   e.addEventListener("mouseout", muteOutMale, false);
	   e.addEventListener("click", muteToggleMale, false);
	   e = document.getElementById("restartBtnMale");//restart 
	   e.addEventListener("mouseover", restartOverMale, false);
	   e.addEventListener("mouseout", restartOutMale, false);
	   e.addEventListener("click", restartClickMale, false);
	   e = document.getElementById("playerCloseMale");//restart 
	   e.addEventListener("mouseover", exitOverMale, false);
	   e.addEventListener("mouseout", exitOffMale, false);
	   e.addEventListener("click", closePlayerMale, false);
	   // event listener for video ending
	   vidBoxMale.addEventListener("ended", videoEndedMale, false); 
	   vidBoxMale.addEventListener("playing", playingVidMale, false);
	   vidBoxMale.addEventListener("pause", pauseVidMale, false);
  }
  // start creating divs
  function createDivMale() {
	   if (responsive === "yes") {
			newDiv = document.getElementById("wthvideoMale");
	   } else {
			newDiv = document.createElement("div");
			newDiv.id = "wthvideoMale"; 
	   }
	   newDiv.style.height = heightMale + "px";
	   newDiv.style.width = widthMale + "px";
	   newDiv.style.position = positionMale;
	   newDiv.style.top = divTopMale;
	   newDiv.style.leftMale = leftMale;
	   newDiv.style.right = rightMale;
	   newDiv.style.bottom = bottomMale;
	   newDiv.style.marginLeft = centeroffsetMale;
	   newDiv.style.marginRight = centeroffsetMale;
	   newDiv.style.zIndex = 9999;
	   newDiv.style.overflow = overflow;
	   newDiv.alt = "WTH Video Spokesperson";
  
	   //create flashvars value
			var newFlashVars ="";
			newFlashVars += "vurl=" + flvMale;
			newFlashVars += "&amp;vwidth=" +widthMale;
			newFlashVars += "&amp;vheight=" +heightMale;
			newFlashVars += "&amp;actorpic=" + pngImgMale;
			newFlashVars += "&amp;autostart=" +autostartMale;
			newFlashVars += "&amp;exitoncomplete=" +exitoncomplete;
			newFlashVars += "&amp;vdelay=" +delay;
			newFlashVars += "&amp;vcolor=" +color;
			newFlashVars += "&amp;vlink=" +vidlink;
			newFlashVars += "&amp;openin="+openin;
			newFlashVars += "&amp;vvol=" +volume;
			newFlashVars += "&amp;playbtn=" +hBtn;
			newFlashVars += "&amp;playpos=" +playposition;
			newFlashVars += "&amp;playtop=" +playtop;
			newFlashVars += "&amp;hflip=" + "no";
			newFlashVars += "&amp;controlbar=" +controlbarMale;
			newFlashVars += "&amp;playerClose="+playerCloseMale;
			///add swf object
			markUp = '';
			markUp += ' <object id="objvideoMale" style="outline:none;" type="application/x-shockwave-flash" width="' + widthMale + '" height="' + heightMale + '" data="' + playerPath + '">';
			markUp += '  <param name="movie" value="' + playerPath + '" />';
			markUp += '  <param name="quality" value="high" />';
			markUp += '      <param name="flashvars" value="' + newFlashVars + '">';
			markUp += '  <param name="wmode" value="transparent" />';
			markUp += '  <param name="allowscriptaccess" value="always" />';
			markUp += '  <param name="swfversion" value="9.0.45.0" />';
			markUp += ' </object>';
			newDiv.innerHTML = markUp;
			if (responsive !== "yes") {
				 body  = document.body || document.getElementsByTagName("body")[0];
				 body.insertBefore(newDiv,body.childNodes[0]);
				 objCSSMale = document.getElementById("objvideoMale").style;
				 objCSSMale.height = heightMale + "px";
				 objCSSMale.width = widthMale + "px";
			}
			if (html5Male !== "no") {
			//add html5Male fallback
			newP = document.createElement("div");
  
			newP.id = "h264MaleFallback";
			videoMarkUp = '';
			if(autostartMale === "yes"){
				videoMarkUp += '<video id="videoBoxMale" width="' + widthMale + '" height="' + heightMale + '" poster="' + posterImgMale + '" autoplay >';
			}else{
				videoMarkUp += '<video id="videoBoxMale" width="' + widthMale + '" height="' + heightMale + '" poster="' + posterImgMale + '" >';
			}
			videoMarkUp += '  <source src="' + hVideoMale + '" type="video/mp4">';
			videoMarkUp += 'Your Browser Does Not support the video tag';
			videoMarkUp += ' </video>';
			newP.innerHTML = videoMarkUp;
			newP.style.position = "relative";
			newP.style.zIndex = 10000;
			newP.style.height = heightMale + "px";
			newP.style.width = widthMale + "px";
			dv = document.getElementById("objvideoMale");
			h264MaleFallback = newP;
			dv.appendChild(h264MaleFallback);
			document.getElementById("videoBoxMale").style.position = "relative";
			document.getElementById("videoBoxMale").style.zIndex=1010;
			
			//Create playerbar
			newPb = document.createElement("div");
			newPb.id = "PlayerBarMale";
			newPb.style.height = playerBarHeight + "px";
			newPb.style.width = playerBarWidth + "px";
			newPb.style.margin = "0 auto";
			newPb.style.marginTop = playerBarMarginTop;
			newPb.style.cursor = "pointer";
			newPb.style.position = "relative";
			newPb.style.zIndex = 10020;
			newPb.style.backgroundImage= barImage;
			newPb.style.backgroundRepeat= "no-repeat";
			newPb.style.backgroundSize= "100% 100%";
			newPb.style.opacity = 1;
			dv = document.getElementById("h264MaleFallback");
			PlayerBarMale = newPb;
			dv.appendChild(PlayerBarMale);
			
			//Create PlayButtonMale
			newDiv = document.createElement("img");
			newDiv.id = "PlayPauseBtnMale";
			newDiv.style.heightMale = "95%";
			newDiv.style.float = "leftMale";
			newDiv.src = buttonPath + "PlayBtn.png";
			newDiv.style.position = "relative";
			newDiv.style.zIndex = "inherit";
			newDiv.style.marginLeft = "1%";
			newDiv.style.marginTop =marginTopMale;
			newDiv.style.padding = ".5%";
			dv = document.getElementById("PlayerBarMale");
			newP.style.position = "PlayPauseBtnMale";
			PlayButtonMale = newDiv;
			dv.appendChild(PlayButtonMale);
					  
			//Create Mute
			newDiv = document.createElement("img");
			newDiv.id = "muteBtnMale";
			newDiv.style.heightMale = "95%";
			newDiv.style.float = "leftMale";
			newDiv.style.marginTop =marginTopMale;
			newDiv.src = buttonPath + "VolumeBtn.png";
			newDiv.style.position = "relative";
			dv = document.getElementById("PlayerBarMale");
			newDiv.style.padding = ".5%";
			muteBtnMale = newDiv;
			dv.appendChild(muteBtnMale);
				 
			
			//Create Restart
			newDiv = document.createElement("img");
			newDiv.id = "restartBtnMale";
			newDiv.style.heightMale = "95%";
			newDiv.style.float = "leftMale";
			newDiv.style.marginTop =marginTopMale;
			newDiv.src = buttonPath + "RestartBtn.png";
			newDiv.style.position = "relative";
			newDiv.style.padding = ".5%";
			dv = document.getElementById("PlayerBarMale");
			restartBtnMale = newDiv;
			dv.appendChild(restartBtnMale);
			
			//Create exit button
			newDiv = document.createElement("img");
			newDiv.id = "playerCloseMale";
			newDiv.style.heightMale = "95%";
			newDiv.style.position = "relative";
			newDiv.style.marginTop =marginTopMale;
			newDiv.style.float = "leftMale";
			newDiv.src = buttonPath + "ExitBtn.png";
			newDiv.style.padding = ".5%";
			dv = document.getElementById("PlayerBarMale");
			playerCloseMale = newDiv;
			dv.appendChild(playerCloseMale);
			
			 vidBoxMale = document.getElementById("videoBoxMale");
		  /*vidBoxMale.setAttribute("style","-webkit-filter:brightness(108.5%)");
		  vidBoxMale.setAttribute("style","filter:brightness(108.5%)");*/
  
  if (nav === undefined | nav === "[object MimeType]") {
	   flvMaleTest = false;
	   if (html5Male ==="no") {
			document.getElementById("objvideoMale").style.visibility = "hidden";
			div = document.getElementById("objvideoMale");
			div.parentNode.removeChild(div);
			div = document.getElementById("wthvideoMale");
			div.parentNode.removeChild(div);
	   }
  }
  if(flvMaleTest === true){vidBoxMale.pause();}
  if(platform === "iPad"){
			document.getElementById("h264MaleFallback").addEventListener("click", clickPlayMale, false);
	  }
  if (flvMaleTest === false) {
	  if(autostartMale === "yes"){
		  videoBoxMale.oncanplay = function() {
	  if(videoBoxMale.playing !== true){
			document.getElementById("h264MaleFallback").addEventListener("click", clickPlayMale, false);
	  }
		  
  };
  }else {
	  videoBoxMale.autoplay = false;
	  document.getElementById("PlayPauseBtnMale").src= buttonPath + "PlayBtn.png";
	  document.getElementById("h264MaleFallback").addEventListener("click", clickPlayMale, false);
	  }
  }}
  addListeners();
	}
  
  function choosePlayer(){ 
	  if(platform !== 'iPhone') {
		  createDivMale();
	  } else {
		  createImgLnk();
	  }
  }
  //HTML5 cookies
  var hasSeen = "hasSeen" + flvMale;
  var hasSeenSS = sessionStorage.getItem(hasSeen);
  var hasSeenLS = localStorage.getItem(hasSeen);
  
  if (hasSeenSS === "yes") {
	   switch (autostartMale) {
			 case "oncethenpic":
				 autostartMale = "no";
				 break;
			 case "oncethenmute":
				 autostartMale = "mute";     
				 break;
	   }
  } else {
	   sessionStorage.setItem(hasSeen, "yes");
	   switch (autostartMale) {
			 case "oncethenpic":
				 autostartMale = "yes";
				 break;
			 case "oncethenmute":
				 autostartMale = "yes";     
				 break;
	   
	   }
  }
  if (hasSeenLS === "yes") {
	   switch (autostartMale) {
			 case "onceonly":
				 exit;
				 break;
			 case "onceonlythenmute":
				 autostartMale = "mute";     
				 break;
			 case "onceonlythenpic":
				 autostartMale = "no";
				 break;
	   
			 default:
				 break;
	   } 
  } else {
	   localStorage.setItem(hasSeen, "yes");
	   switch (autostartMale) {
			 case "onceonly":
				 autostartMale = "yes";
				 break;
			 case "onceonlythenmute":
				 autostartMale = "yes";
				 break;
			 case "onceonlythenpic":
				 autostartMale = "yes";
				 break;
	   }
  }
  switch (oncepersession) {
	   case "yes": 
			if (hasSeenSS !== "yes") {
			choosePlayer();
			}
			break;
	  case "onceonly":
			if (hasSeenSS !== "yes") {
			choosePlayer();
			}
			  break;
	  default:
			 choosePlayer();
		  }
  }
}