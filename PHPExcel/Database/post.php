<?php
require 'config/config.php';
require 'config/dbconnection.php';
session_start();

$id = $_SESSION['id'];
$query = 'SELECT * From users where id = '.$id;
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_assoc($result);

if(isset($_POST['deleteid'])){
    $id = mysqli_real_escape_string($conn, $_POST['delete']);
    
    $query = "DELETE from users WHERE id = '$id'";

    if(mysqli_query($conn,$query))
    {
        header('location:'.ROOT_URL.'');
    }else
        {
            echo 'error:'.mysqli_error($conn);
        }
        mysqli_close($conn);
}

?>

<?php include('include/header.php')?>

    <div class="jumbotron">
        <h1 style="font-family: 'Impact'; text-align: center;">USERS</h1>
        <div class="container" style="background: #CCCCCC; text-align: center;">
            <h3> <?php echo $users['userName']; ?></h3>
            <h4>User's Details: <br><?php echo $users['firstName'];?></h4>
            <h4>
            <?php echo $users['lastName'];  ?>
            </h4>
            <h4>
            <?php echo $users['age'];  ?>
            </h4>
            <h4>
            <?php echo $users['email'];  ?>
            </h4>
            <small> Created On <?php echo $users['date']; ?></small>
            <br>
            <a href="edit.php?id=<?php echo $users['id']; ?>" class="btn btn-info">Edit</a>
            <a href="index.php" class="btn btn-success">Logout</a>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="">

                <input type="hidden" value="<?php echo $users['id'];?>" name="delete">

                <input type="submit" value="delete" name="deleteid" class="btn btn-danger">

            </form>
        </div>
    </div>
