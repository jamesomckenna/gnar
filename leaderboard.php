<!DOCTYPE html>
<html lang="en">

<head>
  <title>GNAR</title>
  <?php require('templates/header.php'); ?>
</head>

<body>
  <div class="shell">
    <h1>Leaderboard</h1>
    <a href="../">Back</a>

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
</body>

<footer>
    <a href="index.php">Home</a> 
    <a href="../">Back</a>
</footer>

</html>