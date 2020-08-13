<?php
class PRODUCT {
    public $id;
    public $name;
    public $content;
    public $manufacture;
    public $weight;
    public $price;

    public function __construct(
        int $id,
        string $name,
        string $content,
        string $manufacture,
        string $weight
    ) {
        $this->id=$id;
        $this->name=$name;
        $this->content=$content;
        $this->manufacture=$manufacture;
        $this->weight=$weight;
    }
    public function showContent () {
        echo $this->content;//для примера
    }

    
}
 $product = new PRODUCT($id,$name,$content,$manufacture,$weight);

class CLOTHESPRODUCT extends PRODUCT {
    public $size;
    public $color;

    public function __construct($size, $color) {
        $this->size=$size;
        $this->color=$color;
    }
    public function showContent(){
        echo $this->size;//для примера

    }
} 

?>
Задание 5:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();//1
$a2->foo();//2
$a1->foo();//3
$a2->foo();//4 - Каджый раз обращаемся к функции foo()


Задание 6

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //1 - обращаемся первый раз к функции foo() класса А 
$b1->foo(); //1 - обращаемся первый раз к функции foo() класса В
$a1->foo(); //2 --обращаемся второй раз к функции foo() класса А 
$b1->foo(); //2 --обращаемся второй раз к функции foo() класса В 



Задание 7

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); //1 - обращаемся первый раз к функции foo() класса А 
$b1->foo(); //1 - обращаемся первый раз к функции foo() класса В
$a1->foo(); //2 --обращаемся второй раз к функции foo() класса А 
$b1->foo(); //2 --обращаемся второй раз к функции foo() класса В 
