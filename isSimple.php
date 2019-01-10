<?php
/*
 * Simple number is great then 1 and have only two divisors : 1 and themself;
 */
$n = 2;

function showDevisors($n)
{
    /*
     * return array with devisors
     */
    $arr = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}
function isSimple($i)
{
    $flag = '';
   // if count of array only two - number is simple
    if (count(showDeviders($i)) == 2) {
        $flag = true;
    } else {
        $flag = false;
    }

    if ($flag) {
        echo 'Simple';
    } else {
        echo 'Complex';
    }
}
