<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electicity Bill</title>
  <style>
  body{
    background-color:lightgreen;
  }
  h1{
    text-align:center;
    margin-top:140px;
    color:brown;
    font-size:40px;
  }
  .body{
    text-align:center;
    font-size:30px;
    
  }
  </style>
</head>
<body>
  <h1>Electicity Bill</h1>
  <div class="body">
  <?php
  $U=750;
  echo "we will convert $U units in kilowatthour";
  echo "<br>";
  $kwh=$U/1000;
  echo "now the value is in kwh $kwh kwh";
  echo "<br>";
  echo "now if your electricity rate is 12 percent per kwh";
  echo "<br>";
  echo "that means it costs 9 percents per day to use your television";
  echo "<br>";
  $V=$kwh*12;
  echo "cost of bill for one day is $V";
  echo "<br>";
  $finalbill=$V*30;
  echo "the cost of 30 days bill is $finalbill";
?>
</div>
</body>
</html>