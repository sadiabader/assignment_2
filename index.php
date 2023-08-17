
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>logic</title>
</head>
<body>
<?php
include('connection.php')
?>
<div class="container">
<form action="index.php" method="post" class="form-group">
    <label for="name"> Id </label>
    <input type="text" name="id" class="form-control">
    <label for="name"> Name </label>
    <input type="text" name="name" class="form-control">
    <label for="name"> Gender </label>
    <input type="text" name="gender" class="form-control">
    <label for="name"> Email </label>
    <input type="email" name="email" class="form-control">
    <label for="name"> Password </label>
    <input type="password" name="password" class="form-control">
    <input type="submit" name="submit"  class="btn btn-primary">

</form> 
</div>
<?php
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
</body>
</html>