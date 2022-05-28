<?php
    $servername="localhost";
    $username="root";
    $password="";

    $conn=new mysqli($servername,$username,$password);
    if($conn->connect_error)
    {
        die("Connection failed:".$conn->connect_error);
    }
    echo "<img width=\"60px\" height=\"60px\" src=\"./img/success.webp\">";
?>