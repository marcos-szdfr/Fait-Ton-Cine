<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Un Nouveau Film</title>
</head>

<body>
    <main>
        <form action="" method="post">
            <label for="titre">Veuillez saisir le titre:</label>
            <input type="text" name="titre" id="titre">

            <label for="titre">Veuillez saisir les acteurs:</label>
            <input type="text" name="acteurs" id="acteurs">

            <label for="titre">Veuillez saisir le resume:</label>
            <input type="text" name="resume" id="resume">

            <label for="titre">Veuillez saisir le/les realisateur:</label>
            <input type="text" name="realisateurs" id="realisateurs">

            <label for="titre">Veuillez saisir la langue:</label>
            <input type="text" name="langue" id="langue">

            <label for="titre">Veuillez saisir le pays de production:</label>
            <input type="text" name="paysDeProd" id="paysDeProd">

            <label for="titre">Veuillez saisir le genre:</label>
            <input type="text" name="genre" id="genre">

            <button type="submit">valider</button>
        </form>
    </main>
</body>

</html>

<?php

require_once 'php/ajouter.php';

$titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$acteurs = filter_input(INPUT_POST, 'acteurs', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$resume = filter_input(INPUT_POST, 'resume', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$realisateurs = filter_input(INPUT_POST, 'realisateurs', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$langue = filter_input(INPUT_POST, 'langue', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$paysDeProd = filter_input(INPUT_POST, 'paysDeProd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$resultat = ajouterFilm($titre, $acteurs, $resume, $realisateurs, $langue, $paysDeProd, $genre);

if ($resultat) {
    echo "L'opération à été un succes !";
} else {
    echo "L'opération a échouer.";
}
?>