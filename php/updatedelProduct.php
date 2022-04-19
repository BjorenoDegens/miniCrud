<?php
session_start();
if($_SESSION["name"]) {
require_once ("connect.php");
if(isset( $_POST['update'])) {
    $sql = "UPDATE gerechten SET titel = :titel, prijs = :prijs, beschrijving = :beschrijving, afbeelding = :afbeelding, categorie = :categorie
	 WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['ID']);
    $stmt->bindParam(":titel", $_POST['titel']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":afbeelding", $_POST['afbeelding']);
    $stmt->bindParam(":categorie", $_POST['categorie']);
    $stmt->execute();

    header('Location: beveiligdepagina.php');
    exit();
}
else if(isset($_POST['delete'])) {
    $sql = "DELETE FROM gerechten 
	 WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['ID']);
    $stmt->execute();

    header('Location: beveiligdepagina.php');
    exit();
} else {
    header('Location: beveiligdepagina.php');
    exit();
}
}else header('Location: inlog.php');
?>


