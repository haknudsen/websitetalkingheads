<?php

		if (file_exists('wthvideo.rss')){
		unlink('wthvideo.rss');
		}

$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Website Talking Heads Video Sitemap</title>
	<link>http://websitetalkingheads.com/spokespeople/female-carousel.php</link>
	<description>No matter what term you wish to use – Video Spokesperson, Virtual Spokesperson, Website Spokesperson, Web Spokesperson, Spokesmodel, Walk On Actor, Virtual Actor, Person on Website, Online Spokesperson.  We have the BEST in the business.  We pride ourselves on our high quality and successful spokespeople. Our videos are all shot and built here at our headquarters to maintain quality and precision. We do not outsource our filming to any other studios. It is all filmed HERE</description>
	<image>
    	<url>http://websitetalkingheads.com/images/WTH-logo.png</url>
    	<title>WebsiteTalkingHeads.com</title>
    	<link>http://www.websitetalkingheads.com</link>
  </image>
';
	$url = 'http://websitetalkingheads.com/featuredactor/featuredactor.xml';
	$xml = simplexml_load_file($url);
	$male=$xml->male;
	$female=$xml->female;
	$newdate=$xml->newdate;
$xml_text .= '	<item>
		<title>Featured Actor - '.$female.'</title>
		<link>http://www.websitetalkingheads.com/specials/</link>
		<description><![CDATA[<img src="http://websitetalkingheads.com/carimages/'.$female.'.png" />]]>'.$female.' - Featured Actor until '.$newdate.'.</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$female.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$female.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$female.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
	<item>
		<title>Featured Actor - '.$male.'</title>
		<link>http://www.websitetalkingheads.com/specials/</link>
		<description><![CDATA[<img src="http://websitetalkingheads.com/carimages/'.$male.'.png" />]]>'.$male.' - Featured Actor until '.$newdate.'.</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$male.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$male.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$male.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
	';
$url = 'http://www.websitetalkingheads.com/videopresentations/includes/examples-whiteboard.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Whiteboard Video - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/whiteboard/index.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our Whiteboard Videos.</description>
	<media:title>'.$video.' Whiteboard Video</media:title>
	<media:description>'.$video.' is an example of our Whiteboard Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}
$url = 'http://www.websitetalkingheads.com/videopresentations/includes/examples-typography.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Typography Video - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/videopresentations/typography.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our Typography Videos.</description>
	<media:title>'.$video.' - Typography</media:title>
	<media:description>'.$video.' is an example of our Typography Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}
$url = 'http://www.websitetalkingheads.com/videopresentations/includes/examples-templates.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Virtual Set - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/videopresentations/virtualsets.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our Animation Videos.</description>
	<media:title>'.$video.'</media:title>
	<media:description>'.$video.' is an example of our Virtual Set Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}
$url = 'http://www.websitetalkingheads.com/videopresentations/includes/examples-power.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Power Punch Video - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/videopresentations/power_punch_videos.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our Power Punch Videos.  15-30 Second Sales Videos with Punch!</description>
	<media:title>'.$video.' - Power Punch</media:title>
	<media:description>'.$video.' is an example of our Power Punch Videos.  15-30 Second Sales Videos with Punch!</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}
$url = 'http://www.websitetalkingheads.com/videopresentations/vpexamples.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Custom Video - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/videopresentations/custompresentations.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our Custom Videos.</description>
	<media:title>'.$video.' - Custom Video Presentation</media:title>
	<media:description>'.$video.' is an example of our Custom Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}
$url = 'http://www.websitetalkingheads.com/videopresentations/includes/examples-animation.xml';
$xml = simplexml_load_file($url);
foreach($xml as $example){
$target = $example->target;
$video = str_replace("'", "", $example->name);
$xml_text .= '<item>
	<title>Animation Video - '.$video.'</title>
	<link>http://www.websitetalkingheads.com/videopresentations/animation.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$video.' is an example of our Animation Videos.</description>
	<media:title>'.$video.' Animation</media:title>
	<media:description>'.$video.' is an example of our Animation Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
	</media:content>
</item>
';
}
$url = 'http://websitetalkingheads.com/spokespeople/femaleactors.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
$xml_text .= '	<item>
		<title> '.$actor.'</title>
		<link>http://websitetalkingheads.com/spokespeople/female-carousel.php</link>
		<description><![CDATA[<img src="http://websitetalkingheads.com/carimages/'.$actor.'.png" />]]>'.$actor.', one of our Professional Spokespeople</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$actor.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$actor.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
';
}
$url = 'http://websitetalkingheads.com/spokespeople/maleactors.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
$xml_text .= '	<item>
		<title> '.$actor.'</title>
		<link>http://websitetalkingheads.com/spokespeople/male-carousel.php</link>
		<description><![CDATA[<img src="http://websitetalkingheads.com/carimages/'.$actor.'.png" />]]>'.$actor.', one of our Professional Spokespeople</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$actor.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$actor.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
';
}
$url = 'http://websitetalkingheads.com/spokespeople/femaleactors2.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
$xml_text .= '	<item>
		<title> '.$actor.'</title>
		<link>http://websitetalkingheads.com/spokespeople/female-carousel2.php</link>
		<description><![CDATA[<img src="http://websitetalkingheads.com/carimages/'.$actor.'.png" />]]>'.$actor.', one of our Professional Spokespeople</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$actor.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$actor.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
';
}
$url = 'http://websitetalkingheads.com/spokespeople/carousel4.xml';
$xml = simplexml_load_file($url);
foreach($xml as $item){
	$actor=$item['caption'];
$xml_text .= '	<item>
		<title> '.$actor.'</title>
		<link>http://websitetalkingheads.com/spokespeople/carousel4.php</link>
		<description><![CDATA[<img src="http://websitetalkingheads.com/carimages/'.$actor.'.png" />]]>'.$actor.', one of our Professional Spokespeople</description>
		<media:thumbnail url="http://websitetalkingheads.com/carimages/'.$actor.'.png" height="160" width="178"/>
		<media:content url="http://websitetalkingheads.com/videos/'.$actor.'.mp4" medium="video" type="video/mp4" height="540" width="360">
		<media:description>Choose '.$actor.' as your Website Spokesperson</media:description>
		</media:content>
	</item>
';
}
$xml_text .= '	<item> 
		   <title>Rated the Number 1 Video Spokesperson company, Website Talking Heads, Website Spokesperson, virtual spokesperson</title>
			<link>http://www.websitetalkingheads.com/</link>
		   <description><![CDATA[<img src="http://www.websitetalkingheads.com/wthvideo/Chantel-Home-Intro.jpg" />]]>Top Video Spokesperson Review By Website Talking Heads.  See website spokeperson, virtual spokesperson. person on website, and walk on actors.</description>
		   <media:thumbnail url="http://www.websitetalkingheads.com/wthvideo/Chantel-Home-Intro.jpg"/> 
		   <media:description>Top Video Spokesperson Review By Website Talking Heads.  See website spokeperson, virtual spokesperson. person on website, and walk on actors.</media:description>
		   <media:content url="http://www.websitetalkingheads.com/wthvideo/Chantel-Home-Intro.flv">
			</media:content>
	</item>
	<item> 
		   <title>Actor Introducing Examples of Video Spokesperson on a website.  Use a virtual spokesperson to walk on website.</title>
		   <link>http://www.websitetalkingheads.com/examples.php</link>
		   <description><![CDATA[<img src="http://www.websitetalkingheads.com/examples/wthvideo/rennyexamples.png" />]]>Ranking of Video Spokesperson, Website Spokepserson, Virtual Spokesperson or Person on Website.  Website Talking Heads.</description>
		   <media:thumbnail url="http://www.websitetalkingheads.com/examples/wthvideo/rennyexamples.png"/> 
		   <media:description>Ranking of Video Spokesperson, Website Spokepserson, Virtual Spokesperson or Person on Website.  Website Talking Heads.</media:description>
		   <media:content url="http://www.websitetalkingheads.com/examples/wthvideo/rennyexamples.flv">
			</media:content>
	</item>
		  <item> 
		   <title>Examples of Video Spokesperson on a website.  Use a virtual spokesperson to walk on website.</title>
		   <link>http://www.websitetalkingheads.com/prices.php</link>
		   <description><![CDATA[<img src="http://www.websitetalkingheads.com/pricing/wthvideo/juliapricing.png" />]]>Prices for Video Spokesperson, Website Spokepserson, Virtual Spokesperson or Person on Website.  Purchase from Website Talking Heads.</description>
		   <media:thumbnail url="http://www.websitetalkingheads.com/pricing/wthvideo/juliapricinge.png"/> 
		   <title>Lowest Prices for of Video Spokesperson on a website.  Cheap virtual spokesperson to walk on website.</title>
		   <media:description>Prices for Video Spokesperson, Website Spokepserson, Virtual Spokesperson or Person on Website.  Purchase from Website Talking Heads.</media:description>
		   <media:content url="http://www.websitetalkingheads.com/pricing/wthvideo/juliapricing.flv">
			</media:content>
	</item>
	<item> 
		   <title>Review of Interactive Video Spokesperson from Website Talking Heads.  Use a virtual spokeserson to gather info and leads</title>
		   <link>http://websitetalkingheads.com/multiplechoice/index.php</link>
		   <description><![CDATA[<img src="http://www.websitetalkingheads.com/carimages/Jed.png" />]]>Interactive Video Spokesperson, Website Spokepserson, Virtual Spokesperson or Person on Website.  Build leads from Website Talking Heads.</description>
		   <media:thumbnail url="http://www.websitetalkingheads.com/carimages/Jed.png"/> 
		   <media:description>Interactive Video Spokesperson, Website Spokepserson, Virtual Spokesperson or Person on Website.  Build leads from Website Talking Heads.</media:description>
		   <media:content url="http://www.websitetalkingheads.com/multiplechoice/wthvideo/youroptions1.flv">
			</media:content>
	</item>
	<item> 
		   <title>Video Player for Website Talking Heads Video Spokesperson or virtual spokesperson or website spokesperson.</title>
		   <link>http://websitetalkingheads.com/gostopgo/index.php</link>
		   <description><![CDATA[<img src="http://www.websitetalkingheads.com/carimages/Megan.png" />]]>This video player allows for play a brief video then stop and then play a longer video on a click. Video Spokesperson, Website Spokepserson, Virtual Spokesperson or Person on Website. Frequently Asked Questions to Website Talking Heads.</description>
		   <media:thumbnail url="http://www.websitetalkingheads.com/carimages/Megan.png"/> 
		   <media:description>This video player allows for play a brief video then stop and then play a longer video on a click. Video Spokesperson, Website Spokepserson, Virtual Spokesperson or Person on Website. Frequently Asked Questions to Website Talking Heads.</media:description>
		   <media:content url="http://www.websitetalkingheads.com/gostopgo/wthvideo/megangostopgo2785.flv">
			</media:content>
	</item>
	<item> 
		   <title>Our Spanish/English Player</title>
		   <link>http://www.websitetalkingheads.com/Spanish-New/index.php</link>
		   <description><![CDATA[<img src="http://websitetalkingheads.com/spanish/wthvideo/Maria.png" />]]>Spanish and English Video Spokesperson actors for a Person on your web site or walk on actor to be on your website.</description>
		   <media:thumbnail url="http://websitetalkingheads.com/spanish/wthvideo/Maria.png"/> 
		   <media:description>Spanish and English Video Spokesperson actors for a Person on your web site or walk on actor to be on your website.</media:description>
		   <media:content url="http://websitetalkingheads.com/spanish/wthvideo/MariaEnglish320.flv">
			 </media:content>
	</item>
	<item> 
		   <title>Our Multiple Video Player</title>
		   <link>http://websitetalkingheads.com/mvp/</link>
		   <description><![CDATA[<img src="http://websitetalkingheads.com/mvp/wthvideo/leannafull.png" />]]>Our Multiple Video Player for a Person on your web site or walk on actor to be on your website.</description>
		   <media:thumbnail url="http://websitetalkingheads.com/mvp/wthvideo/leannafull.png"/> 
		   <media:description>Our Multiple Video Player for a Person on your web site or walk on actor to be on your website.</media:description>
		   <media:content url="http://websitetalkingheads.com/mvp/wthvideo/leannafull1.flv">
			 </media:content>
	</item>
	<item> 
		   <title>Our Multiple Video Player 2</title>
			<link>http://websitetalkingheads.com/mvp2/</link>
		   <description><![CDATA[<img src="http://websitetalkingheads.com/mvp2/wthvideo/ActorImage.png" />]]>Show a different video based on the part of an image clicked.</description>
		   <media:thumbnail url="http://websitetalkingheads.com/mvp2/wthvideo/ActorImage.png"/> 
		   <media:description>Show a different video based on the part of an image clicked.</media:description>
		   <media:content url="http://websitetalkingheads.com/mvp2/wthvideo/jedbike1023.flv">
			 </media:content>
	</item>
	<item> 
		   <title>Our Multiple Video Player 3</title>
		   <link>http://websitetalkingheads.com/mvp3/</link>
		   <media:thumbnail url="http://websitetalkingheads.com/mvp3/wthvideo/Ariana.png"/> 
		   <description><![CDATA[<img src="http://websitetalkingheads.com/mvp3/wthvideo/Ariana.png" />]]>Play one video the first visit and another video on each subsiquent visit.</description>
		   <media:description>Play one video the first visit and another video on each subsiquent visit.</media:description>
		   <media:content url="http://websitetalkingheads.com/mvp3/wthvideo/leannafull5.flv">
			</media:content>
	</item> 
	<item> 
		   <title>Our Multiple Video 5 Player</title>
		   <link>http://www.websitetalkingheads.com/Random_Player/index.php</link>
		   <media:thumbnail url="http://websitetalkingheads.com/mvp5/wthvideo/Ariana.png"/> 
		   <description><![CDATA[<img src="http://websitetalkingheads.com/mvp5/wthvideo/Ariana.png" />]]>Our Random Video Player for a Person on your web site or walk on actor to be on your website.</description>
		   <media:description>Our Random Video Player for a Person on your web site or walk on actor to be on your website.</media:description>
		   <media:content url="http://websitetalkingheads.com/mvp5/wthvideo/leannafull4.flv">
			</media:content>
	</item>
	<item> 
		   <title>Our Post a Note Player</title>
		   <link>http://websitetalkingheads.com/postnote/index.php</link>
		   <description><![CDATA[<img src="http://websitetalkingheads.com/wthvideo/jedquickhelpme1609.png" />]]>Play a video next to a note that can emphasize your message.</description>
		   <media:thumbnail url="http://websitetalkingheads.com/wthvideo/jedquickhelpme1609.png"/> 
		   <media:description>Play a video next to a note that can emphasize your message.</media:description>
		   <media:content url="http://websitetalkingheads.com/postnote/wthvideo/tierrapostanote_288X192.flv">
			</media:content>
	</item>
	<item> 
		   <title>Our Jumper Player</title>
		   <link>http://www.websitetalkingheads.com/jumper/index.php</link>
		   <media:thumbnail url="http://websitetalkingheads.com/wthvideo/jed.png"/> 
		   <description><![CDATA[<img src="http://websitetalkingheads.com/wthvideo/jed.png" />]]>Show a video that jumps around the page.</description>
		   <media:content url="http://websitetalkingheads.com/wthvideo/jedjumper.flv">
		   </media:content>
	</item>
	<item> 
		   <title>Why Website Talking Heads Video</title>
		   <link>http://www.websitetalkingheads.com/whiteboard/index.php</link>
		   <description><![CDATA[<img src="http://img.youtube.com/vi/NiCdoZ_7kcA/mqdefault.jpg" />]]>Example of our Whiteboard Videos</description>
		   <media:thumbnail url="http://img.youtube.com/vi/NiCdoZ_7kcA/mqdefault.jpg"/> 
		   <media:description>Example of our Whiteboard Videos</media:description>
		   <media:content url="https://www.youtube.com/watch?v=NiCdoZ_7kcA">
		   </media:content>
	</item>
	<item> 
		   <title>Whiteboard Video Demo</title>
		   <link>http://www.websitetalkingheads.com/videopresentations/index.php</link>
		   <description><![CDATA[<img src="http://www.websitetalkingheads.com/videopresentations/images/vpgif.gif" />]]>Example of our Whiteboard Videos</description>
		   <media:thumbnail url="http://www.websitetalkingheads.com/videopresentations/images/vpgif.gif"/> 
		   <media:description>Why you should choose Website Talking Heads Video</media:description>
		   <media:content url="https://www.youtube.com/watch?v=E2RwcoXhPG0">
		   </media:content>
	</item>
';
$xml_text .= '
	</channel>
</rss>';


//get a handler for the file
$file_handler = fopen("wthvideo.rss", 'a');
//write the XML
fwrite($file_handler, $xml_text);
//close the file handler
fclose($file_handler);

?>
