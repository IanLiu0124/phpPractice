<?php
include 'config.inc.php';

function getHeader()
 {
    for ($i = 0; $i < 80; $i++)
    {
        echo "-";
    }
    echo "\n\n\t\tProduct Order Calcualtor app by", developer, "(", appID,")\n\n";
    for ($i = 0; $i < 80; $i++)
    {
        echo "-";
    }
    echo "\n\n";
 }


function generateOrder()
{
    $orderData = [];

    for ($h = 1; $h <= numbOfOrder; $h++)
    {
        $productOrd = [];
        
        for ( $i = 1 ;$i <= numOfProducts; $i++)
        {
            $randomOrders = rand(1, 4);
            array_push($productOrd, $randomOrders);
        }        

        $orderset = 
        [
            "id" => "Order_{$h}",
            "amount" => $productOrd
        ];

    }

}
function calculateAndPrintOrder($orderData, $price, $discountThreshold)
{

}
function getDiscountedPercentage($subtotal, $discountThreshold)
{

}

function getSubTotal($amount, $price)
{

}
?>