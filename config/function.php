<?php
// функция возвращает ассоциативный массив полученный из строки с индексом $search

function getArrayClinic($array, $search)
{
  $temparray = explode('||', $array[$search]);
  $arraykeys = ['name', 'description', 'adress', 'image', 'latitude', 'longetude']; // массив ключей
  $temparray = array_combine($arraykeys, $temparray); // слияние ключей и значений двух массивов
  return $temparray;
}

// функция возвращает ассоциативный массив полученный из строки с индексом $search

function getArrayDoctors($array, $search)
{
  $temparray = explode('||', $array[$search]);
  $arraykeys = ['id_doc', 'image', 'name_doc', 'profession', 'description', 'education', 'id_clinic', 'name_clinic']; // массив ключей
  $temparray = array_combine($arraykeys, $temparray); // слияние ключей и значений двух массивов
  return $temparray;
}

// функция возвращает ассоциативный массив полученный из строки с индексом $search

function getArrayDoctorsv02($array, $profession, $link)
{
  foreach ($array as $key => $value) {
    // поиск по строке по значению $search
    $needle = strpos($value, $profession);
    $needle2 = strpos($value, $link);
    if ($needle == true and $needle2 == true) {
      // echo 'find it:' . $value;
      // echo 'find it:';
      // echo '<br>';
      $temparray[] = $value;
    }

  }
  var_dump($temparray);
  return $temparray;
}

// функция меняет последние 4 знака рандомно
// для latitude и longetude

function replaceData($data)
{
  return(substr($data, 0, 11) . rand(0, 9999));
}

// вычислить расстояние от клиники до точки на карте и вернуть отсортированный по возрастанию массив
function getDistance($array, $long, $lat)
{
  foreach ($array as $key => $value) {
    $temparray = explode('||', $value);
    $distance = sqrt(($long - $temparray[4])*($long - $temparray[4])+($lat - $temparray[5])*($lat - $temparray[5]));
    // $distance . '<br>';
    $t2array[$temparray[3]] = $distance;
  }
  asort($t2array);
  // var_dump($t2array);
  return $t2array;
  }

// вычислить расстояние от клиники до точки на карте и вернуть отсортированный по возрастанию массив
function getDistancev02($array, $long, $lat)
{
  foreach ($array as $key => $value) {
    $temparray = explode('||', $value);
    $distance = sqrt(($long - $temparray[5])*($long - $temparray[5])+($lat - $temparray[6])*($lat - $temparray[6]));
    // $distance . '<br>';
    $t2array[$temparray[0]] = $distance;
  }
  asort($t2array);
  // var_dump($t2array);
  return $t2array;
  }


 ?>
