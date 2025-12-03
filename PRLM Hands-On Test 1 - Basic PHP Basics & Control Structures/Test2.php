<?php
$name = 'Justine';
$greetings = "Hello, Lee!";
$product = "ScythPhone 17";
$cost = 10;
$totals = [];

if ($name) {
    $greetings = "Welcome back, $name!";
} 

for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i;
    $discount =$cost /100 * 4;

    $totals[$i] = $subtotal - $discount;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reve Store</title>
</head>
<?php include "includes/header.php" ?>
<body>
    
    <p><?= $name ?></p>
    <p><?= $greetings ?></p>


    <table>
        <tr>
            <th> PACKS </th>
            <th> PRICE </th>
        </tr>
    <?php 
    foreach ($totals as $quantity => $price):
    ?>
   
        <tr>
            <td>
                <?= $quantity ?>
                <?php 
                ($quantity == 1 ) ? $display = "Pack" : $display = "Packs ";
                echo $display;?>
            </td>
            <td><?=$price?></td>
        </tr>
        <?php endforeach?>
    </table>
        
</body>
<?php include "includes/footer.php" ?>
</html>


