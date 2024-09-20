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

    for ($h = 1; $h <= numOfOrder; $h++)
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
            "amount" => $productOrd,
        ];
        Array_push($orderData, $orderset);
    }
    #Value testing
    // foreach($orderData as $order)
    // {
    //     var_dump($order);
    // }
    return $orderData;
}

// generateOrder();

function calculateAndPrintOrder($orderData, $price, $discountThreshold)
{
    $orderSubTotal = [];
    $ordercount = 0;
    for ($i = 0; $i<count($orderData); $i++)
    {
        for ($h = 0; $h <count($orderData[$i]['amount']); $h++)
        {
            $orderSubTotal[] = $orderData[$i]['amount'][$h] * $price[$h];
           
        }
        
    }

    foreach($orderSubTotal as $sub)
    {
        echo $sub, "\n";
    }

}
$orderData = generateOrder();
calculateAndPrintOrder($orderData, $price,$discountThreshold);

function getDiscountedPercentage($subtotal, $discountThreshold)
{

}

function getSubTotal($amount, $price)
{

}
?>