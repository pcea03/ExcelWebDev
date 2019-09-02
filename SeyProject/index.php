<?php
	require_once('config/dbconnection.php');
	session_start();
	
if(isset($_POST['signup'])){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$userlevel = 'student';
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	$cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
    $add = mysqli_real_escape_string($conn, $_POST['add']);
	
	if($pass == $cpass){
		$query = "INSERT INTO student_tbl(stdFname,stdLname,stdEmail,userLvl,stdPass,stdAdd) VALUES ('$fname','$lname','$email','$userlevel','$pass','$add')";
		if(mysqli_query($conn,$query))
		{
				?>
				<script> alert('Signed up Sucessfully!!!');</script>
				<?php
		}else
			{
				echo 'error:'.mysqli_error($conn);
			}
			mysqli_close($conn);
	}else{
		?>
			<script> alert('Password Mismatch');</script>
		<?php
	}
}

if(isset($_POST['login'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);

            $queryToDB = $conn->query("Select * 
                                                   from student_tbl 
                                                   where 
                                                   stdEmail = '$email' and 
                                                   stdPass = '$pass'");
            $count = mysqli_num_rows($queryToDB);
			$row = mysqli_fetch_object($queryToDB);
			// print_r($row);
			if ($count) {
               
                $_SESSION["stdFname"] = $row->stdFname;
                $_SESSION["stdLname"] = $row->stdLname;
                $_SESSION["stdEmail"] = $row->stdEmail;
                $_SESSION["stdAdd"] = $row->stdAdd;
?>  
                    <script type="text/javascript">
                       alert("Welcome! <?php echo $_SESSION['stdFname'];?>!");
                        window.location = "home.php";
                    </script>
        <?php 
            } else {
        ?>  
                    <script type="text/javascript">
                        alert("Your username and password is invalid. Please contact your administrator.");
                    </script>
<?php	
            }
	
		}		
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feval Online System</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css/signin.css" rel="stylesheet">

</head>
<body>
<div class="form-structor">
		
	<form action="#" method="POST">

		<div class="login">
				<h2 class="form-title" id="login">Log in</h2>
				<div class="form-holder">
					<input type="email" class="input" name="email" placeholder="Email" required/>
					<input type="password" class="input" name="pass" placeholder="Password" required/>
				</div>
				<button class="submit-btn" name="login">Log in</button>
		</div>

	</form>

	<form action="index.php" method="POST">
		<div class="signup slide-up">
			<div class="center">
				<h2 class="form-title" id="signup">Sign up</h2>
				<div class="form-holder">
					<input type="text" class="input" name="fname" placeholder="First Name" required />
					<input type="text" class="input" name="lname" placeholder="Last Name" required/>
					<input type="email" class="input" name="email"placeholder="Email" required/>
					<input type="text" class="input" name="add" placeholder="Address" required/>
					<input type="password" class="input" name="pass" placeholder="Password" required/>
					<input type="password" class="input" name="cpass" placeholder="Confirm Password" required/>
				</div>
				<button class="submit-btn" name="signup">Sign up</button>
			</div>
		</div>

	</form>

</div>
<script src="js/signinjs.js"></script>

</body>

</html>