<?php


$productName = "PharmaZon";
$productID = "A123";
$productPrice = 75;
$currency = "Ghana Cedis";

define('STRIPE_API_KEY',
'sk_test_51NY3Q8KWu7ltuh6HQw9WwGS0XSXHpUpcB1vqjjk8YwbvC2T8Pkab0f3f1QVt2WwMsgd7HqtP4HtOG3RxEn0q3cEB00dwpbch68');

define('STRIPE_PUBLISHABLE_KEY',
'pk_test_51NY3Q8KWu7ltuh6HC3ab8DiyUlBilysXlzsKyYlwU9bQqYLe9pZJp3S1Itn4zvBAIyT4gkQkZxbKxtejdSTubYjh00MrS8Jla5');
define('STRIPE_SUCCESS_URL','http://localhost/Pharmazon/stripe/success.php');
define('STRIPE_CANCEL_URL','http://localhost/Pharmazon/stripe/cancel.php'); 


define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'pharmazon');
?>
