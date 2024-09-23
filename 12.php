<?php

// Define the shopping cart array
$cart = [
    ['name' => 'Apple', 'price' => 0.5, 'quantity' => 0],
    ['name' => 'Banana', 'price' => 0.2, 'quantity' => 0],
    ['name' => 'Orange', 'price' => 0.8, 'quantity' => 0],
];

// Function: Prompt user to input quantities
function inputQuantities(&$cart) {
    foreach ($cart as &$item) {
        // Ask the user to input the quantity for each item
        echo "Please enter quantity for {$item['name']}: ";
        $item['quantity'] = (int)stream_get_line(STDIN, 1024, PHP_EOL); // Get user input and convert to an integer
    }
}

// Function: Calculate the total amount of the cart
function calculateTotal($cart) {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

// Function: Print detailed information of the cart
function printCart($cart) {
    echo "\nShopping Cart:\n";
    foreach ($cart as $item) {
        $itemTotal = $item['price'] * $item['quantity'];
        echo "{$item['name']}: {$item['quantity']} x \${$item['price']} = \$$itemTotal\n";
    }
}

// Function: Apply discount if total exceeds $30
function applyDiscount($total) {
    if ($total > 30) {
        $discountedTotal = $total * 0.88;
        echo "\nTotal Amount before discount: \$$total\n";
        echo "Total Amount after 12% discount: \$$discountedTotal\n";
    } else {
        echo "\nTotal Amount before discount: \$$total\n";
        echo "No discount applied.\n";
    }
}

// Main program
inputQuantities($cart); // Get user input for quantities
printCart($cart); // Print shopping cart details
$total = calculateTotal($cart); // Calculate total amount
applyDiscount($total); // Apply discount if applicable

?>
