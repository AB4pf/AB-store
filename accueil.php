<?php
    session_start();

    include 'base.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AB store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="mega_box_accueil">
    <h1 class="box_tit_accueil"><a href="accueil.php">AB store</a></h1>
    <div class="box_header_accueil">
        <ul>
            <li>
                <a href="connexion.php">Log in</a>  
            </li>
            <li>
                <a href="panier.php">Panier</a>  
            </li>
            <li>
                <a href="deco.php">Déconexion</a>  
            </li>
            <?php 
                if(!(isset($_SESSION["admin"]) && $_SESSION["admin"])){
                    echo '<li><a href="insertion.php">Insertion</a></li>
                    <li><a href="update.php">Mise à jour</a></li>';
                }
            ?>
        </ul>

    </div>
    
 
</header>
<hr>
<section class='mega_box'>
    <div class='page_article'>

        <?php
            $requete= $database-> prepare('SELECT * FROM db.sneacker');
            $requete-> execute();
            $req = $requete -> fetchAll();
            $html ="";
            foreach ($req as $result) {
                $html .= "<div class='box_article'>
                                <div class='img_article'>
                                    <img src='image/".$result['image'].".png' alt='logo'>
                                </div>
                                <div class='description_img'>
                                    <p>".$result['nom']."</p>
                                    <p>".$result['modele']."</p>
                                    <p>".$result['prix']." €</p>
                                </div>
                            </div>
                                <button name='modif' class='modif' value='".$result['id']."' id='modifier_".$result['id']."'>Modifier</button>
                                <div class='description_img'>
                                <form action= 'traitementModif.php' method='post'>
                                    <input type='text' value='".$result['nom']."'>
                                    <input type='text' value='".$result['modele']."'>
                                    <input type='text' value='".$result['taille']."'>
                                    <input type='text' value='".$result['prix']."'€>
                                    <input type='text' value='".$result['nom_image']."'>
                                    <input type='submit' name='valider' id='valider'>
                                    
                                    </form>
                                </div>
                            <form action='traitementSuppr.php' method='post' >
                                <button name='suppr' value='".$result['id']."' id='valider'>Supprimer</button>
                            </form>";
            }
            echo $html;
    
        ?>
    </div>
</section>
<footer>
    <p>ABcorporation</p>
</footer>
<script src="modif.js"></script>
</body>
</html>

