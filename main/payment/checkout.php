<?php
require_once 'vender/autoload.php';

$stripe_key = "sk_test_51PGrYFRxeaM2xplQAyEP1f3Pl5wfj6q2mZgJI2xsyGdpxTtjfVxh4jhw71TBuAduRuPLpp7efRiGtRBtjeqsXdjF0026scAgof";
\StripeStripe::setApiKey($stripe_key);
$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/success.php",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 2000,
                "product_data" => [
                    "name" => "Course"
                ]
            ]
        ]
    ]
]);
                http_response_code(303);
                header("Location: " . $checkout_session->url)
?>