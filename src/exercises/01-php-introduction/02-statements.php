<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statements Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/02-statements.php">View Example &rarr;</a>
    </div>

    <h1>Statements Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Age Classifier</h2>
    <p>
        <strong>Task:</strong> 
        Create a variable for age. Use if/else statements to classify and 
        display the age group: "Child" (0-12), "Teenager" (13-19), "Adult" 
        (20-64), or "Senior" (65+).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        $age = rand(0,99);

        echo "Your age is $age. ";
        if ($age > 0 and $age <= 12) {
            echo "You are a You are a child";
        } 
        else if ($age > 12 and $age <= 19){
            echo "You are a teenager";
        }
        else if ($age > 19 and $age <= 64){
            echo "You are an adult";
        }
        else if ($age > 64){
            echo "You are a senior";
        }
        else {
            echo "Error: Invalid age.";
        }

        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Day of the Week</h2>
    <p>
        <strong>Task:</strong> 
        Create a variable for the day of the week (use a number 1-7). Use 
        a switch statement to display whether it's a "Weekday" or "Weekend", 
        and the day name.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        $day = rand(1,7);

        switch($day){
            case(1):
                echo "The $day" . "st day of the week is Monday, a weekday.";
                break;
            case(2):
                echo "The $day" . "nd day of the week is Tuesday, a weekday.";
                break;
            case(3):
                echo "The $day" . "rd day of the week is Wednesday, a weekday.";
                break;    
            case(4):
                echo "The $day" . "th day of the week is Thursday, a weekday.";
                break;
            case(5):
                echo "The $day" . "th day of the week is Friday, a weekday.";
                break;
            case(6):
                echo "The $day" . "th day of the week is Saturday, a weekend.";
                break; 
            case(7):
                echo "The $day" . "th day of the week is Sunday, a weekend.";
                break;  
        }
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Multiplication Table</h2>
    <p>
        <strong>Task:</strong> 
        Use a for loop to create a multiplication table for a number of your 
        choice (1 through 10). Display each line in the format "X × Y = Z".
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $x = rand(2,10);
        echo "creating a multiplication table for the number $x" . "<br>";

        for ($y = 1; $y < 13 ; $y++) {
            $z = ($x * $y);
            echo "$x * $y = $z" . "<br>";
        }

        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Countdown Timer</h2>
    <p>
        <strong>Task:</strong> 
        Create a countdown from 10 to 0 using a while loop. Display each number, 
        and when you reach 0, display "Blast off!"
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        $countdown = 10;
        echo "Starting countdown..." . "<br>";
        while($countdown > 0) {
            echo "$countdown" . "..." . "<br>";
            $countdown-- ;
        }
        echo "Blast off!";
        ?>
    </div>

</body>
</html>
