<?php require __DIR__ . '/../conn.php';

require_once __DIR__ . '/../conn.php';

$sql = 'SELECT * FROM canciones where nombre like "%'.$buscar . '%"' .
        'or artista like "%'.$buscar . '%"' .
        'or descrip like "%'.$buscar . '%"';

$query = $db->prepare($sql); 

$query->execute();

$canciones = $query->fetchAll(PDO::FETCH_OBJ);

?>