<!DOCTYPE html>
<html lang="en">

<head>
  <title>GNAR</title>
  <?php require('templates/header.php'); ?>
</head>

<body>
  <div class="shell">
    <div class="header">
      <a href="index.php"><img scr="images/Russ_red_logo.png" alt="Russ logo home" height=100px width=100px></a>
      <h1>GNAR - Scoring</h1>
      <a href="../">Back</a>
      <a href="index.php">Home</a> 
    </div>

    <div class="tab-header-container">
      <a class="tab-header" href="#runs">Runs</a>
      <a class="tab-header" href="#tricks">Tricks</a>
      <a class="tab-header" href="#ecp">ECP's</a>
      <a class="tab-header" href="#deduction">Deductions</a>
      <a class="tab-header" href="#total">Total</a>
    </div>
    

    <div class="tab-content-container">
      <div class="tab-content">
        <div class="score-filter">
          <a class="score-filter-option" id="orange" href="#all">All</a>
          <a class="score-filter-option" id="green" href="#beginner">Beginner</a>
          <a class="score-filter-option" id="blue" href="#intermediate">Intermediate</a>
          <a class="score-filter-option" id="black" href="#expert">Expert</a>
          <!-- <a class="score-filter-option" id="red" href="#extreme">Extreme</a> -->
        </div>
        <div class="score-list">
          <div class="score-row">
            <div class="run-checkbox">Big Dipper</div>
            <div class="run-difficulty">blue</div>
            <div class="run-points">44pts</div>
            <div class="run-counter">+ 1 -</div>
          </div>
          <div class="score-row">
            <div class="run-checkbox">Big Dipper</div>
            <div class="run-difficulty">blue</div>
            <div class="run-points">44pts</div>
            <div class="run-counter">+ 1 -</div>
          </div>
          <div class="score-row">
            <div class="run-checkbox">Big Dipper</div>
            <div class="run-difficulty">blue</div>
            <div class="run-points">44pts</div>
            <div class="run-counter">+ 1 -</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>

  </footer>
</body>

</html>