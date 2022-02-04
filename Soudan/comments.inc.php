<?php

function setComments($conn){
    if (isset($_POST["commentSubmit"])){
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $sql = "INSERT INTO topic (uid, date, message) 
            VALUES ('$uid', '$date', '$message')";
    mysqli_query($conn, $sql);
}
}


function getComments($conn){
    $sql = "SELECT * FROM topic ORDER BY id DESC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        echo "</p>
        </div>";
        echo "<input type='hidden' name='id' value='".$row['id']."'><br>
        <button type='submit' formtarget='iframe_a' name='commentSubmit3'>今までのコメントをみる</button>";
        echo
        "<form method='POST' action='Soudan3.php'>
        <input type='hidden' name='id' value='".$row['id']."'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'><br>
        <textarea required type='text' name='message' placeholder='相談に対してのコメント' class='topic'></textarea><br>
        <button type='submit' formtarget='iframe_a' name='commentSubmit2'>コメント</button>
        </form>";
       

    }  
 
}
