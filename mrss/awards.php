<?php
		if (file_exists('awards.rss')){
		unlink('awards.rss');
		}
$xml_text = '<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>Our Awards</title>
	<link>http://www.websitetalkingheads.com/awards</link>
	<description>When you choose one of our Custom Video Presentations we enable you to deliver a direct, confident and clear message.
We will create the type of image you want to be associated with your business. For example, if your Custom Video Presentation is for a business that deals with surfboards, you would want the actor, colors, sounds and images to matche that image. The Spokesperson needs to be relatable to your target market. Can you imagine a man dressed in a sleek suit trying to sell surfboards? You would also want the images to be of beachs, the ocean and surf and maybe some Reggae or Surf Music.</description>
	<image>
    	<url>http://websitetalkingheads.com/images/WTH-logo.png</url>
    	<title>WebsiteTalkingHeads.com</title>
    	<link>http://www.websitetalkingheads.com</link>
  </image>
	';
require( "../examples/connect.php" );
$table = "awards";
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

$file_handler = fopen("awards.rss", 'a');

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
