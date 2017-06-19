<?php
$url = 'http://websitetalkingheads.com/actors/actors-female.xml';
$xmlObject = simplexml_load_file($url);



$node = $xmlObject->children();

foreach($node as $string){
	echo $string;
	echo '<div id="ipadimages"><a rel="vidbox 540 360" title="'.$string.'" href="http://www.websitetalkingheads.com/videos/'.$string.'.mp4"><img src="../carimages/'.$string.'.png" width="160" height="180" id='.$string.' alt='.$string.' ></a>'.$string.'</div>';
}

echo PHP_EOL;
 echo "\n";
?>

