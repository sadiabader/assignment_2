<?php
include('connection.php');
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>



<div class="container">

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-group">

<label for="name"> name</label>
<input type="text" name="name" class="form-control">
<label for="name"> gender</label>
<input type="text" name="gender" class="form-control">
<label for="email"> Email</label>
<input type="email" name="email" class="form-control">
<label for="password"> Password</label>
<input type="passwprd" name="password" class="form-control">
<input type="submit" name="submit"value="submit" class="btn btn-success">

</form>
<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "INSERT INTO `users`(`name`, `gender`,`email`,`password`) VALUES ('$name', '$gender', '$email', '$pass')";

    $result = mysqli_query($connect, $query);
    if(!$result){
        echo "query failed";
    }
    header('Location:http://localhost/assignment_2/alluser.php');
}

?>
</div>
</body>
</html>
