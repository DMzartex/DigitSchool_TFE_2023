<?php

namespace App;

use Stripe\Webhook;

require_once('vendor/autoload.php'); // Charge la bibliothèque Stripe PHP

class StripePayment
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function createCheckoutSession($title, $price, $successUrl, $cancelUrl)
    {
        // Configure la clé API Stripe
        \Stripe\Stripe::setApiKey($this->apiKey);

        // Crée une session de paiement Stripe
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $price,
                    'product_data' => [
                        'name' => $title,
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $successUrl,
            'cancel_url' => $cancelUrl,
        ]);

        // Redirige l'utilisateur vers l'URL de paiement Stripe

        header("Location: " . $session->url);
        require_once 'templates/payement/webhook.php';
        exit;

    }

}

?>
