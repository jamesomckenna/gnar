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
          <a class="score-filter-option orange" href="#all">All</a>
          <a class="score-filter-option green" href="#beginner">Beginner</a>
          <a class="score-filter-option blue" href="#intermediate">Intermediate</a>
          <a class="score-filter-option black" href="#expert">Expert</a>
        </div>
        <div class="score-list">
          <div class="score-row" data-difficulty="beginner" data-id="1">
            <div class="run-checkbox">Big Dipper</div>
            <img class="run-difficulty" src="images/ico-beg.svg">
            <div class="run-points">44pts</div>
            <div class="run-counter">
              <a class="counter-btn js-counter-add">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub">-</a>
            </div>
          </div>
          <div class="score-row" data-difficulty="intermediate" data-id="2">
            <div class="run-checkbox">Big Dipper</div>
            <img class="run-difficulty" src="images/ico-int.svg">
            <div class="run-points">44pts</div>
            <div class="run-counter">
              <a class="counter-btn js-counter-add">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub">-</a>
            </div>
          </div>
          <div class="score-row" data-difficulty="expert" data-id="3">
            <div class="run-checkbox">Big Dipper</div>
            <img class="run-difficulty" src="images/ico-exp.svg">
            <div class="run-points">44pts</div>
            <div class="run-counter">
              <a class="counter-btn js-counter-add">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub">-</a>
            </div>
          </div>
          <div class="score-row" data-difficulty="expert" data-id="4">
            <div class="run-checkbox">Big Dipper</div>
            <img class="run-difficulty" src="images/ico-ext.svg">
            <div class="run-points">44pts</div>
            <div class="run-counter">
              <a class="counter-btn js-counter-add">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub">-</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>

  </footer>
</body>

</html>