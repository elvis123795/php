<?php

// use str upper
// use str lower
// use str replace
// use str pos
// 
 $university = "University of Kigali";
    $course = "BBIT";

    $student = "NZARAMYIMANA ELVIS";
    ?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic PHP Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body></body>
    <h1>Hello, <?php echo $student; ?>!</h1>
    <p>You are studying <?php echo strtolower($course); ?> at <?php echo strtoupper($university); ?>.</p>
    <p>Welcome to our website!</p>
    <p>We are glad to have you here.</p>

    <p> <?php echo str_replace("Kigali", "Rwanda", $university); ?></p>
    <p> <?php echo strpos($university, "Kigali"); ?></p>
    
