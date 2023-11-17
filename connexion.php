<?php 


$pdo = new PDO("mysql:host=localhost;dbname=fait_ton_cine;charset=UTF8", "maka","maka1");



$statement = $pdo->prepare("SELECT * FROM films");

$statement->execute();

$res = $statement->fetchAll(PDO::FETCH_ASSOC);



var_dump($res);