<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    setcookie("username",$nom,time()+3600);

    echo 'Nom:' . htmlspecialchars($nom) . '<br/>';
    echo 'Email:' . htmlspecialchars($email) . '<br/>';
    echo 'Message:' . htmlspecialchars($message) . '<br/>';
}
