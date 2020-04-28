<?php

$a = 'Hello'; //
$b = $a . ' World<br>';
echo $b;

$labs = 'laba1 laba2 laba3';

$me = array(
    'name' => 'Borys',
    'surname' => 'Bohomolov',
    'job' => explode(' ', $labs)
    );

$labs2 = implode(' ', $me['job']);
echo $labs2 . '<br>';

for($a = 0; $a < 3; $a++){
    echo $me['job'][$a];
}

$n = 1.3;
echo '<br>' . (int) $n . '<br>';

class FirstClass {
    function __construct() {
        print "Конструктор класса BaseClass<br>";
    }
}

class SecondClass extends FirstClass {
    function __construct() {
        parent::__construct();
        print "Конструктор класса SubClass<br>";
    }
}

$obj = new FirstClass();

$obj = new SecondClass();

?>