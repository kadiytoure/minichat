<?php
// Effectuer requête insérant le message;
// Rediriger vers minichat.php
header('Location: minichat.php');
//récupération des valeurs du formulaire
$pseudo = htmlspecialchars ($_POST['pseudo']);
$message = htmlspecialchars ($_POST['message']);

?>