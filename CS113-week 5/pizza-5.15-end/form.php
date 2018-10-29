<?php
/**
 * Created by IntelliJ IDEA.
 * User: jrb18175
 * Date: 28/10/2018
 * Time: 13:14
 */

print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>';

$robot = isset($_GET["robot"]) && $_GET["robot"] === "no";
$name = strip_tags(isset($_GET["name"]) ? $_GET["name"] : "");

if ($name==="") {
    echo "No name??????!";
} else {
    echo $name;
}
echo '<br>';

if ($robot) {
    echo 'You are not a robot!!';
} else {
    echo '11001110000011111001';
}


?>