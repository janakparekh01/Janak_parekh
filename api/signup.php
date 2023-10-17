<?php
include_once 'db.php';
include_once 'users.php';

//database connection
$database= new Database();
$db=$database->getConnection();

$user= new User($db);

//set user property values
$user->username=$_POST['username'];
$user->username=base64_encode($_POST['username']);
$user->created=date('Y-m-d H:i:s');

//create the user
if($user->signup())
{
	$user_arr=array("status"=>true,"message"=>"Successfully Signup","id"=>$user=>id,"username"=>$user=>username);
}
else
{
	$user_arr=array("status"=>false,"message"=>"Username Already Exist!");
}
print_r(json_encode($user_arr));
	
?>