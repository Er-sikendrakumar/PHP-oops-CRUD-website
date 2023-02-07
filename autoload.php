<?php
// require "atoload/first.php";
// require "atoload/second.php";

spl_autoload_register(function ($class) {
    include 'atoload/' . $class . '.php';
});

$test = new second();
$test2 = new first();
?>