<?php
$products = [
    ["name" => "Laptop", "price" => 60000],
    ["name" => "Mouse", "price" => 800],
    ["name" => "Keyboard", "price" => 1200],
];

function listProducts($items) {
    echo "Available Products:\n";
    foreach ($items as $item) {
	echo "- {$item['name']} @ Rs. {$item['price']}\n";
    }
}

function findProduct($items, $name = "Laptop") {
    foreach ($items as $item) {
	if (strtolower($item['name']) == strtolower($name)) {
	    return $item;
	}
    }
    return "product not found.";
}


//Show all
listProducts($products);

echo "\nSearch for product by name:\n";
$search = trim(fgets(STDIN));

$result = findProduct($products, $search);
if (is_array($result)) {
    echo "Found: {$result['name']} @ Rs.{$result['price']}\n";
} else {
    echo $result . "\n";
}
?>
