<?php
    session_start();

    include 'base.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AB store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>AB store </h1>
    <a href="connexion.php"><img class="connect" src="image\connexion.png" alt="logo"></a>  
    <a href="panier.php"><img class="panier" src="image\panier.png" alt="logo"></a>
    <a href="deco.php"><img src="image\dog.png" alt="logo"></a>
<?php 

    if(!(isset($_SESSION["admin"]) && $_SESSION["admin"])){
        echo '<a href="insertion.php"><img class="insert" src="image\logo insertion.png" alt="logo"></a>
    <a href="update.php"><img class="update" src="image\logo update.png" alt="logo"></a>';
    }
?> 
</header>
<hr>
<section class='page_accueil'>
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

