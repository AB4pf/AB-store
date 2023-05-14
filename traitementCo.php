<?php
    
    include 'base.php';

    if(isset($_POST['email'])  &&
    isset($_POST['MDP2']) &&
    isset($_POST["submit"])){
        $email= $_POST['email'];
        $MDP2= $_POST['MDP2'];
        $MDP2cr = sha1($MDP2);
        
 
        $requete= $database-> prepare('SELECT * FROM db.user');
        $requete-> execute();
        while($donne=$requete->fetch()){
            if(($donne["email"])==$email){
                if(($donne["mdp2"])==$MDP2cr){
                    session_start();
                    $_SESSION["username"] = $email;
                    $_SESSION["admin"] = $donne["admin"];
                    if(($_SESSION["admin"])){
                        header("Location: accueil.php");
                        die();
                    } else {
                        header("location: accueil.php");
                        die();
                    }
                }
            }
        }
        header("location: connexion.php?error=email");
    } else {
        header("location: inscription.php");
        die();
    }
?>