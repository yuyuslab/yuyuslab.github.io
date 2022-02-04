<?php
$conn = mysqli_connect('localhost', 'root', '', 'independentresearch');
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}