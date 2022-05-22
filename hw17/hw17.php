<?php

$users= array(

   array(  "name" => "Iva",
    "last_name"=> "Ivic",
    "age" => 23,
    "profesion" => "umetnica"
    ),
    
    
array (    "name" => "Mila",
    "last_name"=> "Milenkovic",
    "age" => 24,
    "profesion" => "profesorka"  ) ,
    
    
    
   array ("name"=> "Marija",
    "last_name"=> "Radmanovac",
    "age"=> 20,
    "profesion" => "student"  ) ,
    
    array ( 
    "name" => "Luka",
    "last_name"=> "Lukic",
    "age" => 28,
    "profesion" => "dostavljac" ),
    
    
    array (  
    "name" => "Stefan",
    "last_name"=> "Stefanovic",
    "age"=> 25,
    "profesion" => "student"),
    

    array(  
    "name" => "Bojana",
    "last_name"=> "Mehoj",
    "age" => 20,
    "profesion" => "pevacica"   ),
    
    array (
    "name" => "Stanka",
    "last_name" => "Stamenov",
    "age" => 24,
    "profesion" => "konobarica"  ),
   
    
    array ( 
    "name" => "Ana",
    "last_name" => "Zlatanovic",
    "age" => 20,
    "profesion" => "apotekar"  )
    ) ;
    
    
  
 function search_users($users, $searchContent=""){ 

 foreach ($users as $podaci){
 foreach ($podaci as $keys=> $values){}
     if (str_contains($podaci['name'], $searchContent)){
print_r($podaci['name']);
         echo "<br>";
     }  elseif (str_contains($podaci['last_name'], $searchContent)){
        print_r($podaci['name'] . " ") ;
        print_r($podaci['last_name']);
        echo "<br>";
     } elseif ($searchContent==" "){
         die ("Niste lepo ukucali osobu ili ne postoji");
     }
         
     }
    }
 

search_users($users, " ");


?>

