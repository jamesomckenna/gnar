<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>GNAR</title>
    <!-- <meta
      name="description"
      content="The Splatoon 3 weapon randomizer by James McKenna. Don't know what weapon to pick? We've got you covered!"
    /> -->
    <!-- <link rel="icon" type="image/x-icon" href="src/img/ico/Shooter.ico" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
  <h1>Leaderboard</h1>
    <a href="/">Back</a>

    <?php
    echo "<br><br>";
    if ((include 'api/scoreboard.php') != TRUE) {
        echo 'error geting database API';
    }

    for($i = 0; $i < 3; $i++){
        echo $i."<br>";
    }

    echo '<h1>hi tim</h1>';
    ?>
  </body>
</html>
