<!-- get_class -->
<?php
    class myclass{
        function name(){
        echo "Class Name:" . get_class($this);
        echo "<br>";
        }
    }
$obj = new myclass();
$obj->name();
echo "Class Name: " . get_class($obj);
echo "<br>";
?>

<!-- get_parent_class -->
<?php
class abc{

} 
class xyz extends abc{
    function method(){
        echo "Paraent Class: " .get_parent_class($this);
        echo "<br>";
    }
}
$text = new xyz();
$text->method();
echo "Parent Class: " . get_parent_class($text);
echo "<br>";
?>

<!-- get_class_method -->
<?php
class mno{
    function __construct(){
    }
    function function1(){
    }
    function function2(){
    }
}
$class_method = get_class_methods('mno');
echo "<pre>"; 
print_r($class_method);
?>

<!-- class_alias -->
<?php
class collegegroup{
    public $student;
}
class_alias("collegegroup", "cg");
$std2=$std = new collegegroup();
// $std2 = new cg();
$std->student = "Mohan pal";
$std2->student = "Mohan pal";
echo $std2->student;
echo "<br>";
echo $std->student;
?>






