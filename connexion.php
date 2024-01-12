<?php

include_once("includes/fonctions.php");
connexionBdd();

$username = filter_input(INPUT_POST, "Username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);

$hiddenOrNot = "true"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <form action="connexion.php" method="post" style aria-hidden="true">
        <legend>Connexion à la BDD</legend>
        <div>
            <label for="username">Username</label>
            <input type="text" name="Username">
        </div>
        <div>
            <label for="pwd">Password</label>
            <input type="text" name="Password">
        </div>
        <div>
            <button type="submit" <?php  ?>>Log in</button>
        </div>
    </form>

    <?php
    if ($username === "maka" && $password === "maka1") {
        try {
            $hiddenOrNot = 'true';
            connexionBdd()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connexion réussie, ';

            $sql = "ALTER TABLE films
            DROP COLUMN test";
            connexionBdd()->exec($sql);

            $sql = "ALTER TABLE films
            ADD test INT(5) NOT NULL";
            connexionBdd()->exec($sql);
            echo "colonne crée. ";

            $sql = "SELECT titre, annee FROM films";
            $statement= $db->prepare($sql);

            echo("Récupération de toutes les lignes d'un jeu de résultats :\n");
            $film = $statement->fetch();

        } catch (PDOException $e) {
            $hiddenOrNot = 'false';
            echo "Erreur : " . $e->getMessage();
        }
    }





    //essai de connection 
    // var_dump($username);
    // try {
    //     $connexion = new PDO("mysql:host=localhost;dbname=fait_ton_cine;charset=UTF8", $username, $password);
    //     $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         echo'Connexion réussie';
    // }
    
    // catch (PDOException $e) {
    //     echo "Erreur : " . $e->getMessage();
    // }
    




    ?>


</body>

</html>







<!-- $pdo = new PDO("mysql:host=localhost;dbname=fait_ton_cine;charset=UTF8", "maka","maka1");
 $statement = $pdo->prepare("SELECT * FROM films");
 $statement->execute();
 $res = $statement->fetchAll(PDO::FETCH_ASSOC);
 var_dump($res); -->