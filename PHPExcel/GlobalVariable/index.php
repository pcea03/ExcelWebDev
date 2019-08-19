<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Variable</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class = "container">
        <h1 style="align: center;">Server and File Information</h1>
        <?php if($server): ?>
            <ul class = "list-group">
                <?php foreach($server as $key => $value):?>
                    <li class = "list-group-item">
                        <strong><?php echo $key; ?>:</strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            
            </ul>
        <?php endif ?>
</div>

<div class = "container">
        <h1 style="align: center;">Client Information</h1>
        <?php if($client): ?>
            <ul class = "list-group">
                <?php foreach($server as $clientkey => $clientvalue):?>
                    <li class = "list-group-item">
                        <strong><?php echo $clientkey; ?>:</strong>
                        <?php echo $clientvalue; ?>
                    </li>
                <?php endforeach; ?>
            
            </ul>
        <?php endif ?>
</div>
    
</body>
</html>