<?php
function myTime() {
    $hours = date('G');
    $minutes = date('i');
    if (($hours >= 5 && $hours <= 20) || $hours == 0)
        $hours .= " часов ";
    elseif ($hours == 1 || $hours == 21)
        $hours .= " час ";
    else
        $hours .= " часа ";
    if (($minutes >= 5 && $minutes <= 20) || ($minutes % 10) == 0 || (($minutes % 10) >= 5 && ($minutes % 10) <= 9))
        $minutes .= " минут";
    elseif (($minutes % 10) == 1)
        $minutes .= " минута";
    else
        $minutes .= " минуты";
    return $hours.$minutes;
}
?>