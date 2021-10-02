<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

echo 'Merci ' . $_POST ['userSurName'].' ' . $_POST['userName'] .' de nous avoir contacté à propos de '. $_POST['subject'] .

'. Un de nos conseiller vous contactera soit à l’adresse '. $_POST['courriel'] .' ou par téléphone au '. $_POST['phoneNumber'] .' dans les plus brefs délais pour traiter votre demande :'.
$_POST['userMessage'];




?>



</body>
</html>


