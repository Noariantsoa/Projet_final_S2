<?php

    function dbconnect()
    {
        static $connect = null;

        if ($connect === null) {
            $connect = mysqli_connect('localhost', 'root', '', 'vente_universite');

            if (!$connect) {
                // Arrête le script et affiche une erreur si la connexion échoue
                die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
            }

            // Optionnel : définir l'encodage des caractères pour gérer les accents (UTF-8 recommandé)
            mysqli_set_charset($connect, 'utf8mb4');
        }

        return $connect;
    }

    function get_all_lines($sql)
    {
        //echo $sql;
        $req = mysqli_query(dbconnect(),$sql );
        $result = array();
        while ($line = mysqli_fetch_assoc($req)) {
            $result[] = $line;
        }
        mysqli_free_result($req);
        return $result;
    }

    function get_one_line($sql)
    {
        $req = mysqli_query(dbconnect(),$sql );
        $result = mysqli_fetch_assoc($req);
        mysqli_free_result($req);
        return $result;
    }

    function get_user_info ($etu)
    {
        $sql = "SELECT * FROM membre WHERE numero_etu='$etu'";
        $result = get_one_line($sql);
        return $result;
    }

    function login ($etu)
    {
        $sql = "SELECT * FROM membre WHERE numero_etu='$etu'";
        $result = mysqli_query(dbconnect(), $sql);
        $nb_result = mysqli_num_rows($result);
        $check = false;
        // echo $nb_result;
        if($nb_result > 0)
        {
            $check = true;
        } else {
            $check = false;
        }
        return $check;
    }

    function sign_in ($etu, $nom)
    {
        $sql = "INSERT INTO membre(nom, numero_etu) VALUES ('$nom', '$etu')";
        mysqli_query(dbconnect(), $sql);
    }

    function get_all_produits(){
        $sql = "SELECT p.nom AS nom_produit, pm.*, m.nom, m.numero_etu from produit p 
                JOIN produit_membre pm ON p.id_produit LIKE pm.id_produit
                JOIN membre m ON m.id_membre LIKE pm.id_membre ORDER BY m.numero_etu ASC";
        $result = get_all_lines($sql);
        return $result;
    }

    // function faire_achat ()
    function get_produits_envente()
    {
        $sql = "SELECT * FROM produit";
        return get_all_lines($sql);
    }

?>