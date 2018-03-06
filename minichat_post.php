<?php
// Effectuer requête insérant le message(la requête prepare);
// Rediriger vers minichat.php

//Values of form have been taken
$pseudo = htmlspecialchars ($_POST['pseudo']);
$message = htmlspecialchars ($_POST['message']);

// condition to verify if message & pseudo exist;
if (empty($_POST['message'] AND $_POST['pseudo'])){
    http_response_code(400);
    header('Content-Type: text/plain');
    echo 'expect a message parameter';
    exit(1);
}
$date = date("Y-m-d H:i:s");
// connexion to DB;
try {
$bdd = new PDO('mysql:host=localhost; dbname=minichat', 'kadiy', 'kadiy');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// message hasse been inserted with a prepared request
$req = $bdd->prepare('INSERT INTO chat(`id`, `pseudo`, `message`, `date`) VALUES(:id, :pseudo, :message, :date)');

$req->execute(array(
    'id' => $id,
    'pseudo' => $pseudo,
    'message' => $message,
    'date' => $date
));

// the visitor has been redirected to the minichat (minichat.php)
header('Location: minichat.php');
?>