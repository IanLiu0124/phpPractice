<?php

const numOfOrder = 4;
const developer = "Ian";
const appID = "300373688";
const min_amount = 0;
const max_amount = 10;
const tax_percentage = 0.12;

$items = 
[
    ["Item" => "Item A", "Price" => 30],
    ["Item" => "Item B", "Price" => 30],
    ["Item" => "Item C", "Price" => 40],
];
#value testing
// foreach ($items as $key)
// {
//     echo $key["Item"], " ";
//     echo $key["Price"], " ";
//     echo "\n";
// }
// ;

$discountThreshold =
[
    0 => 0,
    200 => 0.05,
    300 => 0.1,
    500 => 0.15,
    700 => 0.25,
];


?>