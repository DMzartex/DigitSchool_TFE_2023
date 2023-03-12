<?php
namespace App;
use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\Webhook;
require_once('vendor/autoload.php'); // Charge la bibliothèque Stripe PHP
class StripePayment
{
    private string $apiKey;
    private $conn;
    public function __construct(string $apiKey,$conn)
    {
        $this->apiKey = $apiKey;
        $this->conn = $conn;
    }
    public function createCheckoutSession($title, $price, $successUrl, $cancelUrl,$parentId,$studentId)
    {
        Stripe::setApiKey($this->apiKey);
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
        $_SESSION['sessionId'] = $session->id;
        AddPaymentCreated($this->conn,$session->id,$studentId,$parentId);
        header("Location: " . $session->url);
        exit;
    }

    public function handle(\Psr\Http\Message\ServerRequestInterface $serverRequest)
    {
        $signature = $serverRequest->getHeaderLine('Stripe-Signature');
        $body = (string)$serverRequest->getBody();
        $event = Webhook::constructEvent(
            $body,
            $signature,
            "whsec_ed81270ac10b421f911384f757765d249bbc2fe982ee6a8522d2ca69cc1dce0e"
        );
        if ($event->type == 'checkout.session.completed') {
            $session = $event->data->object;
            $paymentId = $session->id;
            $query = $this->conn->prepare('SELECT parentId,studentId,factureId FROM paymentCreated WHERE secretPayment = :sessionId');
            $query->execute([
                'sessionId'=>$paymentId
            ]);
            $result = $query->fetchAll();
            foreach ($result as $info){
                $studentId = $info['studentId'];
                $parentId = $info['parentId'];
                $factureId = $info['factureId'];
            }

            $insert = $this->conn->prepare("INSERT INTO paymentSuccess (secretPayment,parentId,studentId,factureId) VALUES (:id,:parentId,:studentId,:factureId)");
            $insert->execute([
                'id' => $paymentId,
                'parentId' => $parentId,
                'studentId' => $studentId,
                'factureId' =>$factureId
            ]);
        }
    }
}



?>
