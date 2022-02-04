<?php

function setComments($conn){
    if (isset($_POST["submitrq"])){
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $sql = "INSERT INTO comments (uid, date, message) 
            VALUES ('$uid', '$date', '$message')";
    $result = $conn -> query($sql);   
    header("Location: Requests_Questions2.php");
}
}