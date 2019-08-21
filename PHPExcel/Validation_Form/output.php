<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form Validatoin Output</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">

<style>
 body {
   background-image: url('excellogo/excellogobg.jpg');
   background-positon: center;
   background-repeat: no-repeat;
 }
 div.container {
  right: -250px; 
  top: 90px;
 }
</style>

</head>
<body>
    
<div class="container text-center col-lg-4">
  <div class="card ">
  <h2 class="bg-dark float-right mp-4 font-weight-bold" style="color: #81d4fa;font-family: Audiowide; padding: 25px; padding-bottom: 10px;"><img src="excelicon.png" alt="excel icon" class="float-left" width="100">PHP Form Validation Output</h2>       
    <div class="card-body">
      <div class="container" >
        <blockquote class="blockquite mb-0">
        <h3><span class="text">User Details</span></h3>
        </blockquote>
        <div class="form-group">
            <label>Name</label><br>
            <h3><span class="badge badge-dark col"> <?php echo $_SESSION['name'];?></span></h3>
        </div>

        <div class="form-group">
            <label>Email</label><br>
            <h3><span class="badge badge-dark col"> <?php echo $_SESSION['email'];?></span></h3>
        </div>

        <div class="form-group">
            <label>User Name</label><br>
            <h3><span class="badge badge-dark col"> <?php echo $_SESSION['userName'];?></span></h3>
        </div>

        <div class="form-group">
            <label>Message</label><br>
            <h3><span class="badge badge-dark col"> <?php echo $_SESSION['message'];?></span></h3>
        </div>

        <div class="form-group">
            <label>Gender</label><br>
            <h3><span class="badge badge-dark col"> <?php echo $_SESSION['gender'];?></span></h3>
        </div>
            
            <a href="index.php"><button class="float-right"><img  src="back.png" alt="go back" width="25"></button></a>
      </div>
      
    </div>
  </div>
</div>



</body>
</html>