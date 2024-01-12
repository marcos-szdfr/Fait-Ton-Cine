<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Un Noveau Réalisateur</title>
</head>

<body>
    <label for="nom">Veuillez saisir nom:</label>
    <input type="text" name="nom" id="nom">

    <label for="prenom">Veuillez saisir prénom:</label>
    <input type="text" name="prenom" id="prenom">

    <label for="anneeNaissance">Veuillez saisir l'année de naissance:</label>
    <input type="number" name="anneeNaissance" id="anneeNaissance">

    <button type="submit">valider</button>
</body>

</html>

<?php

require_once 'php/ajouter.php';

$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$anneeNaissance = filter_input(INPUT_POST, 'anneeNaissance', FILTER_VALIDATE_INT);

$resultat = ajouterRealisateur($nom, $prenom, $anneeNaissance);

if ($resultat) {
    echo "L'opération à été un succes !";
} else {
    echo "L'opération a échouer.";
}

?>