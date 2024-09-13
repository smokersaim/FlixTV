<?php

namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Contact
{
    public function sendFormData(array $formData) {
        if (empty($formData) || !is_array($formData)) {
            return 'No data received. Please ensure all required fields are filled out.';
        }

        $name = isset($formData['name']) ? $formData['name'] : '';
        $email = isset($formData['email']) ? $formData['email'] : '';
        $subject = isset($formData['subject']) ? $formData['subject'] : '';
        $messageText = isset($formData['text']) ? $formData['text'] : '';

        if (empty($name) || empty($email) || empty($subject) || empty($messageText)) {
            return 'Incomplete data received. Please provide your name, email, subject, and message.';
        }

        $to = $_ENV['AUTHOR_EMAIL'];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $_ENV['SMTP_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['SMTP_USER'];
            $mail->Password = $_ENV['SMTP_PASSWORD'];
            $mail->SMTPSecure = $_ENV['SMTP_ENCRYPTION'];
            $mail->Port = $_ENV['SMTP_PORT'];

            $mail->setFrom($email, $name);
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission: ' . htmlspecialchars($subject);
            $mail->Body = '<h1>Contact Form Submission</h1>' .
                          '<p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>' .
                          '<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>' .
                          '<p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($messageText)) . '</p>';
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $messageText";

            if ($mail->send()) {
                return 'Your message has been successfully sent. Thank you for contacting us.';
            } else {
                return 'There was an issue sending your message. Please try again later.';
            }

        } catch (Exception $e) {
            return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}