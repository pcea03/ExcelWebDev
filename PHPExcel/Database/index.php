<?php
require ('config/config.php');
require ('config/dbconnection.php');

$query = 'SELECT * From users';
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

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
        <?php foreach($users as $user):?>
        <div class="container" style="background: #CCCCCC; text-align: center;">
            <h3> <?php echo $user['userName']; ?></h3>
            <small> Created On <?php echo $user['date']; ?></small>
            <br>
            <a href="post.php?id=<?php echo $user['id']; ?>" class="btn btn-success">Read More</a>
        </div>
        <?php endforeach; ?>
    </div>
<?php print_r($users);?>
</body>
</html>