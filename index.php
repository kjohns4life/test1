<?php

$time = idate("H");
$realTime = date("h:i:sa");

switch ($time){
    case ($time > 11):
        echo $realTime.= " <br>Good Afternoon";
        break;
        case ($time <= 11):
            echo $realTime.= " <br>Good Morning";
            break;
            default:
            echo "have a nice day";
}


?>
