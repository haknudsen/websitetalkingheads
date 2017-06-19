<?php
		if (file_exists('custom.rss')){
		unlink('custom.rss');
		}

$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Custom Videos</title>
	<link>http://www.websitetalkingheads.com/videopresentations/custompresentations.php</link>
	<description>Check out our — Custom Video Presentations.  Our Custom Video Presentations use images, video, sound, text and a professional video spokesperson. We can create a Video Presentation that is a Product Demonstration, a Website Walk-through, Informational, Training or Sales Video. We put it all together and provide you a Full HD 1920X1080 video in MP4 format suitable to upload to YouTube, Vimeo, Facebook.Twitter, Instagram, Dailymotion, Vevo, Metacafe, Flickr, whatever video service you like.</description>
	<image>
    	<url>http://websitetalkingheads.com/images/WTH-logo.png</url>
    	<title>WebsiteTalkingHeads.com</title>
    	<link>http://www.websitetalkingheads.com</link>
  </image>
	';
$url = 'http://www.websitetalkingheads.com/videopresentations/vpexamples.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Custom Video - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/videopresentations/custompresentations.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our Custom Videos.</description>
	<media:title>'.$video.'</media:title>
	<media:description>'.$video.' is an example of our Custom Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}

$xml_text .= '</channel>
</rss>';


//get a handler for the file

$file_handler = fopen("custom.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);

?>
