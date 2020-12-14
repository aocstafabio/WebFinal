<?php
session_start();

require __DIR__ . '/../../../conn.php';

require __DIR__ . "../../../../../header.php";
require __DIR__ . "../../../../../nav.php";

print_r($_POST);


$query = $db->prepare("DELETE FROM canciones WHERE id = :id");

$query->execute([
    'id' => $_POST["id"]
]);


$_SESSION['alert'] = [
    'message' => 'Operacion realizada con exito',
    'type' => 'success'
];

header('location: ../../../../admin/canciones/index.php');