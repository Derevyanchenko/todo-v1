<?php 


class query_builder {

    public $pdo;

    function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=tasks_bd', root, "");
    }

    function get_all($table) {
        $sql = "SELECT * FROM $table";
        $statement = $this->pdo->prepare($sql);
        $statement -> execute();
        $tasks = $statement -> fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }
    
    function get_one($table ,$id) {
        $sql ="SELECT * FROM $table WHERE id=:id";
        $statement=$this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
    
        $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        return $tasks;
    }

    public function add()
    {
        $sql = "INSERT INTO `tasks` (title, content) VALUES (:title, :content)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":title", $_POST["title"]);
        $statement->bindParam(":content", $_POST["content"]);
        $statement->execute();
        header("Location: /"); exit;
    }
    
    function update($table, $data) { 
        $sql = "UPDATE $table SET title=:title, content=:content WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        // $statement->bindParam($data);
        $statement->execute($data);
    }
    
    function delete($table ,$id) {
        $sql = "DELETE FROM $table WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement -> bindParam(":id", $id);
        $statement -> execute();
    }

}







?>