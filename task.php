<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My first task on PHP</title>
</head>
<body>
  <?php
  echo "<h4>The Range Function</h4>";
  $nums = range(1,10);
  print_r($nums);
 
  ?>

  <?php
 
  echo "<h4>The Sum Function</h4>";
  $age = array(25,20,30);
  echo array_sum($age);
  ?>
</body>
</html>