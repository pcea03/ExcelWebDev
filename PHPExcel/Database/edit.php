<?php
require ('config/config.php');
require ('config/dbconnection.php');


$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = 'SELECT * From users where id = '.$id;
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    
$query = "UPDATE users SET userName='$userName',firstName='$firstName',lastName='$lastName' where id = '$id'";

    if(mysqli_query($conn,$query))
    {
        header('location:'.ROOT_URL.'');
    }else
        {
            echo 'error:'.mysqli_error($conn);
        }
    
}


//free result
//close connect

?>
    <?php include ('include/header.php'); ?>
    <div class="jumbotron">

        <div class="container col-lg-6 text-center">

        <h1 style="font-family: 'Roboto'; text-align: center;">Edit Users</h1>
        <form method="POST" action="#">
            <div class="">
                <label for="username">Username</label>
                <input type="text" name="userName" class="form-control" value="<?php echo $users['userName']; ?>">
            </div>

            <div>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" class="form-control" value="<?php echo $users['firstName']; ?>">
            </div>
            
            <div>
                <label for="lastName">Last name</label>
                <input type="text" name="lastName" class="form-control" value="<?php echo $users['lastName']; ?>">
            </div>

            <div>
                <label for="lastName">Age</label>
                <input type="text" name="lastName" class="form-control" value="<?php echo $users['age']; ?>">
            </div>
            <div>
                <label for="lastName">Email name</label>
                <input type="text" name="lastName" class="form-control" value="<?php echo $users['email']; ?>">
            </div>

            <br>
            <input type="submit" name="submit" class="btn btn-secondary">

        </form>

        </div>
        
    </div>
<?php include ('include/footer.php'); ?>
