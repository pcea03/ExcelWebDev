<?php
    if(isset($_POST['submit']))
    {
            session_start();

            $_SESSION['username'] = htmlentities($_POST['username']);
            header('location: welcome.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Session</title>

    <link href="css/signin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class='container col-lg-4'>
            <div class="container">
                <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="text-center">
                         <img class="mb-4" src="images/excel logo.png" alt="" width="200" height="150">
                        <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
                    </div>

                        <label for="inputEmail" class="sr-only">User Name</label>
                        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>

                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        
                        <div class='mb-3'>
                            <a href="signup.php">Create Account</a>
                        </div>
                        <button class="btn btn-lg btn-warning btn-block" type="submit" name="submit">Log in</button>
                </form>
            </div>
    </div>

</body>
</html>