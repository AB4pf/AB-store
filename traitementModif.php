<?php
    include 'base.php';

    if(isset($_POST['nom'])  &&
    isset($_POST['modele']) &&
    isset($_POST['taille'])  &&
    isset($_POST['prix'])    &&
    isset($_POST['nom_image'])){
        $nom= $_POST['nom'];
        $modele= $_POST['modele'];
        $taille= $_POST['taille'];
        $prix= $_POST['prix'];
        $image= $_POST['nom_image'];

    $valeur = $_POST["modif"];
    
    $requete= $database-> prepare('UPDATE db.sneacker SET  nom = :nom modele = :modele, taille = :taille, prix = :prix, image = :nom_image WHERE id =:id');
        $requete-> bindPAram('nom', $nom);
        $requete-> bindPAram('modele', $modele);
        $requete-> bindPAram('taille', $taille);
        $requete-> bindPAram('prix', $prix);
        $requete-> bindPAram('nom_image', $image);
        $requete-> bindPAram('id', $valeur, PDO::PARAM_INT);
        $requete-> execute();
        header("location: accueil.php");
        die();
    }
?>