<?php

require __DIR__ . '/../../../conn.php';

$query = $db->prepare('SELECT * FROM canciones WHERE id = :id');
$query->execute([
    'id'=> $_GET['id']
]);

$cancion = $query->fetch(PDO::FETCH_OBJ);