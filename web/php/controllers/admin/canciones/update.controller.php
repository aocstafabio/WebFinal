<?php
session_start();

require __DIR__ . '/../../../conn.php';
//print_r($_POST);

if (isset($_FILES['banner']) && $_FILES['banner']['tmp_name']) {
    $destino = __DIR__ . '../../../../../images/';
    $nombre = uniqid();
    $ext = pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);
    $banner = "$nombre.$ext";
    move_uploaded_file($_FILES['banner']['tmp_name'], "$destino$banner");
}


$query = $db->prepare("UPDATE canciones SET
nombre=:titulo, artista=:artista, genero_id=:genero_id, banner=:banner WHERE id = :id");


$query->execute([
    'titulo' => $_POST["titulo"],
    'artista' => $_POST["artista"],
    ':genero_id' => $_POST["genero_id"],    
    ':banner' => $banner,
    'id' => $_POST["id"]
    
]);

$_SESSION['alert'] = [
    'message' => 'Operacion realizada con exito',
    'type' => 'success'
];

header('location: ../../../../admin/canciones/index.php');