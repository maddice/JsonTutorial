<?php
header("Content-Type: application/json"); // set the content type to json
$jsondata = '{
"u1":{"user":"Jon", "age":22, "country":"USA"},
"u2":{"user": "mike", "age":55, "country":"Italy"},
"u3":{"user":"Joe", "age":30, "country":"Germany"}
}';
echo $jsondata;
?>
