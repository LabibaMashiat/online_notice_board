<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Notice</title>
     <!-- CSS file -->
     <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap file connect (css) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <br><br>
    <center><h2>Send Notice Form</h2></center>
    <br>
    <div>
        <form action="" method="post">
           <div class="form-group">
            <label for="">To Whom-></label>
            <select class="form_control" name="to_whom" id="">
                <option>To ALL</option>
                <option>To 17</option>
                <option>To 18</option>
                <option>To 19</option>
                <option>To 20</option>
                <option>To 21</option>
            </select>
           </div>
           <div class="form-group">
            <label>Id:</label>
            <input type="number" name="nid" class="form-control">
           </div>
           <div class="form-group">
            <label>Post Date:</label>
            <input type="date" name="post_date" class="form-control">
           </div>
           <div class="form-group">
            <label for="">Enter subject</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Subject">
           </div>
           <div class="form-group">
            <label for="">Message:</label>
            <textarea name="message" id="" cols="80" rows="8" class="form-control" placeholder="Type your message"></textarea>
           </div>
           <button type="submit" class="btn btn-primary" name="send_notice">Send Notice</button>
        </form>
    </div>
    <!-- bootstrap file connect (js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>