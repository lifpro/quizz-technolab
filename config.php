<?php
$host="localhost";
$user="dev";
$pwd="dev";
$db="quizz";

try{
    $connexion =new PDO("mysql:host=".$host.";dbname=".$db,$user,$pwd);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   // echo "Connexion reussie !". '<br/>';
}catch(PDOException $e){
    echo "Error ".$e->getMessage(). '<br/>';
}