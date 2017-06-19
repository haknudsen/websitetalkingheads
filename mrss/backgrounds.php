<?php
		if (file_exists('animation.rss')){
		unlink('animation.rss');
		}

$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Animation Videos</title>
	<link>http://www.websitetalkingheads.com/videopresentations/animation.php</link>
	<description>Check out our — Animation Videos.  Do you have a product, service or procedure that you need to explain to lots people?  Animation is a great way to Show your Product or Service.</description>
	';
$url = 'http://www.websitetalkingheads.com/videopresentations/includes/examples-animation.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Animation Video - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/videopresentations/animation.php</link>
	<description>'.$video.' is an example of our Animation Videos.</description>
	<media:title>Website Talking Heads: Healthy Choices Animation</media:title>
	<media:description>This is an example of our Animation Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}

$xml_text .= '</channel>
</rss>';


//get a handler for the file

$file_handler = fopen("animation.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);

?>
