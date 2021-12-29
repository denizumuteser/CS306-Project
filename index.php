<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style3.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Interface</title>
</head>

<body>
    <div class="header">
        <h1>Web Interface</h1>
    </div>

    <div class="content">
        <h2>Panels</h2>
        <a class="btn" href="./indexAdmin.php">Admin Panel</a>
        <a class="btn" href="./indexFeatures.php">Features Panel</a>
    </div>

    <?php
    include "config.php";
    ?>

</body>

</html>