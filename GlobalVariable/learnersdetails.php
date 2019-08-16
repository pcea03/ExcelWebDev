<?php

    $fname=$_POST['fname'];  
    $lname=$_POST['lname'];  
    $bday=$_POST['bday'];  
    $address=$_POST['address']; 
    $contact=$_POST['contact'];
    
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<br>
<div class="container col-lg-3">
<div class="card text-center">
    <div class="card-header text-center bg-info">
        <h3>Learners Information</h3>
    </div>
        <div class="card-body">
                    <div class="form-group">
                        <label>First Name</label><br>
                        <h3><span class="badge badge-info col"> <?php echo $fname ?></span></h3>
        </div>
                    <div class="form-group">
                        <label>Last Name</label><br>
                        <h3><span class="badge badge-info col"> <?php echo $lname ?></span></h3>
        </div>
                    <div class="form-group">
                        <label>Birthday</label><br>
                        <h3><span class="badge badge-info col"> <?php echo $bday ?></span></h3>
        </div>
                    <div class="form-group">
                        <label>Address</label><br>
                        <h3><span class="badge badge-info col"> <?php echo $address ?></span></h3>
        </div>
                    <div class="form-group">
                        <label>Contact No.</label><br>
                        <h3><span class="badge badge-info col"> <?php echo $contact ?></span></h3>
        </div>
</div>
</div>

</body>
</html>
