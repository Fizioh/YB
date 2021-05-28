<?php

header("Location: https://www.yassine-benosmane.fr");

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message</title>
</head>

<body>
    <?php
    $retour = mail('contact@yassine-benosmane.fr', $_POST['name'], $_POST['message'], $_POST['email']);
    if ($retour) {
      echo '<p>Votre message a été envoyé</p>';
    }
    ?>
</body>
</html>