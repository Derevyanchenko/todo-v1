<?php 

require "database/querybuilder.php";

$db = new query_builder();

$db->delete("tasks" ,$_GET["id"]);

header("Location: /");

?>