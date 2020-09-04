<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorial</title>
</head>
<body>
  <div class="container">
  This is my first  php website!
<?php
    echo "Hello world this is printed using PHP!";
    $variable1 = 3;
    $variable2 = 4;
    echo $variable1;
    echo $variable2;
    echo $variable1+$variable2;
    // Arithmetic Operator
    echo "<h1>Arithmetic Operator</h1>";
    echo "the addition value of variable1 + variable2=";
    echo $variable1+$variable2;
    echo "<br>";
    echo "the substraction value of variable1 - variable2=";
    echo $variable1-$variable2;
    echo "<br>";
    echo "the multiplication value of variable1 * variable2=";
    echo $variable1*$variable2;
    echo "<br>";
    echo "the divison value of variable1 / variable2=";
    echo $variable1/$variable2;
    // Assignment Operator
    echo "<h1> Assignment Operator</h1>";
    $newvar=$variable1;
    echo "the valueof new var is ";
    echo $newvar;
    $newvar+=3;
    echo "<br>";
    echo "the valueof new var is ";
    echo $newvar;
    $newvar-=2;
    echo "<br>";
    echo "the valueof new var is ";
    echo $newvar;
    $newvar*=2;
    echo "<br>";
    echo "the valueof new var is ";
    echo $newvar;
    // Comparison Operator
    echo "<h1> Comparison Operator</h1>";
    echo "the value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 4==4 is";
    echo var_dump(4==4);
    echo "<br>";
    echo "the value of 1!=4 is";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1>=4 is";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1<=4 is";
    echo var_dump(1<=4);
    echo "<br>";
    // Increment/Decrement Operator
    echo "<h1> Increment Operator</h1>";
    $variable1++;
    echo "the incerment value of variable1 is:";
    echo $variable1;
    echo"<br>";
    $variable1--;
    echo "the decerment value of variable1 is:";
    echo $variable1;
    echo "<br>";
    --$variable1;
    echo $variable1;
    echo "<br>";
    ++$variable1;
    echo $variable1;
      // Logical Operator
    echo "<h1> Logical Operator</h1>";
    echo "<h2> AND Operator</h2>";
    $myvar =(true)&&(true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(false)&&(true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(true)&&(false);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(false)&&(false);
    echo var_dump($myvar);
    echo "<h2> OR Operator</h2>";
    $myvar =(true)||(true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(false)||(true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(true)||(false);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(false)||(false);
    echo var_dump($myvar);
    echo "<h2> AND Operator</h2>";
    $myvar =(true)&&(true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(false)&&(true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(true)&&(false);
    echo var_dump($myvar);
    echo "<br>";
    $myvar =(false)&&(false);
    echo var_dump($myvar);


?>
  </div>
</body>
</html>