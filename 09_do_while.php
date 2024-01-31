<?php

//  do while loop is similar to while loop but it altleast executes once!!

echo "This is do_while loop <br>";

/*
do {
    some lines of code to be executed here!!;
    ....
} while(condition);
*/

// here the condition is false
$i = 10;
do {
    echo $i; echo "<br>";
} while($i<2);

// here the comdition satisfies
$i = 10;
do {
    echo $i; echo "<br>";
    $i++;
} while($i<=20);


?>