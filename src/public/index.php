<?php 

require_once  '../app/PaymentGateway/Stripe/Transaction.php';
require_once  '../app/PaymentGateway/Paddle/Transaction.php';
require_once  '../app/PaymentGateway/Paddle/CustomerPaddle.php';
require_once  '../app/Notification/Email.php';


//use namespaces

//autoloading 

// autoload_registers runs in queue
spl_autoload_register(function ($class) {
    var_dump($class);
});

spl_autoload_register(function ($class) {
    var_dump($class);
}, prepend: true);  // if we apply prepend we can run the second script at first


use app\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();
