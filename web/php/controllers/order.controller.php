<?php

require __DIR__ . '../../conn.php';

if (isset($_POST['asc'])) {

    $sql = 'SELECT * FROM canciones ORDER BY nombre ASC';

    $query = $db->prepare($sql); 
    $query->execute();

    $canciones = $query->fetchAll(PDO::FETCH_OBJ);

} else if (isset($_POST['desc'])) {

    $sql = 'SELECT * FROM canciones ORDER BY nombre desc';

    $query = $db->prepare($sql); 
    $query->execute();

    $canciones = $query->fetchAll(PDO::FETCH_OBJ);

} 