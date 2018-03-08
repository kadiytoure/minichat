<?php
//setcookie('pseudo', 'hi', time() + 365*24*3600, null, null, false, true);
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>minichat</title>
</head>

<body>
    <form action="minichat_post.php" method="post">
      <label for="pseudo">Pseudo:</label>
       <input type="text" id="idpseudo" name="pseudo" placeholder="enter your name" value= "<?php
       if(isset($_COOKIE['pseudo'])){
           echo htmlspecialchars($_COOKIE['pseudo']);
           }?>"><br>
      <label for="message">Message:</label>
       <input type="text" id="idmessage" name="message" placeholder="enter your message" /><br/>
    <input type="submit" value="send" /><br/>
        
       
    </form>

<?php
          // }
// connexion to DB
try {
$bdd = new PDO('mysql:host=localhost; dbname=minichat', 'kadiy', 'kadiy');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// 10 last messages have been taken
$reponse = $bdd->query('SELECT pseudo, message, date FROM chat ORDER BY ID DESC LIMIT 0, 10');

//messages have been availed to see
$donnees = $reponse->fetch();
while ($donnees = $reponse->fetch()) {
 echo '<p>' . htmlspecialchars($donnees['date']) . ' ' . htmlspecialchars($donnees['pseudo']) . ' ' . ':' . ' ' . htmlspecialchars($donnees['message']) . '</p>';
 
}

$reponse->closeCursor();
?>

</body>

</html>