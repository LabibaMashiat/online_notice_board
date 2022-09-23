<?php
session_start();

if(isset($_POST['update_profile'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  $query = "update admins set name='$_POST[name]',id=$_POST[id], email='$_POST[email]',password='$_POST[password]' 
  where email='$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
    window.location.href = 'admin_dashboard.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
    alert('Can't update try again...');
    window.location.href = 'admin_dashboard.php'
    </script>";
  }
}
if(isset($_POST['send_notice'])){
    $file_name=$_FILES['file']['name'];
    
    $tmp_name=$_FILES['file']['tmp_name'];
    $upload_file='files/'.$file_name;
    $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");
  $query="insert into notice 
    VALUES($_POST[nid],'$_POST[post_date]','$_POST[to_whom]','$_POST[title]','$_POST[message]','$file_name')";
    // insert into notice
// VALUES(01,'04/05/2022','to 14','hefwehy','hcgfwhycgx','abc.pdf');
    $query_run= mysqli_query($connection,$query);
    if($query_run){
        move_uploaded_file($tmp_name,$upload_file);
        echo "<script>alert('Notice Successfully delivered');
        window.location.href='admin_dashboard.php';
        </script>";
    }
    else{
        echo "<script>alert('please..Try again');
        window.location.href='admin_dashboard.php';
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
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap file connect (css) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="../jQuery/juqery_latest.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#edit_profile_button").click(function(){
                $("#main_content").load('edit_profile.php');
            })

            $("#create_notice_button").click(function(){
                $("#main_content").load('create_notice.php');
            })
            $("#view_notice_button").click(function(){
                $("#main_content").load('view_all_notice.php');
            })


        });
    </script>
   
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
        <section id="container">
            <div class="row">
                <div class="col-md-2" id="left_sidebar">
                <?php
                    
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"online_notice_board");
                    $query="select *
                    from admins
                    where email='$_SESSION[email]'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run)){
                       $image=$row['image'];
                       echo "<img src='images/$image' class='img-rounded' width='200px' height='200px' alt=''>";
                    }
                   ?>
                    <!-- <img src="../images/img1.jpg" class="img-rounded" width="200px" height="200px" alt=""> -->
                    <b><?php echo "<a href='$_SESSION[email]' class='link-dark'>$_SESSION[email]</a>";
                    ?> </b>
                    <div class="d-grid gap-2">
                    <button type="button" class="btn btn-primary mt-2" id="edit_profile_button" >Edit Profile</button>
                    <button type="button" class="btn btn-primary mt-2" id="create_notice_button" >Create a notice</button>
                    <button type="button" class="btn btn-warning" id="view_notice_button">View All Notices</button>
                    <button type="button" class="btn btn-warning" id="view_reply_button">View Replies</button>
                    <a href="logout.php" type="button" class="btn btn-success" >LogOut</a>
                    </div>
                    
                </div>
                <div class="col-md-8" id="main_content">
                    <h2 id="ab">Welcome to Admin dashboard</h2>
                    
                </div>
            </div>
        </section>
    </main>
    <!-- bootstrap file connect (js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>