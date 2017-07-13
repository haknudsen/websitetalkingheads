<?php
$description = array("{You can get|You can receive|You can aquire|You can find|You can get yourself} a highly professional whiteboard video from Talking Heads'  and link it {with your|with all you} website and media accounts. A increasing {number of people|amount of people|number of individuals} are visiting websites and using {social media|social networking|web 2 .|social media marketing|web 2 . 0} therefore, the digital environment {provided by|offered by|supplied by|made available from|furnished by} the internet {has become a|has changed into a|has developed into a|has turned into a|has developed into} highly valuable platform {to reach|to attain|to arrive at|to achieve|to arrive} out millions who {can take|usually requires|will take|may take|takes} an active interest in your {products and services|product or service|offerings|obtains|goods and services}. Today millions are {spent on|allocated to|invested in|used on|invested on} advertising and {one of the|among the list of|one of many|one of several|one of the many} incredible advantages of advertising online is {that you are able|that you can} to reach out to {huge number|thousands|good sized quantities|large numbers|signifigant amounts} of potential customers {with|using|by means of|along with|by using} easily affordable budget.","{There are some|There are many|There are numerous} incredible {advantages|strengths|merits|benefits|pros} in whiteboard videos. They present the {information about|information regarding|details about|specifics of|info on} your product through a voice over {given|provided|spoken} by a professional speaker who can be male of female {as per|per|according to} your choice and the suitability {to the|with the|for the} concept and product {you are looking|you have been looking|you're looking|you are waiting|you want} to promote. These whiteboard videos {are created|are set up|are made|are produced|are designed} on highly advanced technical platforms {and therefore|and for that reason|and thus|thereby|and so} they easily load {and are|and tend to be|as they are|and they are|consequently they are} viewable in any {user interface|interface|ui|program|graphical user interface} both on the {hand held|handheld|accessories|portable|hand-held} devices and PCs. {Though|Nevertheless|Even though|Although|Despite the fact that} short, a lot of work goes {inside the|contained in the|inside|within the|into the} production of whiteboard videos {so that they|to help you|to make sure they|to be able to|so they} come out very well {in a|within a|in the|in a very|inside of a} precise, appealing and highly engaging manner {reaching out|trying} the audience with {a highly|a|an extremely|a properly|an incredibly} impressive message about {your company|your enterprise|what you are promoting|your business}, product or service.","Whiteboard videos {appeal to|fascinate|capture} the visual {and|together with|along with} auditory senses {and are|as they are|and they are|consequently they are} highly {effective|successful|powerful|efficient} tools to get your point across. Once they grab a viewer's attention they drive {the|your} message home quickly {along with creating|while creating} maximum impact. We use {professional|experienced|skilled} voice-over artists {for|in} the spoken presentation {of the|in the|for the} script.  Our voice-over artists have excellent command {over the|with the} spoken language {with regard to|pertaining to|meant for|to get|designed for} pronunciation and diction. {They can|They are able to|They will|They are|They're able to} do a {highly|really|very|remarkably|extremely} impressive delivery {with their|using|using their|making use of their} {captivating|entertaining} voice. ","{You will find|You can see|You'll discover|You can find|One can find} that whiteboard video {a highly|a|an extremely|an incredibly} powerful {method|way} to get your {message|call to action|story} out. In addition, another {advantage of|great thing about|feature of|important thing about} whiteboard videos {include|is} the ability to {present|show} your {concept|idea} {in a variety of|in a number of|in many different|in several|in numerous} ways including graphics, images, text and animations {that you might|may possibly|that you|that you may possibly|that you could possibly} work {with your|with the|for ones} subject. You can also include your {logo design|brand|custom logo design|name} {in it|inside {your|the} video} making it {come alive|stand out|come to life}.","At Talking Heads'   we specialise {in making|in creating} whiteboard videos {for all|for any} purposes.  {You can|You'll be able to} {bank|count|rely} on our efficiency and technical competence {and the|along with the|and also the|plus the|as well as the} talents of our {renowned|highly skilled}, {professional|experienced} team to {create|make} a truly {impressive|spellbinding|notable|compelling} whiteboard video {for your|for any} business. You will {find|see|discover} that our services {highly|really|very|remarkably|extremely} collaborative {right from the start|straight away}, all the way to completion of the video.","Our prices {are the|are definitely the|could be the|will be the|include the} most affordable {and you will|and you should|and that you will|and you'll|and you will probably} have many reasons {to tell|to know|to inform|to see|to understand} others why Talking Heads' is the most {unique|completely unique|distinctive|different|specific} and distinguished company {in the industry|in the market|in the business}. Call us {today|now|right now|at present|nowadays} and let our personnel {interact|connect} wtih you and {give you|present you with|supply you with|ensure that you get|provide} enough ideas {on how|on what|about how|how} to go about {creating a|preparing a|making your|developing a|having a} stunning kind {of|with|involving|associated with|from} whiteboard video {for your|for a|to your|for ones|for the} business.","{Keep|Grab|Capture|Seize} {your|your website's} visitors' {attention|curiosity|awareness} while {boost|increas|improv|supercharg}ing your {sales|income|revenue}.");
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
	<description>A Whiteboard Video from Talking Heads® helps savvy online marketers or companies to get their message across in a powerful and convincing way.  With Talking Heads® you dont just get whiteboard sketch videos. We get spent years studying the art work of persuasion and communication. Your story ought to be told well by professionals. So we have gathered a team of artists and video professionas and we collaborate with you to create your script and customize the images that will be used in your video.  You will end up with a video that tells your story, boosts leads, and increases sales in your product.</description>
	';
require( "../examples/connect.php" );
$table = "whiteboard";
$sql = "SELECT * FROM " . $table . " ORDER BY rand()";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    while ( $row = $result->fetch_assoc() ) {
        $target = $row[ "target" ];
        $name = $row[ "name" ];
        $discriptionCurrent = array_rand($description);
        $spintax = new Spintax();
        $spun = $spintax->process($description[$discriptionCurrent]);
        echo($spun . '<br><br>');
$xml_text .= '
<item>
	<title>'.$name.' - Whiteboard Video</title>
	<link>http://www.websitetalkingheads.com/whiteboard/index.php</link>
	<description xml:space="preserve">
		<![CDATA[<img src="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" />]]>
		<![CDATA['.$name.' is an example of our Whiteboard Videos.  '. $spun  . ']]>
	</description>
	<media:title>'.$name.'</media:title>
	<media:description>'.$name.' is an example of our Whiteboard Videos.</media:description>
	<media:thumbnail url="http://img.youtube.com/vi/'.$target.'/mqdefault.jpg" height="320" width="180"/>
	<media:content url="http://www.youtube.com/watch?v='.$target.'" medium="video" height="1920" width="1080">
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

$file_handler = fopen("whiteboard.rss", 'a');

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
