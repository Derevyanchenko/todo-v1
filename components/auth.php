<?php

class Auth {

	public $pdo;

    function __construct() {
        $this->pdo = new PDO("mysql:host = localhost; dbname=tasks_bd", root, "");
    }

    public function register() {
        $sql = "INSERT INTO `users` (email,password) VALUES (:email, :password)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":email", $_POST["email"]);
        $statement->bindParam(":password", $_POST["password"]);
        $statement->execute();
    }

}

?>