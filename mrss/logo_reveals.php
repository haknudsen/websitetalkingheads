<?php
		if (file_exists('logo_reveals.rss')){
		unlink('logo_reveals.rss');
		}

$page = file_get_contents( 'https://www.youtube.com/feeds/videos.xml?playlist_id=PL4Uv4nlnj1Gb2vYM5jiVzwwssd8UNz_r3' );
$xml_text .= $page;


//get a handler for the file

$file_handler = fopen("logo_reveals.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);
echo('Logo Reveals');
?>
