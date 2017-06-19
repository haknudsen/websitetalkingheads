<div id="ipadpage">
<?php
$url = 'http://websitetalkingheads.com/actors/carousel4.xml';
$xml = simplexml_load_file($url);
foreach($xml as $actor){

echo '<div id="ipadimages"><a href="http://www.websitetalkingheads.com/actors/catching.php?name='.$actor.'"><img src="../carimages/'.$actor.'.png" width="160" height="180" id='.$actor.' alt='.$actor.' ></a>'.$actor.'</div>';
}

?>
</div>
<div id="c"></div>