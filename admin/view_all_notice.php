<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- CSS file -->
     <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap file connect (css) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <br>
    <?php
   
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"online_notice_board");
    $query="select *
    from notice";
    $query_run = mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
       
       
        ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['title'] ?></h5>
                <p class="card-text"><?php echo $row['message'] ?></p>
                <?php 
                 $file=$row['file'];
                 if($file==true){
                echo "<a href='files/$file' class='bg-info text-dark p-2 rounded'>View File</a>";}
                ?>
            </div>
        </div>
        <?php
    }
    ?>
    <!-- bootstrap file connect (js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>