<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $newsletter = $_POST['newsletter'];
    $file_name = $_FILES['cv']['name'];
    $file_tmp = $_FILES['cv']['tmp_name'];
    $dest="./upload/";

    if(move_uploaded_file($file_tmp,$dest.$file_name)){
        echo "Fichier téléversé avec succès";
    }else{
        echo "Erreur lors du téléversement du fichier";
    }

    echo 'Nom:' . htmlspecialchars($nom) . '<br/>';
    echo 'Email:' . htmlspecialchars($email) . '<br/>';
    echo 'Message:' . htmlspecialchars($message) . '<br/>';
    echo 'Newsletter:' . htmlspecialchars($newsletter) . '<br/>';
}
