<?php
		if (file_exists('explainer.rss')){
		unlink('explainer.rss');
		}

$page = file_get_contents( 'https://www.youtube.com/feeds/videos.xml?playlist_id=PL4Uv4nlnj1GYTHPSARqXVpOFSpzYWvC0U' );
$xml_text = $page;
        echo PHP_EOL;
echo(' Explainer');


//get a handler for the file

$file_handler = fopen("explainer.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);
?>
