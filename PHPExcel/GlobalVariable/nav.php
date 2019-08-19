<?php 
        $msg='';
        $type='';
    if(filter_has_var(INPUT_POST,'submit')){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if(!empty($name) && !empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
                $msg = 'Please use a Valid Email';
                $type = "alert-danger";
            }else{
                $type = "alert-success";
            }
    }else{
        $msg= 'Please Fill all the Fields';
        $type = "alert-danger";
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<br>
<body>
    <nav class = "navbar navbar-default">
        <div class = "container col-lg-4">
            <div class = "navbar-header">
                <a class="navbar-brand text-secondary" href="">Send Messages</a>
            </div>
        </div>
    </nav>
<div class= "container">
<?php if($msg !== ''): ?>
    <div class = "alert'.<?php $type ?>.'" role="alert">
    <?php echo $msg?>
    </div>
<?php endif ?>
</div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div class = "container col-lg-4">
        <div class = "form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="">
        </div>
        <div class = "form-group">
            <label>Email</label>
            <input type ="text" name = "email" class="form-control" value="">
        </div>
        <div class = "form-group">
            <label>Message</label>
            <textarea class="form-control" name = "message"></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn-secondary">Submit</button>
    </div>
    </form>

</body>
</html>