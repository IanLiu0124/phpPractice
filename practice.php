<?php

$user = ['Andy', 'Ian', 'Hello', 123];


array_shift($user);
array_unshift($user, 'New Text');
var_dump($user);
echo count($user);
foreach($user as $names)
{
    echo $names." ";
}

foreach ($user as $key=>&$value)
{
    echo $key."\t"."=>\t".$value."\n";
}
?>