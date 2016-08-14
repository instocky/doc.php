<?php
// точка входа - общая концепция
include __DIR__ . '/config/function.php';
include __DIR__ . '/config/data.php';


 ?>
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>
  </head>
  <body>
    <form class="" action="indextemp.php" method="post">
      <input type="text" name="adress" value="">
      <input type="text" name="profession" value="">
      <input type="submit" name="search" value="Искать">
    </form>
    <h3>Результаты поиска</h3>
    <?php
    // данные точки
    $long = 54.045;
    $lat = 37.0;
    // данные профессия
    $profession = 'педиатр';

    // получен массив по возрастанию id_clinic=>расстояние
    $t2array = getDistancev02($arrayclinics2, $long, $lat);
    // var_dump($t2array);

    foreach ($t2array as $key => $value) {
      $link = $key;
      $t3array = getArrayDoctorsv02($arraydoctors, $profession, $link);
      if ($t3array != NULL) {
        $array[] = $t3array;
        ++$i;
        if ($i == 500) {
          var_dump($array);
          exit;
        }
      }

    }

    var_dump($array);
    ?>

  </body>
</html>
