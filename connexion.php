<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "email"){
            $error = "email";
        }
    }else{
        $error = "";
    }
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
<section class='sec'>
    <form action= "traitementCo.php" method="post">
    <h2>Connexion</h2>
        <span>
            <label for="email">Adresse Mail : </label>
            <input type="email" name="email" id="email" size="30" required>
        </span>
        <span>
            <label for="MDP">Mot de passe : </label>
            <input type="password" name="MDP2" id="MDP2" required>
        </span>
        <span>
            <input type="submit" name="submit" id="submit"><a class="button" href="inscription.php">Créer un compte</a>
        </span>
        <span>
            <?php
                if($error == "email")
                echo "<p id=\"error\"> Aucun compte associé a cet mail </p>";
                echo "<p id=\"error2\"> Entrez un mail valide ou crée un compte </p>";
            ?>
        </span>
    </form>
    </section>
<footer>
    <p>ABcorporation</p>
</footer>
</body>
</html>
