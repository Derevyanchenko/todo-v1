<?php 

$pdo = new PDO("mysql:host=localhost;dbname=tasks_bd", root, "");

$sql = "DELETE FROM `tasks` WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement -> bindParam(":id", $_GET["id"]);
$statement -> execute();

header("Location: /");

?>