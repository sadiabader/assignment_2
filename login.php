<?php
include('connection.php');
include('header.php');

if(isset($_POST['Login'])){
    $user_email = $_POST['email'];
    $user_pass = $_POST['password'];

$query = "SELECT * FROM `users` where email = '$user_email' AND
 password = '$user_pass'";

$res = mysqli_query($connect, $query);
//print_r($res);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
         echo $_SESSION['name'];
        header('location:http://localhost/assignment_2/alluser.php');
    }
}
else{
    echo "<script> alert('invalid username/password </script>";
}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>login form</title>
</head>
<body>

<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-group">

    <label for="name"> Email </label>
    <input type="email" name="email" class="form-control">
    <label for="name"> Password </label>
    <input type="password" name="password" class="form-control">
    <input type="submit" name="login" class="btn btn-primary">

</form> 
</div>
</body>
</html>