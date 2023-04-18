<? require_once 'blocks/head.php'; ?>
<?require_once 'blocks/header.php';?>

<body>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1>Форма регистрации</h1>
            <form action="..//handlers/reg.php" method="post">
                <input type="text" class=" form form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit" >Зарегистрировать</button>
            </form>
        </div>
    </div>
</div>
<? require_once 'blocks/footer.php'; ?>

</body>