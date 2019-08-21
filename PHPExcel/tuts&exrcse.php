<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">  
Enter First Number:  
<input type="input" name="number1"/><br><br>  
Enter Second Number:  
<input type="input" name="number2" /><br><br>  
<input  type="submit" name="submit2" value="Add">  
</form>  
 </body>  
<?php      
if (isset($_POST['submit2'])) {
    $number1=$_POST['number1'];   
    $number2=$_POST['number2'];   
    $sum = $number1 + $number2;
    echo "Sum of $number1 and $number2 is = ".$sum;  
    //end input number and sum
}

echo "<br>------------------------------------------------";


    //nested loops, multidimensional array
    echo "<h2>Multidimension Array</h2>";

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
echo "------------------------------------------------";

echo "<h2>Functions</h2>";
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
echo "<br>------------------------------------------------";
//end function

//exercies reverse array
 
echo "<h2>Reverse Array using loop</h2>";

$reverseArray = array(1, 2, 3, 4,5,6);
print_r($reverseArray);
$tmpArray = array();

 $arraySize = sizeof($reverseArray)-1;

echo "<br>sdfdsfsdfdf";
$inc = 1;
for($i=$arraySize; $i>-1; $i--)
{
    $tmpArray[$inc] = $reverseArray[$i];
    $inc++;
}
    $reverseArray = $tmpArray;
print_r($tmpArray);
//end reverse array exercise

echo "<br>----------------------------------------------------";

// arithmetic operators
echo "<h2>Arithmetic operators</h2>";

$x = 100;
$y = 80;
echo "Addition: ".($x+$y)."<br>";
echo "Substraction: ".($x-$y)."<br>";
echo "Division: ".$x/$y."<br>";
echo "Modulo: ".$x%$y."<br>";

$x=2;
$y=5;

var_dump($x && $y);
var_dump($x>=$y);
//end arithmetic operators
echo "<br>------------------------------------------------";

//another way to concatenate
echo "<h2>Another way to concatenate</h2>";

$txt1 = "Hello";
$txt2 = "World";
$txt1.=$txt2;
echo $txt1;
//end 
echo "<br>------------------------------------------------";
//if else
echo "<h2>If Else </h2>";

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

echo "<br>------------------------------------------------";

//switch case
echo "<h2>Switch Case</h2>";
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

echo "<br>------------------------------------------------";
echo "<h2>Count Strings in Array</h2>";
$values = array(true,false,null,'abc',123,'123',0,'',1.0,';');
$arraysize = sizeof($values);
$holder=0;
var_dump($values);
echo "<br>";
for($i=0;$i<$arraysize;$i++){
    if(is_string($values[$i])){
        echo $values[$i].",";
        $holder++;
    }
}
echo "<br>";

echo "total strings : ".$holder;
echo "<br>------------------------------------------";

//ternary
echo "<h2>Ternary</h2>";

$loggedIn = true;

//traditional if else
if ($loggedIn) {
    echo "You are Logged in";
}else {
    echo "Unable to log in";
}
echo "<br>";

echo $loggedIn = ($loggedIn) ?  'Logged In' :  'Logged Out' ;
?>
<form action="" method="POST">  
Enter grade:  
<input type="input" name="grade" /><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  

<?php

if (isset($_POST['submit'])) {

    $grade=$_POST['grade'];   

$age = 11;
$score = 97;
echo "<br>";
echo ($grade > 10 ? ($age > 10 ? 'Exceptional' : 'Good'):
                    ($age > 10 ? 'Average' : 'Horrible')
        );
echo "<br>";
$score =23;

echo '<h3 style="color: #1565c0">Your score is: </h3>'.$grade.'<h2 style = "color: #8bc34a
">'.($grade >= 96 ? 'Excelent' 
    : ($grade >= 91 ? 'Very Good' 
    : ($grade >= 85 ? 'Satisfactory'
    : ($grade >= 75 ? 'Good'
    : ($grade <= 74 ? 'Failed': ''))))).'</h2>';
}

?>




</body>
</html>