<?php

function check_array($arr = [2, 3, 4, 5]) {
    foreach($arr as $v) {
        if($v < 0) return "False";
    }
    return "True";
}

echo check_array([-1, 9, -4, 5]);