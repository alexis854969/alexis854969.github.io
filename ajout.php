<!DOCTYPE html>
<html lang="fr">
<head>
    </div>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style 10.css" /><!--
            ne pas oublier de changerle nom de la feuille de style
        -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('nav.php'); 
    ?>
     <h1>Ajout</h1>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label"></label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Bouton.</div>
            </div>
            <div class="mb-3">
                <label for="message" class="forzm-label">Ajoutez</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
</body>
</html>