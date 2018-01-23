<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    #chat {
        background-color: green;
        opacity: 0.5;
        height: 55vh;
        overflow-y: scroll;
    }
    </style>
</head>

<body>
<div id="chat"></div>
    <form action="minichat_post.php" method="post">
        <label for="pseudo">Pseudo:</label>
        <input type="text" id="idpseudo" name="pseudo" placeholder="enter your name" /><br/>
        <label for="message">Message:</label>
        <input type="text" id="idmessage" name="message" placeholder="enter your message" /><br/>
        <input type="submit" value="send" /><br/>
    </form>
// manque liste des messages;

</body>

</html>