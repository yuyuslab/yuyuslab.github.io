
<?php
    if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    //getting information from 'file'!
    $fileName = $_FILES['file']['name'];
    $fileTempName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    /*Ext means extension */
    $fileActualExt = strtolower(end($fileExt));
    /*make extension part lower case*/

    $allowed = array('pdf');

    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTempName, $fileDestination);
                //header("Location: upload.php?uploadsuccess");*/
                echo "<p>ファイルがアップロードされました！</p><br>
                <a href ='Researches_home.html'><button>戻る</button><a>";

               
            }else{
                echo "Your file is too big!";
            }

            }else{
            echo "There was an error uploading your file!";
            }

    }else{
        echo "You cannot upload files of this type!";
    }
    }

?>


echo "<a href=".$fileDestination.">".$fileNameNew."</a>";



<?$fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileNameNew, $fileDestination); 

/////////////////////////////////////////////////////////////////
if (isset($_GET["submit"])){
    $operator = $_GET['operator'];
    switch ($operator ) {
        case "はい":
            move_uploaded_file($fileNameNew, $fileDestination); 
            //header("Location: Researches.html");
         echo "<p>アップロードが完了しました</p>
            <a href='Researches.html'><input type=button value='研究ページにもどる'></a>";
            //file_get_contents;
        break;
        case "いいえ・もどる":
            header("Location: Researches.html");
            echo "<p>なんらかのエラーが起きました</p><br>
            こちらのメールまでお問い合わせください<br>
            「kisu-yujiro@ed.tmu.ac.jp」";
            
        break;
    }
}





