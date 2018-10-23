<?php

require "database/querybuilder.php";

$data = [
    "id" => $_GET["id"],
    "title" => $_POST["title"],
    "content" => $_POST["content"]
];
$db = new query_builder();

$db->update($data);

header("Location: /");

?>