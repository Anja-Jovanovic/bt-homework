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





if(!is_numeric($_GET['dan']) || empty($_GET['dan'])){
echo "Morate upisati broj dana!! <br>";

   } 
    if(!is_numeric($_GET['mesec']) || empty($_GET['mesec'])){
         echo "Morate upisati broj meseci! <br>";
          }
    
          if(!is_numeric($_GET['godina']) || empty($_GET['godina'])){
               echo "Morate upisati broj godine!! <br>";
        
              }
    
            
 $dan= $_GET['dan'];
$mesec= $_GET['mesec'];
$godina = $_GET['godina'];


if($mesec==1){
    $mesec = "januar";
} elseif ($mesec==2){
    $mesec = "februar";
}   elseif ($mesec==3){
    $mesec = "mart";
}   elseif ($mesec==4){
    $mesec = "april";
}   elseif ($mesec==5){
    $mesec = "maj";
}   elseif ($mesec==6){
    $mesec = "jun";
}   elseif ($mesec==7){
    $mesec = "jul";
}   elseif ($mesec==8){
    $mesec = "avgust";
}   elseif ($mesec==9){
    $mesec = "septembar";
}   elseif ($mesec==10){
    $mesec = "oktobar";
}   elseif ($mesec==11){
    $mesec = "novembar";
}   elseif ($mesec==12){
    $mesec = "decembar";


}

       
if ($godina<1970){
    die ("Godine se racunaju od 1970!");
}else {

   if($dan>31 && $mesec==="januar" || $dan<0){
        die ("Januar ima samo 31 dan");
    } elseif($dan>0 && $dan <= 31 && $mesec==="januar"){
        die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
    }

if ($godina%4!==0){
    if ($dan>28 && $mesec==="februar" || $dan<0){
    die ("Februar ima samo 28 dana");
    }elseif($dan>0 && $dan<=28 && $mesec==="februar"){
        die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
    }

}else {
    if ($dan>29 && $mesec==="februar" || $dan<0){
        die ("Februar ima samo 29 dana");
        }elseif($dan>0 && $dan<=29 && $mesec==="februar"){
            die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
        }
}

    if ($dan>31 && $mesec==="mart" || $dan<0){
   die ("Mart ima samo 31 dana");
  }elseif($dan>0 && $dan<=31 && $mesec==="mart"){
  die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
        }



  if ($dan>30 && $mesec==="april" || $dan<0){
  die("April ima samo 30 dana");
   }elseif($dan>0 && $dan<=30 && $mesec==="april"){
   die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
   }


   if ($dan>31 && $mesec==="maj" || $dan<0){
   die ("Maj ima samo 31 dana");
   }elseif($dan>0 && $dan<=31 && $mesec==="maj"){
   die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
   }


   if ($dan>30 && $mesec==="jun" || $dan<0){
    die ("Jun ima samo 30 dana");
    }elseif($dan>0 && $dan<=30 && $mesec==="jun"){
    die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
   }


   if ($dan>31 && $mesec==="jul"){
    die ( "Jul ima samo 31 dana");
    }elseif($dan>0 && $dan<=31 && $mesec==="jul"){
    die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
                                            }


      if ($dan>30 && $mesec==="avgust"){
     die ("Avgust ima samo 31 dana");
      }elseif($dan>0 && $dan<=31 && $mesec==="avgust"){
     die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
     }


     if ($dan>30 && $mesec==="septembar"){
     die ("Septembar ima samo 30 dana");
     }elseif($dan>0 && $dan<=30 && $mesec==="septembar"){
     die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
    }



       if ($dan>31 && $mesec==="oktobar"){
       die ("Oktobar ima samo 31 dana");
       } elseif($dan>0 && $dan<=31 && $mesec==="oktobar"){
        die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
       }

     if($dan>30 && $mesec==="novembar"){
     die ("Novembar ima samo 30 dana");
     } elseif($dan>0 && $dan<=30 && $mesec==="novembar"){
        die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
     }
         if($dan>31 && $mesec==="decembar"){
         die ("Decembar ima samo 31 dana");
         } elseif($dan>0 && $dan<=31 && $mesec==="decembar"){
         die ("Izabrali ste  " . $dan . ". " . $mesec . " " . $godina . ".");
         }
                                                                                    
        }
                                                                             

?>








</body>
</html>