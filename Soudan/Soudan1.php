<?php
session_start();
    include 'connection.php';
    include 'function.php';
        $user_data = check_login($con);
?>
<?php
    date_default_timezone_set('Asia/Tokyo');
    include '../dbh.inc.php';
    include 'comments.inc.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Soudan1.css" />
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
    <title>相談スペース</title>
</head>
<body>
    <img class="img1" src="../images/生命科学科自主研究.png" />
    <p class="link"><a href="../index.php">HOMEへもどる</a>     |     <a href="logout.php">Logout</a></p>
<div class="grid-container">
<div class="item1">
    <p class="">相談内容リスト</p>
       <?php
    echo
    "<form method='POST' action='".setComments($conn)."'>
    <input required placeholder='投稿題名' type='text' name='uid' >
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'><br>
    <textarea required class='topic' placeholder='投稿内容' name='message'></textarea><br>
    <button type='submit' name='commentSubmit'>投稿する</button>
    </form>";
    echo "<hr>";
    echo "↓これまでの相談内容↓";
    ?>
    <iframe class="iframe1" src="Soudan2.php"></iframe>
</div>
      <div class="item2">
      <p class="">選択した相談へのこれまでのコメント</p>
       <iframe class="iframe2" src="Soudan3.php" name="iframe_a"></iframe>
      </div>
 
      
</div>



</body>
</html>