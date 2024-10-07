<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Format the data
    $data = "Name: $name\nPhone Number: $phone\nEmail: $email\nFeedback: $feedback\n\n";

    // Save the data to a text file
    $file = 'feedback.txt';

    // Open the file in append mode
    $fp = fopen($file, 'a');

    // Write the data to the file
    fwrite($fp, $data);

    // Close the file
    fclose($fp);

    echo "Feedback submitted successfully!";
}
?>
