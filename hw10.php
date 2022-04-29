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

//domaci 10//

$m = 200;
$n = 80;
echo $m + $n;
echo "<br>";
echo $m - $n;
echo "<br>";
echo $m * $n;
echo "<br>";
echo $m / $n;

echo "<br>";
echo "<br>";

$week = rand(0,6);
if ($week==0){
    echo "Danas je ponedeljak.";
} else if ($week==1){
    echo "Danas je utorak.";
} else if ($week==2){
    echo "Danas je sreda.";
 } else if ($week==3){
    echo "Danas je cetvrtak.";
 }  else if ($week==4){
    echo "Danas je petak.";
 }  else if ($week==5){
    echo "Danas je subota.";
 }  else if ($week==6){
    echo "Danas je nedelja.";
 } 

 echo "<br>";
 echo "<br>";

$a = 6;
$b = 2;
$c = 4;
$d = $a + $b + $c;
echo "Zbir brojeva " . $a . ", " . $b . " i " . $c . " je " . $d;  


//novi yadatak br 2 :
echo "<br>";
echo "<br>";

$week =3;
if ($week==0){
    echo "Danas je ponedeljak.";
} else if ($week==1){
    echo "Danas je utorak.";
} else if ($week==2){
    echo "Danas je sreda.";
 } else if ($week==3){
    echo "Danas je cetvrtak.";
 }  else if ($week==4){
    echo "Danas je petak.";
 }  else if ($week==5){
    echo "Danas je subota.";
 }  else if ($week==6){
    echo "Danas je nedelja.";
 } 


//novi yadatak br 3:
echo "<br>";
echo "<br>";

$t=2;
$y=1;
$u=6;

$a = array($t,$y,$u,);
echo "Zbir brojeva $t , $y i $u je: ";
        print_r(array_sum($a));


?>
</body>
</html>


