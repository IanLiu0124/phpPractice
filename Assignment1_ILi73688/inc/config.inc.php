<?php

const numOfOrder = 4;
const numOfProducts = 3; #I added this so I can use this value instead of hard coding it
const developer = "Ian";
const appID = "300373688";
const min_amount = 0;
const max_amount = 10;
const tax_percentage = 0.12;

$price = 
[
    30, 30, 40
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