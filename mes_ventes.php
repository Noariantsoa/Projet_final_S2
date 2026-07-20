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
</head>
<body>
    <h2>Le montant total des ventes de l'etudiant <?php echo $_GET['num_etu'] ?> :</h2>
    <?php if ($montant_total['montant_total'] !=null){?>
    <h3><?= $montant_total['montant_total'] ?> AMG</h3>
    <?php } ?>
    <?php if ($montant_total['montant_total'] == null) { ?>
        <h3><?php echo 0 ?> AMG</h3>    
    <?php } ?>
</body>
</html>