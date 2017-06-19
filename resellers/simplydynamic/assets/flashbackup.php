<?php

// displays all the file nodes
if(!$xml=simplexml_load_file('data.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
};
echo '<div id="MyCarousel">';
$i=0;
foreach ($xml as $actor){
	if($i>4){
	$imgstr= $actor->img;
	$target = substr($imgstr,0,-4);
	$holder ="'";
	$actor = $holder.$target.$holder;

	echo '<div id="ipadimage"><a href="#" onClick="showVideo('.$actor.')"><img src="http://www.websitetalkingheads.com/resellerdemos/carimages/'.$target.'.png" width="160" height="180" id="'.$target.'" alt="'.$target.'" title="'.$target.'" ></a>';
	echo PHP_EOL;
	echo '<div class="ipadimage-text"><a href="#" onClick="showVideo('.$actor.')">'.$target.'</a></div>';
	echo PHP_EOL;
	echo '</div>';
	echo PHP_EOL;
	}	
	$i++;
}
echo '</div>';
echo '<div class="c"></div>';
?>