<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="thanks.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="userName" id="name">
    </div>
    <div>
        <label for="surName">Prenom :</label>
        <input type="text"name="userSurName" id="surName">
    </div>
    <div>
        <label for="email">Votre email :</label>
        <input type="email" name="courriel" id="email">
    </div>
    <div>
        <label for="phoneNumber">Numero de telephone</label>
        <input type="number" name="phoneNumber" id="phoneNumber">
    </div>
    <div>
        <label for="demande">Votre demande</label>
        <select name="subject" id="demande">
            <option value="Info">Demande d'informations</option>
            <option value="rdv">Demande de rdv</option>
        </select>
    </div>
    <div>
        <label for="message">Votre message : </label>
        <textarea name="userMessage" id="message" cols="30" rows="10"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>


</body>
</html>
