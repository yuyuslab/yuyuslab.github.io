<?php
session_start();
    include 'connection.php';
    include 'function.php';
        $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include '../dbh.inc.php'; 

    if (isset($_POST["commentSubmit3"])){
        $id = $_POST['id'];
        $sql = "SELECT * FROM advice where uid =  '$id' ORDER BY id DESC"; 
        $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                echo "<div><p>";
                echo $row['date']."<br>";
                echo nl2br($row['message']);
                echo "</p>
                </div>";
                }
        }

    if (isset($_POST["commentSubmit2"])){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $sql = "INSERT INTO advice (uid, date, message) 
            VALUES ((select id from topic where id = '$id' limit 1), '$date', '$message')";
            $result = $conn->query($sql);
                if(isset($sql)){
                $sql = "SELECT * FROM advice where uid =  '$id' ORDER BY id DESC"; 
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
                    echo "<div><p>";
                    echo $row['date']."<br>";
                    echo nl2br($row['message']);
                echo "</p>
                </div>
                ";
                }
    }
}   
?>

</body>
</html>
            
                
            

            




