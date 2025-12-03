<?php
$inventory = [
    "Vitamin C 1000mg" => ["price" => 250.00, "stock" => 15],
    "Zinc Supplements" => ["price" => 180.00, "stock" => 8],
    "Multivitamins" => ["price" => 350.00, "stock" => 20],
    "Vitamin D3" => ["price" => 220.00, "stock" => 5],
    "Iron Capsules" => ["price" => 195.00, "stock" => 12],
    "Probiotics" => ["price" => 420.00, "stock" => 3],
    "Omega-3 Fish Oil" => ["price" => 580.00, "stock" => 18],
    "Calcium + Magnesium" => ["price" => 310.00, "stock" => 22]
];

function getPrice(string $productName, array $inventory): float {
    return $inventory[$productName]['price'] ?? 0;
}
function getStock(string $productName, array $inventory): int {
    return $inventory[$productName]['stock'] ?? 0;
}
function calculateProductTotal(string $productName, int $quantity, array $inventory): float {
    $price = getPrice($productName, $inventory);
    return $price * $quantity;
}

function stockStatus(string $productName, array $inventory): string {
    $stock = getStock($productName, $inventory);
    if ($stock > 10) return "In Stock";
    elseif ($stock > 0) return "Low Stock";
    else return "Out of Stock";
}

function listInventory(array $inventory): array {
    return $inventory;
}
?>
