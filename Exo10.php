<?php
$tableau=array(
    "Diouf"=>array("prenom"=>"Mouhamed","ville"=>"Dakar","age"=>20),
    "ndiaye"=>array("prenom"=>"Modou","ville"=>"Dakar","age"=>22),);
foreach ($tableau as $key => $value){ echo $key." : ";
    foreach ($value as $cle => $valeur) {
        echo $cle . " " . $valeur. " ";}
        echo "<br />";
}
?>