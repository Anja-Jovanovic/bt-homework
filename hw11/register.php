<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title></title>
  
</head>

<body>
<?php


if(isset($_GET['submit'])){

if(empty($_GET['name'])){
    echo "Obavezno upisati ime";
}
if(empty($_GET['prezime'])){
    echo "Obavezno upisati prezime";
}
if(empty($_GET['pol'])){
    echo "Obavezno izabrati pol";
}
if(empty($_GET['email'])){
    echo "Obavezno upisati email";
}
if(empty($_GET['password'])){
    echo "Obavezno upisati sifru";
}
if(empty($_GET['password'])){
    echo "Obavezno upisati sifru";
}

 }

 

 $a = "Postovana";
 $b = "Postovani";
 $pol= $_GET['pol'];
 $ime=$_GET['name'];
 $prezime=$_GET ['prezime'];
 
 if ($pol == "z") {
    echo  "$a $ime $prezime uspesno ste se registrovali na nasem sajtu.";
} else if ($pol == "m") {
    echo "$b $ime $prezime uspesno ste se registrovali na nasem sajtu.";
}
echo "<br>";
$sifra = $_GET['password'];
echo "Vasa lozinka je: $sifra";

echo "<br>";
$email = $_GET['email'];
echo "Vasa username je: $email";

echo "<br>";
echo "Vasi kursevi su:";
$lista_kurseva = array('engleski','nemacki','francuski');
echo  implode(", ",$lista_kurseva);




/* uradila sam sta sam mogla sa domacim, vecina stvari koju sam isprobala nije mi uspela, ili je do mene ili do koda, ovoliko za sad*/ 

?>

</body>

</html>












