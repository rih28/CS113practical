<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 22/10/2018
 * Time: 12:21
 */

/*Arrays*/

$names = array("Russell", "Olivia", "Susan");
//Print recursively, useful for debugging
print_r($names);
echo "<br>";

//add to the end of an array
array_push($names,"David", "Nikki");
print_r($names);

echo "<br>";

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i];
    echo "<br>";
}

echo "<br>";

foreach ($names as $name) {
    echo $name;
    echo "<br>";
}

echo "<br>";

//Associative Arrays i.e. name/value pairs
$phone = array("Russell" => 1234, "James" => 5678);

foreach($phone as $name => $extension) {
    echo $name . " => " . $extension;
    echo "<br>";
}

echo "<br>";

$phone["Alex"] = 0001;

foreach($phone as $name => $extension) {
    echo $name . " => " . $extension;
    echo "<br>";
}

echo "<br>";

echo $phone["Russell"];

echo "<br>";

//Sort an array by key
ksort($phone);

foreach($phone as $name => $extension) {
    echo $name . " => " . $extension;
    echo "<br>";
}

echo "<br>";

unset($phone["Russell"]);

foreach($phone as $name => $extension) {
    echo $name . " => " . $extension;
    echo "<br>";
}

?>