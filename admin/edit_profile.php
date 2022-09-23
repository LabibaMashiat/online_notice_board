<?php
session_start();
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"online_notice_board");
$name="";
$id="";
$email="";
$password="";
$query= "Select *
from admins
where email='admin@gmail.com'";

$query_run=mysqli_query($connection,$query);
while($row= mysqli_fetch_assoc($query_run)){
 $name=$row['name'];
 $id=$row['id'];
 $email=$row['email'];
 $password=$row['password'];

}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap file connect (css) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <div class="form-group">
            <label> Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
        </div>
        
        <div class="form-group">
            <label> Id:</label>
            <input type="number" class="form-control" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
        </div>
       
                        <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>