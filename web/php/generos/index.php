<?php
require __DIR__ . '/../conn.php';

$sql = 'SELECT * FROM genero';
$query = $db->prepare($sql);
$query->execute();
$generos = $query->fetchAll(PDO::FETCH_OBJ);