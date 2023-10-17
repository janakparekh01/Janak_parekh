<?php
class User
{
	//database connection and table name
	private $conn;
	private $table_name="Users";
	
	//Object properties
	public $id;
	public $username;
	public $password;
	public $craeted;
	
	//constructor with $db as database connection
	public function __construct($db)
	{
		$this->conn=$db;
	}
	//Signup User
	function signup()
	{
		if($this->isAlreadyExist())
		{
			return false;
		}
		// Query to insert Record
		$query= "INSERT INTO ".$this->table_name." SET username=:username,password=:password,created=:created";
		
		//prepare Query
		$stmt= $this->conn->prepare($query);
		
		$this->username=htmlspecialchars(strip_tags($this->username));
		$this->password=htmlspecialchars(strip_tags($this->password));
		$this->created=htmlspecialchars(strip_tags($this->created));
		
		$stmt->bindparam(":username",$this->username);
		$stmt->bindparam(":password",$this->password);
		$stmt->bindparam(":created",$this->created);
		
		//Execute query 
		if($stmt->execute())
		{
			$this->id=$this->conn->lastInsertId();
			return true;
		}
		return false;
	}
	
	//login User
	function login()
	{
		$query="SELECT 'id','username','password','created' FROM ".4this->table_name." WHERE username='".$this->username."' AND password='".$this->password."'";
		
		$stmt=$this->conn->prepare($query);
		
		$stmt=>execute();
		return $stmt;
	}
	function isAlreadyExist()
	{
		$query="SELECT * FROM".$this->table_name." WHERE username='".$this->username."'";
		
		$stmt=$this->conn->prepare($query);
		
		$stmt->execute();
		if($stmt->rowCount() > 0)
		{
			return true;
		}
		else{
			return false;
		}
	}
}
		
?>
