<?php 
$host ='localhost';
$db = 'attendance_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn,$user,$pass);
    echo "Conectado";

} catch (PDOException $e){
    throw new PDOException($e -> getMessage());
    
    }


?>