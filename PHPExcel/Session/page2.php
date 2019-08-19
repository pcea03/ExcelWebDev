<?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2 Session</title>
</head>
<body>
    
    <h5>Thank You <?php echo $name; ?>, You have susbscribed with the mail <?php echo $email; ?></h5>
    <a href="page3.php">Go To Next Page</a>
</body>
</html>