<?php
$name=$_POST['name'];
$comments=$_POST['textdata'];
$data=$name.",".$comments;
$file="form.txt";

file_put_contents($file, $data, FILE_APPEND);
echo "メッセージが送信されました。<br>
        ショウジョウバエの卵が羽化するくらい待っても<br>
        対応がない場合は以下のアドレスでメールをお願いします！<br>
        「kisu-yujiro@ed.tmu.ac.jp」<br>
        <p><a href='Requests_Questions.html'><button>戻る</button></a></p>";


