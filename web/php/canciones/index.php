<?php
require __DIR__ . '/../conn.php';

if (isset( $_GET['genero_id'])) {
    $sql = 'SELECT * FROM canciones where genero_id = ' . $_GET['genero_id'];
} else {
    $sql = 'SELECT * FROM canciones';
}

$query = $db->prepare($sql); 
$query->execute();

$canciones = $query->fetchAll(PDO::FETCH_OBJ);