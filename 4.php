<?php
include('3.php');
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "sum":
            return sum($arg1, $arg2);
        case "subtract":
            return subtract($arg1, $arg2);
        case "multiply":
            return multiply($arg1, $arg2);
        case "divide":
            return divide($arg1, $arg2);
        default:
            return false;
    }
}
?>