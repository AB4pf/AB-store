<?php

    $img = $_FILES["image"]["tmp_name"];
    $path = "./image/";
    $nom = $_POST["nom_image"];
    $full_path = $path . $nom . ".png";
    move_uploaded_file($img, $full_path);


    include 'base.php';

    if(isset($_POST['nom'])  &&
    strlen($_POST['nom']) > 1 &&
    isset($_POST['modele']) &&
    strlen($_POST['modele']) > 1 &&
    isset($_POST['taille'])  &&
    isset($_POST['prix'])    &&
    isset($_POST['nom_image'])){
        $nom= $_POST['nom'];
        $modele= $_POST['modele'];
        $taille= $_POST['taille'];
        $prix= $_POST['prix'];
        $image= $_POST['nom_image'];
        

        $requete= $database-> prepare('INSERT INTO db.sneacker(nom, modele, taille, prix, image) VALUES (:nom, :modele, :taille, :prix, :nom_image)');
        $requete-> bindPAram('nom', $nom);
        $requete-> bindPAram('modele', $modele);
        $requete-> bindPAram('taille', $taille);
        $requete-> bindPAram('prix', $prix);
        $requete-> bindPAram('nom_image', $image);
        $requete-> execute();
        header("location: insertion.php");
        die();
    } else {
        header("location: insertion.php");
        die();
    }
?>