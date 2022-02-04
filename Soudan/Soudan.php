<?php
session_start();
    include 'connection.php';
    include 'function.php';
        $user_data = check_login($con);
?>
<?php
    date_default_timezone_set('Asia/Tokyo');
    include '../dbh.inc.php';
    include 'comments.inc.php'
    
?>
<!DOCTYPE html>
<html lang="eg">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
    <title>相談スペース</title>
  </head>
  <body>
    <h1>相談スペース</h1>
      <a href="Soudan1.php" target="_blank"><button>コメントスペースへGO</button></a><br>
      <hr>
    <p></p>
      <?php
?>
  </body>
</html>