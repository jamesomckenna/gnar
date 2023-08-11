<!DOCTYPE html>
<html lang="en">

<head>
  <title>GNAR</title>
  <?php require('templates/header.php'); ?>
</head>

<body id="leaderboard">


  <?php
  require('api/leaderboard.php');

  ?>

  <div class="shell">
    <div>
      <a href="index.php"><img src="images/RUSS logo red.png" alt="Russ logo home" height=100px width=100px></a>
      <h1 class="header">Leaderboard</h1>
    </div>

    <div class="uni-container">
      <div class="uni-filter">
        <a class="difficulty-filter orange" href="#name">Name</a>
        <a class="difficulty-filter green" href="#topscore">Top Score</a>
        <a class="difficulty-filter blue" href="#mostruns">Most Runs</a>
        <a class="difficulty-filter black" href="#distance">Distance</a>
        <a class="difficulty-filter red" href="#topspeed">Top Speed</a>
      </div>

      <div class="score-list">
        <?php foreach ($points_list['ecp'] as $score_row): ?>
          <div class="score-row" data-difficulty="<?= $score_row['difficulty']; ?>" data-id="<?= $score_row['id']; ?>"
            data-points="<?= $score_row['points']; ?>" data-name="<?= $score_row['name']; ?>" data-value="0">
            <div class="score-name">
              <?= $score_row['name']; ?>
            </div>
            <?php if (isset($difficulty_icons[$score_row['difficulty']])): ?>
              <img class="score-difficulty" src="<?= $difficulty_icons[$score_row['difficulty']] ?>">
            <?php endif; ?>
            <div class="score-points">
              <?= $score_row['points']; ?>pts
            </div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value">0</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>

<footer>
  <a href="index.php">Home</a>
  <a href="../">Back</a>
</footer>

</html>