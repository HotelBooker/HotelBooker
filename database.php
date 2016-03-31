<?php
    $servername = "server3.tezzt.nl";
    $username = "hotelbooker";
    $password = "c96eb216c72cd36dd396785615e3eafd";
    $databasename = "hotelbooker";

    $conn = new mysqli($servername, $username, $password, $databasename);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }    
?>