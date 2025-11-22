<?php
$host = "ba8nc4jg9bqtvynpltyd-mysql.services.clever-cloud.com";
$dbname = "ba8nc4jg9bqtvynpltyd";
$user = "uvha83bpisz5fttf";
$password = "P5nKf8VdA8AVfos7OOy4";
$port = "3306";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}
?>

