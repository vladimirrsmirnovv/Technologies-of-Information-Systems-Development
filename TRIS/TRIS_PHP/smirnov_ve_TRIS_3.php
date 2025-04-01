<?php
    $month_names=array( 
        1=> 'Январь', 
        2=> 'Февраль', 
        3=> 'Март', 
        4=> 'Апрель', 
        5=> 'Май', 
        6=> 'Июнь', 
        7=> 'Июль',
        8=> 'Август',
        9=> 'Сентябрь',
        10=> 'Октябрь',
        11=> 'Ноябрь',
        12=> 'Декабрь');
    
    for ($i = 1; $i <= 12; $i++) {
        echo "$month_names[$i]\n";
    }
?>

<?php
function month_det($month_n) {
    switch ($month_n) {
        case 4:
        case 6:
        case 9:
        case 11:
            return 30;
            break;
        case 2:
            return 28;
            break;
        default:
            return 31;
    }
}

    for ($i = 1; $i <= 12; $i++) {
        echo "$month_names[$i] - ".month_det($i)."\n";
    }
?>

<!-- Дорабатываю и делаю массив из этого -->

<!-- ДОДЕЛАТЬ!!!!!!!!!!!!!!!!!!! -->

<?php
// function month_det($month_n) {
//     switch ($month_n) {
//         case 4:
//         case 6:
//         case 9:
//         case 11:
//             return 30;
//             break;
//         case 2:
//             return 28;
//             break;
//         default:
//             return 31;
//     }
// }

//     for ($i = 1; $i <= 12; $i++) {
//         echo "$month_names[$i] - ".month_det($i)."\n";
//         $month_days[$month_names[$i]] = month_det($i);
//     }
//     var_dump($month_days)
?>

<!-- НЕ РАБОТАЕТ -->
<?php
    // function mult_table() {
    //     for ($i=0; $i<10; $i++) {
    //         for ($j=0; $j<10; $j++) {
    //             echo ($i * $j)."\t";
    //         }
    //         echo "\n";
    //     }
    // }

    // for ($i = 1; $i <= 9; $i++) {

    //     for ($j = 1; $j <= 10; $j++) {
    //         $t[$i][$j] = $i * $j;
    //         print($t[$i][$j]. "\t";
    //     echo "\n"
    //     }

    // }
?>

<?php
    // foreach ($month_names as $value) { 
    //     $value = 0;
    //     $month_names=array( 
    //         1=> 'Январь', 
    //         2=> 'Февраль', 
    //         3=> 'Март', 
    //         4=> 'Апрель', 
    //         5=> 'Май', 
    //         6=> 'Июнь', 
    //         7=> 'Июль',
    //         8=> 'Август',
    //         9=> 'Сентябрь',
    //         10=> 'Октябрь',
    //         11=> 'Ноябрь',
    //         12=> 'Декабрь');
    // }
?>


<!-- ЧИСЛА ФИБОНАЧЧИ -->

<?php

    $f[1] = 1;
    $f[2] = 1;

    for ($i = 3; $i <= 25; $i++) {
        $f[$i] = $f[$i - 1] + $f[$i - 2];
    }
    var_dump($f);

?>


<!-- ЧИСЛА ЧИСЛА СОРТИРОВКА -->

<?php

    function complete_number($n) {
        $m = [];
        while ($n != 0) {
            $m[] = $n % 10;
            $n  = ($n - $n % 10) / 10;
        }
        sort($m);
        var_dump($m);
    }
    complete_number(72492)
?>