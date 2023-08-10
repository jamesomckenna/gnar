<!DOCTYPE html>
<html lang="en">

<head>
  <title>GNAR</title>
  <?php require('templates/header.php'); ?>
</head>

<body>
  <div class="shell">

    
    <div>
        <a href="index.php"><img src="images/RUSS logo red.png" alt="Russ logo home" height=100px width=100px></a>
        <h1 class="header">Leaderboard</h1>
        <!-- <a href="../">Back</a> -->
    </div>

    <!-- <div class="tab-header-container">
      <a class="tab-header" href="#topscore">Top Score</a>
      <a class="tab-header" href="#mostruns">Most runs</a>
      <a class="tab-header" href="#distance">Distance</a>
      <a class="tab-header" href="#topspeed">Top Speed</a>
    </div> -->

    <div class="uni-container">
      <div class="uni-filter">
          <a class="difficulty-filter orange"  href="#name">Name</a>
          <a class="difficulty-filter green"  href="#topscore">Top Score</a>
          <a class="difficulty-filter blue"  href="#mostruns">Most Runs</a>
          <a class="difficulty-filter black"  href="#distance">Distance</a>
          <a class="difficulty-filter red"  href="#topspeed">Top Speed</a>

      </div>
    <?php
    echo "<br><br>";
    if ((include 'api/scoreboard.php') != TRUE) {
      echo 'error geting database API';
    }

    for ($i = 0; $i < 3; $i++) {
      echo $i . "<br>";
    }

    echo '<h1>hi tim</h1>';
    echo '<h1>hi James</h1>';
    ?>
    </div>
  </div>
</body>

<footer>
    <a href="index.php">Home</a> 
    <a href="../">Back</a>
</footer>

</html>