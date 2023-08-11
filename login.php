<?php
// This is a simplified example and lacks proper security measures

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform database operations to validate user credentials (not shown here)

    // Assuming the credentials are valid
    if ($username === "nitin" && $password === "nitin") {
        // Redirect to the subscription plans page after successful login
        header("subscription_plans.html");
        exit();
    } else {
        // Display an error message
        $error_message = "Invalid username or password.";
    }
}
?>
