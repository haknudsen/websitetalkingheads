<?
$directory = $_POST['directory'];
$numberofvideos = $_POST['numberofvideos'];
$numberofimages = $_POST['numberofimages'];
$mp4 = $_POST['mp4'];
$mp4Canvas = $_POST['MP4Canvas'];
$gif = $_POST['gif'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create javascripts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="http://www.websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/create-files.css" rel="stylesheet" type="text/css" />
</head>
<body>
<section class="page-header">
  <h1>Set Player Variables</h1>
</section>
<section class="black create-files wide" >
  <form id="form1" name="form1" method="post" action="createjavascripts2.php">
    <div class="row five-down">
      <div class="col-md-2">Url</div>
      <div class="col-md-9">
        <input name="website" type='text' id='website-js' value="www.websitetalkingheads.com/contact3.php">
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Responsive</div>
      <div class="col-md-9">
        <input name="responsive" type="radio" id="responsive" checked="checked" value="no"/>
        <strong>no</strong>: Doesn't put player inside a div tag(default) </div>
      <div class="col-md-9 col-md-offset-2">
        <input name="responsive" type="radio" id="responsive"  value="yes" />
        <strong>yes</strong>: Puts player inside a div tag</div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Width</div>
      <div class="col-md-9">
        <input name="Width" type="text" id="Width" value="320" />
        <strong>Defaults: 1/2 body is 320 full and 3/4 body is 200</strong></div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Height</div>
      <div class="col-md-9">
        <input name="Height" type="text" id="Height" value="320" />
        <strong>Defaults:  1/2 body is 320 full and 3/4 body is 384</strong></div>
    </div>
    <br/>
    <div class="row five-down">
      <div class="col-md-2">Image Width</div>
      <div class="col-md-9">
        <input name="imgWidth" type="text" id="imgWidth" value="320" />
        width of the image on iPhones</div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Position</div>
      <div class="col-md-9">
        <div class="row five-down">
          <div class="col-md-2">
            <label>
              <input name="Position" type="radio" id="Position_0" value="fixed" checked="checked" />
              Fixed </label>
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="Position" value="absolute" id="Position_1" />
              Absolute</label>
          </div>
          <div class="col-md-9"><strong>Fixed</strong> is stuck in place on screen, <strong>Absolute</strong> stuck on the page.</div>
        </div>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Left</div>
      <div class="col-md-9">
        <input name="Left" type="text" id="Left" value="auto" />
        <strong>Remember do not add px at the end of numbers.</strong></div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Right</div>
      <div class="col-md-9">
        <label>
          <input name="Right" type="text" id="Right" value="0" />
        </label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Top </div>
      <div class="col-md-9">
        <label>
          <input name="Top" type="text" id="Top" value="auto" />
        </label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Bottom</div>
      <div class="col-md-9">
        <label>
          <input name="Bottom" type="text" id="Bottom" value="0" />
        </label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Centeroffset</div>
      <div class="col-md-9">
        <label>
          <input name="Centeroffset" type="text" id="Centeroffset" value="auto" />
          <strong>This is to offset video from the center if used set left to 50%(exact center would be negative 128 for full or 3/4 body or 160 for 1/2</strong></label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Color</div>
      <div class="col-md-9">
        <label>
          <input name="Color" type="text" id="Color" value="rgba(255,255,255,0.6)" />
          <strong>Sets color of controlbar</strong></label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Volume</div>
      <div class="col-md-9">
        <label>
          <input name="Volume" type="text" id="Volume" value="0.8" maxlength="3" />
          <strong> Rarely changed</strong></label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Autostart</div>
      <div class="col-md-9">
        <div class="row five-down">
          <div class="col-md-9">
            <label>
              <input name="Autostart" type="radio" id="Autostart" value="yes" checked="checked" />
              Yes</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Autostart" value="no" id="Autostart" />
              No</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Autostart" value="mute" id="Autostart" />
              Mute</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Autostart" value="oncethenpic" id="Autostart" />
              Oncethenpic</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Autostart" value="oncethenmute" id="Autostart" />
              Oncethenmute</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Autostart" value="onceonlythenpic" id="Autostart" />
              Onceonlythenpic</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Autostart" value="onceonlythenmute" id="Autostart" />
              Onceonlythenmute</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Autostart" value="loop" id="Autostart" />
              loop</label>
          </div>
        </div>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Delay</div>
      <div class="col-md-9">
        <label>
          <input name="Delay" type="text" id="Delay" value="0" />
          <strong>Delay start</strong></label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Controlbar</div>
      <div class="col-md-9">
        <div class="col-md-9">
          <label>
            <input type="radio" name="Controlbar" id="Controlbar" value="mouse" checked="checked" />
            mouse</label>
        </div>
        <div class="col-md-9">
          <label>
            <input type="radio" name="Controlbar" id="controlbar2" value="yes" />
            yes</label>
        </div>
        <div class="col-md-9">
          <label>
            <input type="radio" name="Controlbar" id="controlbar3" value="no" />
            no <strong>-defins when the controlbar is visible</strong></label>
        </div>
        </label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Exitbtn</div>
      <div class="col-md-9">
        <div class="row five-down">
          <div class="col-md-9">
            <label>
              <input type="radio" name="Exitbtn" id="Exitbtn" value="yes" checked="checked"/>
              <strong>Yes</strong> - Show or don't show</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Exitbtn" id="Exitbtn" value="no"/>
              <strong>No</strong></label>
          </div>
        </div>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Playbtn</div>
      <div class="col-md-9">PlayVideo.png</div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Exitoncomplete</div>
      <div class="col-md-9">
        <div class="row five-down">
          <div class="col-md-9">
            <label>
              <input name="Exitoncomplete" type="radio" id="Exitoncomplete" value="yes" checked="checked" />
              Yes</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Exitoncomplete" value="no" id="Exitoncomplete_1" />
              No - <strong>Does player close when video ends?</strong></label>
          </div>
        </div>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Once per session</div>
      <div class="col-md-9">
        <div class="row five-down">
          <div class="col-md-9">
            <label>
              <input name="Oncepersession" type="radio" id="Oncepersession" value="yes" />
              Yes</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Oncepersession" value="no" id="Exitoncomplete_2" checked="checked" />
              No</label>
          </div>
          <div class="col-md-9">
            <label>
              <input type="radio" name="Oncepersession" value="onceonly" id="Exitoncomplete_2"  />
              onceonly- <strong>How many times will video play?</strong></label>
          </div>
        </div>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Vidlink</div>
      <div class="col-md-9">
        <label>
          <input name="Vidlink" type="text" id="Vidlink" value="no" size="75" />
          <strong>-if player used as link this is url that will be opened</strong></label>
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Openin</div>
      <div class="col-md-2">
        <label>
          <input name="Openin" type="radio" id="Openin_0" value="_blank" checked="checked" />
          _blank</label>
      </div>
      <div class="col-md-2">
        <label>
          <input type="radio" name="Openin" value="_self" id="Openin_1" />
          _self</label>
      </div>
      <div class="col-md-6"><strong> if player used as link this tells it to open in same page or a new one.</strong> </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">
        <label>Path</label>
      </div>
      <div class="col-md-9">
        <input name="Pathtovid" type="text" id="Pathtovid" value="wthvideo" size="75" />
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">GIF</div>
      <div class="col-md-9">
        <input type="text" name="gif" value="<?=$gif[0]?>" id="poster" size="75" disabled="disabled" />
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Mp4 Device</div>
      <div class="col-md-9">
        <input type="text" name="Mp4def" value="<?=$mp4[0]?>" id="Mp4def" size="75" disabled="disabled" />
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-2">Mp4-Canvas</div>
      <div class="col-md-9">
        <input type="text" name="mp4Canvas" value="<?=$mp4Canvas[0]?>" id="mp4Canvas" size="75" disabled="disabled" />
      </div>
    </div>
    <div class="row height-padding" align="center">
      <button name="submit" class="btn btn-primary" id="Submit" ">Submit</button>
    </div>
    <input name="directory" type="hidden" value="<? echo $directory; ?>"id="directory"/>
    <input name="numberofvideos" type="hidden" id="numberofvideos" value="<? echo $numberofvideos; ?>" />
    <input name="numberofimages" type="hidden" id="numberofimages" value="<? echo $numberofimages; ?>" />
    <? var_dump($_POST);
for ($j = 0; $j < $numberofvideos; $j++) {
	echo '<input name="mp4[]" id="mp4[]" type="hidden" value="' . $mp4[$j] . '" />';
		echo '<br />';
	echo '<input name="mp4Canvas[]" mp4Canvas="mp4[]" type="hidden" value="' .$mp4Canvas[$j] . '" />';
		echo '<br />';
	echo '<input name="gif[]" id="gif[]" type="hidden" value="' . $gif[$j] . '" />';
		echo '<br />';
}
?>
  </form>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
<script>
  $('#Width').keyup("change", (function(){   
    $('#imgWidth').val($('#Width').val());    
  	console.log( $('#Width').val());         
    }))
</script>
</body>
</html>