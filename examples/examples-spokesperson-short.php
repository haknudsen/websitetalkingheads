<?php
error_reporting( 2 );
//session_start();
$servername = "vdb1b.pair.com";
$username = "working_39";
$password = "EsQBeq3E";
$dbname = "working_examples";
$table = "websites"; //you will need to create this

// Create connection
$conn = mysqli_connect( $servername, $username, $password );
// Check connection
if ( !$conn ) {
    die( "Connection failed: " . mysqli_connect_error() );
    echo( "Connection failed: " . mysqli_connect_error() );
    echo "<br>";
}
$db = mysqli_select_db( $conn, $dbname );

if ( !$db ) {
    die( "Connection failed: " . mysqli_connect_error() );
    echo "<br>";
}
$sql = "SELECT name, image, url FROM websites";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    echo '<section class="examples text-center">';
    echo '<div class="row">';
    $x = 1;
    while($row = $result->fetch_assoc()) {
        $target = $row[ "url" ];
        $image = $row[ "image" ];
        $example = $row[ "name" ];
        echo PHP_EOL;
        echo '<div class="col-xs-6">';
        echo PHP_EOL;
        echo '<a href="' . $target . '" target="_blank"><img class="img-responsive box" src="../website-spokesperson/examples/' . $image . '"  id="' . $example . '" alt="Website Spokesperson Example - ' . $example . '" ></a>';
        echo PHP_EOL;
        echo '<h5 class="example-name"><a href="' . $target . '" target="_blank" >' . $example . '</a></h5>';
        echo PHP_EOL;
        echo '</div>';
        echo PHP_EOL;
        $x = $x + 1;
        if ( $x == 7 ) {
            break;
        }
    }
    echo '</div>';
    echo PHP_EOL;
    echo '</section><br>';
}
?>