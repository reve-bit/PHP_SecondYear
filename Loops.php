<?php
    $Day = 'Monday';
    $Offer = match ($Day) {
        'Monday' => '5% off Fiction Books',
        'Friday' => '30% off Biographies Books',
        default  => '56% off Non-Fiction Books',
    };
    
    $Items = 123;
    $Cost = 599;
    $Discount = 0.05;
    $SubTotal = $Cost * $Items;
    $TaxRate = 0.12;
    $Tax = $SubTotal * $TaxRate;
    $Total = $SubTotal + $Tax;
    $DiscountedT = $Total * $Discount;
    $Overall_Total = $Total - $DiscountedT;
    $greet = "Thank You So Much!";

    $deals = ['Deal 1: Free Bookmark', 'Deal 2: Free Shipping', 'Deal 3: Extra 10% off next purchase'];
    $featured_books = [
        'PHP Basics' => 29.99,
        'HTML Masterclass' => 19.99,
        'CSS Zen Garden' => 24.50
    ];
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

    <h3>Top 3 Deals This Week:</h3>
    <ul>
        <!-- 2. FOR LOOP -->
        <?php for ($i = 0; $i < count($deals); $i++): ?>
            <li><?= $deals[$i]; ?></li>
        <?php endfor; ?>
    </ul>

    <h3>Featured Books:</h3>
    <ul>
        <!-- 3. FOREACH LOOP-->
        <?php foreach ($featured_books as $title => $price): ?>
            <li><strong><?= $title ?></strong>: ₱<?= number_format($price, 2) ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Customer Count:</h3>
    <p>We are currently serving:
        <!-- 4. WHILE LOOP: -->
        <?php
        $customer_count = 1;
        while ($customer_count <= 3):
            echo "Customer $customer_count";
            if ($customer_count < 3) {
                echo ", ";
            }
            $customer_count++;
        endwhile;
        ?>
    </p>
    
    <h1>Discounted Prices & Totals</h1>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
    
            <tr>
                <td>Quantity of Items</td>
                <td><?= $Items ?></td>
            </tr>
            <tr>
                <td>Cost Per Item</td>
                <td>₱<?= number_format($Cost, 2) ?></td>
            </tr>
            <tr>
                <td>SubTotal</td>
                <td>₱<?= number_format($SubTotal, 2) ?></td>
            </tr>
            <tr>
                <td>Tax (<?= ($TaxRate * 100) ?>%)</td>
                <td>₱<?= number_format($Tax, 2) ?></td>
            </tr>
            <tr>
                <td><strong>Total Cost</strong></td>
                <td>₱<strong><?= number_format($Total, 2) ?></strong></td>
            </tr>
            <tr>
                <td><strong>Discounted Range</strong></td>
                <td>₱<strong><?= number_format($DiscountedT, 2) ?></strong></td>
            </tr>
            <tr>
                <td><strong>Discounted Price</strong></td>
                <td>₱<strong><?= number_format($Overall_Total, 2) ?></strong></td>
            </tr>
        </tbody>
    </table>
    
    <p><em><?= $greet ?></em></p>

</body>
<?php include "Footer.php"; ?>
</html>