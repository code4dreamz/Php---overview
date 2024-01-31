<?php

 $name = "Noor";
 $age  = 21;

echo " $name <br> $age<br>";

/* php data-types

1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null

*/

// string- sequence of characters
$x = "Nav";
$y = "Noor";
echo "$x ki friend $y<br>";

// intger- nondecimal number

$value = 1000;
$value2 = 345;
echo " $value and $value2<br>";

// float- decimal point number
$yt = 23.2;
echo "$yt<br>";

// boolean- can be either true or false ---vardump function is used to get the false value and its datatype
 $x = true;
 $_isfriend = false;
 echo "$x";
 echo "<br>";
 echo var_dump($_isfriend);
 echo "<br>";
 
// object- instances of classes
// Employee is a class ------> harry can be one object


// array- used to store multiple values in a single variable
$friends = array("harry", "skillf" , "java");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";

// methods in array---------

echo "<pre>";
print_r($friends); 
echo "<pre>"; //-----used to print array in sort of table form;
echo array_pop($friends); echo "<br>"; // used to pop the value
echo array_push($friends , "js" , "php"); echo "<br>";
print_r($friends); echo "<br>";
// null - 
$name = NULL;
echo var_dump($name);

?>
