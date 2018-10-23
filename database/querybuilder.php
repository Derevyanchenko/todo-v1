<?php 


class query_builder {

    public $pdo;

    function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=tasks_bd', root, "");
    }

    function get_all_tasks() {
        $sql = "SELECT * FROM `tasks`";
        $statement = $this->pdo->prepare($sql);
        $statement -> execute();
        $tasks = $statement -> fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }
    
    function get_one_task($id) {
        $sql ="SELECT * FROM `tasks` WHERE id=:id";
        $statement=$this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
    
        $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        return $tasks;
    }
    
    function update($data) { 
        $sql = "UPDATE `tasks` SET title=:title, content=:content WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        // $statement->bindParam($data);
        $statement->execute($data);
    }
    
    function delete($id) {
        $sql = "DELETE FROM `tasks` WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement -> bindParam(":id", $id);
        $statement -> execute();
    }

}







?>