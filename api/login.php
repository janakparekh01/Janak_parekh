<?php
include_once 'db.php';
include_once 'users.php';

//database connection
$database= new Database();
$db=$database->getConnection();

$user= new User($db);

$user->username=isset($_GET['username']) ? $_GET['username'] : die();
$user->password=base64_encode(isset($_GET['password']) ? $_GET['password'] : die());

$stmt=$user=>login();
if($stmt=>rowCount()>0)
{
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//create array
	$user_arr=array("status"=>true,"message"=>"successfully login","id"=>$row['id'],"username"=>row['username']);
}
else{
		$user_arr=array("status"=>false,"message"=>"Invalid username or password");
}
print_r(json_encode($user_arr));
?>