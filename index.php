<?php
// print Statements
echo "<h3> Hellow World !</h3> ";
echo "I'm a passionate web designer with four years of experience. 
<br> Designed creative and responsive websites with 99% client satisfaction.<br><br>";
echo "I'm learning <b>PHP</b> for the first time.<br>";

// Data Type
$name = "<h3> Tabassum </h3>";
echo $name;

// Using Concatenation
$name_1 = "Somaya Tabassum";
$age= 20;
echo "My name is ".$name_1." .I am ".$age. " years old.<br><br>"; 
$deparment = "<b>CMT</b>";
$institute = "<b>Chattogram Mohila Polytechnic Institute </b>";
echo "The Department name is ".$deparment.".<br><br>" ;
echo "Name of the polytechnic : " .$institute. ". <br><br>";
//Number
$value_1 = 40;
$value_2 = 20;
echo "The addition is = " .$value_1 + $value_2.".<br><br>";
echo "The Division is = " .$value_1 / $value_2.".<br><br>";
echo "The subtraction is = " .$value_1 - $value_2.".<br><br>";
echo "The multiplication is = " .$value_1 * $value_2.".<br><br>";
$x=20.5;
$y= 10;
echo $x+$y,"<br><br>";
"<br>";
// Constant Php
define("input","This is my output.",true);
echo input,"<br>";

define("VALUE", "Hello Constant PHP.",true);
echo VALUE;
