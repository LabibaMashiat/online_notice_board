<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Notice Board</title>
     <!-- CSS file -->
     <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap file connect (css) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="jQuery/juqery_latest.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#admin_button").click(function(){
                window.location.replace("admin/index.php");
            })
            $("#students_button").click(function(){
               window.location.replace("index1.php");
            })
        });
    </script>
</head>
<body id="main_content">
<header>
        <div class="row" id="header">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3>Online Notice Board System</h3>
            </div>
            <div class="col-md-4"></div>
        </div>
    </header>
    <main style="width:100%;">
        <div class="row">
    <div class="col-6">
        <div class="card" id="admin_button">>
        <div class="card-body bg-primary rounded">
            <h5 class="card-title p-5  fs-1 text-center fw-semi-bold">ADMIN</h5>
        </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card" id="students_button">>
        <div class="card-body bg-warning rounded">
            <h5 class="card-title p-5  fs-1 text-center fw-semi-bold" id="">STUDENT</h5>
            
        </div>
        </div>
    </div>
    </div>
    </main>
    <!-- bootstrap file connect (js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>