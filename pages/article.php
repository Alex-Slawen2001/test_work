<? require_once 'blocks/head.php'; ?>
<?require_once 'blocks/header.php';?>


<body>

<div>
    <form name="comment" action="../handlers/com.php" method="post">
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

<? require_once 'blocks/footer.php'; ?>
