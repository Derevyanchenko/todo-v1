<?php

$pdo = new PDO("mysql:host=localhost;dbname=tasks_bd", root, "");
$sql = "SELECT * FROM `tasks` WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET["id"]);
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php foreach($tasks as $task): ?>

                <div class="col-lg-12">
                    <h1><?=$task["title"];?></h1>
                    <p><?=$task["content"];?></p>
                    <a href="/" class="btn btn-link">On home page</a>
                </div>

                <? endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>