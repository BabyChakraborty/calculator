<?php

if($_POST)
{
    $operation = $_POST['operation'];
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if ($operation == "+") {
        $x = $number1 + $number2;
    }
    if ($operation == "-") {
        $x = $number1 - $number2;
    }

    if ($operation == "x") {
        $x = $number1 * $number2;
    }
    if ($operation == "/") {
        $x = $number1 / $number2;
    }
    if ($operation == "%") {
        $x = $number1 % $number2;
    }

    echo $x . " is the answer<br/>";
}
if($_POST)
{

    if ($operation == "-" && $number1 < $number2)
    {
        echo "number1 is larger than number2";
    }
}
if($_POST) {

    if ($operation == "%" && $x % 2 == 0) {
        echo "cannot devide";
    }
}
?>
<br>
<a href="calpracts.php">Put value again</a>

