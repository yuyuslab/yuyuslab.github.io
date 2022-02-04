<?php
function setPdf($conn){
    if (isset($_POST['pdfsubmit']) && !empty($_FILES["pdfile"]["name"])){ 
        $statusMsg = '';
        //File upload path
        $targetDir = "uploads/";
        $fileName = basename($_FILES["pdfile"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["pdfile"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = $conn->query("INSERT into pdf (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                if($insert){
                    $statusMsg = "The file ".$fileName." has been uploaded successfully.";
                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only PDF files are allowed to upload.';
        }
    }else{
        $statusMsg = '';
    }
    
    // Display status message
    echo $statusMsg;
}

function getPdf($conn){
    $query = "SELECT * FROM pdf";
    $result = $conn->query($query);
        while($row = $result->fetch_assoc()){ 
        $pdfURL = 'uploads/'.$row["file_name"];
            echo 
            "<div class='list'><p>
                <p>・<a href='".$pdfURL."' target='_blank'>".$row['file_name']."</a></p>
             </p></div><br>";
            
        }
    }

   

  
        

        
    


    
    