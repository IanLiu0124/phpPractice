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
function getSubTotal($order, $price)
{
    return $order * $price;
}
// generateOrder();

function calculateAndPrintOrder($orderData, $price, $discountThreshold)
{
    
    for ($i = 0; $i<numOfOrder; $i++)
    {
        $orderData[$i]['subtotal']= 0;
        $orderData[$i]['discount']= 0;
        $orderData[$i]['totalCost'] = 0;
        for ($h = 0; $h <count($orderData[$i]['amount']); $h++)
        {
            $orderData[$i]['subtotal']+= getSubTotal($orderData[$i]['amount'][$h], $price[$h]);
            
        }
        $orderData[$i]['discount'] = getDiscountedPercentage($orderData[$i]['subtotal'], $discountThreshold);
        $orderData[$i]['totalCost'] = $orderData[$i]['subtotal'] * (1 - $orderData[$i]['discount'] ) * (1 + tax_percentage);
        
        // array_push($orderData, $subtotal);
    }
    // $orderData = getSubTotal($orderData, $price);
    
    
    echo "Order\t\t\tProduct A\t\t\tProduct B\t\t\tProduct C\t\t\tDiscount\t\t\tSubTotal\n";
    for ($i = 0; $i < numOfOrder; $i++)
    {
            echo "{$orderData[$i]['id']}\t\t\t{$orderData[$i]['amount'][0]}\t\t\t\t{$orderData[$i]['amount'][1]}\t\t\t\t{$orderData[$i]['amount'][2]}\t\t\t\t%{$orderData[$i]['discount']}\t\t\t\t$". number_format((float)$orderData[$i]['totalCost'], 2) . "\n\n";    
    }
    // foreach($orderData as $data)
    // {
    //     var_dump($data);
    // }

}


function getDiscountedPercentage($amount, $discountThreshold)
{
        $discount = 0;
        foreach ($discountThreshold as $threshold => $rate)
        {
            if($amount > $threshold)
            {
                $discount = $rate;
            }
        }
        return $discount;

}

function start($price,$discountThreshold)
{
    getHeader();
    $orderData =generateOrder();
    calculateAndPrintOrder($orderData, $price,$discountThreshold);
    $count = 1;
    echo "Would you like to repeat another session? y/n: ";
    $userInput = stream_get_line(STDIN,1024,PHP_EOL);

    while(strtolower($userInput) == 'y')
    {
        $count++;
        getHeader();
        $orderData =generateOrder();
        calculateAndPrintOrder($orderData, $price,$discountThreshold);
        $userInput = stream_get_line(STDIN,1024,PHP_EOL);
    }
    echo "You've ran the program {$count} times! Goodbye!";
}



// $orderData = generateOrder();
// calculateAndPrintOrder($orderData, $price,$discountThreshold);
?>