function createdisplay(){
	"use strict";
    var 
		data = "femaleactors2.xml",
		iDiv = document.createElement("div"),
        jDiv = document.createElement("div"),
		hDiv = document.createElement("div"),
        nav = navigator.mimeTypes["application/x-shockwave-flash"],
		markUp = "";
        iDiv.id = "embed-wrapper";
        iDiv.className = "embed-wrapper";
        iDiv.style.width = "100%";
        iDiv.style.maxWidth = "1024px";
		document.getElementById("holder").appendChild(iDiv);
    if (nav === undefined || nav === "[object MimeType]") {
        hDiv.id = "htmlDisplay";
        hDiv.className = "center-block text-center";
		hDiv.style.marginTop = "20px";
		iDiv.appendChild(hDiv);
		$.get("femalecarousel2.php", function(data) {
  		$("#htmlDisplay").html(data);
});
		hDiv.innerHTML = markUp;
		
    }else{
        jDiv.id = "arve-embed-container";
        jDiv.className = "arve-embed-container";
		iDiv.appendChild(jDiv);
        markUp +=  '  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="400" id="FlashID" title="Spokesperson Carousel">';
        markUp +=  '  <param name="movie" value="carousel.swf" />';
        markUp +=  '  <param name="quality" value="high" />';
        markUp +=  '  <param name="wmode" value="opaque" />';
        markUp +=  '  <param name="swfversion" value="9.0.45.0" />';
        markUp +=  '  <!--[if !IE]>-->';
        markUp +=  '  <object type="application/x-shockwave-flash" data="carousel.swf" width="100%" height="400">';
        markUp +=  '  <!--<![endif]-->';
        markUp +=  '  <param name="quality" value="high" />';
        markUp +=  '  <param name="FlashVars" value="xml=' + data + '"/>';
        markUp +=  '  <param name="wmode" value="opaque" />';
        markUp +=  '  <param name="swfversion" value="9.0.45.0" />';
        markUp +=  '  <param name="expressinstall" value="../Scripts/expressInstall.swf" />';
        markUp +=  '  </object>';
        markUp +=  '  <!--[if !IE]>-->';
        markUp +=  '  </object>';
        markUp +=  '  <!--<![endif]-->';
        jDiv.innerHTML = markUp;
	}
}
	createdisplay();