<?php
session_start();
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"online_notice_board");

if(isset($_POST["register"])){
    $query="insert into users 
    values($_POST[uid],'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[session])";
    $query_run= mysqli_query($connection,$query);
    if($query_run){
        echo "<script>alert('Registration Successfully done..You may now login');
        window.location.href='index1.php';
        </script>";
    }
    else{
        echo "<script>alert('Registration Failed..Try again');
        window.location.href='register.php';
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
        <!-- Registration form create  -->
        <section id="registration_form">
            <div class="row">
                <div class="col-md-4 m-auto block">
                    <center><h4>Registration Form</h4></center>
                    <!-- main form  -->
                    <form action="register.php" method="post">
                        <!-- first name  -->
                    <div class="form-group">
                            <label>First Name:</label>
                            <input class="form-control" type="text" name="fname" placeholder="Enter your First Name">
                        </div>
                        <!-- last name  -->
                    <div class="form-group">
                            <label>Last Name:</label>
                            <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">
                        </div>
                        <!-- student id  -->
                    <div class="form-group">
                            <label>Student Id:</label>
                            <input class="form-control" type="number" name="uid" placeholder="Enter your ID">
                        </div>

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
                        <!-- session  -->
                        <div class="form-group">
                            <label>Select Your Session:</label>
                            <select class="form-control" name="session" id="">
                                <option>-Select-</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                            </select>
                        </div>
                        <!-- submit button  -->
                        <button class="btn btn-primary rounded mt-4" type="submit" name="register">Register</button>
                    </form>
                    <!-- main form end  -->
                    <!-- Register  -->
                    <a href="index1.php">Click Here To Login</a>
                </div>
            </div>
        </section>
        <!-- Login Form end  -->
    </main>
    <!-- bootstrap file connect (js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>