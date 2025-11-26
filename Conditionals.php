<?php
    $Day = 'Monday';
    //1. MATCH
    $Offer = match ($Day) {
        'Monday' => '₱500 off if you buy Worth of ₱1000',
        'Friday' => '₱1000 off if you buy Worth of ₱1000',
        default  => 'No Discount',
    };

    $cartItems = [
        ['name' => 'PHP Basics Book', 'cost' => 400.99, 'quantity' => 2, 'Genre' => 'Educational'],
        ['name' => 'Fantasy of HTML', 'cost' => 240.50, 'quantity' => 1, 'Genre' => 'Fiction'],
        ['name' => 'HTML/CSS Guide', 'cost' => 300.00, 'quantity' => 3, 'Genre' => 'Educational'],
    ];

    $SubTotal = 0;
    foreach ($cartItems as $item) {
        $SubTotal += $item['cost'] * $item['quantity'];
    }

    $TaxRate = 0.12;
    $Tax = $SubTotal * $TaxRate;
    $Total = $SubTotal + $Tax;
    $greet = "Thank You So Much!";


    $ShippingDiscount = 0;

    if ($SubTotal >= 1000) {
        $ShippingDiscount = 60;
        $ShippingMessage = "You qualify for a ₱60 shipping credit!";
    } else {
        $ShippingMessage = "Spend over ₱1000 for a shipping discount.";
    }

    $TotalAfterDiscount = $Total - $ShippingDiscount;

    $loyaltyDiscount = 0;
    $loyaltyMessage = "";

    // 2. IF-ELSEIF-ELSE
    if ($SubTotal >= 5000) {
        $loyaltyDiscount = 500;
        $loyaltyMessage = "Wow! You've reached Platinum Tier! You get an extra ₱500 off!";
    } elseif ($SubTotal >= 2000) {
        $loyaltyDiscount = 150;
        $loyaltyMessage = "You've reached Gold Tier! You get an extra ₱150 off.";
    } elseif ($SubTotal >= 1000) {
        $loyaltyDiscount = 50;
        $loyaltyMessage = "You've reached Silver Tier! You get an extra ₱50 off.";
    } else {
        $loyaltyMessage = "Keep shopping to unlock our loyalty discounts!";
    }
    $TotalAfterAllDiscounts = $TotalAfterDiscount - $loyaltyDiscount;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The BookStore - Offers & Prices</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<?php include "Header.php"; ?>
<body>
    <h1>December's Deals!<h1>
    <h2>Welcome Book Worms!</h2>

    <h3>Today's Offer (<?= $Day ?>)</h3>
    <p> <?= $Offer ?> </p>

    <h1>Your Cart Items</h1>

    <table>
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Cost Per Item</th>
                <th>Line Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartItems as $item): ?>
                <!-- 3. IF condition-->
                <tr <?php if ($item['Genre'] === 'Educational') echo 'class="educational-item"'; ?>>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td><?= $item['quantity'] ?></td>
                    <td>₱<?= number_format($item['cost'], 2) ?></td>
                    <td>₱<?= number_format($item['cost'] * $item['quantity'], 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">SubTotal</th>
                <td>₱<?= number_format($SubTotal, 2) ?></td>
            </tr>
            <tr>
                <th colspan="3">Tax</th>
                <td>₱<?= number_format($Tax, 2) ?></td>
            </tr>
             <tr>
                <th colspan="3">Total Cost (Before All Discounts)</th>
                <td>₱<?= number_format($Total, 2) ?></td>
            </tr>
             <tr>
                <th colspan="3">Shipping Discount Applied</th>
                <td>-₱<?= number_format($ShippingDiscount, 2) ?></td>
            </tr>
            <tr>
                <th colspan="3">Loyalty Discount Applied</th>
                <td>-₱<?= number_format($loyaltyDiscount, 2) ?></td>
            </tr>
             <tr>
                <th colspan="3"><strong>Final Total</strong></th>
                <td><strong>₱<?= number_format($TotalAfterAllDiscounts, 2) ?></strong></td>
            </tr>
        </tfoot>
    </table>
    
    <p class="highlight">
        <?= $ShippingMessage ?>
    </p>

    <p class="highlight">
        <?= $loyaltyMessage ?>
    </p>


    <p><em><?= $greet ?></em></p>

</body>
<?php include "Footer.php"; ?>
</html>