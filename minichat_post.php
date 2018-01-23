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
    exit(1);
} else {
header('Location: minichat.php');
}


try {
$bdd = new PDO('mysql:host=localhost; dbname=minichat;charset=utf-8', 'kadiy', 'kadiy');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
/*
$reponse = $bdd->query('SELECT * FROM chat LIMIT 0, 10');
$donnees = $reponse->fetch();
while ($donnees = $reponse->fetch()) {

}

$reponse->closeCursor();
*/
$req = $bdd->prepare('INSERT INTO chat(`id`, `pseudo`, `message`) VALUES(:id, :pseudo, :message)');
$req->execute(array(
    'id' => $id,
    'pseudo' => $pseudo,
    'message' => $message
));

echo 'Le message a bien été ajouté!';

if ($req->execute()) {
    echo 'ton message a bien été envoyé';
    exit(1);
    } else {
       echo 'message error';
    }

?>