<?php

$host = "ba8nc4jg9bqtvynpltyd-mysql.services.clever-cloud.com";
$dbname = "ba8nc4jg9bqtvynpltyd";
$user = "uvha83bpisz5fttf";
$pass = "P5nKf8VdA8AVfos7OOy4";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}




