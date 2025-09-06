<?php  
    $hostName  = "localhost";
    $dbuser = "root";
    $dbPassword  = "";
    $dbName = "ticket_exchange";
    $conn =  mysqli_connect($hostName,$dbuser,$dbPassword,$dbName);
    if (!$conn) {
        die("Something went wrong;");
    }
?>