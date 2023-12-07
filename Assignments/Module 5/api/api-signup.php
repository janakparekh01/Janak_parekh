<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data_arr = json_decode(file_get_contents("php://input"), true);

include('dbconnection.php');

//Signup
$name = $data_arr['name'];
$email = $data_arr['email'];
$password = password_hash($data_arr['password'], PASSWORD_DEFAULT);
$username = $data_arr['unm'];
$mobile = $data_arr['mob'];

$sql = "INSERT INTO api(name, email, password, unm , mob) VALUES ('{$name}', '{$email}', {$password}, '{$unm}' , {mob})";

if(mysqli_query($conn, $sql)){
	echo json_encode(array('message' => 'Signup Successful', 'status' => true));

}else{

 echo json_encode(array('message' => 'Signup Not Successfull', 'status' => false));

}



?>