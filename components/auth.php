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

    public function login() {

        $sql = "SELECT * FROM users WHERE email=:email AND password=:password LIMIT 1";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":email", $_POST["email"]);
        $statement->bindParam(":password", $_POST["password"]);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if($user) {
            $_SESSION["user"] = $user;
            echo "Вы успешно вошли";
            return true;
        } else {
            echo "Логин или пароль не верны";
            return false;
        }
    }

}

?>