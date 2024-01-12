<?php

require_once 'fonctions.php';

function modifierFilmById(string $titre, string $acteurs, string $resume, string $realisateurs, string $langue, string $paysDeProd, string $genre, int $id) : bool {
    $pdo = connexionBdd();

    $sql = "UPDATE films SET titre = :titre, acteurs = :acteurs, resume = :resume, realisateurs = :realisateurs, genre = :genre WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        ':titre' => $titre,
        ':acteurs' => $acteurs,
        ':resume' => $resume,
        ':realisateurs' => $realisateurs,
        ':langue' => $langue,
        ':paysDeProd' => $paysDeProd,
        ':genre' => $genre,
        ':id' => $id
    ]);
}

function modifierActeurById(string $nom, string $prenom, int $anneeNaissance, string $role) {
    $pdo = connexionBdd();
}