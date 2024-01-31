<?php

echo "Welcome to for_each loop <br>";

$arr = array("Nav" , "Noor" , "Shalini");
// using for loop
// for ($i=0; $i < count($arr); $i++) { 
//   echo $arr[$i];
//   echo "<br>";
// }

//  better way to do this------------- using for each loop 

// foreach ($arr as $key=>$value)
foreach ($arr as $value) {
    echo " $value <br>";
}
?>



















