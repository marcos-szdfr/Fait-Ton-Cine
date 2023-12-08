<?php
$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn = 'mysql:host=localhost;dbname=fait_ton_cine;charset=utf8';
$pdo = new PDO($dsn, "maka", "maka1", $option);

$username = filter_input(INPUT_POST, "Username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);
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
    <form action="connexion.php" method="post">
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
            <button type="submit">Log in</button>
        </div>
    </form>

    <?php
    if ($username === "maka" && $password === "maka1") {
        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connexion réussie';
            $sql = "ALTER TABLE films
            ADD test INT(5) NOT NULL";

            $pdo->exec($sql);
            echo "Colonne crée";
        } catch (PDOException $e) {
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