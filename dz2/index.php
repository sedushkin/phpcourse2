<?php
abstract class Product {
    protected $name;
    public $price;
    protected static $income=0;

    function __construct($name,$price=0) {
        $this->name=$name;
        $this->price=$price;

    }

    abstract public function sell($quantity);

    public function print_income(){
        echo "Общий доход составляет".self::$income;
    }
}

class Digital_product extends Product {
    function __construct($r_product){
        $this->name=$r_product->name;
        $this->price=$r_product->price;
    }
    public function sell($quantity){
        Parent::$income = Parent::$income + ($quantity*$this->price*0.5);

    }
} 

class Real_product extends Product {
    public function sell($quantity){
    Parent::$income = Parent::$income + ($quantity*$this->price); 
    }

}

class Weight_product extends Product {
    public function sell($weight) {
        Parent::$income = Parent::$income + ($quantity*$this->price);
    }
}

