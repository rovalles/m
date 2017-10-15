<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>M</title>
    <?php
      $json = file_get_contents('./data.json');
      $json = json_decode($json, true);
      $movieList = "";
      $bg = "";
      $count = 1;
      $wallpaperList = "";
      foreach( $json as $field => $value ){
        $movieList .= "<li><a href='$value' target='_blank'>$field</a></li>";
        $wallpaperList .= ".wallpaper-$count{ background-image: url('/assets/images/$count.jpg')!important;  }\n";
        $count++;
      }

      echo "<style>$wallpaperList</style>";
    ?>
    <link href="https://fonts.googleapis.com/css?family=Kanit:800" rel="stylesheet">
    <link rel="stylesheet" href="/node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="assets/main.css">
  </head>
  <body>
    <div class="wrapper">
      <ul>
        <? echo $movieList; ?>
      </ul>
    </div>
    <script src="assets/main.js"></script>
  </body>
</html>
