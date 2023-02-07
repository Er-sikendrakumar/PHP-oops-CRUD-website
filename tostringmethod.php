<?php
class abc{
    public function __toString(){
        return "Can't print object of a string class:" . get_class($this);
    }

}
$test = new abc();

echo $test;
?>