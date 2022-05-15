<?php



function broj ( $ukupnoGorivo,$potrosnjaPoKamionu,$ostatakGorivaFlag=false) {
   
    $brojKamionaKojiMoguDaPredjuRutu= $ukupnoGorivo/$potrosnjaPoKamionu;



if ($ostatakGorivaFlag===true){
    $ostatakGorivaFlag=$ukupnoGorivo%$potrosnjaPoKamionu;
    echo $ostatakGorivaFlag;
} else {
    echo floor($brojKamionaKojiMoguDaPredjuRutu);
}

}



broj (100,8);





?>