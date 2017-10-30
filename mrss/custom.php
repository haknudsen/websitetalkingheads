<?php
		if (file_exists('custom.rss')){
		unlink('custom.rss');
		}

$page = file_get_contents( 'https://www.youtube.com/feeds/videos.xml?playlist_id=PL4Uv4nlnj1GYAESyvcLTClB633ncI8xQJ' );
$xml_text = $page;
        echo PHP_EOL;
echo(' custom');


//get a handler for the file

$file_handler = fopen("custom.rss", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);
?>
