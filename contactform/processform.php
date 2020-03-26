

<?php

$first_name = $_REQUEST['first_name'];

$content = $_POST;

$first_name .= ".txt";


function file_force_contents( $fullPath, $contents, $flags = 0 ){
    $parts = explode( '/', $fullPath );
    array_pop( $parts );
    $dir = implode( '/', $parts );
   
    if( !is_dir( $dir ) )
        mkdir( $dir, 0777, true );
   
    file_put_contents( $fullPath, $contents, $flags );
}

file_force_contents($first_name,$content, LOCK_EX );
?>