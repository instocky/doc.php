<?php
include __DIR__ . '/config/function.php';
include __DIR__ . '/config/data.php';

// данные точки
$long = 54.045;
$lat = 37.0;
// данные профессия
$profession = 'Акушер-гинеколог';

// получен массив по возрастанию id_clinic=>расстояние
$t2array = getDistancev02($arrayclinics2, $long, $lat);

foreach ($t2array as $key => $value) {
  $link = $key;
  getArrayDoctorsv02($arraydoctorstemp, $profession, $link);
}
// var_dump($temparray);
