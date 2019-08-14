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
            font-family: 'Jokerman',sans-serif;
            text-align: center;
            text-transform: uppercase;
        }
    </style>

</head>
<body>
    <h1>This is a heading</h1>
    <h2 id = "header2">This is also a heading</h2>
    <p id = "par" style="color:blue">This is a paragraph</p>
    <a href = "https://www.facebook.com">Link to Facebook</a>
    <form action="">
    <input type="button" id="1" value="ON" style="color:blue"
       onclick="toggle();">
    </form>
</body>
<script type="text/javascript">
        document.getElementById("header2").innerHTML = "Hello World!";
        document.getElementById("par").style.fontSize = "50px";

       function toggle()
        {
        if(document.getElementById("par").style.color = "blue"){
        document.getElementById("par").style.color = "red";}

        else {document.getElementById("par").style.color = "blue";}
        }
    </script>
</html>
