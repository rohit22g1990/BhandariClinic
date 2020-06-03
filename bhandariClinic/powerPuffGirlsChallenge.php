<?php
$noOfIngredeints = 4;
$requiredIngredients = [2,5,6,3];
$availableIngredients = [20, 40, 90, 50];

$noOfIngredeints1 = 3;
$requiredIngredients1 = [3, 6, 40];
$availableIngredients1 = [10, 20, 30];

function calculateMaxPowerPuffGirls($noOfIngredeints, $requiredIngredients, $availableIngredients)
{
    foreach(array_combine($requiredIngredients, $availableIngredients) as $requiredIngredients => $availableIngredients) {
        $powerPuffGirls[] = $availableIngredients / $requiredIngredients;
    }
   
    return floor(min($powerPuffGirls));
}
print_r(calculateMaxPowerPuffGirls($noOfIngredeints1, $requiredIngredients1, $availableIngredients1));

?>