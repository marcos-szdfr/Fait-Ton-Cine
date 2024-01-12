<?php

require_once 'fonctions.php';

function ajouterFilm(string $titre, string $acteurs, string $resume, string $realisateurs, string $langue, string $paysDeProd, string $genre): bool
{
    $pdo = connexionBdd();

    $sql = "INSERT INTO films (titre, acteurs, resume, realisateurs, langue, paysDeProd, genre) VALUES (:titre, :acteurs, :resume, :realisateurs, :langue, :paysDeProd, :genre)";

    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        ':titre' => $titre,
        ':acteurs' => $acteurs,
        ':resume' => $resume,
        ':realisateurs' => $realisateurs,
        ':langue' => $langue,
        ':paysDeProd' => $paysDeProd,
        ':genre' => $genre
    ]);
}

function ajouterActeur(string $nom, string $prenom, int $anneeNaissance, string $role): bool
{
    $pdo = connexionBdd();

    $sql = "INSERT INTO acteurs (nom, prenom, anneeNaissance, role) VALUES (:nom, :prenom, :anneeNaissance, :role)";

    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':anneeNaissance' => $anneeNaissance,
        ':role' => $role
    ]);
}

function ajouterRealisateur(string $nom, string $prenom, int $anneeNaissance): bool
{
    $pdo = connexionBdd();

    $sql = "INSERT INTO acteurs (nom, prenom, anneeNaissance) VALUES (:nom, :prenom, :anneeNaissance)";

    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':anneeNaissance' => $anneeNaissance
    ]);
}