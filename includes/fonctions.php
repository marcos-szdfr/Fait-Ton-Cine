<?php

define('BDD_HOTE', 'localhost');
define('BDD_NOM', 'fait_ton_cine');
define('BDD_UTILISATEUR', 'maka');
define('BDD_MOT_DE_PASSE', 'maka1');
define('BDD_CHARSET', 'utf8mb4');

function connexionBdd(): PDO
{
    static $pdo = null;

    if ($pdo === null) {
        $dsn = 'mysql:host=' . BDD_HOTE . ';dbname=' . BDD_NOM . ';charset=' . BDD_CHARSET;
        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $pdo = new PDO($dsn, BDD_UTILISATEUR, BDD_MOT_DE_PASSE, $option);
    }

    return $pdo;
}