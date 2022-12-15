<?php 
    include _DIR_ . '../db/database.php';

    header('Content-type: application/json');

    echo json_encode($database)
?>