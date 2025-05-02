<?php

$array = array("a", "b", array("c", "d", "e"));
$array[] = "d";
$array[] = "e";


echo $array[0];
echo $array[1];
echo $array[2][0];


$capitals = array(
    "France"=>"Paris",
    "Spain"=>"Madrid",
    "Germany"=>"Berlin",
    "Italy"=>"Rome",
    "UK"=>"London",
    "USA"=>"Washington DC",
);

foreach ($capitals as $capital => $city) {
    echo " - $city is in $capital k";
}
