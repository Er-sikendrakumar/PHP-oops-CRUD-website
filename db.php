<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "testing";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}
else {
    // echo "Connection Successfully";
}

if(isset($_REQUEST['submit'])){
    // check field is empty or not
    if(($_REQUEST['name']== "") || ($_REQUEST['phone']== "") || ($_REQUEST['age']=="")){
        echo "Fill All the filelds";
    }else {
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $age = $_REQUEST['age'];

        $sql = "INSERT INTO customer(name,phone,age) VALUES('$name','$phone','$age')";
        $result = $conn->query($sql);
        if($result== True){
            echo " One row inserted success";
        }else{
            echo "Not inserted";
        }
    }

}
?>