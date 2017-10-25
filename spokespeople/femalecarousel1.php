
<?php
$url = 'femaleactors.xml';
$xml = simplexml_load_file($url);
echo '<div class="row center-block">';
echo PHP_EOL;
foreach($xml as $item){
	$actor=$item['caption'];
echo '<div class="col-sm-3 center-block text-center">';
echo PHP_EOL;
echo '<a   href="http://www.websitetalkingheads.com/videos/'.$actor.'.mp4?"  target="_blank">';
echo PHP_EOL;
echo '<div class="thumb-wrapper">';
echo PHP_EOL;
echo '<div class="overlay-small"></div>';
echo PHP_EOL;
echo PHP_EOL;
echo '<img src="../carimages/'.$actor.'.png" id="'.$actor.'" alt="'.$actor.'" title="'.$actor.'" ></div></a>';
echo PHP_EOL;
echo '<h3><a class="ipadimages" href="http://www.websitetalkingheads.com/videos/'.$actor.'.mp4"  target="_blank">'.$actor.'</div></a></h3>';
echo PHP_EOL;
}
echo '</div>';
echo '<div id="c"></div>';
echo PHP_EOL;
?>