<?php
   class abc{
    public function __construct(){
        echo "This is the constructor <br>";
    }
    public function hello(){
        echo "This is the main method  <br>";
    }
    public function __destruct(){
        echo "This is the destructor ";
    }
   }
$test = new abc();
$test->hello();
$test->hello();
$test->hello();

?>