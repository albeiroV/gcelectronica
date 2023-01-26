<?php
require_once 'conexion.php';
    $query = "SELECT * FROM productos";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $products = $stmt->fetch();
?>