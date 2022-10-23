<?php
$positions = ["Уборщик", "Продавец", "Охранник"];
$experience = [3, 4, 7];
function getSalary1($salary, $num)
{
    return $salary + 20 + $num;
}

function getSalary2($salary, $num)
{
    return $salary + 40 + $num;
}

function getSalary3($salary, $num)
{
    return $salary + 30 + $num;
}

function setSalary($position)
{
    $numKey = array_search($position, $GLOBALS["positions"]);
    $num = $GLOBALS["experience"][$numKey] . '0';
    if (isset($position)) {
        $salary = call_user_func("getSalary" . ($numKey + 1), 10, $num);
    }
    return $salary;
}

echo "Зарплата: \$" . setSalary('Охранник') . "\n";
