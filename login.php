
<?php
include('connection.php');
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

$sql = "INSERT INTO `std` (`id`, `name`, `gender`, `email`, `password`) VALUES ($id, '$name', '$gender', '$email', '$password')";

$results = mysqli_query($connections, $sql);

if(!$results){
   echo "query failed";
}

header('location:http://localhost/assignment_2/login.php');
}





?>