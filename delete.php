<?php 

require "database/querybuilder.php";

$db = new query_builder();

$db->delete($_GET["id"]);

header("Location: /");

?>