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
                    <h1>Войти</h1>
                    <form action="login-check.php" method="POST">
                        <div class="form-group">
                          <label for="email">email:</label>
                          <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">password:</label>
                            <textarea name="password" id="" cols="30" rows="10" id="password" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
