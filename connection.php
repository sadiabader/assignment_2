<?php

$connections = mysqli_connect("localhost", "root", "", "user_data");

if($connections){
    echo "connected";
}
else{
    die("connection error");
}
?>