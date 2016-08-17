<?php

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
     <form class="" action="t08.php" method="post">
       <input type="text" name="name">
       <input type="email" name="email">
       <input type="submit">
     </form>
     <p>
       welcome <?php echo $_POST[name]?> <br> your email = <?php echo $_POST[email]?>
     </p>
   </body>
 </html>
