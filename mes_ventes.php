<?php
    include("functions.php");
    session_start();

    $montant_total = get_montant_vente ($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mes ventes</h2>
    <p><?= $montant_total['montant_total'] ?></p>
</body>
</html>