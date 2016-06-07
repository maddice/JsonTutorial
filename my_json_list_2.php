<?php
header("Content-Type: application/json"); // set the content type to json
$jsondata = file_get_contents ("mylist.json")
echo $jsondata;
?>
