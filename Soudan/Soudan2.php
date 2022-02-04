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
    <link rel="stylesheet" href="Soudan2.css" />
    <title>Document</title>
</head>
<body>
 <?php
    echo getComments($conn);
?>
           
</body>
</html>

        
    
        




