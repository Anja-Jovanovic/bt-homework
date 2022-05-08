<!DOCTYPE html>
<html>
<body>
<?php



if(isset($_GET['submit'])){

    if(empty($_GET['sirina_zida'])){
        echo "Obavezno upisati sirinu zida";
    }
    else if(empty($_GET['visina_zida'])){
        echo "Obavezno upisati visinu zida";
    }
    else if(empty($_GET['sirina_ploc'])){
        echo "Obavezno upisati sirinu plocice";
    }
     else if(empty($_GET['visina_ploc'])){
        echo "Obavezno upisati visinu plocice";
    }
    
  else {


$a=$_GET['sirina_zida'];
$b = $_GET['visina_zida'];

$povrsina= $a*$b;
$povrsina = $povrsina * 10000;

$c=$_GET['sirina_ploc'];
$d=$_GET['visina_ploc'];

$plocica = $c*$d;
$kolicina= $povrsina/$plocica;
echo $kolicina . " komada plocica";

 } 
 }

/*

 "<br>";

 "<br>";
 
 
 //if (is_null($plocica))
 {
 echo 'Variable is  NULL';
 }
 else
 {
 echo 'Variable is not NULL';
 }
 
 "<br>";
 "<br>";
 
 if (is_null($povrsina))
 {
 echo 'Variable is  NULL';
 }
 else
 {
 echo 'Variable is not NULL';
 }
 */
 


?>
</body>
</html>
