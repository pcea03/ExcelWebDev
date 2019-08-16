

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get and Post</title>
</head>
<body>

    <form method="POST" action="">
        <div>
            <label>Name: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <input type="submit" name="submit" value="submit">
        </div>
    </form>

    <?php 
        if (isset($_POST['name'])) {
            $getName=$_POST['name'];   ?>

            <h1 style="color: red"> <?php echo "{$getName}'s Profile";?></h1>
       <?php } ?>

    
  
   
 
        
</body>
</html>