<?php

$arr = [3,5,2,9,7,8,10,1];

foreach (array_reverse($arr) as $v) {
    if($v%2 === 0) {
        echo $v.PHP_EOL;
        break;
    }
}