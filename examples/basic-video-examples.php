<?php
// displays all the file nodes
if(!$xml=simplexml_load_file('https://www.websitetalkingheads.com/videopresentations/includes/examples-basic.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
}
echo '<div class="example-column">';
$x=1;
foreach($xml as $example){
$target = $example->target;
$image = $example->image;
$altimage = strtok($image,".");

echo '<div class="example-holder">';
echo PHP_EOL;
echo '<a class="lightbox" title="'.$video.'" href="https://www.youtube.com/watch?v='.$target.'&rel=0&autoplay=1&hd=1"><img src="https://img.youtube.com/vi/'.$target.'/mqdefault.jpg" width="193" height"108" id=".$altimage." alt="Custom Video Presentation Example - .$example->name. " ></a>';
echo PHP_EOL;
echo '<h3 id="example-text"><a class="lightbox" title="'.$video.'" href="https://www.youtube.com/watch?v='.$target.'&rel=0&autoplay=1&hd=1">'.str_replace("'", "", $example->name).'</a></h3>';
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;
$x=$x+1;
if($x==7){
		break;
	}
}
echo PHP_EOL;
echo '</div>';
echo '<div class="c"></div>';
?>
