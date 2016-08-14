<?php
// получение карточки клиники

include __DIR__ . '/config/function.php';
include __DIR__ . '/config/data.php';

$search =  rand(1, 620); // сюда нужно передать результат поиска по БД
$temparray = getArrayClinic($arrayclinics, $search);

?>
 <!DOCTYPE html>
 <html>
   <head>
     <link href="style.css" rel="stylesheet">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
     <title><?php echo $temparray[name]; ?></title>
   </head>
   <body>
     <div class="">
       <?php echo '<img src="' . $temparray[image] . '" />'; ?>
       <h1><?php echo $temparray[name]; ?></h1>

       <p>
         <?php echo $temparray[description]; ?>
       </p>
       <p>
         <span>Адрес:</span> <?php echo $temparray[adress]; ?>
       </p>
       <p>
         <span>latitude:</span> <?php echo replaceData($temparray[latitude]); ?>
       </p>
       <p>
         <span>longetude:</span> <?php echo replaceData($temparray[longetude]); ?>
       </p>
     </div>



   </body>
 </html>
