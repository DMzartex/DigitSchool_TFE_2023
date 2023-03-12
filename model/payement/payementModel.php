<?php
function createCheckoutSession($conn,$studentId,$parentId){
    $stripePayment = new \App\StripePayment('sk_test_51MdIoZGSxszomqIsivIFNkh2xeOAJ0v0E1SUWiZsIOkDUELJuRxL5chdMfqoCJMk20oKHwI4BF5Xw1xwDzKmYJ3600nVTdciX2',$conn);
    $stripePayment->createCheckoutSession(
        "$_SESSION[communication]",
        $_SESSION['montant'], // Prix en centimes (ici, 15€)
        'http://localhost/DigitSchool_TFE_2023/index.php?/templates/payement/successPayement',
        'https://votre-site.com/cancel',
        $parentId,
        $studentId
    );
}
function AddPaymentCreated($conn,$sessionId,$studentId,$parentId){
    $factureId = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['factureId']);
    $query = $conn->prepare("INSERT INTO paymentCreated (secretPayment,parentId,studentId,factureId) VALUES (:id,:parentId,:studentId,:factureId)");
    $query->execute([
        'id' => $sessionId,
        'parentId' => $parentId,
        'studentId' => $studentId,
        'factureId' =>$factureId
    ]);
}

function VerifPayment($conn){
    $query = $conn->prepare("SELECT paymentSuccessId FROM paymentSuccess WHERE secretPayment = :secret");
    $query->execute([
        'secret'=>$_SESSION['sessionId']
    ]);

    if($query->rowCount() > 0){
        $verif = true;
    }else{
        $verif = false;
    }

    return $verif;
}


function UpdatePayement($conn){
    $factureId = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['factureId']);
    $query = $conn->prepare('UPDATE facture set paye = true where factureId = :id');
    $query->execute([
        'id'=>(int)$factureId
    ]);
}