<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $numbers = 0;
       $attempt = 0;
       $maxattempt = 10;
         while (($numbers <> 10)&&($attempt <= $maxattempt)) {
           $numbers=rand(0,20);
           echo $numbers . "<br>";
           $attempt++;
         }
if (($attempt == $maxattempt)&&($number != $maxattempt)) {
  // code...
}
     ?>
  </body>
</html>
