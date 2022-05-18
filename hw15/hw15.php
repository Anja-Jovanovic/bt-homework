<?php

//PRVI ZADATAK

$hwArray = ["Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"]; 


if (in_array("Anja", $hwArray))
  {
    echo "Vec postoji u nizu!!";
  }
  else
  {
    array_push($hwArray, "Anja");
    print_r($hwArray) ;
  }


echo "<br>";
echo "<br>";


if (in_array("Jelena", $hwArray))
  {
    echo "Vec postoji u nizu!!";
  }
  else{
     $novielement="Jelena";
    array_splice($hwArray, 2, 0, $novielement);
    print_r($hwArray);
  }


echo "<br>";
echo "<br>";

$clanovi=count($hwArray);
echo $clanovi;

echo "<br>";
echo "<br>";

if (in_array("Stefan", $hwArray))
  {
    echo "Vec postoji u nizu!!";
  }
  else{
array_unshift ($hwArray, "Stefan");
print_r($hwArray) ;
}

echo "<br>";
echo "<br>";

unset ($hwArray[6]);
print_r($hwArray) ;

echo "<br>";
echo "<br>";

print_r(array_unique($hwArray));

echo "<br>";
echo "<br>";

//DRUGI ZADATAK


$data= array(

    array("name" => "Pera",
	"last_name" => "Peric",
	"age" => 28,
	"gender" => "male",
	"avg_rating" => 8,
	"married" => true,
"courses" =>[ "laravel", "react", "swift"]
),
array("name" => "Marko",
"last_name" => "Markovic",
"age" => 25,
"gender" => "male",
"avg_rating" => 6,
"married" => false,
"courses" => ["python", "react", "jQuery"]
),
array("name" => "Iva",
"last_name" => "Ivic",
"age" => 23,
"gender" => "female",
"avg_rating" => 6.5,
"married" => true,
"courses" =>  ["react", "java"]
),
array("name" => "Luka",
"last_name" => "Lukic",
"age" => 21,
"gender" => "male",
"avg_rating" => 7.5,
"married" => false,
"courses" => ["laravel", "python"]
),
array("name" => "Mila",
"last_name" => "Milic",
"age" => 25,
"gender" => "female",
"avg_rating" => 9.5,
"married" => false,
"courses" => ["java", "swift", "jQuery"]
)

);



foreach ($data as $podaci){
foreach($podaci as $naziv => $vrednost){


if($podaci['married']=== true && $podaci['gender']=== "female"){
   $status = "je udata";
} elseif ( $podaci['married']=== false && $podaci['gender']=== "female"){
    $status = "nije udata";
} elseif ( $podaci['married']=== true && $podaci['gender']=== "male"){
    $status = "je ozenjen";
} elseif (  $podaci['married']=== false && $podaci['gender']==="male"){
    $status = "nije ozenjen";
}



}

echo $podaci['name'] . " " . $podaci['last_name'] . " ima " . $podaci['age'] . " godina i " . $status . ". Ima prosecnu ocenu " . $podaci['avg_rating'] . " a kursevi koje slusa su: " . $kursevi=implode(", ",$podaci['courses']) . ".";
echo "<br>";
}
?>