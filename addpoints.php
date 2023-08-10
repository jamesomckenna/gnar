<!DOCTYPE html>
<html lang="en">

<head>
  <title>GNAR</title>
  <?php require('templates/header.php'); ?>
</head>

<body id="add-points">

  <?php
  require('api/points-list.php');
  $points_list = getPointsList();

  $difficulty_icons = array(
    "beginner" => "images/ico-beg.svg",
    "intermediate" => "images/ico-int.svg",
    "expert" => "images/ico-exp.svg",
    "extreme" => "images/ico-ext.svg",
  )
    ?>

  <div class="shell">
    <div class="header">
      <a href="index.php"><img src="images/Russ_red_logo.png" alt="Russ logo home" height=100px width=100px></a>
      <h1>GNAR - Scoring</h1>
      <a href="../">Back</a>
      <a href="index.php">Home</a>
    </div>

    <div class="cat-tab-container">
      <a class="cat-tab active" href="javascript:;" data-content-id="content-run">Runs</a>
      <a class="cat-tab" href="javascript:;" data-content-id="content-trick">Tricks</a>
      <a class="cat-tab" href="javascript:;" data-content-id="content-ecp">ECP's</a>
      <a class="cat-tab" href="javascript:;" data-content-id="content-deduction">Deductions</a>
      <a class="cat-tab" href="javascript:;" data-content-id="content-total">Total</a>
    </div>

    <!-- runs -->
    <div class="cat-content-container">
      <div class="cat-content" id="content-run">
        <div class="difficulty-filter-container">
          <a class="difficulty-filter orange" href="javascript:;" data-difficulty-id="all">All</a>
          <a class="difficulty-filter green" href="javascript:;" data-difficulty-id="beginner">Beginner</a>
          <a class="difficulty-filter blue" href="javascript:;" data-difficulty-id="intermediate">Intermediate</a>
          <a class="difficulty-filter black" href="javascript:;" data-difficulty-id="expert">Expert</a>
        </div>

        <div class="score-list">
          <?php foreach ($points_list['run'] as $score_row): ?>
            <div class="score-row" data-difficulty="<?= $score_row['difficulty']; ?>" data-id="<?= $score_row['id']; ?>"
              data-points="<?= $score_row['points']; ?>">
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
                <div class="counter-value js-counter-value" data-value="0-">0</div>
                <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>


      <!-- tricks -->
      <div class="cat-content" id="content-trick" style="display: none;">
        <div class="difficulty-filter-container">
          <a class="difficulty-filter orange" href="javascript:;" data-difficulty-id="all">All</a>
          <a class="difficulty-filter green" href="javascript:;" data-difficulty-id="beginner">Beginner</a>
          <a class="difficulty-filter blue" href="javascript:;" data-difficulty-id="intermediate">Intermediate</a>
          <a class="difficulty-filter black" href="javascript:;" data-difficulty-id="expert">Expert</a>
          <a class="difficulty-filter red" href="javascript:;" data-difficulty-id="extreme">Extreme</a>
        </div>
        <div class="trick-tab-container">
          <a class="trick-tab active" href="javascript:;" data-content-id="content-trick-air">Air</a>
          <a class="trick-tab" href="javascript:;" data-content-id="content-trick-park">Park</a>
          <a class="trick-tab" href="javascript:;" data-content-id="content-trick-grab">Grabs</a>
          <a class="trick-tab" href="javascript:;" data-content-id="content-trick-box_rail">Rail/Box</a>
          <a class="trick-tab" href="javascript:;" data-content-id="content-trick-flat_knuckle">Flat/Knuckle</a>
        </div>
        
        <?php foreach ($points_list['trick'] as $index => $trick_type): ?>
          <div class="score-list trick-tab-content" id="content-trick-<?= $index; ?>" <?= $index == 'air' ? '' : 'style="display: none;"'; ?>>
            <?php foreach ($trick_type as $score_row): ?>
              <div class="score-row" data-difficulty="<?= $score_row['difficulty']; ?>" data-id="<?= $score_row['id']; ?>"
                data-points="<?= $score_row['points']; ?>">
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
                  <div class="counter-value js-counter-value" data-value="0">0</div>
                  <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="cat-content" id="content-ecp" style="display: none;">
        <!-- <div class="difficulty-filter-container">
          <a class="difficulty-filter orange" href="javascript:;" data-difficulty-id="all">All</a>
          <a class="difficulty-filter green" href="javascript:;" data-difficulty-id="beginner">Beginner</a>
          <a class="difficulty-filter blue" href="javascript:;" data-difficulty-id="intermediate">Intermediate</a>
          <a class="difficulty-filter black" href="javascript:;" data-difficulty-id="expert">Expert</a>
          <a class="difficulty-filter black" href="javascript:;" data-difficulty-id="extreme">Extreme</a>
        </div> -->
        
        <!-- ECP's -->
        <div class="score-list">
          <?php foreach ($points_list['ecp'] as $score_row): ?>
            <div class="score-row" data-difficulty="<?= $score_row['difficulty']; ?>" data-id="<?= $score_row['id']; ?>"
              data-points="<?= $score_row['points']; ?>">
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
                <div class="counter-value js-counter-value" data-value="0">0</div>
                <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Deductions -->
      <div class="cat-content" id="content-deduction" style="display: none;">
        <div class="score-list">
          <?php foreach ($points_list['deduction'] as $score_row): ?>
            <div class="score-row" data-difficulty="<?= $score_row['difficulty']; ?>" data-id="<?= $score_row['id']; ?>"
              data-points="<?= $score_row['points']; ?>">
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
                <div class="counter-value js-counter-value" data-value="0">0</div>
                <a class="counter-btn js-counter-sub" href="javascript:;">-</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="cat-content" id="content-total" style="display: none;">
        TODO - Total page
      </div>
    </div>
  </div>

  <footer>
  </footer>
</body>

</html>