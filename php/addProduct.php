<?php
session_start();
if($_SESSION["name"]) {
require_once ("connect.php");

if(isset($_POST['submit'])) {
    $sql = "INSERT INTO gerecht (titel,prijs,beschrijving,afbeelding,categorie)
	 VALUES (:titel,:prijs,:beschrijving, :afbeelding, :categorie)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":titel", $_POST['titel']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":afbeelding", $_POST['afbeelding']);
    $stmt->bindParam(":categorie", $_POST['categorie']);
    $stmt->execute();

    header('Location: beveiligdepagina.php');
    exit();
} else {
    header('Location: beveiligdepagina.php');
    exit();
}
}else header('Location: inlog.php');
// 
//     if($_SESSION["name"]) {
//     
// 
//     }else header('Location: inlog.php');
//     