<?php
include '../dbh.inc.php';
include 'comments.inc.php';
?>
<!DOCTYPE html>
<html lang="eg">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
    <link rel="stylesheet" href="stylerq.css" />
    <title>サイトに関してのリクエスト・質問</title>
  </head>
  <body>
    <?php
    echo 
    "<p class='title'><b>サイトに関してのリクエスト・質問</b></p>
    <form method='POST' action='".setComments($conn)."'>
        <input type='text' name='uid' placeholder='名前 or ニックネーム' required><br>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea class='rqform' placeholder='ここにリクエスト・質問をお書きください' name='message' required></textarea><br>
        <button type='submit' name='submitrq'>送信</button>
    </form>"

    ?>

  </body>
</html>
