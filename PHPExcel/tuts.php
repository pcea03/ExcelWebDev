<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form>  
Enter First Number:  
<input type="input" name="number1" /><br><br>  
Enter Second Number:  
<input type="input" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
 </body>  
<?php      
$number1=$_GET['number1'];   
$number2=$_GET['number2'];   
$sum = $number1 + $number2;
echo "Sum of $number1 and $number2 is = ".$sum;  
//end input number and sum
echo "<br>------<br>";


    //nested loops, multidimensional array
    echo "Multidimension Array <br>";

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
echo "------<br>";

echo "Functions <br>";
function simpleFunction($name)
{
    echo $name;
}
simpleFunction('Psalter');

echo '<br>';
function sum($num1,$num2){
    $sum = $num1 + $num2;
    return $sum;
}
echo sum(5,6);
echo "<br>------<br>";
//end function

//exercies reverse array
 
echo "Reverse Array using loop<br>";

$reverseArray = array(1, 2, 3, 4);
print_r($reverseArray);
$tmpArray = array();

 $arraySize = sizeof($reverseArray)-1;

echo "<br>";
$inc = 1;
for($i=$arraySize; $i>-1; $i--)
{
    $tmpArray[$inc] = $reverseArray[$i];
    $inc++;
}
    $reverseArray = $tmpArray;
print_r($reverseArray);
//end reverse array exercise

echo "<br>----<br>";

// arithmetic operators
echo "Arithmetic operators <br>";

$x = 100;
$y = 80;
echo "Addition: ".($x+$y)."<br>";
echo "Substraction: ".($x-$y)."<br>";
echo "Division: ".$x/$y."<br>";
echo "Modulo: ".$x%$y."<br>";

echo "<br>------<br>";
$x=2;
$y=5;

var_dump($x && $y);
var_dump($x>=$y);
//end arithmetic operators
echo "<br>------<br>";

//another way to concatenate
echo "Another way to concatenate <br>";

$txt1 = "Hello";
$txt2 = "World";
$txt1.=$txt2;
echo $txt1;
//end 
echo "<br>------<br>";
//if else
echo "If Else <br>";

$age = 3;
$message = "";
$text= "";
if($age<=3){
    $text = "Infant";
}elseif($age>3 && $age<=7){
    $text = "Toddler";
}elseif($age>8 && $age<=15){
    $text = "Kid";
}elseif($age>15 && $age<=21){
    $text = "Adolescence";
}elseif($age>21 && $age<=35){
    $text = "Young Professionals";
}elseif ($age>35 && $age<=59){
    $text = "Adult";
}elseif($age>59){
    $text = "Senior";
}
echo $message = $text;
//end if else

echo "<br>------<br>";

//switch case
echo "Switch Case <br>";
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
//end switch case
?>


</body>
</html>