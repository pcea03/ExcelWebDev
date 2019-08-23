<?php
require 'config/config.php';
require 'config/dbconnection.php';

if(isset($_POST['login'])){

    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
    
    $sql = "SELECT id FROM users WHERE userName = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
  
    if($count == 1) {
       $_SESSION['login_user'] = $myusername;
       
       header("location: index.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
 }


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="css/signin.css" rel="stylesheet">

  <body class="text-center">
    <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <img class="mb-4" src="images/EXCEL LOGO-02.jpg" alt="" width="150" height="150">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">User Name</label>
      <input type="text" name="username" class="form-control" placeholder="User Name" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>

      <button class="btn btn-lg btn-primary btn-block" type="login" name="login">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
