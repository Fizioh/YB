<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('contact@yassine-benosmane.fr', $_POST['name'], $_POST['message'], $_POST['email']);
    if ($retour) {
        $retour = array();
        echo "<script type='text/javascript'>alert('Votre mail a bien été envoyé'); window.history.go(-1)</script>";

    }
    ?>
</body>
</html>