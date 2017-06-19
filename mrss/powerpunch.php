<?php
		if (file_exists('powerpunch.rss')){
		unlink('powerpunch.rss');
		}

$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Animation Videos</title>
	<link>http://www.websitetalkingheads.com/videopresentations/power_punch_videos.php</link>
	<description>15-30 Second Sales Videos with Punch!  Need a quick sales message for video advertising, your website, YouTube, or video SEO?</description>
	<image>
    	<url>http://websitetalkingheads.com/images/WTH-logo.png</url>
    	<title>WebsiteTalkingHeads.com</title>
    	<link>http://www.websitetalkingheads.com</link>
  </image>
	';
$url = 'http://www.websitetalkingheads.com/videopresentations/includes/examples-power.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Power Punch Video - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/videopresentations/power_punch_videos.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our Power Punch Videos.  15-30 Second Sales Videos with Punch!</description>
	<media:title>'.$video.'</media:title>
	<media:description>'.$video.' is an example of our Power Punch Videos.  15-30 Second Sales Videos with Punch!</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}

$xml_text .= '</channel>
</rss>';


//get a handler for the file

$file_handler = fopen("powerpunch.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);

?>
