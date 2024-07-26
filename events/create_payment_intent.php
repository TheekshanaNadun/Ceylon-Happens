<?php
require 'vendor/autoload.php'; // Make sure you've installed the Stripe PHP library

\Stripe\Stripe::setApiKey('sk_test_51PgRrPHvzim763YPxgxWiijJE6VmEiurVkDy84xBQxNcvGhhJHt6Oq9HnWmB9amzWkH7cRylnq4mR61SEyeTpMPb00FOSV9fW5');

header('Content-Type: application/json');

try {
    // Retrieve JSON from POST body
    $json_str = file_get_contents('php://input');
    $json_obj = json_decode($json_str);

    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => 5000, // Amount in cents
        'currency' => 'usd',
        'payment_method' => $json_obj->payment_method,
        'confirmation_method' => 'manual',
        'confirm' => true,
    ]);

    echo json_encode([
        'paymentIntent' => $paymentIntent,
    ]);
} catch (Error $e) {
    echo json_encode([
        'error' => $e->getMessage(),
    ]);
}
?>
