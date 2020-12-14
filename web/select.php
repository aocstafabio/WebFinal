<?php

require 'php/conn.php';

$query = $db->prepare('SELECT * FROM canciones');
$query->execute();

$canciones = $query->fetchAll(PDO::FETCH_OBJ);

foreach($canciones as $cancion){
    echo $cancion->nombre.'<br>';
}