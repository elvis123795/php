<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers and Math Functions in PHP</title>
    <style>
        /* Basic styling for a clean layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .output {
            padding: 10px;
            margin: 10px 0;
            background-color: #e9e9e9;
            border-radius: 5px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Numbers and Math Functions Demo</h1>
        <?php
        // Define numbers
        $number1 = 10;
        $number2 = 20;
        $number3 = 30;

        // Calculate basic math operations
        $min = min($number1, $number2, $number3);
        $max = max($number1, $number2, $number3);
        $sum = $number1 + $number2 + $number3;
        $average = $sum / 3;

        // Generate a random number and round the average
        $randomNumber = rand(1, 100);
        $roundedNumber = round($average);

        // Increment and decrement
        $incrementedNumber = ++$number1; // number1 now becomes 11
        $decrementedNumber = --$number2; // number2 now becomes 19

        // Other math functions
        $absoluteValue = abs(-10);
        $power = pow(2, 3);
        $modulus = $number1 % $number2;

        // Output results with basic styling using divs
        echo "<div class='output'>The minimum number is: $min</div>";
        echo "<div class='output'>The maximum number is: $max</div>";
        echo "<div class='output'>The sum of the numbers is: $sum</div>";
        echo "<div class='output'>The average of the numbers is: $average</div>";
        echo "<div class='output'>The random number is: $randomNumber</div>";
        echo "<div class='output'>The rounded number is: $roundedNumber</div>";
        echo "<div class='output'>The incremented number is: $incrementedNumber</div>";
        echo "<div class='output'>The decremented number is: $decrementedNumber</div>";
        echo "<div class='output'>The absolute value of -10 is: $absoluteValue</div>";
        echo "<div class='output'>The power of 2 raised to 3 is: $power</div>";
        echo "<div class='output'>The modulus of $number1 and $number2 is: $modulus</div>";

        // Format number using number_format function
        $formattedNumber = number_format($number1, 2);
        echo "<div class='output'>The formatted number is: $formattedNumber</div>";
        ?>
    </div>
</body>
</html>
