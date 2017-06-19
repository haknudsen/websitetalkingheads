<?php
$url = 'http://websitetalkingheads.com/actors/actors-female.xml';
$xml = simplexml_load_file($url);
echo '<div id="ipadimages">';
foreach($xml as $actor){

echo '<a href="../videos/'.$actor.'.mp4"><img src="../carimages/'.$actor.'.png" width="160" height="180" id='.$actor.' alt='.$actor.' ></a>'.$actor;
}

echo '</div>';
?>
<div id="c"></div>