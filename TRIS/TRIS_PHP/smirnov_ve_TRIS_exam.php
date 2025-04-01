<?php

//https://i...content-available-to-author-only...e.com/qQJDfQ

$tariffs = ['tariff0' => 0, 'tariff1' => 1,'tariff2' => 3,'tariff3' => 5];

$calls = [ [ "A-number" => "79222222222",
			 "B-number" => "79111111111",
			 "duration" => 127,
			 "tariff" => "tariff1"
			 ],
           [ "A-number" => "79111111111",
			 "B-number" => "79222222222",
			 "duration" => 53,
			 "tariff" => "tariff2"
			 ],
           [ "A-number" => "79222222222",
			 "B-number" => "79333333333",
			 "duration" => 671,
			 "tariff" => "tariff0"
			 ],
           [ "A-number" => "79333333333",
			 "B-number" => "79222222222",
			 "duration" => 632,
			 "tariff" => "tariff3"
			 ],
           [ "A-number" => "79111111111",
			 "B-number" => "79333333333",
			 "duration" => 331,
			 "tariff" => "tariff1"
			 ]
		   ];

// var_dump($calls);

        // The foreach construct provides an easy way to iterate over arrays and Traversable objects
        // Проверяем, если заданный номер участвует в звонке - прочитал такую штуку:
        // Please be careful when you try to compare strings that have a plus sign `+` 
        // at the beginning (such as phone number, etc). When you use the Equal operator `==` 
        // PHP will ignore the plus sign. Use Identical operator `===` instead
        // НО! В нашей ситуации можно обойтись и простым равенством, так как И. А. упростила задачу
    

function ShowInfoCalls($phone) {
    global $calls, $tariffs; // объявлю переменные глобальными
    
    echo "Номер: " . $phone . "\n";
    echo "\n";

    echo "Номер контакта\tТип звонка\tДлительность\tТариф\n";
    
    $totalCost = 0; // counter
    
    foreach ($calls as $call) {
        
        if ($call["A-number"] === $phone Or $call["B-number"] === $phone) {
            
            if ($call["A-number"] === $phone) {
                // Исходящий звонок
                echo $call["B-number"] . "\tисходящий\t" . $call["duration"] . " сек.\t" . $call["tariff"] . "\n";
                // Стоимость рассчитывается только для исходящих звонков
                $totalCost += $call["duration"] * $tariffs[$call["tariff"]];
            } else {
                // Входящий звонок
                echo $call["A-number"] . "\tвходящий\t" . $call["duration"] . " сек.\t\n";
            }
        }
    }
    echo "\n";

    echo "К оплате: " . $totalCost . " руб.\n";
}

// тест
ShowInfoCalls("79111111111");
?>