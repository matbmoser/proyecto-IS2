<?php
    $host_db    = "localhost";
    $user_db    = "id11631880_matbmoser";
    $pass_db    = "a(dux>kqT%IMr(=7";
    $db_name    = "id11631880_hypetech";
    $conexion   = new mysqli($host_db, $user_db, $pass_db, $db_name);
    $acentos    = $conexion->query("SET NAMES 'utf8'");
    if ($conexion->connect_error) {
        echo json_encode(array('success' => 0));
        die("La conexion falló: " . $conexion->connect_error);
    }
    ?>