<?php
//session_start();
$servername = "vdb1b.pair.com";
$username = "working_39";
$password = "EsQBeq3E";
$dbname = "working_examples";
$table = "custom_presentations";
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
$sql = "SELECT * FROM " . $table;
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    echo '<section id="products" class="container-fluid">';
    echo PHP_EOL;
    echo '<ul class="product-list">';
    echo PHP_EOL;
    error_reporting( 2 );
    while ( $row = $result->fetch_assoc() ) {
        $target = $row[ "target" ];
        $name = $row[ "name" ];
        echo '<li class="col-md-3 product-item" data-prod_id="' . $target . '">';
        echo PHP_EOL;
        echo '<img class="img img-responsive product-image" src="//img.youtube.com/vi/' . $target . '/maxresdefault.jpg" id="' . $name . '" title="Custom name Presentation - ' . $name . '" alt="Custom name Presentation - ' . $name . '" >';
        echo PHP_EOL;
        echo '<h2 class="product-name" data-type="animation">' . $name . '</h2>';
        echo PHP_EOL;
        echo '</li>';
        echo PHP_EOL;
    }
    echo '</ul>';
    echo PHP_EOL;
    echo '</section>';

    echo '<section id="products" class="container-fluid">';
    echo PHP_EOL;
    echo '<ul class="product-list">';
    echo PHP_EOL;
    error_reporting( 2 );
} else {
    echo "0 results";
}
?>