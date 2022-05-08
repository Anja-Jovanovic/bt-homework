<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$x = 3;
$y = 101;
$z =1;
do {
  echo "Za $z dana : Puz se popeo $x cm , a drvo je poraslo $y  <br>";
  $z++;
  $x+=3;
  $y+=1;
} while ($x <= $y);
echo "Puz se popeo za $z dana."
?>




</body>
</html>