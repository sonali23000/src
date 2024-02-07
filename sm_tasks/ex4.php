<?php include 'header.php'; ?>
<html>
<head>
    <title>Voting Eligibility Check</title>

</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user inputs
        $name = $_POST["name"];
        $age = $_POST["age"];

        // Check eligibility
        $isEligible = $age >= 18;

        // Display result
        echo "<h2>Results:</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";

        if ($isEligible) {
            echo "<p>Congratulations, you are eligible for voting!</p>";
        } else {
            echo "<p>Sorry, you are not eligible for voting.</p>";
        }
    }
?>

<h2>Enter your information:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    <input type="submit" value="Check Eligibility">
</form>

</body>
</html>
