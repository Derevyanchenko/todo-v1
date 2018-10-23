<?php 

require "database/querybuilder.php";

$tasks = get_one_task($_GET["id"]);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Edit Task</h1>
                   <?php foreach($tasks as $task): ?>

                    <form action="update.php?id=<?=$task["id"];?>" method="POST"> 
                        <div class="form-group">
                          <label for="title">Title:</label>
                          <input type="text" class="form-control" name="title" id="title" value="<?=$task["title"];?>">
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea name="content" id="" cols="30" rows="10" id="content" class="form-control"><?=$task["content"];?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                   <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>