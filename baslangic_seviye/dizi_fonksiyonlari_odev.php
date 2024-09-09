<?php

function randomArray($array, $count) {
   $array2 = array_filter($array);
   
   $randonIndex = array_rand($array2,$count);

   $array3 = array_map(function($index) use ($array2) {
        return $array2[$index];
    }, $randonIndex);

    return $array3;
}

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

echo "<pre>"; print_r(randomArray($planets, 2)); echo "</pre>";
echo "<pre>"; print_r(randomArray($planets, 3)); echo "</pre>";
echo "<pre>"; print_r(randomArray($planets, 2)); echo "</pre>";
echo "<pre>"; print_r(randomArray($planets, 4)); echo "</pre>";
echo "<pre>";print_r(randomArray($planets, 5)); echo "</pre>";