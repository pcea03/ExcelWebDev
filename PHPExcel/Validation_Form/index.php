<?php
    if(isset($_POST['submit']))
    {
            session_start();

            $_SESSION['name'] = htmlentities($_POST['name']);
            $_SESSION['email'] = htmlentities($_POST['email']);
            $_SESSION['userName'] = htmlentities($_POST['userName']);
            $_SESSION['message'] = htmlentities($_POST['message']);
            $_SESSION['gender'] = htmlentities($_POST['gender']);
            header('location: output.php');
    }
?>


<!DOCTYPE HTML>  
<html>
<head>
	<title>Validation Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
<style>

 body {
   background-image: url('excellogo/excellogobg.jpg');
   background-positon: center;
   background-repeat: no-repeat;

 }
 div.container {
  right: -250px; 
  top: 90px;
 }

</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  //Username  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  //Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  //Comment
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  //Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="container text-center col-lg-4">
  <div class="card">
    <h2 class="bg-dark float-right font-weight-bold" style="color: #81d4fa;font-family: Audiowide; padding: 25px 0px 25px 20px;"><img src="excelicon.png" alt="excel icon" class="float-left" width="100" >PHP Form Validation Example</h2>    
    <div class="card-body text-warning">
      <div class="container">
        <blockquote class="blockquite mb-0">
        <h3><span class="text-dark">Please fill all the inputs</span></h3>
        </blockquote>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">  

            <div class="input-group mb-3">
              <div class="input-group-prepend ">
                <span class="input-group-text" style="background-color: #ffe082;" >Name</span>
              </div>
              <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" style="background-color: #ffe082;">Email</span>
              </div>
              <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" style="background-color: #ffe082;">User Name</span>
            </div>
              <input type="text" name="userName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" style="background-color: #ffe082;" id="inputGroup-sizing-default">Password</span>
              </div>
              <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" style="background-color: #ffe082;">Message</span>
              </div>
              <textarea class="form-control" name="message" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required></textarea>
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" style="background-color: #ffe082;" >Gender</label>
              </div>
              <select class="custom-select" name="gender" id="inputGroupSelect01">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

            <button class="btn btn-dark font-weight-bold" type="submit" name="submit" style="color: #ffe082;">Submit</button>
          </form>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>