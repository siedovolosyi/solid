<?php

//  по L - должно работать с любым use
// use A as myClass;
use B as myClass;
//
//$a = 1;
//$obj = new myClass($a); // c A - работает; с B - нет
// "Функции, которые используют базовый тип, должны иметь возможность использовать
//  подтипы базового типа, не зная об этом." - Р.Мартин; сломали лисков
class A {
    public function __construct(int $a) {
    }
}

class B extends A {
    public function __construct(int $a, string $b) {
        parent::__construct($a);
    }
}
$a = 1;
$obj = new myClass($a); // c A - работает;