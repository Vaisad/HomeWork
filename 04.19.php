<?php

$space = "";
$number = 2;
$word = "hello";

var_dump ($space, $number, $word);
echo "<br>";

$new_word = "horse";
$last_words = substr($new_word, -3);
var_dump($last_words);
echo "<br>";


$negative = 3;
function negative($num) {
    if ($num > 0){
        $num *= -1;
    }
    return $num;
}
var_dump(negative($negative));
echo "<br>";



function negative1($number){
    $number1 = $number <= 0 ? $number : -$number;
    return $number1;
}
echo negative1(10);
echo "<br>";


function randNum(int $rand1, int $rand2){
         $randNum1 = rand($rand1, $rand2);
         return $randNum1; 
}
echo randNum(1, 6);
echo "<br>";


function halfArea($side1, $side2) {
    $area = $side1 * $side2 / 2;
    return $area;
}
echo halfArea(10, 10);
echo "<br>";


function yearToRetired ($ageNow){
    $age = 67 - $ageNow;
    echo "Iki pencijos Jums liko {$age} metai...!";
}
yearToRetired(39);
echo "<br>";


function temp($farengeit){
    $celsius = ($farengeit - 32) / 1.8;
    return $celsius;
}
echo temp(20);

?>

