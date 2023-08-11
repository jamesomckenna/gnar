<!DOCTYPE html>
<html lang="en">

<head>
  <title>GNAR</title>
  <?php require(dirname(__FILE__).'/templates/header.php'); ?>
</head>

<body id="leaderboard">


  <?php
  require(dirname(__FILE__).'/api/leaderboard.php');
  $points_leaderboard = getPointsLeaderboard();
  ?>

  <div class="shell">
    <div>
      <a href="index.php"><img src="images/RUSS logo red.png" alt="Russ logo home" height=100px width=100px></a>
      <h1 class="header">Leaderboard</h1>
    </div>

    <div class="uni-container">
      <!-- <div class="uni-filter">
        <a class="difficulty-filter orange" href="#name">Name</a>
        <a class="difficulty-filter green" href="#topscore">Top Score</a>
        <a class="difficulty-filter blue" href="#mostruns">Most Runs</a>
        <a class="difficulty-filter black" href="#distance">Distance</a>
        <a class="difficulty-filter red" href="#topspeed">Top Speed</a>
      </div> -->

      <div class="score-list">
        <?php foreach ($points_leaderboard as $score_row): ?>
          <div class="score-row">
            <div class="score-name">
              <?= $score_row['name']; ?>
            </div>
            <div class="score-points">
              <?= $score_row['points']; ?>pts
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>

</html>