<?php
function db_connect()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'demo';

        $conn = mysqli_connect($servername, $username, $password, $database);
        return $conn;
    }
$conn = db_connect();    

    if(!$conn) 
        die("Connection Failed");
?>