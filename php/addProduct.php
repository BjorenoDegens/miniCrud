<?php

require_once ("connect.php");

if(isset($_POST['submit'])) {
    $sql = "INSERT INTO album (titel,artiest,genre,prijs,voorraad)
	 VALUES (:titel,:artiest,:genre, :prijs, :voorraad)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":titel", $_POST['titel']);
    $stmt->bindParam(":artiest", $_POST['artiest']);
    $stmt->bindParam(":genre", $_POST['genre']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":voorraad", $_POST['voorraad']);
    $stmt->execute();

    header('Location: database.php');
    exit();
} else {
    header('Location: database.php');
    exit();
}