<?php
		if (file_exists('whiteboard.rss')){
		unlink('whiteboard.rss');
		}

$page = file_get_contents( 'https://www.youtube.com/feeds/videos.xml?playlist_id=PL4Uv4nlnj1GatH2vkAZKRVO0DA2_0K9in' );
$xml_text = $page;
        echo PHP_EOL;
echo(' whiteboard');


//get a handler for the file

$file_handler = fopen("whiteboard.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);
?>
