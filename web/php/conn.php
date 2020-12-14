<?php

try {
    $db = new PDO('mysql:dbname=musica;chartset=UTF-8;host=localhost', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();

}
