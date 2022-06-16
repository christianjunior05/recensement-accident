<?php

include "db.php"; // include de la connection a la base de données

$cities = $db->prepare('SELECT * FROM villle');
$cities->execute();

$data = $cities->fetchAll(PDO::FETCH_OBJ);
