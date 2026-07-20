<?php

include('functions.php');

$etu = $_GET['etu'];
// echo $etu;

if(isset($_GET['nom']))
{
    $nom = $_GET['nom'];
    sign_in($etu, $nom);
}

$check_loging = login($etu);
if($check_loging)
{
    header("Location:home.php");
} else {
    header("Location:index.php?error=1&etu='$etu'");
}
?>