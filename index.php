<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Connectez vous</h2>
    <?php if(!isset($_GET['error'])) { ?>
        <form action="traitement_login.php" method="get">
            <p>Saisir votre ETU<input type="text" value="00xxxx" name="etu"></p>
            <p><input type="submit" value="Se connecter"></p>
        </form>
    <?php } ?>

    <?php if(isset($_GET['error'])) { ?>
        <form action="traitement_login.php" method="get">
            <p>Saisir votre ETU<input type="text" value="" name="etu"></p>
            <p>Saisir votre nom<input type="text" name="nom"></p>
            <p><input type="submit" value="S'inscrire"></p>
        </form>
    <?php } ?>

</body>
</html>