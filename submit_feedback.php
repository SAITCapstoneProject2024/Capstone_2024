<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $experience = htmlspecialchars($_POST['experience']);
    $informative = htmlspecialchars($_POST['informative']);
    $like_most = htmlspecialchars($_POST['like_most']);
    $like_least = htmlspecialchars($_POST['like_least']);
    $suggestions = htmlspecialchars($_POST['suggestions']);

    // Here you can process the data, such as saving it to a database or sending it via email
    
    // For demonstration, you can just echo the data (not recommended for production)
    echo "<h1>Thank You for Your Feedback, $name!</h1>";
    echo "<p>Email: $email</p>";
    echo "<p>Overall Experience: $experience</p>";
    echo "<p>Informative Level: $informative</p>";
    echo "<p>What you liked most: $like_most</p>";
    echo "<p>What you liked least: $like_least</p>";
    echo "<p>Suggestions: $suggestions</p>";
} else {
    // Redirect back to the feedback form if accessed directly
    header("Location: feedback.html");
    exit();
}
?>
