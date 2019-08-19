<?php
    if(isset($_POST['submit']))
    {
            session_start();

            $_SESSION['name'] = htmlentities($_POST['name']);
            $_SESSION['email'] = htmlentities($_POST['email']);
            header('location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Session</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
    <br>
    <br>
    <br>

    <div class='container col-lg-4'>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Bardagul Dimalaman">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="sample@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submit" class='btn btn-secondary'>Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>