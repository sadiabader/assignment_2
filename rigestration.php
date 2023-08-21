
<?php

include('connection.php');
$nameErr  =  $genderErr =  $emailErr =  $pwdErr ="";
$name  = $gender = $email =  $password ="";
 if   (isset($_POST['submit'])){
    if(empty($_POST["name"])){
        $nameErr = "name is requerd";
    }else{
        $name = sanitize_data($_POST["name"]);
    }
    if(empty($_POST["gender"])){
        $genderErr = "gender is requerd";
    }else{
        $gender = sanitize_data($_POST["gender"]);
    }
    if(empty($_POST["email"])){
        $companyErr = "";
    }else{
        $email = sanitize_data($_POST["email"]);
    }
    if(empty($_POST["password"])){
        $pwdErr = "password is requerid";
    }else{
        $password = sanitize_data($_POST["password"]);
    }
}

function sanitize_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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

<p><span class="error">indicates required failed</span></p>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<label for="name"> name</label>
<input type="text" name="name" class="form-control">
<span class="error">* <?php echo $nameErr;?></span>
<label for="name"> gender</label>
<input type="text" name="gender" class="form-control">
<span class="error">* <?php echo $genderErr;?></span>
<label for="name"> email</label>
<input type="text" name="email" class="form-control">
<span class="error">* <?php echo $emailErr;?></span>
<label for="name"> password</label>
<input type="password" name="password" class="form-control">
<span class="error">* <?php echo $pwdErr;?></span>
<input type="submit" name="Rigester"value="Rigester">
</form>




</body>
</html>