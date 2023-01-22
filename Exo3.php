<?php
$x = 190;
$y = rand(100,999);
$i = 0;
while ( $x != $y){
    $y = rand(100, 999);
    $i++;
}
if( $x == $y){
    echo $i." coups realises";
}