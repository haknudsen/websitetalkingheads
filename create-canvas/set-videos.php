<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Canvas- Set Videos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="http://www.websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/create-files.css" rel="stylesheet" type="text/css" />
<?php  $directory = $_POST['directory'];
$numberofvideos = $_POST['numberofvideos']; 
?>
</head>
<body>
<section class="page-header">
  <h1>Set Videos</h1>
</section>
<section class="create-files thin">
  <div class="padding-ten">
    <h2 class="text-left">Directory:
      <?=$directory?>
    </h2>
    <h2 class="text-left">Videos:
      <?=$numberofvideos?>
    </h2>
  </div>
</section>
<?php
  $holder = $f = $m = $p = $j = $g = 0;
$dir = $directory . '/wthvideo';
$files = scandir($dir, 0);
for($i = 2; $i < count($files); $i++){
	$fileType = substr($files[$i], strrpos($files[$i], '.') + 1);
	switch ($fileType) {
     case "mp4":
         $mp4[$m]= $files[$i];
		 $m=$m+1;
         break;
     case "gif":
         $gif[$j]= $files[$i];
		 $g=$g+1;
         break;
     default:
         
 } 
		
}
?>
<section class="create-files create-holder">
<form class="form-horizontal padding-ten"  method="post" action="createjavascripts.php">
  <fieldset>
    <!-- Form Name -->
    <input name="directory" type="hidden" value="<?=$directory?>" id="directory" />
    <input name="numberofvideos" type="hidden" value="<?=$numberofvideos?>" id="numberofvideos" />
    <input name="numberofimages" type="hidden" value="<?=$numberofvideos?>" id="numberofimages"/>
    <?php
		for ($i = 0; $i <= $numberofvideos-1; $i++) {
		echo '<br />';
		echo '<h2>Video';
		echo $i+1;
		echo '</h2>';
		echo '<br />';
		echo '<div class="row pull-right">';
		echo '<label>MP4 Canvas: ';
		echo '<select name="MP4Canvas['. $i .']">';
		// for each value of the array assign a variable name word
		FOREACH($mp4 AS $word){
    	echo'<option value="'.$word.'">'.$word.'</option>';
}
		echo'</select>';
		echo'</div>';
		echo'<br />';
		echo '<div class="row pull-right">';
		echo '<label>MP4 Device: ';
		echo '<select name="mp4['. $i .']">';
		// for each value of the array assign a variable name word
		FOREACH($mp4 AS $word){
    	echo'<option value="'.$word.'">'.$word.'</option>';
}
		echo'</select>';
		echo'</div>';
		echo'<br />';
		echo '<div class="row pull-right">';
		echo '<label>GIF: ';
		echo '<select name="gif['. $i .']">';
		// for each value of the array assign a variable name word
		FOREACH($gif AS $word){
    	echo'<option value="'.$word.'">'.$word.'</option>';
}
		echo'</select>';
		echo'</div>';
		echo'<br />';
		echo'<div class="clearfix"></div>';
	} 
	?>
    <!-- Button -->
    <div class="form-group">
      <div align="center" class="height-padding">
        <button name="continue" class="btn btn-primary" id="continue">Continue</button>
      </div>
    </div>
  </fieldset>
</form>
</section>
</body>
</html>
