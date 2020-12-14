<?php

require __DIR__ . '/../../../conn.php';


$query = $db->prepare("SELECT * FROM genero");

$query->execute();

$generos = $query->fetchAll(PDO::FETCH_OBJ);