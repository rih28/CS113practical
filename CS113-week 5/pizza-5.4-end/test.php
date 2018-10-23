<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 22/10/2018
 * Time: 12:21
 */

/*Numbers*/

//This doesn't work
//int x = 5;

//Need a dollar for variables
//Not explicitly typed
$x = 5;
$y = 2;

$x = $x/3;   //reassign $x

//php manual pages in google

//echo "hello";
echo $x;
echo "<br>";
echo $x+$y;
echo "<br>";
echo $x/$y;
echo "<br>";
echo round($x, 2);

$a = "hello";
$b = "world";

$c = "111";
$d = "222";

echo "<br>";
//echo $a+$b;  //Not correct
echo "<br>";
echo $a . $b;
echo "<br>";
echo $a . ", " . $b;
echo "<br>";
echo $c+$d;

//php manual uppercase
echo '<br>';
echo strtoupper($a);
echo '<br>';
//php manual reverse
echo strrev($b);

echo "<br> $a, $b"; //double quoted string, use variables inside the string;

?>