<?php
trait Singleton {
    private static $instance;
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    abstract public function doAction();
   
}

class MainObject {
    use Singleton;

    public $prop=0;

    public function doAction() {
        echo "Это глобальный объект приложения".$this->$prop;
        $this->prop=$this->prop+1;
    }
}

MainObject::getInstance()->doAction();
