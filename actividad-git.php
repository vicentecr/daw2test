<?php

$numerosPares = array();

for ( $i=0; $i < 100; $i++ ){
    if( $i % 2 == 0){
        array_push( $numerosPares, $i );
    }
}

foreach ($numerosPares as $key => $value) {
    echo $value. '<br>';
}