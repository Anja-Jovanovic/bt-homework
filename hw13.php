<?php



function bazeniSvi(){
$a=2;
$b=4;
$r=4;


function bazenJedan($a,$b){
    $x=$a*$b;
    return $x;
    }
    echo "Povrsina prvog bazena je " .  bazenJedan($a,$b);
    echo "<br>";
   
   


function bazenDva($r){
    
    $y=$r**2*pi();
    return $y;
    }
    echo "Povrsina drugog bazena je " . bazenDva($r);
    echo "<br>";
    
    
function bazenTri($a,$b){
        
    $z= ($a * $b) + ((($b/2)**2*pi())/2);  
     return $z;
     }
     echo "Povrsina treceg bazena je " . bazenTri($a,$b);
     echo "<br>";
    

     
    echo "Povrsina svih bazena je " . bazenJedan($a,$b) + bazenDva($r) + bazenTri($a,$b);
    
    echo "<br>";
    


}



   bazeniSvi();
?>