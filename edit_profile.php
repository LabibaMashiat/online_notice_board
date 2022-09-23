<?php
session_start();
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"online_notice_board");
$fname="";
$lname="";
$uid="";
$email="";
$password="";
$session="";
$query= "Select *
from users
where email='$_SESSION[email]'";

$query_run=mysqli_query($connection,$query);
while($row= mysqli_fetch_assoc($query_run)){
 $fname=$row['fname'];
 $lname=$row['lname'];
 $uid=$row['uid'];
 $email=$row['email'];
 $password=$row['password'];
 $session=$row['session'];

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
            <label>First Name:</label>
            <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
        </div>
        <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>">
        </div>
        <div class="form-group">
            <label>User Id:</label>
            <input type="number" class="form-control" name="uid" value="<?php echo $uid; ?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
        </div>
        <div class="form-group">
                            <label>Select Your Session:</label>
                            <select class="form-control" name="session" id="">
                                <option><?php echo $session; ?></option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                            </select>
                        </div>
                        <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>