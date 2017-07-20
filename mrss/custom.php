<?php
		if (file_exists('custom.rss')){
		unlink('custom.rss');
		}
$description = array("{With our|With|With the|Using|With this} Custom video Presentations {you get|the user gets|you become|you aquire|you will get} a video Spokesperson, {Professional|Skilled|Specialized|Experienced|Specialist} editing, Motion Graphics Compositing, {alongside|with|next to|in addition to|along with} Images and Effects. Incredible {for your|for a|to your|for ones|for the} website Demonstration, Sales video, {or|and|and also|or even|or simply} Product Walk-though.","{A|Your} Custom video Presentation {from|with|||coming from|out of} Talking Heads® can convey {an immediate|a quick|a|an on the spot|a direct} and clear message {to a|for a|to your|to somewhat of a|to the} wide gathering of {people|most people|persons|families|consumers} and focus watchers {on|with|at|concerning|upon} something specific. An outwardly engaging video {is a fantastic|is an excellent|is a great|is an effective|is a nice} approach to exhibit {an item|a product or service|merchandise|items|a service} or brand and {take|get|require|carry|acquire} client experience to an {a great deal more|far more|more|considerably more|much more} intuitive level. Consequently, {rich|wealthy|loaded|vibrant|full}, innovative and engaging videos {are|are generally|usually are|can be|tend to be} ending up famous {at this point|now|at this moment|right now|at this stage}. ","Our Custom Video Presentations utilize pictures, video, {sound|audio}, content and an {expert|skilled|professional|experienced} video spokesperson. We put {them|it} {all together|together} and give you a Full HD 1920X1080 video in MP4 format {appropriate to|that you can|for you to|you can} post on YouTube, Vimeo, Facebook. Twitter, Instagram, Dailymotion, Vevo, Metacafe, Flickr...any social media platform.","At Talking Heads Video {We know|We all know} all {organizations|companies|businesses|corporations} {are not|aren't|usually are not|will not be|are certainly not|are usually not} alike, so, we {work|function|perform|operate|get the job done|do the job} {with you|along with you} {to make|to create|to produce|to generate|for making|to help make} {the best|the very best|the most effective|the top|the ideal|the most beneficial} {video|video clip|movie|online video} {for your|for the|to your|on your|in your|for your personal} {organization|Business|Firm|Group|Corporation}. You {offer|provide|supply|offer you|present|give} {an answer|a solution} {for your|for the|to your|on your|in your|for your personal} {customers|clients|consumers|buyers|shoppers|prospects}, {yet|however|but|nevertheless|still|nonetheless} {once in a while|Occasionally|Every now and then|Every so often|From time to time|Now and again} that arrangement or {item|merchandise|product} {needs|requirements|wants|demands|desires|requires} some clarifying. {That is|That's|Which is|That is certainly|That is definitely|That may be} {where|exactly where|in which|the place|wherever|where by} we {come in|are available in|can be found in|are available}. We make {highly|extremely|very|hugely|remarkably|really} {effective|efficient|successful|powerful|productive|helpful}, energizing {VIDEOS|Movies|Video clips|Films} that {clarify|make clear|explain} your {item|merchandise|product}, {organization|Business|Firm|Group|Corporation}, {website|Web site|Site|Internet site|Web page|Web-site} or {business|company|enterprise|organization|small business|business enterprise}.","Having one of our {professional|experienced|skillful|qualified|polished} {video spokespeople|virtual spokespeople|website spokespeople|web spokespeople|spokes-models|virtual actors|person on website|online spokespeople|web presenters|spokespeople|video presenters|website presenters|video web presenters|promo video presenters|live actors|website video actors|virtual live actors} in your video  will make your video more {inviting|appealing|attractive|intriguing|persuasive|pleasing|welcoming} and {viewers|visitors} are likely to spend {more|greater|a longer} time on your {website|site|web page}.");
$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Custom names</title>
	<link>http://www.websitetalkingheads.com/namepresentations/custompresentations.php</link>
	<description>When you choose one of our Custom Video Presentations we enable you to deliver a direct, confident and clear message.
We will create the type of image you want to be associated with your business. For example, if your Custom Video Presentation is for a business that deals with surfboards, you would want the actor, colors, sounds and images to matche that image. The Spokesperson needs to be relatable to your target market. Can you imagine a man dressed in a sleek suit trying to sell surfboards? You would also want the images to be of beachs, the ocean and surf and maybe some Reggae or Surf Music.</description>
	<image>
    	<url>http://websitetalkingheads.com/images/WTH-logo.png</url>
    	<title>WebsiteTalkingHeads.com</title>
    	<link>http://www.websitetalkingheads.com</link>
  </image>
	';
require( "../examples/connect.php" );
$table = "animation";
$sql = "SELECT * FROM " . $table . " ORDER BY name";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    while ( $row = $result->fetch_assoc() ) {
        $target = $row[ "target" ];
        $name = $row[ "name" ];
        $discriptionCurrent = array_rand($description);
        $spintax = new Spintax();
        $spun = $spintax->process($description[$discriptionCurrent]);
        $xml_text .= '
<item>
	<title>Custom Presentation - '.$name.'</title>
	<link>http://www.websitetalkingheads.com/namepresentations/custompresentations.php</link>
	<description><![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>'.$name.' is an example of our Custom Presentations.  '. $spun  . '</description>
	<media:title>'.$name.'</media:title>
	<media:description>'.$name.' is an example of our Custom names.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="name" height="1920" width="1080">
	</media:content>
</item>
';
    }
} else {
    echo "0 results";
}

$xml_text .= '</channel>
</rss>';


//get a handler for the file

$file_handler = fopen("custom.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);
class Spintax
{
    public function process($text)
    {
        return preg_replace_callback('/\{(((?>[^\{\}]+)|(?R))*)\}/x', array(
            $this,
            'replace'
        ), $text);
    }
    public function replace($text)
    {
        $text  = $this->process($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts)];
    }
}
?>
