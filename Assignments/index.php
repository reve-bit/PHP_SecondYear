<?php
include 'header.php';
require 'vegetables.php';
require 'recommendation.php';
require 'inventory.php';

// Functions
function calculateSubtotal($cost, $items): float {
    return $cost * $items;
}

function calculateTax($subtotal, $rate = 0.12): float {
    return $subtotal * $rate;
}

function calculateTotal($subtotal, $tax): float {
    return $subtotal + $tax;
}

function getDiscountMessage($total): string {
    if ($total > 50000) {
        return "Wow! You're eligible for a special discount!";
    } elseif ($total > 20000) {
        return "You get free shipping!";
    } else {
        return "Add more items to unlock rewards!";
    }
}

function getZincLevel($zincAmount): string {
    return ($zincAmount >= 2) ? "High Zinc" : "Low Zinc";
}

function generateBahayKuboSong(array $vegetables): string {
    return
        $vegetables[0] . " at " . $vegetables[1] . "<br>" .
        $vegetables[2] . " at " . $vegetables[3] . "<br>" .
        $vegetables[4] . ", " . $vegetables[5] . ", " . $vegetables[6] . "<br>" .
        $vegetables[7] . ", " . $vegetables[8] . ", " . $vegetables[9] . " " . $vegetables[10] . "<br>" .
        "At tsaka mayro'n pang<br>" .
        $vegetables[11] . ", " . $vegetables[12] . "<br>" .
        $vegetables[13] . ", " . $vegetables[14] . ", " . $vegetables[15] . " at " . $vegetables[16] . "<br>" .
        "Sa paligid-ligid ay puno ng " . $vegetables[17] . "<br><br>";
}

// Variables
$Items = 10;
$Cost = 599;
$greet = "Thank You So Much!";

$SubTotal = calculateSubtotal($Cost, $Items);
$Tax = calculateTax($SubTotal);
$Total = calculateTotal($SubTotal, $Tax);
$discountMsg = getDiscountMessage($Total);
$zincLevel = getZincLevel($recommendation['Zinc']);
?>

<div class="main-content">
    <h1>Bahay Strong Candies</h1>

    <!-- Shopping Bag Table -->
    <h2>Shopping Bag</h2>
    <table class="shopping-table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Cost (₱)</th>
                <th>Subtotal (₱)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Items</td>
                <td><?= $Items ?></td>
                <td><?= $Cost ?></td>
                <td><?= $SubTotal ?></td>
            </tr>
            <tr>
                <td colspan="3"><strong>Tax (12%)</strong></td>
                <td><?= $Tax ?></td>
            </tr>
            <tr class="total-row">
                <td colspan="3"><strong>Total</strong></td>
                <td><?= $Total ?></td>
            </tr>
            <tr>
                <td colspan="4" class="highlight"><?= $discountMsg ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Centered Thank You Message -->
    <div class="center-container">
        <p class="thank-you"><?= $greet ?></p>
    </div>

    <!-- Recommendation Table -->
    <h2>Recommendation</h2>
    <table class="shopping-table">
        <thead>
            <tr>
                <th>Flavor</th>
                <th>Brand</th>
                <th>Level</th>
                <th>Zinc</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $recommendation['Flavor'] ?></td>
                <td><?= $recommendation['Brand'] ?></td>
                <td><?= $recommendation['Level'] ?></td>
                <td><?= $recommendation['Zinc'] ?> (<?= $zincLevel ?>)</td>
            </tr>
        </tbody>
    </table>

    <!-- Inventory Table -->
    <h2>Inventory</h2>
    <table class="shopping-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price (₱)</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Total Value (₱)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventory as $product => $details):
                $status = stockStatus($product, $inventory);
                $totalValue = calculateProductTotal($product, $details['stock'], $inventory);
            ?>
            <tr>
                <td><?= $product ?></td>
                <td><?= number_format($details['price'], 2) ?></td>
                <td><?= $details['stock'] ?></td>
                <td><?= $status ?></td>
                <td><?= number_format($totalValue, 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Bahay Kubo Song -->
    <h2>Bahay Kubo Song</h2>
    <div class="center-container">
        <p class="bahay-kubo">
            Bahay-kubo, kahit munti<br>
            Ang halaman doon ay sari-sari<br>
            <?= generateBahayKuboSong($vegetables) ?>
            Bahay-kubo kahit munti<br>
            Ay matibay at tunay nating yaman<br>
            Bahay-kubo, kahit munti<br>
            Matatawag nating tahanan<br>
            Haa-ah, la-la-la-la, la-la-la-la<br>
            Ohh<br><br>
            Pag-ibig at galak<br>
            Kagandahan ng loob<br>
            At pagpapahinuhog<br>
            Kapayapaan, pang-unawang matapat<br>
            At tsaka mayro'n pang<br>
            Kabutihang yakap<br>
            Kahinahunan<br>
            Matimpi sa t'wana<br>
            Sa paligid-ligid may pagkakaisa<br>
            Haa-ah, ta-la-la-la, ta-la-la-la-la
        </p>
    </div>
</div>

<?php include 'footer.php'; ?>
