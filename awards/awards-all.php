<?php
require( "connect.php" );
$sql = "SELECT * FROM awards ORDER BY RAND()";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    echo PHP_EOL;
    while ( $row = $result->fetch_assoc() ) {
        $name = $row[ "name" ];
        $title = str_replace("-", " ", $name);
        $title = str_replace(" seal", "", $title);
        $title = str_replace(" banner", "", $title);
        $body = $row[ "body" ];
        $spintax = new Spintax();
        $spun = $spintax->process( $body );
        $alt = $row[ "alt" ];
        echo( '<div class="media awards">' );
        echo PHP_EOL;
        echo( '<div class="container">' );
        echo PHP_EOL;
        echo( '     <a href="#" data-toggle="tooltip" title="' . $alt . '"> <img class="card-img-top award d-block" src="http://websitetalkingheads.com/images/' . $name . '.png"  alt="' . $alt . '" /> </a>' );
        echo PHP_EOL;
        echo('<div class="media-body">');
        echo PHP_EOL;
        echo('<h2 class="text-capitalize">' .$title . '</h2>');
        echo PHP_EOL;
        echo( $spun);
        echo PHP_EOL;
        echo( '     </div>' );
        echo PHP_EOL;
        echo( '   </div>' );
        echo PHP_EOL;
        echo( '   </div>' );
        echo PHP_EOL;
    }
} else {
    echo "0 results";
}
echo PHP_EOL;
class Spintax {
    public
    function process( $text ) {
        return preg_replace_callback( '/\{(((?>[^\{\}]+)|(?R))*)\}/x', array(
            $this,
            'replace'
        ), $text );
    }
    public
    function replace( $text ) {
        $text = $this->process( $text[ 1 ] );
        $parts = explode( '|', $text );
        return $parts[ array_rand( $parts ) ];
    }
}
?>