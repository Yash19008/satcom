<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // If using Composer

header('Content-Type: application/json');

// Handle only POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Only POST method is allowed.']);
    exit;
}

// Retrieve raw POST data
$data = json_decode(file_get_contents("php://input"), true);

// Validate required fields
$required = ['name', 'email', 'country', 'topic', 'message', 'consent'];
foreach ($required as $field) {
    if (empty($data[$field])) {
        http_response_code(400);
        echo json_encode(['error' => "Missing field: $field"]);
        exit;
    }
}

// Assign values
$name = htmlspecialchars($data['name']);
$email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
$phone = htmlspecialchars($data['phone']);
$country = htmlspecialchars($data['country']);
$topic = htmlspecialchars($data['topic']);
$messageText = htmlspecialchars($data['message']);

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'netsol-smtp-oxcs.hostingplatform.com';       // Your SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'sales@stationsatcom.net';         // Your SMTP username
    $mail->Password   = 'Station12@2025#';           // Your SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Sender and recipient
    $mail->setFrom('sales@stationsatcom.net', 'Station Satcom');
    $mail->addAddress('sales@stationsatcom.net');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = "New Form Submission - $topic";
    $mail->Body    = "
        <h3>New Inquiry</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Country:</strong> $country</p>
        <p><strong>Topic:</strong> $topic</p>
        <p><strong>Message:</strong><br>$messageText</p>
    ";

    $mail->send();
    echo json_encode(['success' => 'Message sent successfully']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Mailer Error: ' . $mail->ErrorInfo]);
}
