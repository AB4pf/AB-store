<?php 
    session_start();
    if(!isset($_SESSION["admin"]) || !$_SESSION["admin"]){
        header ("location: accueil.php");
        die();
    }else{

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
</header>
<hr>
<section>
    <form action=  "traitementInsert.php" method="post" enctype="multipart/form-data">
    <h2>Insertion</h2>
        <span>
            <label for="name">Nom : </label>
            <input type="text" id="nom" name="nom" size="20" required>
        </span>
        <span>
            <label for="modele">Modele : </label>
            <input type="text" name="modele" id="modele" required>
        </span>
        <span>
            <label for="taille">Taille : </label>
            <input type="number" placeholder="1.0" step="0.01" name="taille" id="taille" required>
        </span>
        <span>
            <label for="prix">Prix : </label>
            <input type="number" placeholder="1.0" step="0.01" name="prix" id="prix" required>
        </span>
        <span>
            <label for="image">Image : </label>
            <input type="file" id="image" name="image" accept="image/png, image/jpeg" required>
        </span>

        <span>
            <label for="nom_image">Nom de l'image : </label>
            <input type="text" id="nom_image" name="nom_image" required>
        </span>
        <span>    
        <input type="submit" name="valider" id="valider">
        </span>
    </form>
    </section>
<footer>
    <p>ABcorporation</p>
</footer>
</body>
</html>

<?php
    }
?>



