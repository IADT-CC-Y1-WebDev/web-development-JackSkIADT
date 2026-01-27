<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/05-functions.php">View Example &rarr;</a>
    </div>

    <h1>Functions Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Temperature Converter</h2>
    <p>
        <strong>Task:</strong> 
        Create a function called celsiusToFahrenheit() that takes a Celsius temperature as a parameter and returns the Fahrenheit equivalent. Formula: F = (C × 9/5) + 32. Test it with a few values.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

    function celsiusToFahrenheit($c){
        $f = (($c*9/5 ) + 32);
        return $f;
    }

    $input = rand(-50,150);

    echo $input . " degrees celsius is equal to " . celsiusToFahrenheit($input) . " degrees farenheit." ; 
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Rectangle Area</h2>
    <p>
        <strong>Task:</strong> 
        Create a function called calculateRectangleArea() that takes width
         and height as parameters. It should return the area. If only one 
         parameter is provided, assume it's a square (both dimensions equal).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        function calculateRectangleArea($w, $h = null){
            if(!isset($h)){
                $a = $w * $w;
            }
            else {
                $a = $w * $h;
            }
            return $a;
        }

        $input1 = rand(1,100);
        $input2 = rand(1,100);

        if(rand(0,1)){
            echo "A rectangle with width " . $input1 . " and height " . $input2 . " has an area of " .calculateRectangleArea($input1,$input2) . ".";
        }
        else {
            echo "A square with width and height " . $input1 . " has an area of " . calculateRectangleArea($input1) . "." ;
        }
    

        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Even or Odd</h2>
    <p>
        <strong>Task:</strong>
        Create a function called checkEvenOdd() that takes a number and returns 
        "Even" if the number is even, or "Odd" if it's odd. Use the modulo 
        operator (%).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        function checkEvenOdd($num){
            if($num%2 === 0){
                return "even";
            }
            else {
                return "odd";
            }
        }

        $input3 = rand(1,50);
    
        echo "$input3 is " . checkEvenOdd($input3) . ".";
        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Array Statistics</h2>
    <p>
        <strong>Task:</strong> 
        Create a function called getArrayStats() that takes an array of numbers 
        and returns an array with three values: minimum, maximum, and average. 
        Use array destructuring to display the results.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        $numbers = [2,5,13,16,25];
        function getArrayStats($numberset){
            $min = min($numberset);
            $max = max($numberset);
            $avg = 0;
            for($i =0; $i < count($numberset); $i++){
                $avg += $numberset[$i];
            }
            $avg /= count($numberset);
            return [$min, $max, $avg];
        }

        [$minimum, $maximum, $average] = getArrayStats($numbers);

        echo "The smallest value in the array is $minimum.";
        echo "The largest value in the array is $maximum.";
        echo "The average value in the array is $average.";
        ?>
    </div>

</body>
</html>
