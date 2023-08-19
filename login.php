
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
<?php
include('connection.php');
 ?>
<div class="container">
<form action="login.php" method="post" class="form-group">

    <label for="name"> Email </label>
    <input type="email" name="email" class="form-control">
    <label for="name"> Password </label>
    <input type="password" name="password" class="form-control">
    <input type="submit" name="login" value="login" class="btn btn-primary">

</form> 

<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
 
 $query = "select * from `user-data` where 'email' = '$email' AND
 'epassword' = '$password'";
 $result = mysqli_query($connections, $query);
 
 if(!$result ->num_rows == 1){
    $row = $result ->fetch_assoc();
   if($row['password'] === $password)
   session_start();
   $_SESSION["email"] = $email;
   header("Location: http://localhost/assignment_2/login.php");
 }
 else{
    echo  "invalid email or password ";
 }
}

// if(isset($_POST['login'])){
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query = "INSERT INTO `user-data` (, `email`, `password`) VALUES 
// ('$email', '$password')";

//     $result = mysqli_query($connection, $query);
//     if(!$result){
//         echo "query failed";
//     }
//     header('Location:http://localhost/assignment_2/login.php');
// }
?>
</div>
</body>
</html>