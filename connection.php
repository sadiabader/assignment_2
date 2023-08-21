<?php

$connect = mysqli_connect("localhost", "root", "", "user_data");

if($connect){
    echo "connected";
}
else{
    die("connection error");
}
?>