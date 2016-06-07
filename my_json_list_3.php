<?php
header("Content-Type: application/json"); // set the content type to json
$var1 = $_POST["var1"];
$var2 = $_POST["var2"];
$jsondata = '{"obj1":{ "propertyA":"'.$var1.'", "propertyB":"'.$var2.'"}}';
// json_decode

// json_encode
echo $jsondata;
?>

