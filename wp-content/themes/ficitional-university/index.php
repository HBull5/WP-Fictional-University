<?php 
    function greet( $name, $color ) {
        echo "<p>Hi, my name is $name and my favorite color is $color</p>";
    }

    greet( 'John', 'Green' );
    greet( 'Jane', 'Blue' );
?>

<h1>Site Title: <?php bloginfo( 'name' ); ?></h1>
<h2>Tag Line: <?php bloginfo( 'description' ); ?></h2>