<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 22/10/2018
 * Time: 12:21
 */

$c = "111";

//Booleans

$price = 120;
if ($price > 100) {
    echo "price is greater than $100";
} else {
    echo "$price is less than or equal to $100";
}

echo "<br>";
echo '...' . ($price>100) . '...';  // True is 1 and False is EMPTY (can be 0)
echo "<br>";
echo '...' . (TRUE) . '...';
echo "<br>";
echo '...' . (FALSE) . '...';
echo "<br>";
echo '...' . (TRUE == FALSE) . '...';
echo "<br>";
echo '...' . (TRUE == TRUE) . '...';
echo "<br>";
echo '...' . ($c == 111) . '...';
echo "<br>";
echo '...' . ($c === 111) . '...'; //Doesn't try a conversion i.e. different type
echo "<br>";
echo '...' . ($c === "111") . '...';

echo "<br>";
echo "<br>";

?>