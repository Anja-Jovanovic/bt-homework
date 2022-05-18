<?php


//PRVI ZADATAK


function emailCheck($data){
    
foreach ($data as $naziv=>$vrednost){
   if (strpos($vrednost, "@")){
 echo $vrednost;
 echo "<br>";
   }
 }
}

 

emailCheck (array(
    "anjajovanovic@gmail.com", 
   "markomarkovic@gmail.com", 
     "sonjasonjic.gmail.com",
      "13231@gmail.com", 
     "cicamicayahoo.com"));


echo "<br>";
echo "<br>";
    

    // DRUGI ZADATAK




$niz = array(2,3,11,7);

    function matematika ($niz, $opr="+" ){
      
if($opr==="+"){
     $resenje=0;
     foreach ($niz as $ind=>$broj){
     $resenje= $resenje+$broj;
} 
     echo $resenje;
} elseif ($opr==="-"){
     $resenje=0;
     foreach ($niz as $ind=>$broj){ 
     $resenje= $resenje- $broj;
  }
     echo $resenje;
  }elseif ($opr==="/"){
    $resenje=1;
    foreach ($niz as $ind=>$broj){ 
    $resenje= $resenje/ $broj;
 }
    echo $resenje;
  
  }elseif ($opr==="*"){
   $resenje=1;
    foreach ($niz as $ind=>$broj){ 
    $resenje= $resenje* $broj;
 }
    echo $resenje;
  
    
 }
 }

    matematika($niz, $opr="*");



    echo "<br>";
     echo "<br>";


//TRECI ZADATAAK




$array=array(
  "ime"=> "Anja",
  "prezime"=> "Jovanovic",
  "godine"=> "23",
  "pol"=> "zenski",
  "mesto"=> "Kursumlija",

);



function findKey ($array, $key){ 

 

if (array_key_exists($key, $array)) {
  echo "Ovaj kljuc postoji u asocijativnom nizu.  <br>";
}
else{ 
 echo "TAKVO NESTO NE POSTOJI!";
}
}


findKey($array, 'pol');



?>