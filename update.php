<?php

require "database/querybuilder.php";

$data = [
    "id" => $_GET["id"],
    "title" => $_POST["title"],
    "content" => $_POST["content"]
];

update($data);

header("Location: /");

?>