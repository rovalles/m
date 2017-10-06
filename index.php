<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>M</title>
    <link rel="stylesheet" href="assets/main.css">
  </head>
  <body>
    <div class="wrapper">
      <ul>
        <?php
          $json = file_get_contents('./data.json');
          $json = json_decode($json, true);
          foreach( $json as $field => $value ){
            echo "<li><a href='$value' target='_blank'>$field</a></li>";
          }
        ?>
      </ul>
    </div>
    <script src="assets/main.js"></script>
  </body>
</html>
