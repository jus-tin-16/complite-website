<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "academic";
    $conn = new mysqli("localhost", "root", $password, $db_name);
    if (!$conn){
        die('Connection Failed : ' .mysql_error());
    }
?>