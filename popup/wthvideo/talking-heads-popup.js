// Copyright 2017Website Talking Heads
// JavaScript Document
$(document).ready(function () {
    "use strict";
    var thplayer;
$('body').append('<div id="talking-popup"></div>');
    $('#talking-popup').css({"width":"480px","height":"380px","margin":"0 auto","display":"none","position":"fixed","color":"white","padding":"3rem","border-radius":"1rem","border":"medium solid #3D9CEB","z-index":"99","background":"rgba(255, 255, 255, 0.9)"});
    $(document).mousemove(function (e) {
        $('#exitpopup').css('left', (window.innerWidth / 2 - $('#exitpopup').width() / 2));
        $('#exitpopup').css('top', (window.innerHeight / 2 - $('#exitpopup').height() / 2));
        if (e.pageY <= 5) {
            // Show the exit popup
            $('#exitpopup').fadeIn();
            wthplayer();
        }
    });
    $('#exit').click(function () {
        exitAll();
    });
    $('#exitpopup_bg').click(function () {
        exitAll();
    });

    function exitAll() {
        $('#exitpopup').slideUp();
        $('#talkinghead').unbind();
        $('#wthvideo').empty();
        console.log('empty');
    }

    function wthplayer() {
        //Variables for Player
        var responsive = "yes", //You must place <div id="wthvideo"></div> inside the div you want the video to be in.
            width = "352", //video width
            height = "320", //video height
            iPhoneHeight = "200", //set height of iPhone link
            position = "fixed", //fixed or absolute positioning
            left = "auto", //if centering on page change this to 50%
            right = "0",
            divTop = "auto",
            bottom = "0",
            centeroffset = "auto", //if centering on page negative numbers are left and positive numbers are right
            controlbar = "mouse", //options for showing the controlbar, yes, no, and mouse
            color = "rgba(255,255,255,0.6)", //the color of the player bar.
            volume = "0.8",
            delay = 0.5, //delay start of video
            playbtn = "click-to-play.png", //you can set a custom playbuton for the flash player
            autostart = "yes", //autostart options yes, no, mute, oncethenpic, oncethenmute, onceonlythenpic, onceonlythenmute, and loop
            exitoncomplete = "yes", //option for player to close after video completes. "yes" or "no"
            oncepersession = "no", //option for number of times video plays "yes", "no", or "onceonly"
            path = "wthvideo", //path to where the files are located	
            actorpic = "juliapricing", //Just name,not extension png
            actorGif = "juliapricing",
            canvasVideo = "juliapricing-canvas", //Just name,not extension h264
            h264 = "juliapricing",
            // end Main Player Vars
            //----------------------------------------------------------------------------------------------------------------------------------------	 
            // convert vars to something useful
            imagePath = path + "/",
            gifBackground = "url('" + imagePath + actorpic + ".gif')",
            buttonPath = imagePath + "buttons" + "/",
            hVideo = path + "/" + canvasVideo + ".mp4",
            hBtn = buttonPath + playbtn,
            leftEnd = left.charAt(left.length - 1),
            overflow = "hidden",
            setWidth = 200, //set width of click to play button
            platform = navigator.platform,
            iOS = false,
            ua = navigator.userAgent.toLowerCase(),
            isAndroid = ua.indexOf("android") > -1,
            isDevice = false,
            windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
            videoMarkUp = "",
            //Set Player Bar size
            playerBarWidth = "99",
            playerBarHeight = 26,
            playerBarMarginBase = (playerBarHeight) * (-1) + "px",
            btnWidth = "24px",
            playerBarMargin = (width - playerBarWidth) / 2,
            hasSeenLS, hasSeenSS = false,
            iPhoneVideo, clickImage, spokespersonImage, thb, thv, PlayerBar, newP, e, playerClose, restartBtn, muteBtn, myVidPlayed, createTH, toPlay, dv, playingS, outputCanvas, theCanvas,
            thc, imgLink = null,
            vendors = ["-moz-", "-webkit-", "-o-", "-ms-", "-khtml-", ""],
            hasSeen = "hasSeen" + canvasVideo;
        //Modify some variables to add suffix or path
        if (platform === "iPad" || platform === "iPhone" || platform === "iPod") {
            iOS = true;
        }
        if (windowWidth < 999 || iOS || isAndroid) {
            isDevice = true;
        }
        if (!isDevice) {
            hVideo = path + "/" + canvasVideo + ".mp4";
        } else {
            hVideo = path + "/" + h264 + ".mp4";
        }
        delay = delay * 1000;
        actorpic = imagePath + actorpic + ".png";
        actorGif = imagePath + actorGif + ".gif";
        buttonPath = imagePath + "buttons" + "/";
        leftEnd = left.charAt(left.length - 1);
        switch (leftEnd) {
            case "%":
                break;
            case "o":
                break;
            default:
                left += "px";
        }
        if (divTop !== "auto") {
            divTop += "px";
        }
        if (right !== "auto") {
            right += "px";
        }
        if (centeroffset !== "auto") {
            centeroffset += "px";
        }
        if (bottom !== "auto") {
            bottom += "px";
        }
        //--------------------------------------------------------------------------------------------------------------
        //HTML5 cookies	
        hasSeenSS = sessionStorage.getItem(hasSeen);
        hasSeenLS = localStorage.getItem(hasSeen);
        //----------------------------
        //detect local storage cookie
        if (hasSeenLS === null) {
            if (autostart !== "no" && autostart !== "mute") {
                autostart = "yes";
            }
            toPlay = true;
        } else {
            oncepersessionSwitch();
            autostartSwitch();
        }
        //----------------------------
        //detect and use session storage cookie
        if (hasSeenSS === null) {
            if (autostart !== "no" && autostart !== "mute") {
                autostart = "yes";
            }
        } else {
            switch (autostart) {
                case "oncethenmute":
                    autostart = "mute";
                    break;
                case "oncethenpic":
                    autostart = "no";
                    break;
                default:
                    break;
            }
        }
        //Decide to play or not
        sessionStorage.setItem(hasSeen, true);
        localStorage.setItem(hasSeen, true);
        if (toPlay === true) {
            setTimeout(function () {
                createDiv();
            }, delay);
        } else {
            return;
        }

        function autostartSwitch() {
            switch (autostart) {
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

        function oncepersessionSwitch() {
            switch (oncepersession) {
                case "yes":
                    if (hasSeenSS === "true") {
                        toPlay = false;
                    } else {
                        toPlay = true;
                    }
                    break;
                case "onceonly":
                    if (hasSeenLS === "true") {
                        toPlay = false;
                    } else {
                        toPlay = true;
                    }
                    break;
                default:
                    toPlay = true;
                    break;
            }
        }
        //End cookie creation	
        //-----------------------------------------------------------------------------------------------------------------------	
        //Create or find wthvideo div

        function createDiv() {
            if (responsive === "yes") {
                createTH = document.getElementById("wthvideo");
                createTH.style.position = "relative";
                createTH.style.left = "50%";
                createTH.style.marginLeft = (width / 2) * -1 + "px";
                createTH.style.top = "auto";
                createTH.style.bottom = 0;
            } else {
                createTH = document.createElement("div");
                createTH.id = "wthvideo";
                createTH.style.position = position;
                createTH.style.marginLeft = centeroffset;
                createTH.style.left = left;
                createTH.style.right = right;
                createTH.style.marginLeft = centeroffset;
                createTH.style.top = divTop;
                createTH.style.bottom = bottom;
                var wthbody = document.body || document.getElementsByTagName("body")[0];
                wthbody.insertBefore(createTH, wthbody.childNodes[0]);
            }
            thv = document.getElementById("wthvideo");
            createTH.style.height = height + "px";
            createTH.style.width = width + "px";
            createTH.style.zIndex = 9999;
            createTH.style.overflow = overflow;
            if (!isDevice) {
                videoMarkUp += "<style>";
                videoMarkUp += " #wthvideo:hover >#PlayerBar{margin-top: " + playerBarMarginBase + "!important}";
                videoMarkUp += "#talkinghead{display:none}";
                videoMarkUp += "#spokespersonA{display:none}";
                videoMarkUp += "#bufferCanvas{display:none}";
                videoMarkUp += "</style>";
            }
            createTH.innerHTML = videoMarkUp;
            if (isDevice) {
                if (platform === "iPhone") {
                    iPhoneCreate();
                } else {
                    createVideo();
                    createControls();
                    startBtnCreate();
                }
            } else {
                createVideo();
                createControls();
                createCanvas();
                HTML5Autostart();
            }
        }

        function createVideo() {
            //-----create video-------------------------------------------------------------------------
            var v = document.createElement("VIDEO");
            v.id = "talkinghead";
            v.src = hVideo;
            if (isDevice) {
                v.poster = actorpic;
            } else {
                v.poster = actorGif;
            }
            v.volume = volume;
            v.style.width = width + "px";
            if (!isDevice) {
                v.style.height = height * 2 + "px";
            } else {
                v.style.height = height + "px";
            }
            thv.appendChild(v);
            thplayer = document.getElementById("talkinghead");
        }

        function createCanvas() {
            //create canvas---------------------------------------------------------------------------------------
            thb = document.createElement("CANVAS");
            thb.id = "bufferCanvas";
            thb.width = width;
            thb.height = height * 2;
            thb.style.position = "absolute";
            thv.appendChild(thb);
            thc = document.createElement("CANVAS");
            thc.style.position = "absolute";
            thc.style.top = "0";
            thc.style.left = "0";
            thc.id = "talkingCanvas";
            thc.width = width;
            thc.height = height * 2;
            thv.appendChild(thc);
        }

        function createControls() {
            //create controls holder----------------------------------------------------------------------------------------
            var newD = document.createElement("div");
            newD.id = "playholder";
            newD.style.position = "relative";
            newD.style.width = width + "px";
            newD.style.height = height + "px";
            thv.appendChild(newD);
            //upper exit btn
            /*        var newI = document.createElement("img");
                    newI.id = "htmlClose";
                    newI.style.marginLeft = (width - 20) + "px";
                    newI.style.width = "16px";
                    newI.style.display = "block";
                    newI.style.position = "relative";
                    newI.style.cursor = "pointer";
                    newI.src = buttonPath + "ExitBtn-full.png";
                    newI.style.zIndex = 10020;
                    dv = document.getElementById("playholder");
                    var windowClose = newI;
                    dv.appendChild(windowClose);
                    windowClose.addEventListener("click", closePlayer, false);*/
            //Create playerbar--------------------------------------------------------------------------------------
            newP = document.createElement("div");
            newP.id = "PlayerBar";
            newP.style.height = playerBarHeight + "px";
            newP.style.width = playerBarWidth + "px";
            newP.style.borderRadius = "8px";
            newP.style.paddingLeft = "3px";
            newP.style.paddingTop = "1px";
            newP.style.left = playerBarMargin + "px";
            newP.style.bottom = "0px";
            newP.style.cursor = "pointer";
            if (isDevice) {
                newP.style.position = "absolute";
            } else {
                newP.style.position = "relative";
            }
            newP.style.zIndex = 10020;
            newP.style.background = color;
            PlayerBar = newP;
            thv.appendChild(PlayerBar);
            //Create PlayButton----------------------------------------------------------
            createTH = document.createElement("img");
            createTH.style.maxWidth = btnWidth;
            createTH.id = "PlayPauseBtn";
            createTH.style.float = "left";
            createTH.src = buttonPath + "PlayBtn.png";
            createTH.style.position = "relative";
            createTH.style.zIndex = "inherit";
            dv = document.getElementById("PlayerBar");
            newP.style.position = "PlayPauseBtn";
            var PlayButton = createTH;
            dv.appendChild(PlayButton);
            //Create Mute
            createTH = document.createElement("img");
            createTH.style.width = btnWidth;
            createTH.id = "muteBtn";
            createTH.src = buttonPath + "VolumeBtn.png";
            createTH.style.float = "left";
            dv = document.getElementById("PlayerBar");
            muteBtn = createTH;
            dv.appendChild(muteBtn);
            //Create Restart
            createTH = document.createElement("img");
            createTH.style.width = btnWidth;
            createTH.id = "restartBtn";
            createTH.style.float = "left";
            createTH.src = buttonPath + "RestartBtn.png";
            createTH.style.position = "relative";
            createTH.style.float = "left";
            createTH.style.zIndex = 10050;
            dv = document.getElementById("PlayerBar");
            restartBtn = createTH;
            dv.appendChild(restartBtn);
            //Create exit button
            createTH = document.createElement("img");
            createTH.style.width = btnWidth;
            createTH.id = "playerClose";
            createTH.style.position = "relative";
            createTH.style.zIndex = 99050;
            createTH.style.float = "left";
            createTH.src = buttonPath + "ExitBtn.png";
            dv = document.getElementById("PlayerBar");
            playerClose = createTH;
            dv.appendChild(playerClose);
            //----------------------------------------------------------------------------------------------------
            addListeners();
            if ("ontouchstart" in window || controlbar === "yes") {
                document.getElementById("PlayerBar").style.marginTop = playerBarMarginBase;
            } else {
                setCss3Style(document.getElementById("PlayerBar"), "transition", "all 1s");
            }
        }

        function startPlaying() {
            theCanvas = document.getElementById("talkingCanvas");
            outputCanvas = document.getElementById("bufferCanvas");
            try {
                thplayer.play();
                document.getElementById("PlayPauseBtn").src = buttonPath + "PauseBtn.png";
            } catch (err) {}
            if (theCanvas && theCanvas.getContext) {
                var ctx = theCanvas.getContext("2d");
                if (ctx) {
                    playingS = setInterval(function () {
                        showVideo();
                    }, 16);
                }
            }
        }

        function showVideo() {
            try {
                var theCanvas = document.getElementById("talkingCanvas"),
                    ctx = theCanvas.getContext("2d"),
                    srcVid = thplayer,
                    buffer = outputCanvas.getContext("2d");
                buffer.drawImage(srcVid, 0, 0);
                var image = buffer.getImageData(0, 0, width, height),
                    imageData = image.data,
                    alphaData = buffer.getImageData(0, height, width, height).data;
                for (var i = 3, len = imageData.length; i < len; i = i + 4) {
                    imageData[i] = alphaData[i - 1];
                }
                ctx.putImageData(image, 0, 0, 0, 0, width, height);
            } catch (err) {}
        }
        //--------------------------------------------------------------------------------------
        //----------------------------------------------------------------------------------------------------

        function HTML5Autostart() {
            //test autoplay
            if (autostart === "yes") {
                thplayer.oncanplay = function () {
                    if (thplayer.paused === true) {
                        autostart = "cant auto play";
                        addBackground();
                    }
                };
            }
            if (autostart === "yes") {
                thplayer.autoplay = true;
                document.getElementById("PlayPauseBtn").src = buttonPath + "PauseBtn.png";
                document.getElementById("PlayerBar").style.opacity = "1";
                startPlaying();
            } else {
                addBackground();
            }
            if (exitoncomplete === "yes") {
                thplayer.addEventListener("ended", closePlayer, false);
            }
        }
        //----------------------------------------------------------------------------------------------------

        function addListeners() {
            //add eventlisteners
            e = document.getElementById("PlayPauseBtn"); //Play Pause
            e.addEventListener("mouseover", playPauseOver, false);
            e.addEventListener("mouseout", playPauseOut, false);
            e.addEventListener("click", playToggle, false);
            e = document.getElementById("muteBtn"); //mute
            e.addEventListener("mouseover", muteOver, false);
            e.addEventListener("mouseout", muteOut, false);
            e.addEventListener("click", muteToggle, false);
            e = document.getElementById("restartBtn"); //restart 
            e.addEventListener("mouseover", restartOver, false);
            e.addEventListener("mouseout", restartOut, false);
            e.addEventListener("click", restartClick, false);
            e = document.getElementById("playerClose"); //restart 
            e.addEventListener("mouseover", exitOver, false);
            e.addEventListener("mouseout", exitOff, false);
            e.addEventListener("click", closePlayer, false);
            // event listener for video ending
            myVidPlayed = thplayer;
            myVidPlayed.addEventListener("ended", videoEnded, false);
        }
        //------------------------------------------------------------------------------------------------------------
        //move playerbar    

        function setCss3Style(el, prop, val) {
            for (var i = 0, l = vendors.length; i < l; i++) {
                el.style[toCamelCase(vendors[i] + prop)] = val;
            }
        }

        function toCamelCase(str) {
            return str.toLowerCase().replace(/(\-[a-z])/g, function ($1) {
                return $1.toUpperCase().replace("-", "");
            });
        }
        //-----------------------------------------------------------------------------------------------------------------------	
        //------------------------------------------------------------------------------------------------------------
        //function for when video Ends

        function videoEnded() {
            if (platform === "iPhone") {
                document.exitFullscreen();
            }
            document.getElementById("PlayPauseBtn").src = buttonPath + "PlayBtn.png";
            if (exitoncomplete === "yes") {
                closePlayer();
            } else if (isDevice) {
                startBtnCreate();
            } else {
                addBackground();
            }
        }
        //click to play

        function clickPlay() {
            try {
                document.getElementById("PlayerBar").style.opacity = 1;
            } catch (err) {}
            playClick();
        }

        function playClick() {
            document.getElementById("PlayPauseBtn").addEventListener("click", playToggle, false);
            try {
                spokespersonImage.style.display = "none";
                clickImage.removeEventListener("click", playClick, false);
            } catch (err) {}
            document.getElementById("click-to-play").parentNode.removeChild(document.getElementById("click-to-play"));
            if (isDevice) {
                thplayer.play();
                document.getElementById("PlayPauseBtn").src = buttonPath + "PauseBtn.png";
            } else {
                startPlaying();
            }
        }
        //Play Toggle Functions


        function playPauseOver() {
            document.getElementById("PlayPauseBtn").style.opacity = 0.5;
        }

        function playPauseOut() {
            document.getElementById("PlayPauseBtn").style.opacity = 1;
        }

        function playToggle() {
            if (thplayer.paused) {
                thplayer.play();
                document.getElementById("PlayPauseBtn").src = buttonPath + "PauseBtn.png";
                document.getElementById("PlayerBar").style.opacity = "1";
                clickPlay();
            } else {
                document.getElementById("PlayPauseBtn").src = buttonPath + "PlayBtn.png";
                thplayer.pause();
            }
        }
        //Mute Button Functions

        function muteOver() {
            document.getElementById("muteBtn").style.opacity = 0.5;
        }

        function muteOut() {
            document.getElementById("muteBtn").style.opacity = 1;
        }

        function muteToggle() {
            if (thplayer.muted) {
                thplayer.muted = false;
                document.getElementById("muteBtn").src = buttonPath + "VolumeBtn.png";
            } else {
                document.getElementById("muteBtn").src = buttonPath + "VolumeBtnMute.png";
                thplayer.muted = true;
            }
        }
        //Restart Button

        function restartOver() {
            document.getElementById("restartBtn").style.opacity = 0.5;
        }

        function restartOut() {
            document.getElementById("restartBtn").style.opacity = 1;
        }

        function restartClick() {
            thplayer.currentTime = 0;
            document.getElementById("PlayPauseBtn").src = buttonPath + "PauseBtn.png";
            playClick();
            thplayer.play();
        }
        //Exit Button

        function exitOver() {
            document.getElementById("playerClose").style.opacity = 0.5;
        }

        function exitOff() {
            document.getElementById("playerClose").style.opacity = 1;
        }

        function closePlayer() {
            thplayer.pause();
            clearInterval(playingS);
            try {
                exitAll();
            } catch (err) {}
            return;
        }
        //----------------------------------------------------------------------------------------------------

        function addBackground() {
            spokespersonImage = document.createElement("DIV");
            spokespersonImage.id = "spokespersonImage";
            spokespersonImage.style.backgroundImage = gifBackground;
            spokespersonImage.style.backgroundRepeat = "no-repeat";
            spokespersonImage.style.position = "absolute";
            spokespersonImage.style.cursor = "pointer";
            spokespersonImage.style.height = height + "px";
            spokespersonImage.style.width = width + "px";
            spokespersonImage.style.zIndex = 100;
            thv.insertBefore(spokespersonImage, thv.firstChild);
            spokespersonImage = document.getElementById("spokespersonImage");
            startBtnCreate();
        }

        function startBtnCreate() {
            //Create click to play
            var startBtn = document.createElement("img");
            startBtn.id = "click-to-play";
            startBtn.src = hBtn;
            startBtn.alt = "Click to Play";
            startBtn.style.width = setWidth + "px";
            startBtn.style.left = (width - setWidth) / 2 + "px";
            startBtn.style.bottom = "30px";
            startBtn.style.cursor = "pointer";
            startBtn.style.position = "absolute";
            if (isDevice) {
                thv.appendChild(startBtn);
            } else {
                spokespersonImage.appendChild(startBtn);
            }
            clickImage = document.getElementById("click-to-play");
            clickImage.addEventListener("click", playClick, false);
        }

        function iPhoneCreate() {
            imgLink = document.createElement("div");
            imgLink.style.height = iPhoneHeight + "px";
            imgLink.style.cursor = "pointer";
            iPhoneVideo = document.createElement("VIDEO");
            iPhoneVideo.id = "talkinghead";
            iPhoneVideo.src = hVideo;
            iPhoneVideo.style.height = iPhoneHeight + "px";
            iPhoneVideo.style.display = "hidden";
            iPhoneVideo.style.bottom = "0px";
            iPhoneVideo.style.right = "0px";
            iPhoneVideo.style.position = "absolute";
            var img = document.createElement("img");
            img.src = actorGif;
            img.style.bottom = "0px";
            img.style.right = "0px";
            img.style.height = iPhoneHeight + "px";
            img.style.position = "absolute";
            var btnImg = document.createElement("img");
            btnImg.src = hBtn;
            btnImg.style.bottom = "30px";
            btnImg.style.right = "0px";
            btnImg.style.width = iPhoneHeight + "px";
            btnImg.style.position = "absolute";
            thv.appendChild(iPhoneVideo);
            thv.appendChild(imgLink);
            imgLink.appendChild(img);
            imgLink.appendChild(btnImg);
            imgLink.addEventListener("click", iPhonePlay, false);
            iPhoneVideo.addEventListener("ended", iPhoneEnded, false);
        }

        function iPhoneEnded() {
            document.getElementById("reporter").innerHTML = "iPhone Ended";
            iPhoneVideo.style.display = "none";
        }

        function iPhonePlay() {
            /*window.open(path + "/" + h264 + ".mp4", "_self", false);*/
            document.getElementById("talkinghead").play();
            document.getElementById("talkinghead").style.display = "inherit";
        }
    }
});
