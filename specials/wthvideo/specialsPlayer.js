// JavaScript Document
// Copyright 2016 Website Talking Heads
$(document).ready(function() {
    "use strict";
    player();
});

function player() {
    "use strict";
    var thv = $('#Talking_Heads_Video'),
        muteTest = true;
		thv[0].volume = 0.7;
		drawvolumecontroller(10,30,10-(thv[0].volume*10));
		clickPlay();
//-----------------------------event listeners----------------------------
    $("#Talking_Heads_Video").on("timeupdate", function() {
        var playedPercent = 100 * this.currentTime / this.duration;
        playedPercent = playedPercent.toFixed(1);
        $('.timeBar').css({
            'width': playedPercent + '%'
        });
    });
	 document.getElementById("Talking_Heads_Video").addEventListener("ended", function(){
        	$("#clicktoplay").show();
			thv[0].loop = true;
			thv[0].muted = true;
			thv[0].currentTime = 0;
			thv[0].play();
			muteTest = true;
			
		});
    var theParent = document.querySelector("#video-player");
    theParent.addEventListener("click", playerClick, false);
    theParent.addEventListener("mouseover", overVideo, false);
    theParent.addEventListener("mouseout", outVideo, false);

    function outVideo(e) {
        if (e.target !== e.currentTarget) {
            switch (e.target.id) {
                case "Talking_Heads_Video":
                    $(".player-list").delay(800).fadeOut();
                    break;
                case "playpause":
                case "restartBtn":
                case "fullscreen":
                case "muteBtn":
                    e.target.style.opacity = 1;
                    $(".player-list").show();
                    break;
            }
        }
        e.stopPropagation();
    }

    function overVideo(e) {
        if (e.target !== e.currentTarget) {
            if (!muteTest) {
                $(".player-list").fadeIn("slow");
            }
            switch (e.target.id) {
                case "muteBtn":
                case "playpause":
                case "restartBtn":
                case "fullscreen":
                    e.target.style.opacity = 0.7;
                    break;
            }
        }
        e.stopPropagation();
    }

    function playerClick(e) {
        if (e.target !== e.currentTarget) {
            if (muteTest) {
                unMute();
                e.stopPropagation();
            }
            switch (e.target.id) {
                case "playpause":
                    playpauseToggle();
                    break;
                case "muteBtn":
                    muteToggle();
                    break;
                case "restartBtn":
                    resetVideo();
                    break;
                case "fullscreen":
                    goFullscreen();
                    break;
            }
        }
        e.stopPropagation();
    }

    function goFullscreen() {
        thv[0].webkitEnterFullScreen();
    }

    function playpauseToggle() {
        $('#playpause').toggleClass('fa-pause-circle-o  fa-play-circle-o');
        if (thv[0].paused) {
            thv[0].play();
        } else {
            thv[0].pause();
        }
    }

    function unMute() {
        muteTest = false;
        $("#clicktoplay").hide();
        $('#playpause').toggleClass('fa-pause-circle-o  fa-play-circle-o');
        thv[0].currentTime = 0;
        muteToggle();
        thv[0].play();
        thv[0].loop = false;
    }


    function resetVideo() {
        $('#playpause').toggleClass('fa-pause-circle-o  fa-play-circle-o');
        thv[0].currentTime = 0;
        thv[0].play();
        thv[0].muted = false;
    }
    var timeDrag = false; /* Drag status */
    $('.progressBar').mousedown(function(e) {
        timeDrag = true;
        updatebar(e.pageX);
    });
    $(document).mouseup(function(e) {
        if (timeDrag) {
            timeDrag = false;
            updatebar(e.pageX);
        }
    });
    $(document).mousemove(function(e) {
        if (timeDrag) {
            updatebar(e.pageX);
        }
    });
    //update Progress Bar control
    var updatebar = function(x) {
        var progress = $('.progressBar');
        var maxduration = thv[0].duration; //Video duraiton
        var position = x - progress.offset().left; //Click pos
        var percentage = 100 * position / progress.width();
        //Check within range
        if (percentage > 100) {
            percentage = 100;
        }
        if (percentage < 0) {
            percentage = 0;
        }
        //Update progress bar and video currenttime
        $('.timeBar').css('width', percentage + '%');
        thv[0].currentTime = maxduration * percentage / 100;
    };
    
function clickPlay(){
    //---------------------------create click to play
	if(muteTest){
    $("#video-player").append($('<h2>').attr("id", "clicktoplay").append("<span/>").text("Click to Play").css('width', '200px'));
    var center = $("#video-player").width() / 2;
    var clickWidth = $('#clicktoplay').width() / 2;
    $("#clicktoplay").css('left', center - clickWidth);
	}
	}
    function muteToggle() {
        if (muteTest) {
            unMute();
        } else {
            $('#muteBtn').toggleClass('fa-volume-up  fa-volume-off');
			drawvolumecontroller(10,30,10-(thv[0].volume*10));
           thv[0].muted = !thv[0].muted;
        }
    }
}
function volumecontrolchanged(newvolume){
    "use strict";
	 $("#Talking_Heads_Video")[0].volume = (10-newvolume)/10;
	 $('#Talking_Heads_Video')[0].muted = false;
     $('#muteBtn').addClass('fa-volume-up');
     $('#muteBtn').removeClass('fa-volume-off');
	drawvolumecontroller(10,30,newvolume);
}
var c = 0;
	//length: how many bars
//height: height of the tallest bar
//nowselected: which bar is selected
function drawvolumecontroller(length,height,nowselected){
    "use strict";
var i=null;
	$("#volumcontroller").html("");
	for (i=0;i<length;i++){
		var magassag = 5 + Math.round((1.4)*(length - i)); //where 40 is the container height
		var margintop = height-magassag;
		if (margintop <= 0) {margintop=0;}
		if (i >= nowselected){	
			$("#volumcontroller").html($("#volumcontroller").html()+'<div  onmouseup="volumecontrolchanged('+i+')" style="background-color:#1981FF;height:'+magassag+'px;margin-top:'+margintop+'px;" class="volumecontrollerbar"></div>');
			
		} else {
			$("#volumcontroller").html($("#volumcontroller").html()+'<div  onmouseup="volumecontrolchanged('+i+')" style="height:'+magassag+'px;margin-top:'+margintop+'px;" class="volumecontrollerbar"></div>');
		}		
	}	
}