<?php
    class student{
    private $name;
    public function __get($property){
        echo "You are trying to access not non Existing or Private property($property)";
        echo "<br>";
    }
    public function __set($property,$value ){
        echo "This is non Existing or Private Property:$property";
        echo "<br>";
    }
    }
$test = new student();
$test->name = "Technology IT";
$test->course = "PHP";
?>