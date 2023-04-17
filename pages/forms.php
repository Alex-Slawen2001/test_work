<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>форма регистрации</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="..//handlers/registration.php" method="post">
                    <input type="text" class=" form form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit" >Зарегистрировать</button>
                </form>
            </div>
            
        
            <div class="col">
                <h1>Форма авторизации</h1>
                <form action="../handlers/authorithation.php" method="post">
                    <input type="text" class=" form form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Войти</button>
                </form>
            </div>
          
            

            
         </div>
    </div>

    
</body>
</html>