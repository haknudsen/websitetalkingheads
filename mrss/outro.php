<?php
		if (file_exists('outro.rss')){
		unlink('outro.rss');
		}

$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>YouTube Outros</title>
	<link>http://websitetalkingheads.com/youtube-outros/</link>
	<description>Take a look at the outros we can create for your YouTube channel.  Drive more traffic to your channel and website with a YouTube outro.</description>
	<image>
    	<url>http://websitetalkingheads.com/images/WTH-logo.png</url>
    	<title>WebsiteTalkingHeads.com YouTube Outros</title>
    	<link>http://www.websitetalkingheads.com</link>
  </image>
	';
$url = 'http://websitetalkingheads.com/youtube-outros/includes/examples-outros.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Custom Video - '.$video.'</title>
	<link>http://websitetalkingheads.com/youtube-outros/</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our YouTube outros.</description>
	<media:title>'.$video.'</media:title>
	<media:description>'.$video.' is another example of our YouTube outros.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}

$xml_text .= '</channel>
</rss>';


//get a handler for the file

$file_handler = fopen("outro.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);

?>
