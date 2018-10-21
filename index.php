<?php 
   $pdo = new PDO('mysql:host=localhost;dbname=tasks_bd', root, "");
   $sql = "SELECT * FROM `tasks`";
   $statement = $pdo->prepare($sql);
   $statement -> execute();
   $tasks = $statement -> fetchAll(PDO::FETCH_ASSOC);
 
   
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
                   <h1>All tasks</h1>
               </div>
               <div class="col-lg-12">
                   <a href="create.php" class="btn btn-success">Add task</a>
                </div>
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($tasks as $task):?>
                            <tr>
                                <td><?=$task["id"];?></td>
                                <td><?= $task["title"]; ?></td>
                                <td>
                                    <a href="single.php" class="btn btn-primary">view</a>
                                    <a href="edit.php" class="btn btn-warning">edit</a>
                                    <a href="delete.php" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <table>
                </div>
           </div>
       </div>
   </div>
</body>
</html>

