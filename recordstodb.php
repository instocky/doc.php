<?php
$start = microtime();
// запись в БД докторов и клиники
$array = file(__DIR__ . '/config/db_doctors.txt');

// соединение с базой данных: тип БД(mysql) параметры БД(localhost или 127.0.0.1) и название БД;
// логин и пароль к БД
$request = 'mysql:host=localhost;dbname=meddatabase';
$dbh = new PDO($request, 'root', '');

foreach ($array as $key => $value) {
  $temparray = explode('||', $array[$key]);
  // подготовка запроса вставки в таблицу clinics
  // Повторяющиеся вставки в базу с использованием подготовленных запросов
  // http://php.net/manual/ru/pdo.prepared-statements.php
  $sth = $dbh->prepare(
    'INSERT INTO `doctors`(`translitedoc`, `imagedoc`, `namedoc`, `profession`, `description`, `education`, `transliteclinic`, `nameclinic`)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
    );
  $sth->bindParam(1, $translitedoc);
  $sth->bindParam(2, $imagedoc);
  $sth->bindParam(3, $namedoc);
  $sth->bindParam(4, $profession);
  $sth->bindParam(5, $description);
  $sth->bindParam(6, $education);
  $sth->bindParam(7, $transliteclinic);
  $sth->bindParam(8, $nameclinic);
  // исполнение запроса
  $translitedoc = $temparray[0];
  $imagedoc  = $temparray[1];
  $namedoc = $temparray[2];
  $profession = $temparray[3];
  $description = $temparray[4];
  $education = $temparray[5];
  $transliteclinic = $temparray[6];
  $nameclinic = $temparray[7];
  $sth->execute();
}

$array = file(__DIR__ . '/config/db_clinics_v.02.txt');

// соединение с базой данных: тип БД(mysql) параметры БД(localhost или 127.0.0.1) и название БД;
// логин и пароль к БД
$request = 'mysql:host=localhost;dbname=meddatabase';
$dbh = new PDO($request, 'root', '');

foreach ($array as $key => $value) {
  $temparray = explode('||', $array[$key]);

  // подготовка запроса вставки в таблицу clinics
  // Повторяющиеся вставки в базу с использованием подготовленных запросов
  // http://php.net/manual/ru/pdo.prepared-statements.php
  $sth = $dbh->prepare(
    'INSERT INTO `clinics`(`translite`, `name`, `description`, `adress`, `image`, `longetude`, `latitude`)
    VALUES (?, ?, ?, ?, ?, ?, ?)'
    );

  $sth->bindParam(1, $translite);
  $sth->bindParam(2, $name);
  $sth->bindParam(3, $description);
  $sth->bindParam(4, $adress);
  $sth->bindParam(5, $image);
  $sth->bindParam(6, $longetude);
  $sth->bindParam(7, $latitude);
  // исполнение запроса
  $translite = $temparray[0];
  $name  = $temparray[1];
  $description = $temparray[2];
  $adress = $temparray[3];
  $image = $temparray[4];
  $longetude = $temparray[5];
  $latitude = $temparray[6];
  $sth->execute();
}

echo 'OK time: ' . (microtime() - $start);
 ?>
