<?php
session_start();
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"online_notice_board");

if(isset($_POST["login"])){
    $query="select *
            from users
            where email='$_POST[email]' AND password='$_POST[password]'";
    $query_run= mysqli_query($connection,$query);
   if(mysqli_num_rows($query_run)){
    $_SESSION['email']=$_POST['email'];
   
    
    while($row= mysqli_fetch_assoc($query_run)){
        $_SESSION['session']=$row['session'];
        echo "<script>
                window.location.href='user_dashboard.php';
            </script>";
    }
   }
   else{
    echo "<script> alert('Please enter correct email and password');
    window.location.href='index1.php';
    </script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Notice Board System</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap file connect (css) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <!-- Header Section Starting -->
    <header>
        <div class="row" id="header">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3>Online Notice Board System</h3>
            </div>
            <div class="col-md-4"></div>
        </div>
    </header>
    <!-- header section end  -->
    <main>
        <!-- Login form create  -->
        <section id="login_form">
            <div class="row">
                <div class="col-md-4 m-auto block">
                    <center><h4>Login Form</h4></center>
                    <!-- main form  -->
                    <form action="index1.php" method="post">
                        <!-- email id  -->
                        <div class="form-group">
                            <label>Email ID:</label>
                            <input class="form-control" type="text" name="email" placeholder="Enter your email">
                        </div>
                        <!-- password  -->
                        <div class="form-group">
                            <label>Password:</label>
                            <input class="form-control" type="password" name="password" placeholder="Enter your Password">
                        </div>
                        <!-- submit button  -->
                        <button class="btn btn-primary rounded mt-4" type="submit" name="login">Login</button>
                    </form>
                    <!-- main form end  -->
                    <!-- Register  -->
                    <a href="register.php">Click Here To Register</a>
                </div>
            </div>
        </section>
        <!-- Login Form end  -->
    </main>
    <!-- bootstrap file connect (js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>