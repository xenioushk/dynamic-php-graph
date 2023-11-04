<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic PHP Graph</title>

  <link rel="stylesheet" href="assets/styles/styles.css">
</head>

<body>

  <?php

  $items = [
    'Class 1' => '50',
    'Class 2' => '20',
    'Class 3' => '40',
    ',Class 4' => '10',
    'Class 5' => '45',
    'Class 5' => '30',
    'Class 7' => '75',
    'Class 8' => '92',
    'Class 9' => '90',
    'Class 10' => '25',
    'Class 11' => '10',
    'Class 12' => '60'
  ];

  $maxValuedItem = max($items); // get the highest value. 39

  $totalItems = count($items); // Count: 5

  $barMaxWidth = 100 / $totalItems - 2; // (100/5) -2 =18

  $barMaxHeight = 120; // Why 120?. Height of the bar. default.

  ?>

  <div class="bwl-stat-container">

    <div class="bwl-stat-bars" style="height:<?php echo $barMaxHeight ?>px;">
      <?php
      foreach ($items as $item) :
        $currentItemPercentage = $item / $maxValuedItem; //20/39.
        $currentItemBarHight = $barMaxHeight * $currentItemPercentage; // Create the bar height.
        $currentItemTopBorderWidth = $barMaxHeight - $currentItemBarHight; // it will create a white blank space on top of the bar.
      ?>
        <div style="height:<?php echo $barMaxHeight ?>px; border-top-width:<?php echo $currentItemTopBorderWidth ?>px; width: <?php echo $barMaxWidth ?>%;" class="bwl-stat-bar">
          <span><?php echo $item; ?></span>
        </div>
      <?php endforeach ?>
    </div>

    <div class="bwl-stat-labels">
      <?php foreach ($items as $date => $item) : ?>
        <div style="width: <?php echo $barMaxWidth ?>%;" class="bwl-stat-label"><?php echo $date ?></div>
      <?php endforeach ?>
    </div>

    <div class="bwl-stat-caption">Students Information</div>

  </div>


</body>

</html>