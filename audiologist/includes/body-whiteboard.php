<?php
// displays all the file nodes
if(!$xml=simplexml_load_file('includes/examples-whiteboard.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
}
echo '<div class="examplerow">';
foreach($xml as $example){
$target = $example->target;
$image = $example->image;
$altimage = strtok($image,".");
$video = str_replace("'", "", $example->name);

echo '<div class="example-box">';
echo PHP_EOL;
echo '<a rel="vidbox 900 541" title="Whiteboard Video - '.$video.'" href="https://www.youtube.com/watch?v='.$target.'?rel=0&autoplay=1&hd=1"  target="_blank">';
echo PHP_EOL;
echo '<img src="https://img.youtube.com/vi/'.$target.'/mqdefault.jpg" width="240" height="136" id="'.$video.'" alt="'.$video.'" title="'.$video.'" >';
echo PHP_EOL;
echo '</a>';
echo PHP_EOL;
echo '<div id="exampleboxtext" class="tk-swister-regular"><a href="https://www.youtube.com/embed/'.$target.'?rel=0&autoplay=1"  class="various1 iframe"  id="'.$video.'" alt="'.$video.'" title="'.$video.'" >'.$video.'</a></div>';
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;
}
echo '</div>';
echo PHP_EOL;

?>
