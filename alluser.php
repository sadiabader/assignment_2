

<?php
include('connection.php');


$sql = "select * from `users`";
$fetch = mysqli_query($connect, $sql);



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
    
<table class="table table-borderd text-center">
<thead class="table table-dark">
    <tr>

<th>Name</th>
<th>Gender</th>
<th>Email</th>
<th>Password</th>

    </tr>
</thead>
   <tbody>
<?php
while($data = mysqli_fetch_assoc($fetch)){
    ?>
    <tr>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['gender']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['password']; ?></td>
    </tr>
    <?php
}
?>
   </tbody>

</table>
</body>
</html>