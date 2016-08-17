<?php
$start = microtime();

// соединение с базой данных: тип БД(mysql) параметры БД(localhost или 127.0.0.1) и название БД;
// логин и пароль к БД
$dsn = 'mysql:host=localhost;dbname=meddatabase';
$dbh = new PDO($dsn, 'root', '');

// подготовка запроса чтения из таблицы clinics
$sth = $dbh->prepare(
  'SELECT `id`, `name`, `adress` FROM `clinics` WHERE id >= ? AND id <= ?'
  );


  $sth->bindParam(1, $min);
  $sth->bindParam(2, $max);
  // $sth->bindParam(3, $description);
  // $sth->bindParam(4, $adress);
  // $sth->bindParam(5, $image);
  // $sth->bindParam(6, $longetude);
  // $sth->bindParam(7, $latitude);
  // исполнение запроса

    $min = 1;
    $max = 5;


  // $translite = $temparray[0];
  // $name  = $temparray[1];
  // $description = $temparray[2];
  // $adress = $temparray[3];
  // $image = $temparray[4];
  // $longetude = $temparray[5];
  // $latitude = $temparray[6];
  $sth->execute();

  // получить данные из запроса
  var_dump($data = $sth->fetchAll());
  // var_dump($data = $sth->fetch(PDO::FETCH_ASSOC));


echo 'OK time: ' . (microtime() - $start);
 ?>
