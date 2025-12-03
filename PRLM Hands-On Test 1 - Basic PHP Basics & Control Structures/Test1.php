<?php
// Variables
// Step 1
$username = "@LeeFailed";
// Step 3
$greetings = "Hello, Lee!";
// Step 3
$list = array('ScythPhone 17', 'Scyth 16', 'Scythes 17', 'ScythPhone 18' );
$Slist = 'ScythPhone 20';

$offer = [
    'model' => 'ScythPhone 17',
    'Price' => 599,
    'Quantity' => 2,
    'Discount' => 0.10,
];


// Expressions & Operators
$items = 4;
// Step 4
$usual_price = 599;
$subtotal = $items * $usual_price;
// Step 5
$offer_price = $subtotal - 299;
$total = $subtotal + $offer_price;
// Step 6
$savings = $offer_price - $usual_price;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<?php include "includes/header.php" ?>
<body>
        <h1>Shopping Dashboard</h1>
        <h2>Account Status</h2>
        <p><?= $username ?></p>
        <p><?= $greetings ?></p>

        <h2>Shopping Cart</h2>
        <p>Items in Cart: <?= implode(', ', $list) ?></p>
        <p>Subtotal: <?= $subtotal ?> 
           Offer: <?= $offer_price?> 
           Total: <?= $total ?>
        </p>
        <p>
            Buy 4 Phones from us and get 299
        </p>
</body>
<?php include "includes/footer.php" ?>
</html>













































