<? require_once 'blocks/head.php'; ?>
<?require_once 'blocks/header.php';?>

<body>
<div>

  <div>
    <?
      $id = $_GET["id"];
      if ($_GET["id"]) {
        $sql = 'SELECT * FROM `articles` WHERE `id` = ' . escape_db($id);
        $art = get_list_sql($sql);
        foreach ($art as $item) { ?>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-0"><?php echo $item['header'] ?></h3>
                <div class="mb-1 text-body-secondary">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="/article/?id=<?php echo $item['id'] ?>" class="stretched-link">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c"/>
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>
              </div>
            </div>
          </div>
        <?php }
      } else {
        echo 'нельзя отправлять пустые формы';
         die();
      }
    ?>
  </div>


  <form name="comment" action="../handlers/com.php" method="post">
    <p>
      <label>Ваше имя:</label>
      <input type="text" name="author"/>
    </p>
    <div>
    </div>
    <p>
      <label>Ваш комментарий:</label>
      <br/>
      <textarea name="message" cols="30" rows="10"></textarea>
    </p>
    <p>
      <input type="hidden" name="article_id" value="<?php echo $id?>"/>
      <input type="submit" value="Отправить комментарий"/>
    </p>
  </form>
</div>


<div>
  <?
    $sql = 'SELECT * FROM `coms` WHERE `article_id` = '. escape_db($id);;
    $art = get_list_sql($sql);
    foreach ($art as $comments) {
      print_r("<b>" . $comments["author"] . "</b>: " . $comments["message"]); //Вывод комментариев
      echo "<br />";
    }
  ?>
</div>

</body>

<? require_once 'blocks/footer.php'; ?>
