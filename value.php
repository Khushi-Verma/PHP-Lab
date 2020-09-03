<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Second Page</title>
  <style>
    body{
      background-color:darkkhaki;
    }
    .heading{
      margin-top:50px;
        color: brown;
        text-align: center;
    }
    .menu{
      margin-top: 70px;
        font-size:20px;
        margin-left: 100px;
        color: black;
    }
    </style>
</head>
<body>
  <div class="heading">
    <h1>Conversion are here-</h1>
</div>
<div class="menu">
<?php
$kilovalue= 5;
$radvalue=5;
    $metervalue= 5;
    $constant=3.14;
    $farvalue=5;
    echo "* the value is  5 meter we convert it into centimeter!";
    echo "<br>";
    $centimeter= $metervalue*100;
    echo "the value is $centimeter cm";
    echo "<br>";
    echo "* the value is 5 kilometer we convert it into inches";
    echo "<br>";
    $inchvalue= $kilovalue*39370.07874;
    echo "the value is $inchvalue inches";
    echo "<br>";
    echo "* the value is 5 radian we convert it into degree";
    echo "<br>";
    $degvalue= $radvalue*2 * (180/3.14);
    echo "the value is in inches $degvalue degree";
    echo "<br>";
    echo "* the value is 5 farenhite we convert it into celcius";
    echo "<br>";
    $celvalue= 5/9 * ($farvalue - 32) ;
    echo "the value is in inches $celvalue degree";

?>
  </div>
</body>
</html>