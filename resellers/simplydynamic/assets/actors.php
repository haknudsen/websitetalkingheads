<?php
// displays all the file nodes
if(!$xml=simplexml_load_file('data.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
}
$i=0;
foreach ($xml as $actor){
	if($i>4){
	$imgstr= $actor->img;
	$actor = substr($imgstr,0,-4);
echo '<div class="col-sm-2 actor animated hiding" data-animation="fadeInDown">';
echo PHP_EOL;
echo '<a href="http://websitetalkingheads.com/videos/'.$actor.'.mp4?lightbox[iframe]=true&lightbox[width]=540&lightbox[height]=360" class="lightbox" title="'.$actor.' - Video Spokesperson">';
echo PHP_EOL;
echo '<div class="thumb-wrapper">';
echo PHP_EOL;
echo '<div class="overlay-small img-circle"></div>';
echo PHP_EOL;
echo '<img src="http://websitetalkingheads.com/resellerdemos/carimages/'.$actor.'.png" class="img-responsive" alt="'.$actor.' - Video Spokesperson" width="320" height="320"/></div></a>';
echo PHP_EOL;
echo '<h3 class="highlight"><a href="http://websitetalkingheads.com/resellerdemos/videos/'.$actor.'.mp4?lightbox[iframe]=true&lightbox[width]=540&lightbox[height]=360" class="lightbox" title="'.$actor.' - Video Spokesperson">'.$actor.' </a></h3>';
echo PHP_EOL;
echo '</div>';
	}
	$i++;
}
?>