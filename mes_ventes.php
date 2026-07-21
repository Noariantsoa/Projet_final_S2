<?php
    include("functions.php");
    session_start();

    $montant_total = get_montant_vente ($_GET['id_membre']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Le montant total des ventes de l'etudiant <?php echo $_GET['num_etu'] ?> :</h2>
    <?php if ($montant_total['montant_total'] !=null){?>
    <h3><?= $montant_total['montant_total'] ?> Ar</h3>
    <?php } ?>
    <?php if ($montant_total['montant_total'] == null) { ?>
        <h3><?php echo 0 ?> Ar</h3>    
    <?php } ?>
    </div>
</body>
</html>