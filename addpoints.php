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

    <div class="cat-tab-container">
      <a class="cat-tab active" href="javascript:;" data-content-id="content-run"></a>Runs</a>
      <a class="cat-tab" href="javascript:;" data-content-id="run">Tricks</a>
      <a class="cat-tab" href="javascript:;" data-content-id="run">ECP's</a>
      <a class="cat-tab" href="javascript:;" data-content-id="deductions">Deductions</a>
      <a class="cat-tab" href="javascript:;" data-content-id="total">Total</a>
    </div>


    <div class="cat-content-container">
      <div class="cat-content" id="content-run">
        <div class="score-filter">
          <a class="score-filter-option orange" href="#all">All</a>
          <a class="score-filter-option green" href="#beginner">Beginner</a>
          <a class="score-filter-option blue" href="#intermediate">Intermediate</a>
          <a class="score-filter-option black" href="#expert">Expert</a>
        </div>

        <div class="score-list">
          <div class="score-row" data-difficulty="beginner" data-id="1">
            <div class="score-name">Big Dipper</div>
            <img class="score-difficulty" src="images/ico-beg.svg">
            <div class="score-points">44pts</div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
            </div>
          </div>
          <div class="score-row" data-difficulty="intermediate" data-id="2">
            <div class="score-name">Big Dipper</div>
            <img class="score-difficulty" src="images/ico-int.svg">
            <div class="score-points">44pts</div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
            </div>
          </div>
          <div class="score-row" data-difficulty="expert" data-id="3">
            <div class="score-name">Big Dipper</div>
            <img class="score-difficulty" src="images/ico-exp.svg">
            <div class="score-points">44pts</div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
            </div>
          </div>
          <div class="score-row" data-difficulty="expert" data-id="4">
            <div class="score-name">Big Dipper</div>
            <img class="score-difficulty" src="images/ico-ext.svg">
            <div class="score-points">44pts</div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
            </div>
          </div>
        </div>
      </div>

      <div class="cat-content" id="content-tricks">
        <div class="score-filter">
          <a class="score-filter-option orange" href="#all">All</a>
          <a class="score-filter-option green" href="#beginner">Beginner</a>
          <a class="score-filter-option blue" href="#intermediate">Intermediate</a>
          <a class="score-filter-option black" href="#expert">Expert</a>
          <a class="score-filter-option red" href="#extreme">Extreme</a>
        </div>
        <div class="trick-filter">
          <a class="trick-filter-option active" href="#air">Air</a>
          <a class="trick-filter-option" href="#park">Park</a>
          <a class="trick-filter-option" href="#grabs">Grabs</a>
          <a class="trick-filter-option" href="#rail-box">Rail/Box</a>
          <a class="trick-filter-option" href="#flat-knuckle">Flat/Knuckle</a>
        </div>

        <div class="score-list" data-trick-type="air">
          <div class="score-row" data-difficulty="beginner" data-id="1">
            <div class="score-name">Big Dipper</div>
            <img class="score-difficulty" src="images/ico-beg.svg">
            <div class="score-points">44pts</div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
            </div>
          </div>
          <div class="score-row" data-difficulty="intermediate" data-id="2">
            <div class="score-name">Big Dipper</div>
            <img class="score-difficulty" src="images/ico-int.svg">
            <div class="score-points">44pts</div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
            </div>
          </div>
        </div>

        <div class="score-list" data-trick-type="park">
          <div class="score-row" data-difficulty="expert" data-id="3">
            <div class="score-name">Big Dipper</div>
            <img class="score-difficulty" src="images/ico-exp.svg">
            <div class="score-points">44pts</div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
            </div>
          </div>
          <div class="score-row" data-difficulty="expert" data-id="4">
            <div class="score-name">Big Dipper</div>
            <img class="score-difficulty" src="images/ico-ext.svg">
            <div class="score-points">44pts</div>
            <div class="score-counter">
              <a class="counter-btn js-counter-add" href="javascript:;">+</a>
              <div class="counter-value js-counter-value" data-value="1">1</div>
              <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
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