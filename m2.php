<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $check_in = htmlspecialchars($_POST['check_in']);
    $check_out = htmlspecialchars($_POST['check_out']);
    $room_type = htmlspecialchars($_POST['room_type']);
    $special_requests = htmlspecialchars($_POST['special_requests']);

    // Simple validation
    if (empty($name) || empty($email) || empty($phone) || empty($check_in) || empty($check_out) || empty($room_type)) {
        echo "All fields are required.";
        exit;
    }

    // Here you would typically save the booking details to a database
    // For this example, we'll just send an email (ensure your server can send emails)
    $to = "your-email@example.com";
    $subject = "New Resort Booking";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nCheck-in Date: $check_in\nCheck-out Date: $check_out\nRoom Type: $room_type\nSpecial Requests:\n$special_requests";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your booking! We will get back to you soon.";
    } else {
        echo "There was an error with your booking. Please try again.";
    }
}
?>
