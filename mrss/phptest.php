<?php
		if (file_exists('actortest.rss')){
		unlink('actortest.rss');
		}

$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Website Talking Heads Video Spokespeople 1</title>
	<link>http://websitetalkingheads.com/actors/female-carousel.php</link>
	<description>Introduction Videos for our Videospokespeople</description>
';
$url = 'http://websitetalkingheads.com/actors/femaleactors.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
$xml_text .= '	<item>
		<title>Website Talking Heads: '.$actor.'</title>
		<link>http://websitetalkingheads.com/actors/female-carousel.php</link>
		<description>This is '.$actor.', one of our Video Spokespeople</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$actor.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$actor.' as your Website Spokesperson</media:description>
		</media:content>
	</item>';
}
$xml_text .= '</channel>
</rss>';


//get a handler for the file

$file_handler = fopen("actortest.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);

?>
