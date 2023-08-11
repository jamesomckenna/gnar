<!DOCTYPE html>
<html lang="en">
  
    <head>

      <title>GNAR X RUSS - Gafney's Numerical Assessment of Radness.</title>
      <?php require(dirname(__FILE__).'/templates/header.php'); ?>
      <meta charset="UTF-8" />
      <title>GNAR</title>
      <link rel="icon" type="image/x-icon" href="images/Russ_red_logo.png" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

    </head>
    <body class="shell">
        <div class="header">
          <a href="index.php"><img src="images/Russ_red_logo.png" alt="Russ logo home" height=100px width=100px></a>
          <h1>GNAR X RUSS</h1>
        </div>

        <div class="index-button-container">
              <div class="nav-button">
                <?php if(!isset($_COOKIE['gnar_user'])): ?>          
                  <a class="nav-buttons-index"href="signin.php">Sign In</a>
                <?php endif; ?> 
                
                <a  class="nav-buttons-index orange"  href="howtoplay.php">How to play</a>
                
                <a class="nav-buttons-index green"  href="leaderboard.php">Leaderboard</a>
                
                <a class="nav-buttons-index blue"  href="pointslist.php">Points Table</a>
                
                <?php if(isset($_COOKIE['gnar_user'])): ?>          
                  <a class="nav-buttons-index red"  href="addpoints.php">Add Points</a>
                <?php endif; ?> 
            
              </div>
        </div>

          
      <footer>

      </footer>
    </body>
</html>
