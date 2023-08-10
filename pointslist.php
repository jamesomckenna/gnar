<!DOCTYPE html>
<html>
<header>
    <title>GNAR</title>
    <?php require('templates/header.php'); ?>
</header>
<body>
    <div class ="shell">
        <a href="index.php"><img src="images/Russ_red_logo.png" alt="Russ logo home" height=100px width=100px></a>
        <h1>List of points</h1>
      
        <div class="tab-header-container">
            <a class="tab-header" href="#runs">Runs</a>
            <a class="tab-header" href="#tricks">Tricks</a>
            <a class="tab-header" href="#ecp">ECP's</a>
            <a class="tab-header" href="#deduction">Deductions</a>
        </div>
        <div class="uni-container">
            <div class="difficulty-filter-container">
            <a class="difficulty-filter orange" href="javascript:;" data-difficulty-id="all">All</a>
            <a class="difficulty-filter green" href="javascript:;" data-difficulty-id="beginner">Beginner</a>
            <a class="difficulty-filter blue" href="javascript:;" data-difficulty-id="intermediate">Intermediate</a>
            <a class="difficulty-filter black" href="javascript:;" data-difficulty-id="expert">Expert</a>
            <!-- <a class="difficulty-filter" id="red" href="#extreme">Extreme</a> -->
            </div>
        </div>

    </div> 


    
</body>
<footer>
        <a href="../">Back</a>
        <a href="index.php">Home</a> 
</footer>


</html>

