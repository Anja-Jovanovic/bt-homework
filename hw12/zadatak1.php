<?php

$tezina=$_GET['tezina'];



$aktiv = $_GET['aktivnost'];

if ($aktiv=="programer" || $aktiv=="administrativni radnik" || $aktiv=="menadzer"){
    $a = 100;
} else if ($aktiv=="policajac" || $aktiv=="vojnik"){
    $a = 200;;
} else if($aktiv=="sportista"){
    $a = 300;;
} else {
    $a = 150;;
}




$star= $_GET['starost'];



if ($star>=0 && $star<=3){
    $b = 1.9;
} else if ($star>=4 && $star<=10) {
    $b = 1.5;
} else if ($star>=11 && $star<=18) {
    $b = 1.2;
} else if ($star>=19 && $star<=26) {
    $b = 1;
} else if (($star>=27 && $star<=30) || ($star>=50 && $star<=60)){
    $b = 0.8;
} else if (($star>=31 && $star<=35) || ($star>=45 && $star<=49)){
    $b = 0.7;
} else if (($star>=36 && $star<=44) || ($star>60)){
    $b = 0.6; 
 }




$kal= $tezina*$a*$b;
echo "Dozvoljeni unos kalorija je " . $kal;


?>