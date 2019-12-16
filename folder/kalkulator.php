<?php

if (isset($_GET['op']) and isset($_GET['x']) and isset($_GET['y'])) {
    $op = $_GET['op'];
    $x = $_GET['x'];
    $y = $_GET['y'];
}
if ($op = "sum") {
    $wynik = $x + $y;
}
else if ($op = "subtract") {
    $wynik = $x - $y;
}
else if ($op = "multiply") {
    $wynik = $x * $y;
}
else  ($op = "divide") {
    if ($y = 0){
        echo "Nie dziel przez zero";
}
    else {
        $wynik = $x / $y;
    }
}


echo "$wynik";