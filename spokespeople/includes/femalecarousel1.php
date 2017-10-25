
<?php
$url = 'http://websitetalkingheads.com/spokespeople/femaleactors.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
echo '<ul>';
echo PHP_EOL;
echo '<li data-type="iframe" data-url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" type="video/mp4" data-target="_blank"></li>';
echo PHP_EOL;
echo '<li data-thumbnail-path="http://websitetalkingheads.com/carimages/'.$actor.'.png"></li>';
echo PHP_EOL;
echo '<li data-thumbnail-text="" data-thumbnail-text-title-offset="35" data-thumbnail-text-offset-top="10" data-thumbnail-text-offset-bottom="7">';
echo PHP_EOL;
echo PHP_EOL;
echo '<h3 class="no-margin">'.$actor.'</h3>';
echo PHP_EOL;
echo '</li>';
echo PHP_EOL;
echo '<li data-html-content="">';
echo PHP_EOL;
echo '<div class="thumb2Div">';
echo PHP_EOL;
echo '<video contols poster="http://websitetalkingheads.com/carimages/'.$actor.'.png">';
echo PHP_EOL;
echo '<source src="http://websitetalkingheads.com/videos/'.$actor.'.mp4" type="video/mp4">';
echo PHP_EOL;
echo '</video>';
echo PHP_EOL;
echo '</ul>';
echo PHP_EOL;
}
$url = 'http://websitetalkingheads.com/spokespeople/femaleactors2.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
echo '<ul>';
echo PHP_EOL;
echo '<li data-type="iframe" data-url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" type="video/mp4" data-target="_blank"></li>';
echo PHP_EOL;
echo '<li data-thumbnail-path="http://websitetalkingheads.com/carimages/'.$actor.'.png"></li>';
echo PHP_EOL;
echo '<li data-thumbnail-text="" data-thumbnail-text-title-offset="35" data-thumbnail-text-offset-top="10" data-thumbnail-text-offset-bottom="7">';
echo PHP_EOL;
echo PHP_EOL;
echo '<h3 class="no-margin">'.$actor.'</h3>';
echo PHP_EOL;
echo '</li>';
echo PHP_EOL;
echo '<li data-html-content="">';
echo PHP_EOL;
echo '<div class="thumb2Div">';
echo PHP_EOL;
echo '<video contols poster="http://websitetalkingheads.com/carimages/'.$actor.'.png">';
echo PHP_EOL;
echo '<source src="http://websitetalkingheads.com/videos/'.$actor.'.mp4" type="video/mp4">';
echo PHP_EOL;
echo '</video>';
echo PHP_EOL;
echo '</ul>';
echo PHP_EOL;
}
?>