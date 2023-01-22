<?php
$tableau=array(
    "Diouf"=>array("prenom"=>"Mouhamed","ville"=>"Dakar","age"=>20),
    "ndiaye"=>array("prenom"=>"Modou","ville"=>"Dakar","age"=>22),);
$i = 0;
while($i < count($tableau)) {
    echo key($tableau) . " - " . $tableau[key($tableau)]['prenom'] . " - " . $tableau[key($tableau)]['ville'] . " - " . $tableau[key($tableau)]['age'] . "<br />";
    next($tableau);
    $i++;
}