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
    <form action=  "traitement.php" method="post">
    <h2>Inscription</h2>
        <span>
            <label for="name">Nom : </label>
            <input type="text" id="nom" name="nom" size="20" required>
        </span>

        <span>
            <label for="prenom">Prénom: </label>
            <input type="text" name="prenom" id="prenom" required>
        </span>
        <span>
            <label for="email">Adresse Mail : </label>
            <input type="email" name="email" id="email" size="30" required>
        </span>
        <span>
            <label for="MDP">Mot de passe : </label>
            <input type="password" name="MDP" id="MDP" required>
        </span>
        <span>
            <label for="MDP2">Confirmer le mot de passe : </label>
            <input type="password" name="MDP2" id="MDP2" required>
        </span>
        <span>    
        <input type="submit" name="valider" id="valider">
        </span>
    </form>
    </section>
<footer>
    <p>ABcorporation</p>
</footer>
<script src="js.js"></script>
</body>
</html>
