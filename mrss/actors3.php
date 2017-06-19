<?php
		if (file_exists('actors3.rss')){
		unlink('actors3.rss');
		}

$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Website Talking Heads Video Spokespeople 3</title>
	<link>http://websitetalkingheads.com/actors/female-carousel2.php</link>
	<description>No matter what term you wish to use – Video Spokesperson, Virtual Spokesperson, Website Spokesperson, Web Spokesperson, Spokesmodel, Walk On Actor, Virtual Actor, Person on Website, Online Spokesperson.  We have the BEST in the business.  We pride ourselves on our high quality and successful spokespeople. Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE</description>
';
$url = 'http://websitetalkingheads.com/actors/femaleactors2.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
$xml_text .= '	<item>
		<title> '.$actor.'</title>
		<link>http://websitetalkingheads.com/actors/female-carousel2.php</link>
		<description>This is '.$actor.', one of our Professional Spokespeople</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$actor.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$actor.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
';
}
$xml_text .= '</channel>
</rss>';


//get a handler for the file

$file_handler = fopen("actors3.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);

?>
