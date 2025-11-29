<?php
require 'header.php';
require 'vegetables.php';
require 'recommendation.php';

// Shopping Cart
$Items = 10;
$Cost = 599;
$SubTotal = $Cost * $Items;
$Tax = $SubTotal * 0.12;
$Total = $SubTotal + $Tax;
$greet = "Thank You So Much!";

// Conditional statements for discounts
if ($Total > 50000) {
    $discountMsg = "Wow! You're eligible for a special discount!";
} elseif ($Total > 20000) {
    $discountMsg = "You get free shipping!";
} else {
    $discountMsg = "Add more items to unlock rewards!";
}

// Conditional for Zinc
$Zinc = $recommendation['Zinc'];
$zincLevel = ($Zinc >= 2) ? "High Zinc" : "Low Zinc";
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
            <tr>
                <td colspan="4"><?= $greet ?></td>
            </tr>
        </tbody>
    </table>

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

    <!-- Bahay Kubo Song -->
    <h2>Bahay Kubo Song</h2>
    <p>
        Bahay-kubo, kahit munti<br>
        Ang halaman doon ay sari-sari<br>
        <?php
        echo $vegetables[0] . " at " . $vegetables[1] . "<br>";
        echo $vegetables[2] . " at " . $vegetables[3] . "<br>";
        echo $vegetables[4] . ", " . $vegetables[5] . ", " . $vegetables[6] . "<br>";
        echo $vegetables[7] . ", " . $vegetables[8] . ", " . $vegetables[9] . " " . $vegetables[10] . "<br>";
        echo "At tsaka mayro'n pang<br>";
        echo $vegetables[11] . ", " . $vegetables[12] . "<br>";
        echo $vegetables[13] . ", " . $vegetables[14] . ", " . $vegetables[15] . " at " . $vegetables[16] . "<br>";
        echo "Sa paligid-ligid ay puno ng " . $vegetables[17] . "<br><br>";
        ?>
        Bahay-kubo kahit munti<br>
        Ay matibay at tunay nating yaman<br>
        Bahay-kubo, kahit munti<br>
        Matatawag nating tahanan<br>
        Haa-ah, la-la-la-la, la-la-la-la<br>
        Ohh<br><br>
        Bahay-kubo, kahit munti<br>
        Ang halaman doon ay sari-sari<br>
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

<?php require 'footer.php'; ?>
