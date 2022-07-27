<a href='cinema.php'></a>

<?php

//1-connexion au serveur mysql
$objConnect = new PDO('mysql:host=localhost;dbname=cinema', 'root', '');
$objConnect->query("SET NAMES UTF8");
?>