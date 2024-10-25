<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  // echo "Today is " . date("Y/M/D") . "<br>";
  // echo "Today is " . date("Y-M-D") . "<br>";
  // echo "Today is " . date("Y.M.D") . "<br>";
  // echo "Today is " . date("l");

  // echo "<br>";


  // date_default_timezone_set("America/New_York");
  // echo "The time is " . date("h:i:sa");
  // echo "<br>";


  // $d = mktime(10, 25, 55, 10, 2, 24);
  // echo "Created date is " . date("y-m-d h:i:sa",$d);

  // echo "<br>";

  // $c = strtotime("10:30PM april 15 2024");
  // echo "Create date is " . date("y-m-d h:i:sa",$c) . "<br>";

  // $d=strtotime("tomorrow");
  // echo date("Y-m-d h:i:sa", $d) . "<br>";
  
  // $d=strtotime("next Saturday");
  // echo date("Y-m-d h:i:sa", $d) . "<br>";
  
  // $d=strtotime("+3 Months");
  // echo date("Y-m-d h:i:sa", $d) . "<br>";
  

  $startdate = strtotime("sunday");
  $enddate = strtotime("+6 weeks", $startdate);

  while ($startdate < $enddate){
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("1 week", $startdate);
  }










  ?>


</body>

</html>