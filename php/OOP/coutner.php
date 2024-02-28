<?php
class Test{
    static  $counter=0;
    private $name;
    function sayHello($n){
        $this->name = $n;
        echo "Hello " . $this->name;
    }

    static function increment(){
        self::$counter++;
    }

   static function printCounter(){
        echo self::$counter;
    }

}
$t = new Test();
$t->sayHello('Hamal');
Test::increment();
Test::printCounter();

$b = new Test();
$b->sayHello('Rajesh');
Test::increment();
Test::printCounter();
?>
