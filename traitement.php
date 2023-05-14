<?php

    include 'base.php';

    if(isset($_POST['nom'])  &&
    strlen($_POST['nom']) > 1 &&
    isset($_POST['prenom']) &&
    strlen($_POST['prenom']) > 1 &&
    isset($_POST['email'])  &&
    isset($_POST['MDP'])    &&
    isset($_POST['MDP2'])   &&
    $_POST['MDP']== $_POST['MDP2']){
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $email= $_POST['email'];
        $MDP= $_POST['MDP'];
        $MDPE= sha1($MDP);
        $MDP2= $_POST['MDP2'];
        $MDPE= sha1($MDP2);
        
        header("location: connexion.php");

        $requete= $database-> prepare('INSERT INTO db.user(nom, prenom, email, mdp, mdp2) VALUES (:nom, :prenom, :email, :MDP, :MDP2)');
        $requete-> bindPAram('nom', $nom);
        $requete-> bindPAram('prenom', $prenom);
        $requete-> bindPAram('email', $email);
        $requete-> bindPAram('MDP', $MDPE);
        $requete-> bindPAram('MDP2', $MDPE);
        $requete-> execute();
    } else {
        header("location: inscription.php");
        die();
    }
?>