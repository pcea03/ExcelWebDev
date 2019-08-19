<?php
    
    if(isset($_POST['submit']))
    {
            session_start();

            $_SESSION['firstname'] = htmlentities($_POST['firstname']);
            header('location: success.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Psalter Cea">

    <title>Sign up</title>
    
    <link href="css/signin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    body {
        background-color: #fff59d;
    }
    </style>
</head>
<body>

    <div class='container col-lg-4'>
        <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class='text-center'>
            <img class="mb-1" src="images/excel logo.png" alt="" width="200" height="150">
            </div>
            <h1 class="h3 mb-3 font-weight-normal ">Sign Up</h1>

            <label class="sr-only">First Name</label>
            <input type="text" name="firstname"class="form-control" placeholder="First name" required >

            <label  class="sr-only mb-4">Last Name</label>
            <input type="text" name="lastname" id="inputEmail" class="form-control" placeholder="Last Name"  >

            <label  class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email"  >

            <label class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password"  >

            <button class="btn btn-lg btn-warning btn-block" type="submit" name="submit">Sign Up</button>
        </form>

    </div>
    
</body>
</html>