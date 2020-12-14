<?php

require 'php/conn.php';

$query = $db->prepare('INSERT INTO canciones (nombre) VALUES (:nombre)');
$query->execute([
':nombre' => $_POST['nombre']
]);