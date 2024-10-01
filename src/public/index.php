<?php 

require_once '../Transaction.php';
// Classes and Objects
//  creating an object -- objectName = new className();

// Multiple Instances in the class
$transaction1 = new Transaction( 255.9, 'Transaction 1' , 0.0 , 0.0);  // passing in the arguments 

$price1 = $transaction1
            ->addTax(7)
            ->getDiscount(3)
            ->calculateTotalAmount();   // Method Chaining

$transaction2 = new Transaction( 783.4, 'Transaction 2' , 0.0 , 0.0);  // passing in the arguments 

$price2 = $transaction2
            ->addTax(5)
            ->getDiscount(2)
            ->calculateTotalAmount();   // Method Chaining

            // Transaction 1
echo '<pre>';
echo 'After Tax and Discount, the total amount will be $' . $price1;
echo '</pre>';

echo '<pre>';
print_r($transaction1);
echo '</pre>';

            // Transaction 2     
              
echo '<pre>';
echo 'After Tax and Discount, the total amount will be $' . $price2;
echo '</pre>';

echo '<pre>';
print_r($transaction2);
echo '</pre>';

// echo($transaction->getAmount()); -- private variable amount is called in here using public function
