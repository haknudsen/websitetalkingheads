<?php
		if (file_exists('typography.rss')){
		unlink('typography.rss');
		}

$page = file_get_contents( 'https://www.youtube.com/feeds/videos.xml?playlist_id=PL4Uv4nlnj1GZ3uOjFtqpDeRC_l-IlFzsx' );
$xml_text .= $page;


//get a handler for the file

$file_handler = fopen("typography.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);
echo(' Typography');

?>
