<?php
session_start();
require __DIR__ . '../../../../conn.php';

print_r($_POST);

if (isset($_FILES['banner']) && $_FILES['banner']['tmp_name']) {
    $destino = __DIR__ . '../../../../../images/';
    $nombre = uniqid();
    $ext = pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);
    $banner = "$nombre.$ext";
    move_uploaded_file($_FILES['banner']['tmp_name'], "$destino$banner");
}


$query = $db->prepare("INSERT INTO canciones (nombre, artista, banner, genero_id)
 values (:nombre, :artista, :banner, :genero_id)");

$query->execute([
    ':nombre' => $_POST["titulo"],
    ':artista' => $_POST["artista"],
    ':genero_id' => $_POST["genero_id"],    
    ':banner' => $banner
    
]);



$_SESSION['alert'] = [
    'message' => 'Operacion realizada con exito',
    'type' => 'success'
];

header('location: ../../../../admin/canciones/index.php');