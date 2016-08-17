<?php
$array = file(__DIR__ . '/config/db_doctors.txt');

$start = microtime();

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

echo '<br> time: ' . (microtime() - $start);
 ?>
