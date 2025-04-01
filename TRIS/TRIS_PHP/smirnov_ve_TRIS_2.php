<?php 
// GCD - The greatest common divisor
    function GCD($a, $b) {
        while (($a != 0) and ($b != 0)) {
            if ($a > $b) {
                $a = $a % $b;
            } else {
                $b = $b % $a;
            }
        } 
        return ($a + $b);
    }

// LCM - Largest common multiple

    function LCM($a, $b) {
        return ($a * $b) / GCD($a, $b);
    }

    print GCD(100, 20) . "\n";
    print LCM(100, 20) . "\n";
?>

<!-- An alternative method -->

<?php
function NOK ($a, $b)
{
    $m = $a;
    $n = $b;
     while ($a != 0 AND $b!= 0) 
    {
        if ($a > $b){
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    $k = $a + $b;
    $l = $m * $n / $k;
    echo "НОД:" .$k. "\n";
    echo "НОК:" .$l. "\n";
}
    NOK (32, 12);
?>


