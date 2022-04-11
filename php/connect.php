<?php
/** @var PDO $connect */
$host = 'localhost';
$db = 'miniCrud';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dns = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$sql = "SELECT * FROM gerechten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

try {
    $connect = new PDO($dns, $user, $pass, $opt);
    echo "Je bent verbonden";
}
catch (PDOException $e)
{
    echo $e->getMessage();
    die("sorry database niet willen");
}
