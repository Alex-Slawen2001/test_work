<? require_once 'blocks/head.php'; ?>
<?require_once 'blocks/header.php';?>

<body>
<?
  error_reporting(0);
  require_once "../publisher.php";
  $sql = 'SELECT * FROM `coms`';
  $art = get_list_sql($sql);
  foreach ($art as $comments) {
    print_r("<b>" . $comments["author"] . "</b>: " . $comments["message"]); //Вывод комментариев
    echo "<br />";
    echo "<b>" . $comments["author"] . "</b>: " . $comments["message"];
  }
?>

<div>
    <form name="comment" action="../handlers/com.php" method="post">
        <p>
            <label>Ваше имя:</label>
            <input type="text" name="author" />
        </p>
      <div>
      </div>
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
