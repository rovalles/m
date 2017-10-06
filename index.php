<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>M</title>

  <!--link rel="stylesheet" href="css/styles.css?v=1.0"-->
</head>

    <body>
        <ul>
        <?php
            $json = file_get_contents('./data.json');
            $json = json_decode($json, true);
            foreach( $json as $field => $value ){
                echo "<li><a href='$value' target='_blank'>$field</a></li>";
            }
        ?>
        </ul>

      <!--script src="js/scripts.js"></script-->
    </body>
</html>
