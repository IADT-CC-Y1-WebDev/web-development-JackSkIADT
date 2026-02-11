<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/08-exceptions.php">View Example &rarr;</a>
    </div>

    <h1>Exceptions Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Basic Exception Handling</h2>
    <p>
        <strong>Task:</strong>
        Create a function called <code>calculateSquareRoot($number)</code> that throws an
        exception if the number is negative (you cannot take the square root of a negative number).
        If the number is valid, return its square root using <code>sqrt()</code>.
        Test it with values 16, 25, and -9, catching any exceptions.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        function calculateSquareRoot($input) {
            if ($input < 0) {
                throw new Exception("Cannot calculate square root of a negative number.");
            }
            return sqrt($input);
        }

        $num1 = 16;
        $num2 = 25;
        $num3 = -9;

        try{
        echo "The square root of $num1 is " . calculateSquareRoot($num1) . ". <br>";
        echo "The square root of $num2 is " . calculateSquareRoot($num2) . ". <br>";
        echo "The square root of $num3 is " . calculateSquareRoot($num3) . ". <br>";
        echo "This line does not execute as it comes after an error.";
        }

        catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Validating User Input</h2>
    <p>
        <strong>Task:</strong>
        Create a function called <code>validateEmail($email)</code> that checks if an email
        address contains an "@" symbol. If it doesn't, throw an exception with the message
        "Invalid email: missing @ symbol". Test it with "user@example.com", "invalid-email",
        and "test@test.ie".
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        function validateEmail($email) {
            $atSymbolCount = 0;
            for ($i = 0; $i < strlen($email); $i++) {
                if ($email[$i] === "@") {
                    $atSymbolCount++;
                }
            }
            if ($atSymbolCount == 0) {
                throw new Exception("No @ symbol to indicate valid email.<br>");
            }
            echo "This is a valid email. <br>";
        }

        $email1 = "user@example.com";
        $email2 = "invalid-email";
        $email3 = "test@test.ie";

        try{
        echo "testing email: $email1<br>";
        validateEmail($email1);
        }
        catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }

        try{
        echo "testing email: $email2<br>";
        validateEmail($email2);
        }
        catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }

        try {
        echo "testing email: $email3<br>";
        validateEmail($email3);
        }
        catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }


        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Using Finally</h2>
    <p>
        <strong>Task:</strong>
        Create a function called <code>processFile($filename)</code> that throws an exception
        if the filename is empty. Use a try/catch/finally block where the finally block
        always prints "Processing complete". Test with both a valid filename and an empty string.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        function processFile($filename){
            if ($filename == "") {
                throw new Exception("Filename must not be empty. <br> <br>");
            }
            return $filename;
        }

        $file1 = ['name'=> 'dog.jpeg'];
        $file2 = ['name'=> ''];
        $file3 = ['name'=> 'helowordl.txt'];

        try {
            echo "Processing file 1 <br>";
            echo "File name: " . processFile($file1['name']) . "<br> <br>";
        }
        catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }

        try {
            echo "Processing file 2 <br>";
            echo "File name: " . processFile($file2['name']) . "<br> <br>";
        }
        catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }

        try {
            echo "Processing file 3 <br>";
            echo "File name: " . processFile($file3['name']) . "<br> <br>";
        }
        catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }

        finally {
            echo "Processing complete.";
        }
        ?>
    </div>

</body>
</html>
