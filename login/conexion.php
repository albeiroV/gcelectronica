<?php
    // Conexión a la base de datos
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "gcelectronica";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
