<?php

require __DIR__ . '/../../../conn.php';

$query = $db->prepare('SELECT * FROM canciones');
$query->execute();

$canciones = $query->fetchAll(PDO::FETCH_OBJ);