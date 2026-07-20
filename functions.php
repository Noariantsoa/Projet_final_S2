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
        $sql = "SELECT p.nom AS nom_produit,p.id_produit, pm.*,m.id_membre, m.nom, m.numero_etu from produit p 
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

    // Exécute une requête qui ne renvoie pas de résultat (INSERT, UPDATE, DELETE)
    function execute_query($sql)
    {
        $req = mysqli_query(dbconnect(), $sql);
        if (!$req) {
            die('Erreur SQL : ' . mysqli_error(dbconnect()));
        }
        return $req;
    }

    function mividy($id_produit, $quantite, $quantite_initial, $id_mpivarotra, $id_produit_membre){
        $conn = dbconnect();
        if ($quantite < 0){
            // echo "Veuillez saisir une quantie positive";
            return 1;
        }
        else if ($quantite > $quantite_initial){
            // echo "la quantite saisi est trop grande veuillez a la diminuer";
            return 1;
        }
        else if ($quantite_initial >= $quantite){
        $sql_manala = "UPDATE produit_membre SET quantite_dispo = $quantite_initial-$quantite WHERE id_produit LIKE $id_produit AND id_membre LIKE $id_mpivarotra";
        execute_query($sql_manala);
        $sql_insert = "INSERT INTO vente (date_vente,heure,id_produit_membre,quantite) values (CURDATE(),CURTIME(),$id_produit_membre,$quantite)";
        execute_query($sql_insert);
    
        // echo "Merci pour votre achat";
        return 0;
        }
        
    }

    function vendre ($produit, $quantite, $prix, $date, $user)
    {
        $sql = "INSERT INTO produit_membre(id_produit, id_membre, prix_vente, quantite_dispo, date_dispo)
            VALUES ($produit, $user, $prix, $quantite, $date)";
        mysqli_query(dbconnect(), $sql);
    }

    function get_montant_vente ($user)
    {
        $sql = "SELECT SUM(v.quantite*pm.prix_vente) AS montant_total FROM vente v JOIN produit_membre pm
            ON pm.id_produit_membre=v.id_produit_membre WHERE pm.id_membre='$user'";

        return get_one_line($sql);
    }

?>