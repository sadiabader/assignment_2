<?php

$connections = mysqli_connect("localhost", "root", "", "classc2");

if($connections){
    echo "connected";
}
else{
    die("connection error");
}
?>