<?php 

require "database/querybuilder.php";

delete($_GET["id"]);

header("Location: /");

?>