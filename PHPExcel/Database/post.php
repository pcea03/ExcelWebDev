<?php
require 'config/config.php';
require 'config/dbconnection.php';

$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = 'SELECT * From users where id = '.$id;
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_assoc($result);

//free result
mysqli_free_result($result);
//close connect
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Accounts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<body>
    
    <div class="jumbotron">
        <h1 style="font-family: 'Impact'; text-align: center;">USERS</h1>
        <div class="container" style="background: #CCCCCC; text-align: center;">
            <h3> <?php echo $users['userName']; ?></h3>
            <h4>User's Details: <?php echo $users['firstName']; echo $users['lastName'];?></h4>
            <small> Created On <?php echo $users['date']; ?></small>
            <br>
            <a href="index.php" class="btn btn-success">Return</a>
        </div>
    </div>
<?php print_r($users);?>
</body>
</html>