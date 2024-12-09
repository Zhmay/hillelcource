<?php

//1) Создать родительский (главный класс) Класс должен содержать 2 свойства. Каждое свойство должно иметь геттеры и сеттеры +
    class Main {
        public $a = 2;
        public $b = 6;

        public function getA() {
            return $this -> a;
        }

        public function setA($value) {
            $this -> a = $value;
        }

        public function getB() {
            return $this -> b;
        }

        public function setB($value) {
            $this -> b = $value;
        }
    }
    $main = new Main();

//2) Создать 3 наследника родительского класса +
// Каждый наследник должен содержать одно свойство. +
// Каждое свойство должно иметь геттер и сеттер. +
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными. +
// Один наследник не должен быть наследуемым +
// Один из наследников должен содержать абстрактную функцию возведения в степень +

    final class Plus extends Main {
        public $plus = 3;

        public function getPlus() {
            return $this->plus;
        }
        public function setPlus($num) {
            $this -> plus = $num;
        }

        public function mathPlus() {
            return $this -> a + $this -> plus;
        }
    }
    $objPlus = new Plus();

    class Multiply extends Main {
        public $multiply = 4;

        public function getMultiply() {
            return $this->multiply;
        }
        public function setMultiply($num) {
            $this -> multiply = $num;
        }

        public function mathMultiply() {
            return $this -> b * $this -> multiply;
        }
    }
    $objMultiply = new Multiply();

    abstract class Pow extends Main {
        public $pow = 5;

        public function getPow() {
            return $this->pow;
        }
        public function setPow($num) {
            $this -> pow = $num;
        }

        abstract public function mathPow();
    }

//3) Создать по 2 наследника от наследников первого уровня +
//Каждое свойство должно иметь геттер и сеттер +
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными +
//И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством

    class inheritMultiplyFirst extends Multiply {
        public $multiplyFirst = 10;

        public function getMultiplyFirst() {
            return $this->multiplyFirst;
        }
        public function setMultiplyFirst($num) {
            $this -> multiplyFirst = $num;
        }

        public function mathMultiplyFirst() {
            return $this->multiply * $this->multiplyFirst;
        }

        public function mathMultiplyFirstMain() {
            return $this->multiplyFirst * $this->a;
        }
    }
    $objMultiplyFirst = new inheritMultiplyFirst();

    class inheritMultiplySecond extends Multiply {
        public $multiplySecond = 20;

        public function getMultiplySecond() {
            return $this->multiplySecond;
        }
        public function setMultiplySecond($num) {
            $this -> multiplySecond = $num;
        }
        public function mathMultiplySecond() {
            return ($this->multiply + $this->multiplySecond) * $this->multiplySecond;
        }

        public function mathMultiplySecondMain() {
            return ($this->multiplySecond * $this->b) * $this->a;
        }
    }
    $objMultiplySecond = new inheritMultiplySecond();


    class inheritPowFirst extends Pow {
        public $powFirst = 100;

        public function getPowFirst() {
            return $this->powFirst;
        }
        public function setPowFirst($num) {
            $this -> powFirst = $num;
        }

        public function mathPow() {
            return pow($this->powFirst, $this->pow);
        }

        public function mathPowFirstMain() {
            return pow($this->powFirst, $this->a);
        }
    }
    $objPowFirst = new inheritPowFirst();


    class inheritPowSecond extends Pow {
        public $powSecond = 40;

        public function getPowSecond() {
            return $this->powSecond;
        }
        public function setPowSecond($num) {
            $this -> powSecond = $num;
        }

        public function mathPow() {
            return pow(($this->powSecond * $this->pow), $this->pow);
        }

        public function mathPowSecondMain() {
            return pow($this->powSecond, ($this->a + $this->b));
        }
    }
    $objPowSecond = new inheritPowSecond();
