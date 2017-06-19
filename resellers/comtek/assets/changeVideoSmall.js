// JavaScript Document

	var newHref="http://www.websitetalkingheads.com/videos/";
	var newHrefend=".mp4";
	var myExit ="false";
	

	function showVideo(actor){
		document.getElementById('MyPlayer').style.visibility= "hidden";
		document.getElementById('videoBox').title= actor;
		document.getElementById('videoBox').alt= actor;
		document.getElementById("videoBoxText").innerHTML= actor;
		document.getElementById("MyCarousel").style.opacity= "0.5";
		document.getElementById('videoBox').autoplay=true;
		document.getElementById('videoBox').src=newHref + actor + newHrefend;
		document.getElementById('videoBox').load();
		document.getElementById('videoBox').play();
		document.getElementById('PlayPauseBtn').src= "assets/PauseBtn.png";
		document.getElementById('videoBox').addEventListener("timeupdate", updateTime())
		}
	function closePlayer(){
		document.getElementById('MyPlayer').style.visibility = "hidden";
		document.getElementById('videoBox').removeEventListener("timeupdate", showVideo);
		document.getElementById('videoBox').pause();
		document.getElementById('videoBox').currentTime = 0;
		document.getElementById('MyCarousel').style.opacity= "1";
		document.getElementById('PlayPauseBtn').src= "assets/PlayBtn.png";
			}
	function playToggle(){
		if (document.getElementById('videoBox').paused){
		  document.getElementById('videoBox').play();
		document.getElementById('PlayPauseBtn').src= "assets/PauseBtn.png";
		  } else {
			document.getElementById('PlayPauseBtn').src= "assets/PlayBtn.png";
		  	document.getElementById('videoBox').pause();
		  }
		}
	function muteToggle(){
		if (document.getElementById('videoBox').muted){
		  	document.getElementById('videoBox').muted=false;
			document.getElementById('muteBtn').src= "assets/VolumeBtn.png";
		  } else {
			document.getElementById('muteBtn').src= "assets/VolumeBtnMute.png";
		  	document.getElementById('videoBox').muted=true;
		  }
		}
	function exitOver(){
		document.getElementById('exitBtn').src= "assets/ExitBtn_on.png";
	}
	function exitOff(){
		document.getElementById('exitBtn').src= "assets/ExitBtn.png";
	}
	function restartToggle(){
		document.getElementById('videoBox').currentTime = 0;
		document.getElementById('videoBox').play();
		}



function formatSecondsAsTime(secs, format) {
  var hr  = Math.floor(secs / 3600);
  var min = Math.floor((secs - (hr * 3600))/60);
  var sec = Math.floor(secs - (hr * 3600) -  (min * 60));
    if (min < 1){ 
    min = "0"; 
  }
    if (sec < 10){ 
    sec  = "0" + sec;
  }
  return min + ':' + sec;
}
function updateTime(){
	if(document.getElementById('videoBox').playing=true){
			document.getElementById('MyPlayer').style.visibility = "visible";
	}
			document.getElementById('videoBox').addEventListener("ended", function(){
			document.getElementById('videoBox').muted=true;
			document.getElementById('videoBox').currentTime = 0;
			document.getElementById('videoBox').pause();
			document.getElementById('PlayPauseBtn').src= "assets/PlayBtn.png";
			document.getElementById('videoBox').muted=false;
					});
}