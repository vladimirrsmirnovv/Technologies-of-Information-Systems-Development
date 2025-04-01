<?php 
	$my_int = 50;
	echo "Значение переменной равно $my_int\n";
	echo 'Значение переменной равно $my_int\n';
?>

<?php 
	$num = 2003;
	$val = $num;
	print "$num\n";
	print "$val\n";
	$num = 2005;
	print "$num\n";
	print "$val\n";
?>

<?php 
	$str = "Смирнов";
	$ref_str = &$str;
	print "$str\n";
	print "$ref_str\n";
	$str = "Владимир";
	print "$str\n";
	print "$ref_str\n";
?>

<?php 
    define('trajectory_name', "Финансовый менеджмент"); 
    define('course_number', "4");
    $name = "Владимир";
    $last_name = "Смирнов";
    echo "$name $last_name учится на ".course_number." курсе профиля ".trajectory_name;
?>

<?php
    function sentence_output($name, $last_name) {
        return "$name $last_name учится на ".course_number." курсе профиля ".trajectory_name;
    }
    define('trajectory_name', "Финансовый менеджмент"); 
    define('course_number', "4");
    $name = "Владимир";
    $last_name = "Смирнов";
    print sentence_output($name, $last_name);
?>

<?php
    function story($name, $university, $course, $pet, $pet_name) {
        return "Меня зовут $name, учусь в $university на $course курсе. У меня есть $pet по кличке $pet_name";
    }
    print story("Владимир", "ВШЭ", "1", "котик", "Зорро!");
?>

<?php
    function square($a, $b) {
        return $a * $b;
    }
    print square(10, 10);
?>

<?php
    function square_roots($a, $b, $c) {
        $d = $b * $b - 4 * $a * $c;
        echo ($d < 0) ? "Вещественных корней нет" : 
            "x1=" .((-$b + sqrt($d)) / (2 * $a))."\nx2=" .((-$b - sqrt($d)) / (2 * $a));
    }
    print square_roots(1, -2, 3);
?>

<?php
    function triangle($a, $b, $c) {
        return (($a == $b) or ($b == $c) or ($a == $c));
    }
    print triangle(2, 3, 3);
?>

<?php
    function vis_year($year) {
        if ((($year % 4 == 0) and ($year % 100 != 0)) or ($year % 400 == 0)) {
            print "Високосный";
        } else {
            print "Не високосный";
        }
    }
    vis_year(2000);
?>

<?php
    function month_det($month_n) {
        switch ($month_n) {
            case 4:
            case 6:
            case 9:
            case 11:
                print "30";
                break;
            case 2:
                print "28";
                break;
            default:
                print "31";
        }
    }
    month_det(1);
?>

<?php
    function squared() {
        for ($i=0; $i<10; $i++) {
            echo ($i * $i)."\n";
        }
    }
    squared();
?>

<?php
    function mult_table() {
        for ($i=0; $i<10; $i++) {
            for ($j=0; $j<10; $j++) {
                echo ($i * $j)."\t";
            }
            echo "\n";
        }
    }
    mult_table();
?>
