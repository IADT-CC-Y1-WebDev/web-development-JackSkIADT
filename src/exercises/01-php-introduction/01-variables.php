<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/01-variables.php">View Example &rarr;</a>
    </div>

    <h1>Variables Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Personal Information</h2>
    <p>
        <strong>Task:</strong> 
        Create variables for your first name, last name, age, and city. 
        Then output a sentence using these variables that says "My name 
        is [first] [last], I am [age] years old and I live in [city]."
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        $firstName = "Jack";
        $lastName = "Skakie";
        $age = 24;
        $city = "Dublin";
        echo "My name is $firstName $lastName. I am $age years old and live in $city.";
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Shopping Calculator</h2>
    <p>
        <strong>Task:</strong> 
        Create variables for three product prices and their quantities. 
        Calculate the subtotal for each product (price × quantity), then 
        calculate the total cost. Apply a 10% discount and display the 
        final price.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        $price1 = 10.50;
        $price2 = 2.50;
        $price3 = 3.25;

        $quantity1 = 3;
        $quantity2 = 19;
        $quantity3 = 8;

        $subtotal1 = $price1*$quantity1;
        $subtotal2 = $price2*$quantity2;
        $subtotal3 = $price3*$quantity3;

        $totalcost = $subtotal1 + $subtotal2 + $subtotal3;
        $finalprice = $totalcost * .9;

        echo "Item 1 costs €$price1. You have bought $quantity1 of them." ."<br>";
        echo "Item 2 costs €$price2 You have bought $quantity2 of them." . "<br>";
        echo "Item 3 costs €$price3 You have bought $quantity3 of them." . "<br>";

        echo "The total cost of these items is €$totalcost." . "<br>";
        

        echo "Applying a 10% discount, the final price is €$finalprice." . "<br>";
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: User Status</h2>
    <p>
        <strong>Task:</strong> 
        Create boolean variables for isStudent, hasDiscount, and isPremiumMember. 
        Use the ternary operator to display "Yes" or "No" for each status.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        $isStudent = true;
        $hasDiscount = true;
        $isPremiumMember = false;

        echo "Is user a student? " . ($isStudent ? "Yes" : "No") . "<br>";
        echo "Does user have a discount? " . ($hasDiscount ? "Yes" : "No") . "<br>";
        echo "You are " . ($isPremiumMember ? "" : "not ") . "a premium member." . "<br>";

        ?>
    </div>

</body>
</html>
