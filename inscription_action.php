<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $newsletter = $_POST['newsletter'];
    if(empty($newsletter)){
        $newsletter = 0;
    }
    else{
        $newsletter = 1;
    }
    $file_name = $_FILES['cv']['name'];
    $file_tmp = $_FILES['cv']['tmp_name'];
    $dest="./upload/";

    if(move_uploaded_file($file_tmp,$dest.$file_name)){
       // echo "Fichier téléversé avec succès". '<br/>';
    }else{
        echo "Erreur lors du téléversement du fichier". '<br/>';
    }
    echo 'Nom:' . htmlspecialchars($nom) . '<br/>';
    echo 'Email:' . htmlspecialchars($email) . '<br/>';
    echo 'Newsletter:' . htmlspecialchars($newsletter) . '<br/>';
    echo 'Photo:' . htmlspecialchars($file_name) . '<br/>';
    $sql="INSERT INTO inscriptions (nom, email, newsletter, photo) VALUES (?, ?, ?, ?)";
    $stmt=$connexion->prepare($sql);
    $stmt->execute([$nom, $email, $newsletter, $file_name]);
    echo "Inscription reussie !". '<br/>';

    // $connexion =new mysqli($host,$user,$pwd,$db);

    // if($connexion->connect_error){
    //     die("Connexion échouée : ".$connexion->connect_error);
    // }
    // echo "Connexion reussie !". '<br/>';
 

        echo 'Nom:' . htmlspecialchars($nom) . '<br/>';
        echo 'Email:' . htmlspecialchars($email) . '<br/>';
        echo 'Newsletter:' . htmlspecialchars($newsletter) . '<br/>';
        echo 'Photo:' . htmlspecialchars($file_name) . '<br/>';
}
