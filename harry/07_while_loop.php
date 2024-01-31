<?php

//while loop 

// checks the condition until it becomes false

echo "While loops in php"; echo "<br>";
// printing number in reverse order
$i = 5;
while($i>=1){
    echo $i;
    echo "<br>";
    $i--;
}

echo "<br>";


// printing number in correct order
$i = 1;
while($i<=5){
    echo $i;
    echo "<br>";
    $i++; // incrementing the value by two

}
echo "<br>";
echo "Even numbers"; echo "<br>";
$i = 0;
while($i<=10){
    echo $i;
    echo "<br>";
    $i+=2; // incrementing the value by two
    
}
echo "<br>";
echo "Odd numbers"; echo "<br>";
$i = 1;
while($i<=10){
    echo $i;
    echo "<br>";
    $i+=2; // incrementing the value by two
    
}

// printing array using while loop
echo "<br>";
echo "Printing array using while loop <br>";
$arr = array(1,2,3,45,6,7);
$length = count($arr);
$i = 0;
while($i<$length){
    echo $arr[$i];
    echo "<br>";
    $i++;
}



?>