<?php
require ('config/config.php');
require ('config/dbconnection.php');

$query = 'SELECT * From users ORDER BY date DESC';
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result
mysqli_free_result($result);
//close connect
mysqli_close($conn);
?>
    <?php include ('include/header.php'); ?>
    <div class="jumbotron">
        <h1 style="font-family: 'Impact'; text-align: center;">USERS</h1>
        <?php foreach($users as $user):?>
        <div class="container" style="background: #CCCCCC; text-align: center;">
            <h3> <?php echo $user['userName']; ?></h3>
            <small> Created On <?php echo $user['date']; ?></small>
            <br>
            <a href="post.php?id=<?php echo $user['id']; ?>" class="btn btn-success">Login to Read more</a>
        </div>
        <?php endforeach; ?>
    </div>
<?php include ('include/footer.php'); ?>
