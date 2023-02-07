<?php
include 'database.php';
$obj = new Database();

// echo "<h3> Insert Function </h3>";
// $obj->insert('customer', ['name' => 'Hony singh Pal', 'phone' => '4563217896', 'age' => '22']);
// echo "<pre>";
// echo "Insert id is: ";
// print_r($obj->getResult());


// echo "<h3>Update Function</h3>";
// $obj->update('customer', ['name' => 'Manjeet josh ', 'phone' => '7896541444', 'age' => '62'],'id="11"');
// echo "<pre>";
// echo "Update id is: ";
// print_r($obj->getResult());

// echo "<h3>Delete Function</h3>";
// $obj->delete('customer', 'id="12"');
// echo "<pre>";
// echo "Delete id is: ";
// print_r($obj->getResult());

// echo "<h3>Select Function</h3>";
// $obj->sql('SELECT * FROM customer where name="Hony singh Pal"');
// echo "<pre>";
// echo "Sql Result is: ";
// print_r($obj->getResult());

echo "<h3>Select Function</h3>";
$obj->select('customer','*',null,null,null,null);
echo "<pre>";
echo " select Function is: ";
print_r($obj->getResult());
?>