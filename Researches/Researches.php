<?php
session_start();
    include 'connection.php';
    include 'function.php';
        $user_data = check_login($con);
?>
<?php
include '../dbh.inc.php';
include 'upload.php';
?>

<!DOCTYPE html>
<html lang="eg">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
    <link rel="stylesheet" href="Researches.css" />
    <title>研究リスト</title>
  </head>
  <body>
    <h1>研究リスト</h1>

    <?php
    echo
    "<form enctype='multipart/form-data' action='".setPdf($conn)."' method='POST'>
      アップロードするPDFを選んでください
    <input type='file' name='pdfile'>
    <button type='submit' name='pdfsubmit'>アップロード</button>
    </form>";
    ?>
    <hr>
    <?php
    echo getPdf($conn);
    ?>
    
    
    
    
  </body>
</html>

