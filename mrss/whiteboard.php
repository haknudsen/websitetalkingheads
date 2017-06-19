<?php
		if (file_exists('whiteboard.rss')){
		unlink('whiteboard.rss');
		}

$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Whiteboard Videos</title>
	<link>http://www.websitetalkingheads.com/whiteboard/index.php</link>
	<image>
    	<url>http://websitetalkingheads.com/images/WTH-logo.png</url>
    	<title>WebsiteTalkingHeads.com</title>
    	<link>http://www.websitetalkingheads.com</link>
  </image>
	<description>Check out our — Animation Videos.  Do you have a product, service or procedure that you need to explain to lots people?  Animation is a great way to Show your Product or Service.</description>
	';
$url = 'http://www.websitetalkingheads.com/videopresentations/includes/examples-whiteboard.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$thumb = "http://img.youtube.com/vi/'.$target.'/mqdefault.jpg";
$xml_text .= '<item>
	<title>'.$video.' - Whiteboard Video</title>
	<link>http://www.websitetalkingheads.com/whiteboard/index.php</link>
	<description xml:space="preserve">
		<![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>
		<![CDATA[
		'.$video.' is an example of our Whiteboard Videos.]]>
	</description>
	<media:title>'.$video.'</media:title>
	<media:description>'.$video.' is an example of our Whiteboard Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}

$xml_text .= '</channel>
</rss>';


//get a handler for the file

$file_handler = fopen("whiteboard.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);

?>
