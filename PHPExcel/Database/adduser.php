<?php
require ('config/config.php');
require ('config/dbconnection.php');


//check submit


if(isset($_POST['submit'])){
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    
    $query = "INSERT INTO users(userName,password,email,firstName,lastName,age) VALUES ('$userName','$password','$email','$firstName','$lastName','$age')";

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
    <?php include ('include/header.php'); ?>
    <div class="jumbotron">

        <div class="container col-lg-6 text-center">

        <h1 style="font-family: 'Roboto'; text-align: center;">Add Users</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
            <div class="">
                <label for="username">Username</label>
                <input type="text" name="userName" class="form-control" value=>
            </div>

            <div class="">
                <label for="username">Password</label>
                <input type="password" name="password" class="form-control" value=>
            </div>

            <div class="">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" class="form-control">
            </div>
            
            <div class="">
                <label for="lastName">Last name</label>
                <input type="text" name="lastName" class="form-control">
            </div>

            <div class="">
                <label for="username">Email</label>
                <input type="text" name="email" class="form-control" value=>
            </div>

            <div class="">
                <label for="username">age</label>
                <input type="text" name="age" class="form-control" value=>
            </div>
            <br>
            <input type="submit" name="submit" value ="Add User" class="btn btn-secondary">

        </form>

        </div>
        
    </div>
<?php include ('include/footer.php'); ?>
