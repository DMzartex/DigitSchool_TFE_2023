<?php

require_once 'config/connect.php';
require_once 'vendor/autoload.php';
require_once 'class/StripePayement.php';
$filepath = 'dorian.completed';
$filecontent = file_get_contents($filepath);



$psr17Factory = new \Nyholm\Psr7\Factory\Psr17Factory();

$creator = new \Nyholm\Psr7Server\ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);

$serverRequest = $creator->fromGlobals();
$payement = new \App\StripePayment('sk_test_51MdIoZGSxszomqIsivIFNkh2xeOAJ0v0E1SUWiZsIOkDUELJuRxL5chdMfqoCJMk20oKHwI4BF5Xw1xwDzKmYJ3600nVTdciX2');
$payement->handle($serverRequest,$conn);




