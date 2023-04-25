<?php
$podcasts   = ["Doughboys","CBB","Getplayed"];
$games      = ["MetalGear","Quake","Earthbound"];
$music      = ["KingGizzard","SmashingPumkins","TheBetaBand"];

function ausgabe($ausgabe){
    foreach($ausgabe as $echo){
        echo "$echo<br>";
    }
}

function merge($merge1,$merge2,$merge3){
    foreach($merge2 as $value){
        $merge1[]= $value;
    }
    foreach($merge3 as $value2){
        $merge1[]= $value2;
    }
        return $merge1;
}

$interessen = merge($podcasts,$games,$music);

ausgabe($interessen);

?>