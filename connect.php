<?php
require_once ("database.php");
    /** @var PDO $connect */
    $host = 'localhost';
    $db = 'minicrud';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dns = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

try {
    $connect = new PDO($dns, $user, $pass, $opt);
    echo "Je bent verboden met de database";
}
catch (PDOException $e)
{
    echo $e->getMessage();
    die("Je bent niet verbonden met de database");
}

$sql = "SELECT * FROM gerechten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$results =$stmt->fetchAll();