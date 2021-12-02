<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Interface</title>
</head>
<body>
    <div class="header">
        <h1>Web Interface Administration Panel</h1>
    </div>

    <div class="content">
        <h2>Operations</h2>
        <a class="btn" href="./insertion.php">Insertion</a>
        <a class="btn" href="./deletion.php">Deletion</a>
        <a class="btn" href="./selection.php">Selection</a>
    </div>
    
    <?php
    include "config.php";
    ?>

</body>
</html>