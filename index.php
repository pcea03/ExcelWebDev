<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
            font-size: 50px;
            font-family: 'Roman',sans-serif;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h1>This is a heading</h1>
    <h2 id = "header2">This is also a heading</h2>
    <p id = "par">This is a paragraph</p>
    <a href = "https://www.facebook.com">Link to Facebook</a>
    
    <script>
        document.getElementById("header2").innerHTML = "Hello World!";
        document.getElementById("par").style.fontSize = "50px";
        document.getElementById("par").style.color = "blue";
        
        if(document.getElementById("par").value=="OFF"){
        document.getElementById("1").value="ON";}

        else if(document.getElementById("1").value=="ON"){
        document.getElementById("1").value="OFF";}

    </script>
</body>
</html>
