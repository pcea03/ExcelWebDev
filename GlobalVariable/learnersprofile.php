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
<br><br>
<div class="container col-lg-3">
<div class="card">
  <div class="card-header text-center">
    <h3>Learners Profile</h3>
  </div>
  <div class="card-body">
  <form method="POST" action="learnersdetails.php">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="fname"  placeholder="Enter First Name" required="required" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name"required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Birthday</label>
    <input type="text" class="form-control" name="bday" placeholder="Enter Birthday"required="required" >
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Adress"required="required" >
  </div>
  <div class="form-group">
    <label>Contact No.</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter Contact No.">
  </div>
  <button type="submit" class="btn btn-dark">Submit</button>
  <br>
</form>
  </div>
</div>
</div>

</body>
</html>