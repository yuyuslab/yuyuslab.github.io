<?php
session_start();
    include("connection.php");
    include("function.php");
        $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="eg">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="image/png" href="./images/favicon.png" />
    <title>生命科学科・自主研究</title>
  </head>
  <body>
  <a href="logout.php">Logout</a>
    <br>
    Hello, <?php echo $user_data['user_name'];?>
    <div class="title">
      <img src="./images/生命科学科自主研究.png" />
    </div>
    <div class="grid-container">
      <div class="item2">
        <iframe
          class="iframe1"
          src="./Researches/Researches.php"
          style="border: solid black 1px; background-color: #ddd"
        ></iframe>
      </div>
      <div class="item3">
        <iframe
          class="iframe2"
          src="./Soudan/Soudan.php"
          style="border: solid black 1px; background-color: #ddd"
        ></iframe>
      </div>
      <div class="item4">
        <iframe
          src="Notifications/Notifications.html"
          style="border: solid black 1px; background-color: #ddd"
        >
        </iframe>
      </div>
      <div class="item5">
        <iframe
          src="Requests_Questions/Requests_Questions.php"
          style="border: solid black 1px; background-color: #ddd"
        ></iframe>
      </div>
    </div>
  </body>
</html>
