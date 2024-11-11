<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>
</head>
<body>

    <h2>Greeting Form</h2>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered name and sanitize it
        $name = htmlspecialchars($_POST["name"]);
        
        // If the field is not empty, display a greeting
        if (!empty($name)) {
            echo "<h3>Hello, $name! Welcome to the world of PHP.</h3>";
        } else {
            echo "<h3>Please enter your name.</h3>";
        }
    }
    ?>

    <!-- Input form -->
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

</body>
</html>
