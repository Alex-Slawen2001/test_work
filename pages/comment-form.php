<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Комментарии</title>
    <link rel="stylesheet" href="/css/style.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
</head>

<body>
<div>
<form name="comment" action="../handlers/obr.php" method="post">
    <p>
        <label>Ваше имя:</label>
        <input type="text" name="author" />
    </p>
    <p>
        <label>Ваш комментарий:</label>
        <br />
        <textarea name="message" cols="30" rows="10"></textarea>
    </p>
    <p>
        <input type="hidden" name="page_id" value="150" />
        <input type="submit" value="Отправить комментарий" />
    </p>
</form>
</div>
</body>
</html>
