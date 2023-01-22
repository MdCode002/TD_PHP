<?php
$x = 15;
if(($x % 3 == 0) && ($x % 5 == 0)){
    echo $x.' est un multiple de 3 et 5';
}else{
    echo $x." n'est pas un multiple de 3 et 5";
}