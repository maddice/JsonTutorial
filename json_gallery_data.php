<?php
header("Content-Type: application/json"); // set the content type to json
$folder = $_POST["folder"]; //pick up the folder from the ajax request
//$folder = "galleryx"; //example folder from html file
$jsonData = '{'; //json data rendering
$dir = $folder."/";
$dirHandle = opendir($dir);
$i = 0; //interations
while ($file = readdir($dirHandle)) {
	if(!is_dir($file) && strpos($file, '.jpg')) { //if the file is not a dir and has a .jpg
		$i++; //while loop increment
		$src = "dir$file";
$jsonData .= '"img'.$i.'":{ "num":"'.$i.'","src":"'.src.'", "name":"'.$file.'" },';
// setup json data variable, image #, source, file name
	}
}
closedir($dirHandle);
$jsonData = chop($jsonData, ","); //drop the last ","
// $jsonData .= '"gallerydetails":{"piccount":'.$i.'}';
$jsonData .='}';
echo $jsondata;
?>

