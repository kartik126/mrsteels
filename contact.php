<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    $email = $_POST["lname"];
    $item = $_POST["item"];
    $size = $_POST["size"];
    $qty = $_POST["qty"];
    $message = $_POST["message"];

    $to = "amandeepp26@gmail.com"; // Replace with the admin's email address
    $subject = "New Enquiry from $name";
    $headers = "From: $email";

    $message_body = "Name: $name\nEmail: $email\nItem: $item\nSize: $size\nQty: $qty\nMessage:\n$message";

    // Send the email
    mail($to, $subject, $message_body, $headers);
    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        header("Location: index.html"); // Redirect to your HTML page
    } else {
        // Email sending failed
        echo "Email sending failed. Please try again later.";
    }
}
?>
