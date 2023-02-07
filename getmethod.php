<?php
   class abd{
    private $name = "Software Services";
    public function __get($property){
        echo "You are trying to access non Existing or Private property($property)";
    }
} 
$test= new abd();
echo $test->name;
?>