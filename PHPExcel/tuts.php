<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    //nested loops, multidimensional array
  $cars = array(array('Honda',2019, 10),
                array('Toyota',2018, 5),
                array('Mitsubishi',2017, 3)
                    );

                    $hold = count($cars);

                    for($x=0;$x<$hold;$x++){
                        for($y=0;$y<$hold;$y++){
                            echo $cars[$x][$y].' | ';
                        }
                        echo '<br>';
                    }
//functions

function simpleFunction($name){
    echo $name;
}
simpleFunction('Psalter');

echo '<br>';
function sum($num1,$num2){
    $sum = $num1 + $num2;
    return $sum;
}
echo sum(5,6);
//end function

//exercies

    $allno = array(1,2,3,4);
    $hold = count($allno);
print_r($allno);
    for($i=0;$i<$hold;$i++){
            $allno[$i] = $allno[$hold--];
    }
    print_r($allno);
     ?>
</body>
</html>