<?php 


function get_all_tasks() {
    $pdo = new PDO('mysql:host=localhost;dbname=tasks_bd', root, "");
    $sql = "SELECT * FROM `tasks`";
    $statement = $pdo->prepare($sql);
    $statement -> execute();
    $tasks = $statement -> fetchAll(PDO::FETCH_ASSOC);
    return $tasks;
}

function get_one_task($id) {
    $pdo = new PDO("mysql:host=localhost;dbname=tasks_bd",root,"");
    $sql ="SELECT * FROM `tasks` WHERE id=:id";
    $statement=$pdo->prepare($sql);
    $statement->bindParam(":id", $id);
    $statement->execute();

    $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $tasks;
}

function update($data) {
    $pdo = new PDO("mysql:host=localhost;dbname=tasks_bd", root, "");

    $sql = "UPDATE `tasks` SET title=:title, content=:content WHERE id=:id";
    $statement = $pdo->prepare($sql);
    // $statement->bindParam($data);
    $statement->execute($data);
}

function delete($id) {
    $pdo = new PDO("mysql:host=localhost;dbname=tasks_bd", root, "");

    $sql = "DELETE FROM `tasks` WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement -> bindParam(":id", $id);
    $statement -> execute();
}




?>