<?php
include __DIR__ . '/config/function.php';
include __DIR__ . '/config/data.php';



// asort($arrayclinics);
// var_dump($arrayclinics);
$long = 54.045;
$lat = 37.0;
foreach ($arrayclinics as $key => $value) {
  $temparray = explode('||', $value);
  $distance = sqrt(($long - $temparray[4])*($long - $temparray[4])+($lat - $temparray[5])*($lat - $temparray[5]));
  // $t2array += ['"$temparray[3]"' => '"$distance"'];
  // $arr += ['lol3'=>'3'];
  $t2array[] = array($temparray[3]=>$distance);
  // $tarray = [];

}

asort($t2array);
var_dump($t2array);
// echo $value . '<br>';
