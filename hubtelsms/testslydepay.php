<?php
require './vendor/autoload.php';

use Slydepay\Order\Order;
use Slydepay\Order\OrderItem;
use Slydepay\Order\OrderItems;

// Instantiate Slydepay
$slydepay = new Slydepay\Slydepay("1575681998180", "asumadurichmond@yahoo.com");

// Create a list of OrderItems with OrderItem objects
$orderItems = new OrderItems([
    new OrderItem("1234", "Test Product", 10, 2),
    new OrderItem("1284", "Test Product2", 20, 2),
]);

// Shipping and tax pulled either from ini/properties file. Hard coded here for illustration
$shippingCost = 20; 
$tax = 10;

// Create the Order object for this transaction. 
$order = Order::createWithId(
    $orderItems,
    "order_id_1", 
    $shippingCost,
    $tax,
    "description",
    "no comment"
);

try {
    // Make request to Slydepay and get the response object for the redirect url
    $response = $slydepay->processPaymentOrder($order);
    echo $response->redirectUrl();
} catch (Slydepay\Exception\ProcessPayment $e) {
    echo $e->getMessage();
}