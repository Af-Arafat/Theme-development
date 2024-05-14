<?php
$fruits = ["apple", "banana", "orange"];


foreach ($fruits as $fruit){
    echo $fruit. "\n";
}


for ($i=0; $i < count($fruits); $i++) {
    echo $fruits[$i]. "\n";
}


$i = 0;
while ($i < count($fruits)){
    echo $fruits[$i]. "\n";
    $i++;
}