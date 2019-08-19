<?php 
        //check for posted data
        if(filter_has_var(INPUT_POST, 'data'))
        {
            $email = $_POST['data'];
            // if(filter_has_var(INPUT_POST, 'data'))
            // {
            //     $_POST['data'];
            //     echo $data;
            // }else{
            //     echo 'No Data Found';
            // }
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo $email.'<br>';
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo 'Email is VALID';
            }else{
                echo 'Emails is NOT VALID';
            }
        }
            
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
        
        <input type="text" name="data">
        <button type="submit">Submit</button>

    </form>
</body>
</html>