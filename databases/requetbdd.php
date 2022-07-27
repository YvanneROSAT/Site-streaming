<?php
//2-sql
$sql = "select * from film";

//3-Exécute une requête SQL, retourne un jeu de résultats en tant qu'objet PDOStatement
$objResult = $objConnect->query($sql);

//4-tableau contenant toutes les lignes du jeu d'enregistrements
$lesFilms = $objResult->fetchAll();
?>