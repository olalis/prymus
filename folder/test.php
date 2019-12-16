<?php
$name = "World";
if (isset($_GET['name'])) {
    $name = $_GET['name'];
}
for ($n = 1; $n < 7; $n++)
    echo "<h$n>Hello, $name!</h$n>";


