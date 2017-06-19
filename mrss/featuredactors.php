<?php
	$url = 'http://websitetalkingheads.com/featuredactor/featuredactor.xml';
	$xml = simplexml_load_file($url);
	$male = $xml->male;
	$female =$xml->female;
	$newdate = $xml->newdate;
		if (file_exists('featuredactors.rss')){
		unlink('featuredactors.rss');
		}
$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Website Talking Heads Featured Actors</title>
	<link>http://www.websitetalkingheads.com/specials/</link>
	<description>Here are our Featured Actors ending '.$newdate.'.  Check out our specials at http://www.websitetalkingheads.com/specials/</description>
	<image>
    	<url>http://websitetalkingheads.com/images/WTH-logo.png</url>
    	<title>WebsiteTalkingHeads.com</title>
    	<link>http://www.websitetalkingheads.com</link>
  </image>
	<item>
		<title> '.$female.'</title>
		<link>http://www.websitetalkingheads.com/specials/</link>
		<description><![CDATA[<img src="http://websitetalkingheads.com/carimages/'.$female.'.png" />]]>'.$female.' - Featured Actor until '.$newdate.'.</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$female.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$female.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$female.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
	<item>
		<title> '.$male.'</title>
		<link>http://www.websitetalkingheads.com/specials/</link>
		<description><![CDATA[<img src="http://websitetalkingheads.com/carimages/'.$male.'.png" />]]>'.$male.' - Featured Actor until '.$newdate.'.</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$male.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$male.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$male.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
</channel>
</rss>';
//get a handler for the file
$file_handler = fopen("../mrss/featuredactors.rss", 'a');
//write the XML
fwrite($file_handler, $xml_text);
//close the file handler
fclose($file_handler);
?>
