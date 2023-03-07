<?php
require_once 'vendor/autoload.php';

// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('sk_test_51MdIoZGSxszomqIsivIFNkh2xeOAJ0v0E1SUWiZsIOkDUELJuRxL5chdMfqoCJMk20oKHwI4BF5Xw1xwDzKmYJ3600nVTdciX2');

$_SESSION['payload']=@file_get_contents('php://input');
$payload = @file_get_contents('php://input');
$event = null;

try {
    $event = \Stripe\Event::constructFrom(
        json_decode($payload, true)
    );
} catch(\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400);
    exit();
}

// Handle the event
switch ($event->type) {
    case 'payment_intent.succeeded':
        $paymentIntent = $event->data->object; // contains a \Stripe\PaymentIntent
        handlePaymentIntentSucceeded($paymentIntent);
        $_SESSION['paymentOk'] = true;
        break;
    case 'payment_method.attached':
        $paymentMethod = $event->data->object; // contains a \Stripe\PaymentMethod
        handlePaymentMethodAttached($paymentMethod);
        break;
    // ... handle other event types
    default:
        echo 'Received unknown event type ' . $event->type;
        $_SESSION['paymentOk'] = true;
}

http_response_code(200);