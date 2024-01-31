<?php
echo "Welcome to functions <br>";

function heyyuser($marks){
    $sum = 0;
    foreach ($marks as $value) {
        $sum+=$value;  
    }
    return $sum;
}

$navv = array(67,89,90,78,45,75);
$total = heyyuser($navv);
echo "Total marks scored by navv out of 600 is $total";

echo "<br>"; 

// simple code to understand the functioning of function

function heyy(){
    echo "hello world";

}
heyy();

?>
