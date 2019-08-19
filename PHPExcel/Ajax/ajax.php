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

            //sanitize email
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo $email.'<br>';
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo 'Email is VALID';
            }else{
                echo 'Emails is NOT VALID';
            }
        }  
        echo '<br>--------------------<br>';

          echo 'Sanitize <br>';
        $var = 'sdfsdfdsfsdsfd465456';
        $var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);
        if(filter_var($var,FILTER_VALIDATE_INT))
        {
            echo $var;
        }else{
            echo $var.' is not an integer or number';
        }
        echo '<br>--------------------<br>';
        echo 'SANITIZE with var_dump <br>';
        //Another way to sanitize using vardump
        $var2 = 'sdfsdfdsfsdsfd465456';
        var_dump(filter_var($var2, FILTER_SANITIZE_NUMBER_INT));

            echo '<br>--------------------<br>';
            echo 'sanitize special chars <br>';
        $var3 = '<script>alter(1)</script>';
            echo filter_var($var3, FILTER_SANITIZE_SPECIAL_CHARS);

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