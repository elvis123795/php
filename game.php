<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body></body>
    <div class="container">
        <h1>Fun Game</h1>
        <form method="get">
            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required>
            <br><br>
            <label for="plural_noun">Plural Noun:</label>
            <input type="text" id="plural_noun" name="plural_noun" required>
            <br><br>
            <label for="celebrity">Celebrity:</label>
            <input type="text" id="celebrity" name="celebrity" required>
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $color = htmlspecialchars($_GET['color']);
            $plural_noun = htmlspecialchars($_GET['plural_noun']);
            $celebrity = htmlspecialchars($_GET['celebrity']);

            echo "<h2>Your Fun Result:</h2>";
            echo "<p>Once upon a time, there was a <strong>$color</strong> $plural_noun who loved to hang out with <strong>$celebrity</strong>.</p>";
        }
        ?>
    </div>
</body>
</html>