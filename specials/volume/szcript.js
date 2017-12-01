//length: how many bars
//height: height of the tallest bar
//nowselected: which bar is selected
function drawvolumecontroller(length,height,nowselected){	
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
function volumecontrolchanged(newvolume){
	drawvolumecontroller(14,30,newvolume);
	console.log(newvolume);
}
