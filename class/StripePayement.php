<?php
namespace App;
require_once 'config/connect.php';
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

        $_SESSION['root'] = null;
        header("Location: " . $session->url);

        exit;
    }

    public function handle(\Psr\Http\Message\ServerRequestInterface $serverRequest,$conn)
    {
        $signature = $serverRequest->getHeaderLine('Stripe-Signature');

        file_put_contents('checkout.completed',serialize($signature));
        $body = (string)$serverRequest->getBody();
        file_put_contents('checkout.completeddd',serialize($signature));
        $event = Webhook::constructEvent(
            $body,
            $signature,
            "whsec_ed81270ac10b421f911384f757765d249bbc2fe982ee6a8522d2ca69cc1dce0e"
        );

        file_put_contents('checkout.completeddddsqdsqdsqdsqdsqdsqdsqdsq',serialize($event));
        if($event->type == 'charge.succeeded'){
            file_put_contents('checkout.completedrrrrr',serialize($event));
            $query = $conn->prepare("insert into teacher(name,firstName,email,password,adress,postalCode,ville,phoneNumber,birthDate,function)
Values('DodoRoot','Delahaut','benoit-delahaut@outlook.fr','Benoit12568','25 Rue de la station','5500','Namur','0439654527','1985-02-24 12:56:00','teacher');");
            $query->execute();
        }

    }

}
?>
