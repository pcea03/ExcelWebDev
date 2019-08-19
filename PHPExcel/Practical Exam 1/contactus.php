<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="author" content="Psalter Cea">
    <style>
    body {
        background-color: #ffe082;
    }    </style>
</head>
<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a  class="navbar-brand" href="contact.php">Contact Us</a>
				</div>
			</div>
		</nav>
		<div class="container">
					<div class="alert alter-danger"></div>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
				</div>
				<div class="form-group">
					<label>Message</label>
                    <textarea name="message" class="form-control"></textarea>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                <a href="welcome.php" class="btn btn-primary">Cancel</a>             
               </div>
                
				<br><br>

			</form>
		</div>
</body>
</html>