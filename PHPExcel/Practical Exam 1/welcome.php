<?php
    session_start();
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Psalter Cea">

    <title>Document</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    body {
        background-color: #ffe082;
    }
</style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
<div class = 'container center col-lg-4'>
<div class="card">
  <div class="card-body">
      <div class='container'>
      <a href="login.php"><h5 class="card-title text-right">Log out</h5></a>
      </div>
    <p class="card-text">Welcome,<h3><?php echo $username; ?></h3><br>Please select page to visit</p>
    <a href="aboutus.php" class="hide-desktop"> <img src="images/about.png" alt="toggle menu" class="menu" id="menu"></a>
                       
    <a href="contactus.php" class="hide-desktop"><img src="images/contact.png" alt="toggle menu" class="menu" id="menu" width="200" height="200"></a>
                        
  </div>
</div>

</div>


       
    
</body>
</html>