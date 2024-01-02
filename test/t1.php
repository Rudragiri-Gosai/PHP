<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the array input from the form
    if (isset($_POST['arrayInput'])) {
        $input = $_POST['arrayInput'];

        // Explode the comma-separated values into an array
        $valuesArray = explode(',', $input);

        // Trim whitespace from each value
        $valuesArray = array_map('trim', $valuesArray);

        // Display the entered array values
        echo "Entered array values:<br>";
        foreach ($valuesArray as $value) {
            echo $value . "<br>";
        }
    } else {
        echo "No array input received.";
    }
}
?>