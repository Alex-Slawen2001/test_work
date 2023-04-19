<?php
    require_once __DIR__ . '/../connect.php';
    for ($i = 0; $i <= 10; $i++) {
        $header = '<h3 class="mb-0">Featured post</h3>' . $i;
        $subtitle = '<strong class="d-inline-block mb-2 text-primary">World</strong>' . $i;
        $text = '<div class="mb-1 text-body-secondary">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>' . $i;
        $date = time();
        $sql = "INSERT INTO `articles` (`header`,`subtitle`,`text`,`date`) VALUES ('$header','$subtitle','$text','$date') ";
        $result = mysqli_query($mysql, $sql);
        var_dump($result);
    }



