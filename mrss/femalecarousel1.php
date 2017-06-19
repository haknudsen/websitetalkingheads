
<?php
$url = 'http://websitetalkingheads.com/actors/femaleactors.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
echo '<item>';
echo PHP_EOL;
echo '<title>'.$actor.' - Video Spokesperson</title>';
echo PHP_EOL;
echo '<description>This is '.$actor.', one of our Video Spokespeople</description>';
echo PHP_EOL;
echo '<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$actor.'.png" height="160" width="178"/>';
echo PHP_EOL;
echo '<media:content url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" medium="video" type="video/mp4" height="540" width="360">';
echo PHP_EOL;
echo '<media:description>This is '.$actor.'.  Professional Video Spokesperson</media:description>';
echo PHP_EOL;
echo '</media:content>';
echo PHP_EOL;
echo '</item>';
echo PHP_EOL;
}

?>

<div id="c"></div>
