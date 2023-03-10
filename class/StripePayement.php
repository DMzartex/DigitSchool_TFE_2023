<?php
namespace App;
use Stripe\StripeClient;
use Stripe\Webhook;


require_once('vendor/autoload.php'); // Charge la bibliothèque Stripe PHP

class StripePayment
{

    private string $apiKey;


    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

    }

    public function createCheckoutSession($title, $price, $successUrl, $cancelUrl,$conn)
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
        $query = $conn->prepare("INSERT INTO paymentCreated (paymentId,userId) VALUES (:id,1)");
        $query->execute([
            'id'=>$session->id
        ]);
        header("Location: " . $session->url);
        exit;
    }

    public function handle(\Psr\Http\Message\ServerRequestInterface $serverRequest,$conn)
    {
        $signature = $serverRequest->getHeaderLine('Stripe-Signature');
        $body = (string)$serverRequest->getBody();
        $event = Webhook::constructEvent(
            $body,
            $signature,
            "whsec_ed81270ac10b421f911384f757765d249bbc2fe982ee6a8522d2ca69cc1dce0e"
        );

        if($event->type == 'charge.succeeded'){
            $data = $event->data->object;

            $query = $conn->prepare("INSERT INTO paymentSuccess (paymentId) VALUES (:id)");
            $query->execute([
                'id'=>$data->display_items[0]->custom->name
            ]);
        }
    }

}
?>
