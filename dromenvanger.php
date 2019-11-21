<?php
$i = 1;
$j = 1;
$x = 1;
echo ("Hoeveel vrienden heb je  \n");
$amount = readline();
if (is_numeric($amount)) {
    echo (var_export($amount) . " Vrienden gaan hun dromen invullen \n");
} else {
    echo (var_export($amount) . " is geen getal, vul een getal in. \n");
    exit();
}
for($i = 1; $i <= $amount; $i++){
    echo "\n Wat is je naam? \n";
    $vrienden = readline();
    echo("Hoeveel dromen wil je invullen? \n");
    $dromen = readline();
    for($j = 1; $j <= $dromen; $j++){
        echo "Welke droom wil je invullen? \n";
        $dingen[$vrienden][$j] = readline();
    }
}
var_dump($dingen);
foreach($dingen as $key => $value){
    echo $key . "'s droom is ";
    for($x = 1; $x <= $amount; $x++){
        print($value[$x]);
    }
    echo (PHP_EOL . PHP_EOL);
}  
?>