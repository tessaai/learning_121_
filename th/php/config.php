<?php 

    $domain = "localhost/url/"; 
    $host = "localhost";
    $user = "root"; 
    $pass = "";
    $db = "urlShortener";

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>