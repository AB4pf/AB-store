<?php
    include 'base.php';

    $valeur = $_POST["suppr"];
    
    $requete= $database-> prepare('DELETE FROM db.sneacker WHERE id = :id');
        $requete-> bindPAram('id', $valeur, PDO::PARAM_INT);
        $requete-> execute();
        header("location: accueil.php");
        die();
?>