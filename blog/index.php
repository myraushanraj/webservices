<?php
header("Content-Type:application/json");
include('Database.php');
if (!empty($_GET['name'])) {
$city=$_GET['name'];
$obj1 = new Database();
$result=$obj1->get_hotel_detail($city);
print_r($result);
if (empty($result)) {
	echo "not found any data";
}else{
 echo json_encode($result);
     }
}
else{
	echo "invalid request";
}



?>

