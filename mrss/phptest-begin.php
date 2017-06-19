<?php
$individual_title = $_GET['ititle'];

$individual_years = $_GET['iyears'];

$xml_text = "<?xml version='1.0' encoding='UTF-8'?>
<individual>
	<title>$individual_title</title>
	<years>$individual_years</years>
</individual>";


//get a handler for the file

$file_handler = fopen("filetest.xml", 'a');

//write the XML

fwrite($file_handler, $xml_text);

//close the file handler

fclose($file_handler);

?>
