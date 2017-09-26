// Copyright 2016 Website Talking Heads
// JavaScript Document
//Delay creation until page is loaded
if (window.addEventListener) {
    window.addEventListener("load", wthplayer, false);
} else if (window.attachEvent) {
    window.attachEvent("onload", wthplayer);
} else {
    window.onload = wthplayer;
}

function wthplayer() {
    "use strict";
    //Variables for Player
    var responsive = "yes", //You must place <div id="wthvideo"></div> inside the div you want the video to be in.
        iPhoneWidth = "360", //When the above happens, the witdh of the image
        width = "360", //video width
        height = "360", //video height
        position = "fixed", //fixed or absolute positioning
        left = "auto", //if centering on page change this to 50%
        right = "0",
        divTop = "auto",
        bottom = "0",
        centeroffset = "auto", //if centering on page negative numbers are left and positive numbers are right
        color = "rgba(235,245,255,0.6)", //the color of the player bar.
        volume = "0.8",
        delay = 0, //delay start of video
        controlbar = "mouse", //options for showing the controlbar, yes, no, and mouse
        playbtn = "click-to-play.png", //you can set a custom playbuton
        exitbtn = "yes", //show or not show exitbtn
        autostart = "yes", //autostart options yes, no, mute, oncethenpic, oncethenmute, onceonlythenpic, onceonlythenmute, and loop
        exitoncomplete = "no", //option for player to close after video completes. "yes" or "no"
        oncepersession = "no", //option for number of times video plays "yes", "no", or "onceonly"
        vidLink = "", //make the flashplayer a link. Either leave this set to "no" or you can put a complete URL inside the quotes.
        openIn = "_blank",
        path = "wthvideo", //path to where the files are located
        actorpic = "Maria", //transparent gif
        canvasVideo = "Maria-English-Canvas", //Just name,not extension
        h264 = "Maria-English", //Just name,not extension h264
        canvasSpanish = "Maria-Spanish-Canvas",
        h364Spanish = "Maria-Spanish",
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
        playerBarWidth = 132,
        btnWidth = 32,
        playerBarHeight = btnWidth + 2,
        playerBarMarginBase = (playerBarHeight * (-1)) + "px",
        playerBarMargin = (width - playerBarWidth) / 2,
        hasSeenLS, hasSeenSS = false, 
        theParent, actorGif, iPhoneVideo, clickImage, thplayer, spokespersonImage, thb, thv, PlayerBar, newP, playerClose, restartBtn, muteBtn, createTH, toPlay, dv, playingS, outputCanvas,
        LanguageBtn, languageTip,
        theCanvas, thc, imgLink = null,
        vendors = ["-moz-", "-webkit-", "-o-", "-ms-", "-khtml-", ""],
        spanish = false,
        toLoop = false,
        toMute = false,
        hasSeen = "hasSeen" + canvasVideo;
    //Modify some variables to add suffix or path
    if (platform === "iPad" || platform === "iPhone" || platform === "iPod") {
        iOS = true;
    }
    if (windowWidth < 999 || iOS || isAndroid) {
        isDevice = true;
    }
    setLanguage();
    btnWidth = btnWidth + "px";
    delay = delay * 1000;
    actorGif = imagePath + actorpic + ".gif";
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
    switch (autostart) {
        case "mute":
        case "oncethenmute":
        case "onceonlythenmute":
        case "loop":
            toLoop = true;
            toMute = true;
            break;
        default:
            toLoop = false;
            break;
    }
    //--------------------------------------------------------------------------------------------------------------
    //HTML5 cookies	
    hasSeenSS = sessionStorage.getItem(hasSeen);
    hasSeenLS = localStorage.getItem(hasSeen);
    //----------------------------
    //detect local storage cookie
    if (hasSeenLS === null) {
        if (autostart !== "no" || autostart === "mute") {
            toPlay = true;
            autostart = "yes";
        }
    } else {
        oncepersessionSwitch();
        autostartSwitch();
    }
    //----------------------------
    //detect and use session storage cookie
    if (hasSeenSS === null) {
        switch (autostart) {
            case "oncethenmute":
                autostart = "mute";
                break;
            case "oncethenpic":
                autostart = "no";
                break;
            default:
                autostart = "yes";
                break;
        }
    }
    //Decide to play or not
    sessionStorage.setItem(hasSeen, true);
    localStorage.setItem(hasSeen, true);
    if (toPlay === true) {
        setTimeout(function() {
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
        createTH.style.cursor = "pointer";
        createTH.style.overflow = overflow;
        createTH.innerHTML = videoMarkUp;
        if (isDevice) {
            if (platform === "iPhone") {
                iPhoneCreate();
                addListeners();
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
        v.zIndex = 1;
        if (isDevice) {
            v.poster = actorGif;
        } else {
            v.poster = actorGif;
            v.style.display = "none";
        }
        v.volume = volume;
        v.style.width = width + "px";
        if (toLoop) {
            v.loop = true;
        }
        if (toMute) {
            v.muted = true;
            if (autostart !== "loop") {
                startBtnCreate();
            }
        }
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
        thb.style.display = "none";
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
        if (exitbtn === "yes") {
            var newI = document.createElement("img");
            newI.id = "htmlClose";
            newI.style.marginLeft = (width - 20) + "px";
            newI.style.width = "16px";
            newI.style.display = "block";
            newI.style.position = "relative";
            newI.src = buttonPath + "ExitBtn-full.png";
            newI.style.zIndex = 10020;
            dv = document.getElementById("playholder");
            var windowClose = newI;
            dv.appendChild(windowClose);
        }
        //Create playerbar--------------------------------------------------------------------------------------
        newP = document.createElement("div");
        newP.id = "PlayerBar";
        newP.style.height = playerBarHeight + "px";
        newP.style.width = playerBarWidth + "px";
        newP.style.borderRadius = "8px";
        newP.style.paddingLeft = "3px";
        newP.style.paddingTop = "1px";
        newP.style.marginTop = "0px";
        newP.style.left = playerBarMargin + "px";
        newP.style.bottom = "0px";
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
        if (document.getElementById("talkinghead").muted) {
            createTH.src = buttonPath + "VolumeBtnMute.png";
        } else {
            createTH.src = buttonPath + "VolumeBtn.png";
        }
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
        //Create spanish-english button--------------------------------------------------------------------------------------
        LanguageBtn = document.createElement("div");
        LanguageBtn.id = "SpanishEnglish";
        LanguageBtn.style.marginBottom = "0px";
        LanguageBtn.style.right = "4px";
        LanguageBtn.style.bottom = "4px";
        LanguageBtn.style.position = "absolute";
        LanguageBtn.style.zIndex = 10020;
        LanguageBtn.style.fontWeight = "900";
        LanguageBtn.style.textAlign = "right";
        LanguageBtn.style.borderRadius = "8px";
        LanguageBtn.style.border = "thin solid #0000FF";
        LanguageBtn.style.padding = "2px 6px";
        LanguageBtn.style.backgroundColor = color;
        LanguageBtn.textContent = "Español";
        thv.appendChild(LanguageBtn);
		//language tooltip
		languageTip = document.createElement("div");
        languageTip.id = "languageTip";
        languageTip.style.marginTop = (LanguageBtn.clientHeight*2)*(-1);
		languageTip.innerHTML = "Switch to";
		languageTip.style.display = "none";
		languageTip.style.position = "absolute";
        languageTip.style.right = 0;
        languageTip.style.bottom = "20px";
        languageTip.style.textAlign = "center";
        LanguageBtn.appendChild(languageTip);
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
                playingS = setInterval(function() {
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
            if (autostart === "yes" || toLoop === true) {
                thplayer.oncanplay = function() {
                    if (thplayer.paused === true) {
                        autostart = "cant auto play";
                        addBackground();
                    }
                };
            }
            if (autostart === "yes" || toLoop === true) {
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
        //--------------------------------create listeners

    function addListeners() {
            theParent = document.querySelector("#wthvideo");
            theParent.addEventListener("click", doSomething, false);
            theParent.addEventListener("mouseover", overVideo, false);
            theParent.addEventListener("mouseout", outVideo, false);

            function outVideo(e) {
                if (e.target !== e.currentTarget) {
                    switch (e.target.id) {
                        case "talkingCanvas":
                            document.getElementById("PlayerBar").style.marginTop = "0px";
                            break;
                        case "PlayPauseBtn":
                        case "muteBtn":
                        case "restartBtn":
                        case "playerClose":
                        case "htmlClose":
                        case "imgLnk":
						case "SpanishEnglish":
							languageTip.style.display = "none";
                            break;
                    }
                }
                e.stopPropagation();
            }

            function overVideo(e) {
                if (e.target !== e.currentTarget) {
                    switch (e.target.id) {
                        case "talkingCanvas":
                            document.getElementById("PlayerBar").style.marginTop = playerBarMarginBase;
                            break;
                        case "PlayPauseBtn":
                        case "muteBtn":
                        case "restartBtn":
                        case "playerClose":
                        case "htmlClose":
                        case "imgLnk":
                            e.target.style.opacity = 0.7;
                            document.getElementById("PlayerBar").style.marginTop = playerBarMarginBase;
                            break;
						case "SpanishEnglish":
							languageTip.style.display = "block";
							break;
                    }
                }
                e.stopPropagation();
            }

            function doSomething(e) {
                    if (e.target !== e.currentTarget) {
                        if (toMute) {
                            removeMuted();
                        }
                        switch (e.target.id) {
                            case "SpanishEnglish":
                                spanish = !spanish;
                                setLanguage();
                                changeVideo();
                                break;
                            case "PlayPauseBtn":
                                playToggle();
                                break;
                            case "muteBtn":
                                muteToggle();
                                break;
                            case "restartBtn":
                                restartClick();
                                break;
                            case "playerClose":
                            case "htmlClose":
                                closePlayer();
                                break;
                            case "click-to-play":
                            case "spokespersonImage":
                                playClick();
                                break;
                            case "talkingCanvas":
                                if (vidLink !== "" && !document.getElementById("click-to-play")) {
                                    openLink();
                                } else {
                                    playToggle();
                                }
                                break;
                            case "imgLnk":
                            case "Spokesperson":
                            case "videoBtn":
                                iPhonePlay();
                                break;
                            case "talkinghead":
                                if (platform === "iPhone") {
                                    iPhonePlay();
                                } else {
                                    openLink();
                                }
                                break;
                        }
                    }
                    e.stopPropagation();
                }
                // event listener for video ending
            try {
                thplayer.addEventListener("ended", videoEnded, false);
            } catch (err) {}
            try {
                iPhoneVideo.addEventListener("ended", iPhoneEnded, false);
            } catch (err) {}
        }
        //------------------------------------------------------------------------------------------------------------
        //move playerbar    

    function setCss3Style(el, prop, val) {
        for (var i = 0, l = vendors.length; i < l; i++) {
            el.style[toCamelCase(vendors[i] + prop)] = val;
        }
    }

    function toCamelCase(str) {
            return str.toLowerCase().replace(/(\-[a-z])/g, function($1) {
                return $1.toUpperCase().replace("-", "");
            });
        }
        //-----------------------------------------------------------------------------------------------------------------------	
        //------------------------------------------------------------------------------------------------------------
        //function for when video Ends

    function videoEnded() {
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

    function playClick() {
            try {
                spokespersonImage.style.display = "none";
            } catch (err) {}
            try {
                document.getElementById("click-to-play").parentNode.removeChild(document.getElementById("click-to-play"));
            } catch (err) {}
            if (isDevice) {
                thplayer.play();
                document.getElementById("PlayPauseBtn").src = buttonPath + "PauseBtn.png";
            } else {
                startPlaying();
            }
        }
        //Play Toggle Functions

    function playToggle() {
            if (thplayer.paused) {
                thplayer.play();
                document.getElementById("PlayPauseBtn").src = buttonPath + "PauseBtn.png";
                document.getElementById("PlayerBar").style.opacity = "1";
            } else {
                document.getElementById("PlayPauseBtn").src = buttonPath + "PlayBtn.png";
                thplayer.pause();
            }
        }
        //Mute Button Functions

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

    function restartClick() {
        thplayer.currentTime = 0;
        document.getElementById("PlayPauseBtn").src = buttonPath + "PauseBtn.png";
        playClick();
        thplayer.play();
    }

    function closePlayer() {
            thplayer.pause();
            clearInterval(playingS);
            try {
                thv.parentNode.removeChild(document.getElementById("wthvideo"));
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
        startBtn.style.zIndex = 100;
        startBtn.style.width = setWidth + "px";
        startBtn.style.left = (width - setWidth) / 2 + "px";
        startBtn.style.bottom = "30px";
        startBtn.style.cursor = "pointer";
        startBtn.style.position = "absolute";
        if (isDevice) {
            thv.appendChild(startBtn);
        } else {
            if (toMute) {
                thv.appendChild(startBtn);
            } else {
                spokespersonImage.appendChild(startBtn);
            }
        }
        clickImage = document.getElementById("click-to-play");
    }

    function iPhoneCreate() {
        imgLink = document.createElement("div");
        imgLink.style.width = iPhoneWidth + "px";
        imgLink.style.cursor = "pointer";
        imgLink.id = "imgLnk";
        imgLink.style.left = (width - iPhoneWidth) / 2 + "px";
        imgLink.style.top = "0px";
        iPhoneVideo = document.createElement("VIDEO");
        iPhoneVideo.id = "talkinghead";
        iPhoneVideo.src = hVideo;
        iPhoneVideo.style.width = iPhoneWidth + "px";
        iPhoneVideo.style.display = "none";
        iPhoneVideo.style.bottom = "0px";
        iPhoneVideo.style.left = "0px";
        iPhoneVideo.style.width = "0px";
        iPhoneVideo.style.position = "absolute";
        var img = document.createElement("img");
        img.src = actorGif;
        img.id = "Spokesperson";
        img.style.width = iPhoneWidth + "px";
        img.style.position = "absolute";
        var btnImg = document.createElement("img");
        btnImg.id = "videoBtn";
        btnImg.src = hBtn;
        btnImg.style.top = iPhoneWidth / 2 + "px";
        btnImg.style.width = iPhoneWidth + "px";
        btnImg.style.position = "absolute";
        thv.appendChild(imgLink);
        imgLink.appendChild(iPhoneVideo);
        imgLink.appendChild(img);
        imgLink.appendChild(btnImg);
        thplayer = document.getElementById("talkinghead");
    }

    function iPhoneEnded() {
        iPhoneVideo.style.display = "none";
    }

    function iPhonePlay() {
        iPhoneVideo.play();
        iPhoneVideo.style.display = "inherit";
    }

    function openLink() {
        document.getElementById("PlayPauseBtn").src = buttonPath + "PlayBtn.png";
        thplayer.pause();
        window.open(vidLink, openIn);
    }

    function removeMuted() {
        document.getElementById("muteBtn").src = buttonPath + "VolumeBtn.png";
        toMute = false;
        toLoop = false;
        thplayer.muted = false;
        thplayer.loop = false;
        setTimeout(function() {
            restartClick();
        }, 150);
    }

    function setLanguage() {
        if (!isDevice && !spanish) {
            hVideo = path + "/" + canvasVideo + ".mp4";
        }
        if (!isDevice && spanish) {
            hVideo = path + "/" + canvasSpanish + ".mp4";
        }
        if (isDevice && !spanish) {
            hVideo = path + "/" + h264 + ".mp4";
		}
        if (isDevice && spanish) {
                hVideo = path + "/" + h364Spanish + ".mp4";
        }
    }

    function changeVideo() {
        if (spanish) {
            LanguageBtn.textContent = "English";
        } else {
            LanguageBtn.textContent = "Español";
        }
        LanguageBtn.appendChild(languageTip);
        console.log(LanguageBtn.textContent);
        setTimeout(function() {
			thplayer.src = hVideo;
            restartClick();
        }, 150);
    }
}