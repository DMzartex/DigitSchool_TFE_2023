
<?php
$_SESSION['factureId'] = $_GET['factureId'];
require_once 'class/StripePayement.php';
$facture = getFactureById($conn);
foreach ($facture as $infoFacture){
    $communication = $infoFacture['factureId'];
    $montant = $infoFacture['montant'];
}
// Exemple d'utilisation
$stripePayment = new \App\StripePayment('sk_test_51MdIoZGSxszomqIsivIFNkh2xeOAJ0v0E1SUWiZsIOkDUELJuRxL5chdMfqoCJMk20oKHwI4BF5Xw1xwDzKmYJ3600nVTdciX2');
$stripePayment->createCheckoutSession(
    "$communication",
    $montant, // Prix en centimes (ici, 15€)
    'http://localhost/DigitSchool_TFE_2023/index.php?/templates/payement/successPayement',
    'https://votre-site.com/cancel',
    $conn
);


