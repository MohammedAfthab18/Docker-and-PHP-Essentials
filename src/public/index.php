<?php 

require_once '../Transaction.php';
// Classes and Objects
//  creating an object -- objectName = new className();

$transaction = new Transaction( 255.9, 'Transaction 1' , 0.0 , 0.0);  // passing in the arguments 

$transaction->addTax(7);
$transaction->getDiscount(3);
$price = $transaction->calculateTotalAmount();

echo '<pre>';
echo 'After Tax and Discount, the total amount will be $' . $price;
echo '</pre>';

echo '<pre>';
print_r($transaction);
echo '</pre>';

// echo($transaction->getAmount()); -- private variable amount is called in here using public function
