<?php
$fichier=fopen("./files/etudiants.txt","a");
if($fichier){
    // while(($ligne=fgets($fichier))!==false){
    //     echo $ligne.'<br/>';
    // }
    fwrite($fichier,"Babani KONE");
    fclose($fichier);
}