<?php
/*
class user {

	private $username;
	private $type;

	function login(){
		// Als juist
		$_SESSION['hash'] = sha1(userid.$salt);
		$this->fillResults($id);
		//Ook in de db steken natuurlijk
	}

	function fillUser($id){
		// Db connectie zetten
		// User zoeken op basis van $id

		$this->type = $query['type'];
	}

	function getType(){
		return $this->type;
	}

	function isLoggedIn(){
		// Is er een sessie
		// IS er een hash gevonden?
		//filluser
		return true;

	}

}

$user = new User();

$user->isLoggedIn();

$user->username;
*/


include_once("db.class.php");

class user{

	//Privates
	private $name;
	private $type;
	private $email;
	private $password;
	private $age;
	private $sex;
	private $image;
	private $longitude;
	private $latitude;
	private $range;

	//Getters
	public function __set($property, $value){
		
		switch ($property) {
			case 'name':
				$this->name = $value;
				break;

			case 'type':
				$this->type = $value;
				break;
			
			case 'email':
				$this->email = $value;
				break;

			case 'password':
				$salt = "(TH!5-8e-Th3-54lT)";
				$this->password = sha1($value.$salt);
				break;

			case 'age':
				$this->age = $value;
				break;

			case 'sex':
				$this->sex = $value;
				break;

			case 'image':
				$this->image = $value;
				break;

			case 'longitude':
				$this->longitude = $value;
				break;

			case 'latitude':
				$this->longitude = $value;
				break;

			case 'range':
				$this->range = $value;
				break;

			case 'hash':
				$this->hash = $value;
				break;
		}

	}


	//Setters
	public function __get($property){
		switch ($property) {
			case 'name':
				return $this->name;
				break;
			
			case 'type':
				return $this->type;
				break;

			case 'email':
				return $this->email;
				break;

			case 'password':
				return $this->password;
				break;

			case 'age':
				return $this->age;
				break;

			case 'sex':
				return $this->sex;
				break;

			case 'image':
				return $this->image;
				break;

			case 'longitude':
				return $this->longitude;
				break;

			case 'latitude':
				return $this->latitude;
				break;

			case 'range':
				return $this->range;
				break;

			case 'hash':
				return $this->hash;

		}

	}


	public function signup(){

		$db = new Db();
		$sql = "INSERT INTO tbl_user (name, email, password, type) 
			VALUES ('".$db->conn->real_escape_string($this->name)."',
					'".$db->conn->real_escape_string($this->email)."',
					'".$db->conn->real_escape_string($this->password)."',
					'".$db->conn->real_escape_string($this->type)."');";

		$db->conn->query($sql);
		header ('Location: index.php');
	}


	public function login(){

		$db = new Db();
		$salt = "(TH!5-8e-Th3-54lT)";
		$sql = "SELECT * from tbl_user WHERE email = '".$db->conn->real_escape_string($this->email)."' AND password = '".$db->conn->real_escape_string(md5($this->password.$salt))."';";


		$result = $db->conn->query($sql);
		$row = $result->fetch_assoc();

		if($result->num_rows ==1){

			session_destroy();
			session_start();

			$hash = sha1($row->user_id.$salt);

			
			$sql="UPDATE tbl_user SET 'hash'=$hash WHERE 'email'=$this->email;";

			$_SESSION['hash'] = $hash;

			$this->fillResults($row->user_id);

			header('Location: base.php');

		}else{
			throw new Exception("Email and/or password incorrect.");	
		}
	}

//CheckType

//ShowMap




}
?>

