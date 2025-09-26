<?php
$lines = file("products.txt", FILE_IGNORE_NEW_LINES);
$products = [];
foreach ($lines as $line) {
    list($name, $price) = explode(",", $line);
    $products[] = ["name" => $name, "price" => (int)$price];
}
usort($products, fn($a, $b) => $a["price"] <=> $b["price"]);
echo "<table border='1'><tr><th>Product Name</th><th>Price</th></tr>";
foreach ($products as $product) {
    echo "<tr><td>{$product['name']}</td><td>{$product['price']}</td></tr>";
}
echo "</table>";
?>

