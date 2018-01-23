<?php
// Effectuer requête insérant le message;
// Rediriger vers minichat.php

//récupération des valeurs du formulaire
$pseudo = htmlspecialchars ($_POST['pseudo']);
$message = htmlspecialchars ($_POST['message']);

if (empty($_POST['message'] AND $_POST['pseudo'])){
    http_response_code(400);
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
}
header('Location: minichat.php');

$bdd = new PDO('mysql:host=localhost; dbname=minichat;charset=utf-8', 'kadiy', 'kadiy');

?>