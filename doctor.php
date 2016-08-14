<?php
// получение карточки клиники

include __DIR__ . '/config/function.php';
include __DIR__ . '/config/data.php';

// echo getArray($array);
// режу элемент массива по разделителю(||) на заголовок, дескрипшн, адрес и картинку
$search =  rand(1, 6550); // сюда нужно передать результат поиска по БД
$temparray = getArrayDoctors($arraydoctors, $search);
// var_dump($arraydoctors);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <link href="style.css" rel="stylesheet">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
     <title><?php echo $temparray[name_doc]; ?></title>
   </head>
   <body>
     <div class="">
       <?php echo '<img src="' . $temparray[image] . ' />'; ?>
       <h1><?php echo $temparray[name_doc]; ?></h1>
       <h4><?php echo $temparray[profession]; ?></h4>

       <p>
         <?php echo $temparray[description]; ?>
       </p>

       <p>
         <span>Образование:</span> <?php echo $temparray[education]; ?>
       </p>
       <p>
         <span>Место работы:</span> <a href="#<?php echo $temparray[id_clinic]; ?>"><?php echo $temparray[name_clinic]; ?></a>
       </p>
       <!-- <p>
         <span>latitude:</span> <?php echo replaceData($temparray[latitude]); ?>
       </p>
       <p>
         <span>longetude:</span> <?php echo replaceData($temparray[longetude]); ?>
       </p> -->
       <input type="button" name="name" value="Записаться к врачу">
     </div>



   </body>
 </html>
